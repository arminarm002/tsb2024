<script>
  // คำสั่ง JavaScript เพื่อเปิดหรือปิดการกระพริบข้อความ
  function toggleBlinking() {
    var blinkingText1 = document.getElementById('blinkingText1');
    if (blinkingText1.classList.contains('blinking')) {
      blinkingText1.classList.remove('blinking');
    } else {
      blinkingText.classList.add('blinking');
    }

    var blinkingText2 = document.getElementById('blinkingText2');
    if (blinkingText2.classList.contains('blinking')) {
      blinkingText2.classList.remove('blinking');
    } else {
      blinkingText2.classList.add('blinking');
    }

    var blinkingText3 = document.getElementById('blinkingText3');
    if (blinkingText3.classList.contains('blinking')) {
      blinkingText3.classList.remove('blinking');
    } else {
      blinkingText3.classList.add('blinking');
    }
  }

  // เรียกใช้ฟังก์ชัน toggleBlinking() เมื่อเว็บโหลดเสร็จ
  window.onload = function () {
    setInterval(toggleBlinking, 500); // เรียกใช้ทุกๆ 1 วินาที
  };
</script>