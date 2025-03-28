let yearBtns = document.querySelectorAll('.year-btn');
let studentBtns = document.querySelectorAll('.student-btn');
let confirmBtn = document.querySelector('.confirm-button');

yearBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    yearBtns.forEach(btn => {
      btn.classList.remove('active');
    });
    btn.classList.add('active');
    if (btn.id === "none" || btn.id === "3") {
      document.querySelector('.student').classList.remove("student-display");
      document.querySelector('.student').style.visibility = "visible";
      studentBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          studentBtns.forEach(btn => {
            btn.classList.remove('active');
          });
          btn.classList.add('active');
          confirmBtn.style.display = "block";
        })
      });
    } else {
      document.querySelector('.student').classList.add("student-display");
      document.querySelector('.student').style.visibility = "hidden";
      confirmBtn.style.display = "block";
    }
  });
});