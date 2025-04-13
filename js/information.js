let currentCheckbox = document.getElementById("currentlyWorking");

currentCheckbox.addEventListener('change', () => {
  if (currentCheckbox.checked) {
    document.getElementById("endYear").disabled = true
    document.getElementById("endMonth").disabled = true
  } else {
    document.getElementById("endYear").disabled = false
    document.getElementById("endMonth").disabled = false
  }
})  


let backStep2 = document.getElementById("back-step2")
let backStep3 = document.getElementById("back-step3")
let backStep4 = document.getElementById("back-step4")
let backStep5 = document.getElementById("back-step5")

let buttonStep1 = document.getElementById("btn-step1")
let buttonStep2 = document.getElementById("btn-step2")
let buttonStep3 = document.getElementById("btn-step3")
let buttonStep4 = document.getElementById("btn-step4")
let buttonStep5 = document.getElementById("btn-step5")

const progressElement = document.querySelector('.sidebar .progress-bar .progress');


buttonStep1.addEventListener('click', () => {
  handleButtonClick('step2')
  changeSideBar('step2')
  progressElement.style.width = "20%"
})

buttonStep2.addEventListener('click', () => {
  handleButtonClick('step3')
})
backStep2.addEventListener('click', () => {
  handleButtonClick('step1')
  changeSideBar('step1')
  progressElement.style.width = "0%"
})

buttonStep3.addEventListener('click', () => {
  handleButtonClick('step4')
  changeSideBar('step3')
  progressElement.style.width = "40%"
})
backStep3.addEventListener('click', () => {
  handleButtonClick('step2')
})

buttonStep4.addEventListener('click', () => {
  handleButtonClick('step5')
  
})
backStep4.addEventListener('click', () => {
  handleButtonClick('step3')
  changeSideBar('step2')
  progressElement.style.width = "20%"
})

// buttonStep5.addEventListener('click', () => {
//   handleButtonClick('step6')
// })
backStep5.addEventListener('click', () => {
  handleButtonClick('step4')
  
})


function handleButtonClick(step) {
  document.querySelectorAll(".main-content").forEach(content => {
    if (content.id == step) {
      content.style.display = 'block'
    } else {
      content.style.display = 'none'
    }
  })
}

function changeSideBar(step) {
  document.querySelectorAll(".step").forEach(head => {
    if (head.id == step) {
      head.classList.add("active")
    } else {
      head.classList.remove("active")
    }
  })
}

const yearSelects = document.querySelectorAll('select[name$="Year"]');
const currentYear = new Date().getFullYear();
for (let y = currentYear; y >= 1980; y--) {
  const option = new Option(y, y);
  yearSelects.forEach(select => select.appendChild(option.cloneNode(true)));
}
