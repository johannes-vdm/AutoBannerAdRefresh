IM-INC - Johannes van der Merwe's edits to GayPages.com/~co.za

2021-05-30
9:35 PM scaling the biggest images to 1024x

11:38 Complete

11:38 testing

11:46 in working order and published

11:47 Created Javascript 

```JS
<script>
const refreshedElement = document.querySelectorAll('#reload');
const bannerBox = document.querySelector(".g-dyn");
console.log(bannerBox);

var offsetHeight = document.bannerBox.offsetHeight;
console.log(offsetHeight);

function startTimer(duration, display) {
    var timer = duration, seconds;
    setInterval(function () {
   
        seconds = parseInt(timer % 3, 10);

        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent =  seconds;

        if (seconds < 1){
            console.log("CLICK");

            bannerBox.textContent ='';
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
</script>

<span id="time">40</span>
```

Close-off 2:32AM

2021-05-31
Start 5:1OM Change to HTML
```
<script>
    //   const refreshedElement = document.querySelectorAll('#reload');
    const bannerBox = document.querySelectorAll(".g-single");
    console.log(bannerBox);
    function startTimer(duration, display) {
        var timer = duration, seconds;
        setInterval(function () {

            seconds = parseInt(timer % 3, 10);

            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = seconds;

            if (seconds < 1) {


                for (let i = 0; i < bannerBox.length; i++) {
                    console.log("CLICK");

                    bannerBox[i].textContent = '';
                    window.setTimeout(() => {
                        window.location.reload(true);
                    }, 1000);

                    i++;
                }
            }

        }, 1000);
    }

    window.onload = function () {
        var fiveMinutes = 3 * 60,
            display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
    };


</script>

<span id="time">40</span>
```
6:11PM TESTING
Found banners loading in an unordered manner.

6:13 Change of plan 
Directly editing the plugin.
