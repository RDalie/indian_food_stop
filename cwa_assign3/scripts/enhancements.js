'use strict';

// TIMER
//counting down and then redirecting
function countDown() {
    var startTime = 15;
    var startTimeInSecs = startTime * 60;
    var timer = document.getElementById('timer-p');

    // update the timer every second (1000 milliseconds = 1 second)
    setInterval(updateCount, 1000);

    function updateCount() {
        var minutes = Math.floor(startTimeInSecs / 60);
        var seconds = startTimeInSecs % 60;

        // displaying timer using template string
        timer.textContent =
            seconds < 10 ? `${minutes}:0${seconds}` : `${minutes}:${seconds}`;

        // updating timer
        startTimeInSecs--;

        // redirect when the time is up
        if (minutes == 0 && seconds == 0) {
            alert(
                `Time's up! You will need to re-fill the form now, redirecting to homepage....`
            );
            window.location.href = 'index.html';
        }
    }
}

function init2() {
    countDown();
}

document.addEventListener('DOMContentLoaded', init2);
