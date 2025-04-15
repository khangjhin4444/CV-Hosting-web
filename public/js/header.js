let search_btn = document.querySelector(".search-button")
search_btn.addEventListener('click', (event)=> {
  search_btn.style.width = "500px"
})

document.addEventListener('click', (event) => {
  if (!search_btn.contains(event.target)) {
    search_btn.style.width = "220px"
  }
})

let collapse_Search = document.querySelector('.search-btn')
collapse_Search.addEventListener('click', () => {
  if (document.querySelector(".hidden-search").style.visibility === 'hidden') {
    document.querySelector(".hidden-search").style.visibility = 'visible'
  }
  else {
    document.querySelector(".hidden-search").style.visibility = 'hidden'
  }
})