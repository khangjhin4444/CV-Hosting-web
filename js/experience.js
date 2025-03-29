let yearBtns = document.querySelectorAll('.year-btn');
let studentBtns = document.querySelectorAll('.student-btn');
let confirmBtn = document.querySelector('.confirm-button');
let year;
let student;
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
          student = btn.id;
        })
      });
      year = btn.id;
    } else {
      document.querySelector('.student').classList.add("student-display");
      document.querySelector('.student').style.visibility = "hidden";
      confirmBtn.style.display = "block";
      year = btn.id;
      student = "none";
    }
  });
});

confirmBtn.addEventListener('click', ()=> {
  // console.log(year, student);
  // window.location.href = `?page=select_template.php&year=${year}&student=${student}`;
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "?year=" + year + "&student=" + student , true);
  
  xhr.onload = function () {
    if (this.status == 200) {
      window.location.href = '?page=select_template.php';
    }
  };

  xhr.send();
})