<script>
const second = 1000;
const minute = second * 60;
const hour = minute * 60;
const day = hour * 24;

setInterval(run, second);

function run() {
    const now = new Date().getTime();
    const newtime = new Date('November 15, 2024 09:00:00').getTime();
    let distance = newtime - now;
    if (distance < 1) {
        const dayElem = document.getElementById('days');
        dayElem.innerText = 0;

        const hourElem = document.getElementById('hours');
        hourElem.innerText = 0;

        const minutesElem = document.getElementById('minutes');
        minutesElem.innerText = 0;

        const secondElem = document.getElementById('seconds');
        secondElem.innerText = 0;
    } else {
        const unixTime = newtime - now;

        const dayElem = document.getElementById('days');
        dayElem.innerText = Math.floor(unixTime / day);

        const hourElem = document.getElementById('hours');
        hourElem.innerText = Math.floor(unixTime % day / hour);

        const minutesElem = document.getElementById('minutes');
        minutesElem.innerText = Math.floor(unixTime % day % hour / minute);

        const secondElem = document.getElementById('seconds');
        secondElem.innerText = Math.floor(unixTime % day % hour % minute / second);
    }
}
</script>