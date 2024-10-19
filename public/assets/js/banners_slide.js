
let slideIndex = 0;
const slides = document.querySelector('.banner-slide');
const slideImages = document.querySelectorAll('.banner-slide img');
const dots = document.querySelectorAll('.dot');
const totalSlides = slideImages.length
// Nhân bản slide đầu tiên và thêm vào cuối
const firstClone = slideImages[0].cloneNode(true);
slides.appendChild(firstClone)
function showSlide() {
    slides.style.transition = 'transform 1.5s ease-in-out'; 
    slides.style.transform = `translateX(-${slideIndex * 100}%)`
    // Cập nhật chấm tròn
    updateDots();
}
function nextSlide() {
    slideIndex++;
    showSlide()
    if (slideIndex === totalSlides) {
        setTimeout(() => {
            slides.style.transition = 'none'; 
            slideIndex = 0;
            slides.style.transform = `translateX(0)`;
        }, 2000); 
    }
}
// Cập nhật chấm tròn tương ứng với slide hiện tại
function updateDots() {
    dots.forEach((dot, index) => {
        dot.classList.remove('active');
        if (index === slideIndex || (slideIndex === totalSlides && index === 0)) {
            dot.classList.add('active');
        }
    });
}
// Khi nhấn vào chấm tròn, chuyển đến slide tương ứng
function currentSlide(n) {
    slideIndex = n;
    showSlide();
}
// Tự động chuyển slide mỗi 5 giây
setInterval(nextSlide, 5000)
// Hiển thị slide đầu tiên khi load trang
showSlide();