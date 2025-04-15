const carousel = document.querySelector('.carousel');
const arrowBtns = document.querySelectorAll('.wrapper i')
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const carouselChildrens = [...carousel.children];


let isDragging  = false, startX, startScrollLeft;

// let cardPreView = Math.round(carousel.offsetWidth / firstCardWidth)

// carouselChildrens.slice(-cardPreView).reverse().forEach(card => {
//     card.insertAdjacentHTML("afterbegin", card.outerHTML)
// })

// carouselChildrens.slice(0, cardPreView).forEach(card => {
//     card.insertAdjacentHTML("beforeend", card.outerHTML)
// })

arrowBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        carousel.scrollLeft += btn.id ==='left' ? -firstCardWidth : firstCardWidth;
    })
})


const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if (!isDragging) return;
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);

}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove('dragging');
}

carousel.addEventListener('mousemove', dragging);
carousel.addEventListener('mousedown', dragStart);
document.addEventListener('mouseup', dragStop)