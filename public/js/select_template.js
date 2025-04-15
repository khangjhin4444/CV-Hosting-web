let tempList = [{id: 1, name: "Template 1", src: "./cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png"}
    , {id: 2, name: "Template 2", src: "./cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png"}
    , {id: 3, name: "Template 3", src: "./cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png"}
    , {id: 4, name: "Template 4", src: "./cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png"}
    , {id: 5, name: "Template 5", src: "./cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png"}
    , {id: 6, name: "Template 6", src: "./cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png"}
    , {id: 7, name: "Template 7", src: "./cv_template_img/Business-Analyst-Resume-Example-RNerd 1.png"}];


function renderTemplates() {
    let html = '';
    tempList.forEach((temp) => {
        html += `
            <div data-id="${temp.id}" class="temp">
                <img  src= "${temp.src}" alt="${temp.name}">
            </div>`;
    });
    document.querySelector('.temp-list-grid').innerHTML = html;
}

renderTemplates();

let templates = document.querySelectorAll('.temp');
let cateBtns = document.querySelectorAll('.cate-btn');
let backBtn = document.querySelector('.back-btn');
let confirmBtn = document.querySelector('.confirm-btn');

templates.forEach((template) => {
    template.addEventListener('click', () => {
        templates.forEach((temp) => {
            temp.classList.remove('temp-chosen');
        });
        template.classList.add('temp-chosen');
        document.querySelector(".footer").style.visibility = "visible";
    });
});

cateBtns.forEach((cateBtn) => {
    cateBtn.addEventListener('click', () => {
        cateBtns.forEach((btn) => {
            btn.classList.remove('chosen');
        });
        cateBtn.classList.add('chosen');
    });
});

backBtn.addEventListener('click', () => {
    window.location.href = '?page=experience.php';
});

confirmBtn.addEventListener('click', () => {
    let chosenTemplate = document.querySelector('.temp-chosen');
    if (chosenTemplate) {
        let templateId = chosenTemplate.dataset.id;
        // console.log(templateId);
        // window.location.href = `?page=experience.php&template=${templateId}&category=${categoryId}`;
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "?tempId=" + templateId, true);
        
        xhr.onload = function () {
            if (this.status == 200) {
            window.location.href = '?page=information.php';
            }
        };
        xhr.send();
    }
});
