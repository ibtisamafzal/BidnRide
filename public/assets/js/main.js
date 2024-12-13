{
    fetch('/header.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('header-placeholder').innerHTML = data;
    });
}
{
    fetch('/footer.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('footer-placeholder').innerHTML = data;
    });
}

/* ------------------
    Login/ Signup JS 
--------------------*/

document.addEventListener("DOMContentLoaded", function () {
    const formTitle = document.getElementById("formTitle");
    const authForm = document.getElementById("authForm");
    const usernameField = document.getElementById("usernameField");
    const confirmPasswordField = document.getElementById("confirmPasswordField");
    const submitButton = document.getElementById("submitButton");
    const toggleText = document.getElementById("toggleText");
    const toggleForm = document.getElementById("toggleForm");

    let isLogin = true;

    toggleForm.addEventListener("click", function (event) {
        event.preventDefault();
        isLogin = !isLogin;

        // Toggle form elements
        formTitle.textContent = isLogin ? "Login" : "Signup";
        usernameField.style.display = isLogin ? "none" : "block";
        confirmPasswordField.style.display = isLogin ? "none" : "block";
        submitButton.value = isLogin ? "Login" : "Signup";
        toggleText.textContent = isLogin ? "Don't have an account? " : "Already have an account? ";
        toggleForm.textContent = isLogin ? "Signup" : "Login";

        // Change form action dynamically
        authForm.action = isLogin ? "/login" : "/signup";
    });

    authForm.addEventListener("submit", function (event) {
        if (!isLogin) {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                event.preventDefault();
                alert("Passwords do not match!");
            }
        }
    });
});



/* ---------------------
Auctions Page Section
-----------------------*/




/* ------------------
    Owl Carousal JS 
--------------------*/
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:30,
        responsiveClass:true,
        nav: false,
        dots: true,
        autoplay: true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:4,
            },
            1000:{
                items:4,
            }
        }
    })
});


/* ---------------------
FAQ Section
-----------------------*/
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        
        question.addEventListener('click', function() {
            // Toggle active class to trigger animations
            item.classList.toggle('active');
        });
    });
});