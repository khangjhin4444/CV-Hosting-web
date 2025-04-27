//Enlarge cv
document.querySelectorAll('.cv-preview-wrapper').forEach(container => {
    container.addEventListener('click', () => {
        console.log("click")
        container.classList.add("enlarged");
        // document.body.style.overflow = 'hidden';
    });
})
document.addEventListener('click', (e) => {
    document.querySelectorAll('.cv-preview-wrapper').forEach(container => {
        if (!container.contains(e.target)) {
            container.classList.remove('enlarged');
            // document.body.style.overflow = '';
        }
    });
});