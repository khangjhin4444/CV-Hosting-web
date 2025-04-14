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


let backStep2a = document.getElementById("back-step2a")
let backStep2b = document.getElementById("back-step2b")
let backStep3a = document.getElementById("back-step3a")
let backStep3b = document.getElementById("back-step3b")
let backStep4a = document.getElementById("back-step4a")
let backStep4b = document.getElementById("back-step4b")
let backStep5a = document.getElementById("back-step5a")
let backStep5b = document.getElementById("back-step5b")
let backStep6 = document.getElementById("back-step6")


let buttonStep1 = document.getElementById("btn-step1")
let buttonStep2a = document.getElementById("btn-step2a")
let buttonStep2b = document.getElementById("btn-step2b")
let buttonStep3a = document.getElementById("btn-step3a")
let buttonStep3b = document.getElementById("btn-step3b")
let buttonStep4a = document.getElementById("btn-step4a")
let buttonStep4b = document.getElementById("btn-step4b")
let buttonStep5a = document.getElementById("btn-step5a")
let buttonStep5b = document.getElementById("btn-step5b")
let buttonStep6 = document.getElementById("btn-step6")

const progressElement = document.querySelector('.sidebar .progress-bar .progress');


buttonStep1.addEventListener('click', () => {
  handleButtonClick('step2a')
  changeSideBar('2')
  progressElement.style.width = "20%"
})
buttonStep2a.addEventListener('click', () => {
  handleButtonClick('step2b')
})
buttonStep2b.addEventListener('click', () => {
  handleButtonClick('step3a')
  changeSideBar('3')
  progressElement.style.width = "40%"
})
buttonStep3a.addEventListener('click', () => {
  handleButtonClick('step3b')
})
buttonStep3b.addEventListener('click', () => {
  handleButtonClick('step4a')
  changeSideBar("4")
  progressElement.style.width = "60%"
})
buttonStep4a.addEventListener('click', () => {
  handleButtonClick('step4b')
})
buttonStep4b.addEventListener('click', () => {
  handleButtonClick('step5a')
  changeSideBar("5")
  progressElement.style.width = "80%"
})
buttonStep5a.addEventListener('click', () => {
  handleButtonClick('step5b')
})
buttonStep5b.addEventListener('click', () => {
  handleButtonClick('step6')
  changeSideBar("6")
  progressElement.style.width = "100%"
})
buttonStep6.addEventListener('click', () => {
  
})


backStep2a.addEventListener('click', () => {
  handleButtonClick('step1')
  changeSideBar('1')
  progressElement.style.width = "0%"
})
backStep2b.addEventListener('click', () => {
  handleButtonClick('step2a')
})
backStep3a.addEventListener('click', () => {
  handleButtonClick('step2b')
  changeSideBar('2')
  progressElement.style.width = "20%"
})
backStep3b.addEventListener('click', () => {
  handleButtonClick('step3a')
})
backStep4a.addEventListener('click', () => {
  handleButtonClick('step3b')
  changeSideBar('3')
  progressElement.style.width = "40%"
})
backStep4b.addEventListener('click', () => {
  handleButtonClick('step4a')
})
backStep5a.addEventListener('click', () => {
  handleButtonClick('step4b')
  changeSideBar('4')
  progressElement.style.width = "60%"
})
backStep5b.addEventListener('click', () => {
  handleButtonClick('step5a')
})
backStep6.addEventListener('click', () => {
  handleButtonClick('step5b')
  changeSideBar('5')
  progressElement.style.width = "80%"
})

function handleButtonClick(step) {
  // Lấy tất cả các phần tử main-content
  const contents = document.querySelectorAll(".main-content");

  // Xóa class active và đặt lại trạng thái ban đầu
  contents.forEach(content => {
    content.classList.remove("active");
    content.style.display = "block"; // Đảm bảo tất cả đều có display block tạm thời
  });

  // Tìm nội dung tương ứng với bước được chọn
  const targetContent = document.getElementById(step);

  // Thêm class active để kích hoạt hiệu ứng
  setTimeout(() => {
    targetContent.classList.add("active");

    // Ẩn các nội dung khác sau khi hiệu ứng hoàn tất
    contents.forEach(content => {
      if (content !== targetContent) {
        content.style.display = "none";
      }
    });
  }, 20); // Delay nhỏ để CSS áp dụng
}

