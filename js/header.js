let search_btn = document.querySelector(".search-button")
search_btn.addEventListener('click', (event)=> {
  search_btn.style.width = "500px"
})

document.addEventListener('click', (event) => {
  if (!search_btn.contains(event.target)) {
    search_btn.style.width = "220px"
  }
})

document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".btn-light");
  const sidebar = document.querySelector(".sidebar");

  menuToggle.addEventListener("click", function () {
    if (menuToggle.classList.contains("active")) {
      sidebar.classList.add("open");
      menuToggle.classList.remove("active");
    } else {
      sidebar.classList.remove("open");
      menuToggle.classList.add("active");
    }
  });

  document.addEventListener("click", function (event) {
    if (!sidebar.contains(event.target) && !menuToggle.contains(event.target)) {
        sidebar.classList.remove("open");
        menuToggle.classList.add("active");
    }
  });
});
