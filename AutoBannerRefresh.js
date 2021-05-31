const refreshedElement = document.querySelectorAll('#reload');
const bannerBox = document.querySelector(".g-dyn");
console.log(bannerBox);



function startTimer(duration, display) {
    var timer = duration, seconds;
    setInterval(function () {

        seconds = parseInt(timer % 3, 10);

        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = seconds;

        if (seconds < 1) {
            console.log("CLICK");

            bannerBox.textContent = '';
            window.setTimeout(() => {
                window.location.reload(true);
            }, 200);

        }

        if (--timer < 1) {
            timer = duration;
        }

    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
