<script>
  function openamount(val) {

    const amount = document.getElementById('amount');
    const resultDiv = document.getElementById('result');

    if (val == 'General audience5,000') {
      var cal = 5000;
      document.getElementById('myDiv').style.display = 'contents';
      amount.addEventListener('input', function () {
        const number = parseFloat(amount.value);
        if (!isNaN(number)) {
          // ทำการคำนวณหรือแสดงผลตามต้องการ
          resultDiv.textContent = ` : ${number * cal} `;
        }
      });
    } else if (val == 'Permanent Member of Thai Physics Society4,000') {
      var cal = 4000;
      document.getElementById('myDiv').style.display = 'contents';
      amount.addEventListener('input', function () {
        const number = parseFloat(amount.value);
        if (!isNaN(number)) {
          // ทำการคำนวณหรือแสดงผลตามต้องการ
          resultDiv.textContent = ` : ${number * cal} `;
        }
      });
    } else if (val == 'Non Member of Thai Physics Society *4,000') {
      var cal = 4000;
      document.getElementById('myDiv').style.display = 'contents';
      amount.addEventListener('input', function () {
        const number = parseFloat(amount.value);
          // ทำการคำนวณหรือแสดงผลตามต้องการ
          resultDiv.textContent = ` : ${number * cal} `;
        
      });
    } else {
      var cal = 3000;
      document.getElementById('myDiv').style.display = 'none';
      const number = 1;
      resultDiv.textContent = ` : ${number * cal} `;
    }
    console.log(cal);
  }
</script>