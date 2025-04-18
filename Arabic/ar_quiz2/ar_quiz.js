const questions = [
    {
        question: "ما هو الهدف الأساسي للاستدامة؟",
        options: {
            A: "تعظيم الأرباح",
            B: "تقليل النفايات والتلوث",
            C: "استغلال الموارد الطبيعية"
        },
        answer: "B"
    },
    {
        question: "أي من التالي هو مثال على مصدر طاقة متجدد؟",
        options: {
            A: "الفحم",
            B: "الغاز الطبيعي",
            C: "الطاقة الشمسية"
        },
        answer: "C"
    },
    {
        question: "ما هو المقصود ببصمة الكربون؟",
        options: {
            A: "كمية ثاني أكسيد الكربون التي يصدرها شخص أو منظمة",
            B: "مقاس حذاء الشخص",
            C: "وزن المواد الكربونية للشخص"
        },
        answer: "A"
    },
    {
        question: "أي من التالي هو مثال على مورد غير متجدد؟",
        options: {
            A: "طاقة الرياح",
            B: "الطاقة الكهرومائية",
            C: "الوقود الأحفوري"
        },
        answer: "C"
    },
    {
        question: "أي من التالي هو مثال على وسائل النقل المستدامة؟",
        options: {
            A: "استخدام شاحنة تعمل بالديزل للرحلات القصيرة",
            B: "السيارة الشخصية لكل رحلة",
            C: "ركوب الدراجة"
        },
        answer: "C"
    },
    {
        question: "أي من التالي هو مكون رئيسي للزراعة المستدامة؟",
        options: {
            A: "الاستخدام المكثف للمبيدات",
            B: "الزراعة الأحادية",
            C: "تناوب المحاصيل"
        },
        answer: "C"
    },
    {
        question: "ما هو المصطلح المستخدم لوصف ممارسة استخدام الموارد بطريقة تلبي الاحتياجات الحالية دون المساس بقدرة الأجيال القادمة على تلبية احتياجاتهم؟",
        options: {
            A: "التنمية المستدامة",
            B: "البيئية",
            C: "التصنيع"
        },
        answer: "A"
    },
    {
        question: "أي إجراء يساهم في الحفاظ على المياه؟",
        options: {
            A: "ترك الصنابير مفتوحة",
            B: "استخدام غسالة الصحون بدلاً من غسل الصحون يدويًا",
            C: "ري الحديقة في الجزء الأكثر حرارة من اليوم"
        },
        answer: "B"
    },
    {
        question: "عند النظر في الزراعة المستدامة، أي ممارسة زراعية تعزز صحة التربة، والتنوع البيولوجي، وحبس الكربون أكثر؟",
        options: {
            A: "الزراعة العضوية مع تناوب المحاصيل",
            B: "الزراعة الأحادية التقليدية",
            C: "الزراعة بدون حراثة مع الأسمدة الصناعية"
        },
        answer: "A"
    },
    {
        question: "أي من مصادر الطاقة المتجددة التالية يمتلك أعلى كثافة طاقة لكل وحدة مساحة، مما يجعله خيارًا جذابًا لتوليد الطاقة المستدامة في المناطق ذات الكثافة السكانية العالية؟",
        options: {
            A: "طاقة الرياح",
            B: "الطاقة الشمسية",
            C: "الطاقة الحرارية الأرضية"
        },
        answer: "C"
    }
];



let currentQuestion = 0;
let score = 0;
let timer;


function startTimer(duration, display) {
    let time = duration;
    timer = setInterval(function () {
        display.textContent = time;
        if (--time < 0) {
            clearInterval(timer);
            displayMessage("Time's up! Please redo the quiz.", false, true);
            resetQuiz();
        }
    }, 1000);
}



function updateProgressBar() {
    const progressBar = document.getElementById("progress-bar");
    let percentage = (currentQuestion / questions.length) * 100;

    // If it's the last question, set the percentage to 100
    if (currentQuestion === questions.length - 1) {
        percentage = 100;
    }

    progressBar.style.width = `${percentage}%`;
}



function displayQuestion() {
    updateProgressBar();

    const quizContainer = document.getElementById("quiz");
    const currentQ = questions[currentQuestion];
    const optionsHtml = Object.entries(currentQ.options).map(([key, value]) => `<label><input type="radio" name="answer" value="${key}"> ${value}</label><br>`).join('');


    quizContainer.innerHTML = `
        <p>${currentQ.question}</p>
        ${optionsHtml}
    `;
}

function displayMessage(message, showOptions = false, showRetryOption = false) {
    const messageContainer = document.getElementById("message");
    messageContainer.innerHTML = `<p>${message}</p>`;

    if (showOptions) {
        if (showRetryOption) {
            messageContainer.innerHTML += `
                <button onclick="redoQuiz()">Redo Quiz</button>
            `;
        } else {
            messageContainer.innerHTML += `
                <button onclick="proceedToProduct()">Proceed to product.php</button>
            `;
        }
    }
}



function submitQuiz() {
    const selectedAnswer = document.querySelector('input[name="answer"]:checked');

    if (selectedAnswer) {
        const currentQ = questions[currentQuestion];

        if (currentQ && currentQ.answer) {
            if (selectedAnswer.value === currentQ.answer) {
                score++;
            }

            currentQuestion++;

            if (currentQuestion < questions.length) {
                displayQuestion();
            } else {
                if (score >= 5) {
                    displayMessage(`Congratulations! You passed the quiz with ${score}/10.`, true);
                } else {
                    displayMessage(`Sorry, you didn't pass the quiz and got ${score}/10. Do you want to retry?`, true, true);
                }
            }
        } else {
            console.error('Current question or its answer is undefined:', currentQ);
        }
    } else {
        displayMessage("Please select an answer.");
    }
}



function resetQuiz() {
    currentQuestion = 0;
    score = 0;
    clearInterval(timer);
    startTimer(60, document.getElementById("time"));
    displayQuestion();
    displayMessage(""); // Clear any existing messages
}


function redoQuiz() {
    resetQuiz();
}

function proceedToProduct() {
    displayMessage('Redirecting to product.php...');
    window.location.href = 'ar_product.php';
}

document.addEventListener("DOMContentLoaded", resetQuiz, function () {
    // Adjust the timer duration to 60 seconds
    startTimer(60, document.getElementById("time"));
    updateProgressBar();
    resetQuiz();
});