function changeSideBar(step) {
  document.querySelectorAll(".step").forEach(head => {
    if (head.id == step) {
      if (head.classList.contains("finish")) {
        head.classList.remove("finish")
        head.querySelector(".circle").innerHTML = head.id
      }
      head.classList.add("active")
    } else {
      head.classList.remove("active")
    }
    if (Number(head.id) == Number(step) - 1) {
      head.classList.add("finish")
      head.querySelector(".circle").innerHTML = '<img src="images/check-lg.svg">'
    }
  })
}

const yearSelects = document.querySelectorAll('select[name$="Year"]');
const currentYear = new Date().getFullYear();
for (let y = currentYear; y >= 1980; y--) {
  const option = new Option(y, y);
  yearSelects.forEach(select => select.appendChild(option.cloneNode(true)));
}


let skillExamples = [{name: 'Teamwork and collaboration', job: ['IT', 'Teacher']},
{name: 'Friendly, positive attitude', job: ['IT', 'Teacher']},
{name: 'Problem-solving', job: ['IT', 'Teacher']},
{name: 'Time management', job: ['IT', 'Teacher']},
{name: 'Over thinking', job: ['IT']},
{name: 'Creative', job: ['IT']},
{name: 'Adaptive', job: ['IT']}                    
]

let searchInput = document.querySelector(".search-input");
let searchBtn = document.querySelector(".search-btn");
let skillContainer = document.querySelector(".skill-container");

renderSkill("")

searchBtn.addEventListener('click', () => {
  if (searchInput.value !== "") {
    // console.log("Please enter a job title to search for skills.")
    renderSkill(searchInput.value)
  } else {
    renderSkill("")
  }
})

function renderSkill (job) {
  skillContainer.innerHTML = '<div class="row p-2" style="border: 1px solid black;">Ready to use examples</div>'; 
  if (job === "") {
    console.log("None")
    skillExamples.forEach(skill => {
      skillContainer.insertAdjacentHTML('beforeend',
        `
          <div class="row p-2" style="border: 1px solid black; border-top: none;">
            <div class="row align-items-center p-0">
              <div class="col-1">
                <button class="add-to-editor" data-content="${skill.name}" style="border: none; padding: 0; margin: 0; background-color: transparent;">
                  <img src="images/plus.png" alt="" srcset="" style="width: 30px; height: 30px;">
                </button>
              </div>
              <div class="col-11 text-start">
                <div style="font-weight: 500;">${skill.name}</div>
              </div>
            </div>
          </div>
        `
      )
    })
  } else {
    skillExamples.forEach(skill => {
      if (skill.job.some(j => j.toLowerCase().includes(job.toLowerCase()))) {
        console.log(job)
        skillContainer.insertAdjacentHTML('beforeend',
          `
            <div class="row p-2" style="border: 1px solid black; border-top: none;">
              <div class="row align-items-center p-0">
                <div class="col-1">
                  <button class="add-to-editor" data-content="${skill.name}" style="border: none; padding: 0; margin: 0; background-color: transparent;">
                    <img src="images/plus.png" alt="" srcset="" style="width: 30px; height: 30px;">
                  </button>
                </div>
                <div class="col-11 text-start">
                  <div style="font-weight: 500;">${skill.name}</div>
                </div>
              </div>
            </div>
          `
        )
      }
    })
  }
  
}

const quill = new Quill('#editor', {
  theme: 'snow'
});

const quill_2 = new Quill('#editor-2', {
  theme: 'snow'
});

document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".add-to-editor");
  const editor = document.getElementById("editor");

  // Biến để lưu nội dung đã chọn
  const selectedContents = new Set();

  buttons.forEach(button => {
    button.addEventListener("click", function () {
      const content = this.getAttribute("data-content");

      // Toggle: nếu đã chọn thì bỏ, chưa thì thêm
      if (selectedContents.has(content)) {
        selectedContents.delete(content);
        this.querySelector("img").src = "images/plus.png"; // đổi lại biểu tượng "+"
      } else {
        selectedContents.add(content);
        this.querySelector("img").src = "images/check-lg.svg"; // đổi biểu tượng (ví dụ thành dấu tick)
      }

      const html = `<ul>${Array.from(selectedContents)
      .map(item => `<li>${item}</li>`)
      .join("")}</ul>`;
    
      quill.clipboard.dangerouslyPasteHTML(html);
    });
  });
});