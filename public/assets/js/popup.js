// JavaScript functions for popup control
    
openPopup()
    
function openPopup() {
    var popupOverlay = document.getElementById('popupOverlay');
    popupOverlay.style.display = 'flex';
}

function closePopup() {
    var popupOverlay = document.getElementById('popupOverlay');
    popupOverlay.style.display = 'none';
}

function joinWaitlist() {
       // Redirect to the waitlist link
       window.location.href = 'https://sendfox.com/lp/mpqqz7';

    // Optionally, you can add an alert or other actions after redirecting
    alert('Redirecting you to the waitlist page...');
    
    closePopup();
}

// Countdown logic
    function startCountdown(targetDate, display) {
    setInterval(function () {
        var now = new Date().getTime();
        var distance = targetDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        display.days.textContent = days < 10 ? '0' + days : days;
        display.hours.textContent = hours < 10 ? '0' + hours : hours;
        display.minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
        display.seconds.textContent = seconds < 10 ? '0' + seconds : seconds;

        if (distance < 0) {
            clearInterval(interval);
            display.days.textContent = '00';
            display.hours.textContent = '00';
            display.minutes.textContent = '00';
            display.seconds.textContent = '00';
        }
    }, 1000);
}

window.onload = function () {
    var now = new Date();
    // Set target date 30 days from now
    var targetDate = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 30);
    var display = {
        days: document.querySelector('#days'),
        hours: document.querySelector('#hours'),
        minutes: document.querySelector('#minutes'),
        seconds: document.querySelector('#seconds')
    };
    startCountdown(targetDate.getTime(), display);
    
};


window.onscroll = function() {
    var counterText = document.querySelector('.counter-text');
    if (window.scrollY > 0) {
        counterText.classList.add('fixed');
    } else {
        counterText.classList.remove('fixed');
    }
};