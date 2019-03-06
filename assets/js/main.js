// Set click listeners for nuts

var nuts = document.getElementsByClassName('nut');

for (var i = 0; nuts[i]; i++) {
    var nut = nuts[i];

    nut.addEventListener('click', function() {
        var isNut = this.getAttribute('data-nut');
        var message = this.getAttribute('data-message');

        showOverlay(isNut === 'yes', message);
    })
}

// Toggle Overlay.

var animating = false;
var overlay = document.getElementById('overlay');
var failSound = document.getElementById('buzzer');
var successSound = document.getElementById('ding');
function showOverlay(success, message) {
    if (animating) return;

    overlay.querySelector('.message').innerHTML = message;
    overlay.querySelector('.title').innerHTML = success
        ? "Yes, Hazelnuts<br />are nuts"
        : "Not a Nut";

    if (success) {
        successSound.play();
    } else {
        failSound.play();
    }

    overlay.classList.remove(success ? 'fail' : 'success');
    overlay.classList.add(success ? 'success' : 'fail');
    overlay.classList.remove('hidden');
    animating = true;

    setTimeout(function() {
        overlay.classList.add('fade');

        setTimeout(function() {
            animating = false;
            overlay.classList.add('hidden');
            overlay.classList.remove('fade');
        }, 500);
    }, 1250);
}