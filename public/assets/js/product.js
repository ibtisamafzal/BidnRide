// Change main image based on thumbnail click
function changeImage(src) {
    document.getElementById("mainImage").src = src;
}

let images = [
    '/assets/images/p1-1.jpg',
    '/assets/images/p1-2.jpg',
    '/assets/images/p1-3.jpg',
    '/assets/images/p1-4.jpg',
    
];
let currentIndex = 0;

function openModal(imageSrc) {
    document.getElementById('imageModal').style.display = "block";
    document.getElementById('modalImage').src = imageSrc;
    currentIndex = images.indexOf(imageSrc); // Update current image index
}

function closeModal() {
    document.getElementById('imageModal').style.display = "none";
}

function changeImage(direction) {
    if (direction === 'next') {
        currentIndex = (currentIndex + 1) % images.length; // Go to next image
    } else if (direction === 'prev') {
        currentIndex = (currentIndex - 1 + images.length) % images.length; // Go to previous image
    }
    document.getElementById('modalImage').src = images[currentIndex];
}

// Close the modal if clicked outside the image or pressing ESC
window.onclick = function(event) {
    if (event.target === document.getElementById('imageModal')) {
        closeModal();
    }
};

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeModal();
    }
});

// Countdown Timer Functionality
function startCountdown(duration, display) {
    let timer = duration, hours, minutes, seconds;
    setInterval(function () {
        hours = parseInt(timer / 3600, 10);
        minutes = parseInt((timer % 3600) / 60, 10);
        seconds = parseInt(timer % 60, 10);

        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = hours + ":" + minutes + ":" + seconds;

        if (--timer < 0) {
            timer = 0;
        }
    }, 1000);
}

// Start countdown (e.g., 8 hours)
window.onload = function () {
    const eightHours = 8 * 60 * 60;
    const display = document.querySelector('#countdown');
    startCountdown(eightHours, display);
};
