let templates = document.querySelectorAll('.temp');
let cateBtns = document.querySelectorAll('.cate-btn');
let backBtn = document.querySelector('.back-btn');

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