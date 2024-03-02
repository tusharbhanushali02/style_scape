const intro = document.querySelector('#intro')
const take_quiz = document.querySelector('#take-quiz')
const quiz = document.querySelector('#quiz')
const q1 = document.querySelector('.q1')
const q1btn = document.querySelector('#q1btn')
const q1input = document.querySelector(`input[name="age"]`)
const q2 = document.querySelector('.q2')
const q2btn = document.querySelector('#q2btn')
const q3 = document.querySelector('.q3')
const q3btn = document.querySelector('#q3btn')
const q4 = document.querySelector('.q4')
const q4btn = document.querySelector('#q4btn')
const q5 = document.querySelector('.q5')
const q5btn = document.querySelector('#q5btn')
const q6 = document.querySelector('.q6')
const q6btn = document.querySelector('#q6btn')
const q7 = document.querySelector('.q7')
const q7btn = document.querySelector('#q7btn')
const q8 = document.querySelector('.q8')
const q8btn = document.querySelector('#q8btn')
const q9 = document.querySelector('.q9')
const q9btn = document.querySelector('#q9btn')
const q10 = document.querySelector('.q10')
const prevbtn = document.querySelector('#prevbtn')

take_quiz.addEventListener('click', () => {
    intro.style.display = 'none'
    quiz.style.display = 'flex'
    q1.style.display = 'flex'
    q1input.focus()
})

q1btn.addEventListener('click', () => {
    const inputField = document.querySelector(`input[name="age"]`)
    if (inputField && inputField.value) {
        q1.style.display = 'none'
        q2.style.display = 'flex'
    } else {
        alert(`Please fill out the age field before proceeding.`)
        q1input.focus()
    }
})

q1input.addEventListener('keydown', function (event) {
    if (event.keyCode === 13) {
        event.preventDefault()
        const inputField = document.querySelector(`input[name="age"]`)
        if (inputField && inputField.value) {
            q1.style.display = 'none'
            q2.style.display = 'flex'
        } else {
            alert(`Please fill out the age field before proceeding.`)
            q1input.focus()
        }
    }
})

q2btn.addEventListener('click', () => {
    moveToPrevQuestion(q1, q2)
})

q3btn.addEventListener('click', () => {
    moveToPrevQuestion(q2, q3)
})

q4btn.addEventListener('click', () => {
    moveToPrevQuestion(q3, q4)
})

q5btn.addEventListener('click', () => {
    moveToPrevQuestion(q4, q5)
})

q6btn.addEventListener('click', () => {
    moveToPrevQuestion(q5, q6)
})

q7btn.addEventListener('click', () => {
    moveToPrevQuestion(q6, q7)
})

q8btn.addEventListener('click', () => {
    moveToPrevQuestion(q7, q8)
})

q9btn.addEventListener('click', () => {
    moveToPrevQuestion(q8, q9)
})

prevbtn.addEventListener('click', () => {
    q10.style.display = 'none'
    q9.style.display = 'none'
})

function moveToPrevQuestion(prevQuestion, currentQuestion) {
    currentQuestion.style.display = 'none'
    prevQuestion.style.display = 'flex'
}

// Get all the radio buttons
const radioButtons = document.querySelectorAll('input[type="radio"]')

// Loop through each radio button and add an event listener
radioButtons.forEach(radioBtn => {
    radioBtn.addEventListener('change', () => {

        if(radioBtn.getAttribute('name') == 'q8'){
            q8.style.display = 'none'
            q9.style.display = 'block'
        }
        else if(radioBtn.getAttribute('name') == 'q10'){
            console.log('all selected')
        }
        else{
            // Get the current question
            const currentQuestion = radioBtn.parentElement.parentElement.parentElement

            // Hide the current question
            currentQuestion.style.display = 'none'

            // Get the next question
            const nextQuestion = currentQuestion.nextElementSibling

            // Show the next question
            nextQuestion.style.display = 'flex'
        }
        
    })
})

