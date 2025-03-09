const carousel = document.querySelector('.carousel');
// document.getElementById('prevBtn').addEventListener('click', () => {
//     carousel.scrollBy({ left: -320, behavior: 'smooth' });
// });
// document.getElementById('nextBtn').addEventListener('click', () => {
//     carousel.scrollBy({ left: 320, behavior: 'smooth' });
// });
let isDragging  = false, startX, startScrollLeft;

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add('dragging');
    startX = e.pageX;
    startScrollLeft = carousel.startScrollLeft;
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