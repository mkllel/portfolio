document.addEventListener('DOMContentLoaded', function() {
    const btnTop = document.getElementById('btn_top');

    // 스크롤 이벤트 리스너 추가
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 500) {
            btnTop.style.opacity = '1';
            btnTop.style.visibility = 'visible';
        } else {
            btnTop.style.opacity = '0';
            // 투명도가 0이 되고 나면 버튼을 숨깁니다.
            setTimeout(() => {
                btnTop.style.visibility = 'hidden';
            }, 500);
        }
    });

    // 버튼 클릭 이벤트 리스너
    btnTop.addEventListener('click', function(event) {
        event.preventDefault(); // 기본 동작을 방지합니다.
        window.scrollTo({ top: 0, behavior: 'smooth' }); // 부드러운 스크롤로 맨 위로 이동합니다.
    });
});



document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('#section2 .card');

    function revealCard() {
        cards.forEach(card => {
            const cardTop = card.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (cardTop < windowHeight - 50) {
                card.classList.add('show');
            }
        });
    }

    window.addEventListener('scroll', revealCard);
    revealCard(); // 초기 로드 시 실행
});






let currentIndex = 0;
const slider = document.querySelector('.slider');
const totalSlides = slider.querySelectorAll('.slide').length;
let startTouchX = 0;
let endTouchX = 0;
let isSliding = false;

function onTouchStart(e) {
    if (isSliding) return;
    startTouchX = e.touches[0].clientX;
}

function onTouchEnd(e) {
    if (isSliding) return;
    endTouchX = e.changedTouches[0].clientX;
    handleSwipeGesture();
}

function handleSwipeGesture() {
    if (startTouchX - endTouchX > 50) {
        moveSlide(1);
    } else if (startTouchX - endTouchX < -50) {
        moveSlide(-1);
    }
}

function moveSlide(direction) {
    if (isSliding) return;
    isSliding = true;
    currentIndex += direction;
    currentIndex = (currentIndex + totalSlides) % totalSlides;
    updateSlidePosition();
}

function updateSlidePosition() {
    slider.style.transform = `translateX(${-currentIndex * 100}%)`;
    setTimeout(() => { isSliding = false; }, 500);
}

slider.addEventListener('touchstart', onTouchStart);
slider.addEventListener('touchend', onTouchEnd);

document.getElementById('prevBtn').addEventListener('click', () => moveSlide(-1));
document.getElementById('nextBtn').addEventListener('click', () => moveSlide(1));

updateSlidePosition();



