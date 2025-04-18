const questions = [
    {
        question: " What is the primary goal of sustainability?",
        options: {
            A: "Maximizing profits",
            B: "Minimizing waste and pollution",
            C: "Exploiting natural resources"
        },
        answer: "B"
    },
    {
        question: "Which of the following is an example of a renewable energy source?",
        options: {
            A: "Coal",
            B: "Natural gas",
            C: "Solar power"
        },
        answer: "C"
    },
    {
        question: "What does the term carbon footprint refer to?",
        options: {
            A: "The amount of carbon dioxide emitted by a person or organization",
            B: "The size of one's shoes",
            C: "The weight of a person's carbon-based materials"
        },
        answer: "A"
    },
    {
        question: "Which of the following is an example of a non-renewable resource?",
        options: {
            A: "Wind energy",
            B: "Hydroelectric power",
            C: "Fossil fuels"
        },
        answer: "B"
    },
    {
        question: "Which of the following is an example of sustainable transportation?",
        options: {
            A: "Using a diesel-powered truck for short trips",
            B: "Personal car for every commute",
            C: "Riding a bicycle"
        },
        answer: "C"
    },
    {
        question: "Which of the following is a key component of sustainable agriculture?",
        options: {
            A: "Heavy pesticide use",
            B: "Monoculture farming",
            C: "Crop rotation"
        },
        answer: "C"
    },
    {
        question: "What is the term used to describe the practice of using resources in a way that meets current needs without compromising the ability of future generations to meet their own needs?",
        options: {
            A: "Sustainable development",
            B: "Environmentalism",
            C: "Industrialization"
        },
        answer: "A"
    },
    {
        question: "Which action contributes to water conservation?",
        options: {
            A: "Leaving faucets running",
            B: "Using a dishwasher instead of handwashing dishes",
            C: "Watering the garden during the hottest part of the day"
        },
        answer: "B"
    },
    {
        question: "When considering sustainable agriculture, which farming practice promotes soil health, biodiversity, and carbon sequestration the most?",
        options: {
            A: "Organic farming with crop rotation",
            B: "Conventional monoculture farming",
            C: "No-till farming with synthetic fertilizers"
        },
        answer: "A"
    },
    {
        question: "Which of the following renewable energy sources has the highest energy density per unit area, making it an attractive option for sustainable power generation in densely populated regions?",
        options: {
            A: "Wind power",
            B: "Solar power",
            C: "Geothermal power"
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
    window.location.href = 'product.php';
}

document.addEventListener("DOMContentLoaded", resetQuiz, function () {
    // Adjust the timer duration to 60 seconds
    startTimer(60, document.getElementById("time"));
    updateProgressBar();
    resetQuiz();
});