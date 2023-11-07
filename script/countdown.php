<script>
  const second = 1000;
  const minute = second * 60;
  const hour = minute * 60;
  const day = hour * 24;

  function countDown() {
    const now = new Date().getTime();
    const newtime = new Date('June 5, 2024 08:00:00').getTime();
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
  function run(){
    countDown();
    setInterval(countDown, second);
  }
  run();
</script>