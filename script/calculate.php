<script>
  function openamount(val) {

    const amount = document.getElementById('amount');
    const resultDiv = document.getElementById('result');

    if (val == 'General audience5,000 Bath') {
      var cal = 5000;
      document.getElementById('myDiv').style.display = 'none';
      document.getElementById('studencard').style.display = 'none';
      resultDiv.textContent = ` : ${1 * cal} `;
    } else if (val == 'Permanent Member of Thai Physics Society4,000 Bath per Abstract') {
      var cal = 4000;
      document.getElementById('myDiv').style.display = 'contents';
      document.getElementById('studencard').style.display = 'none';
      resultDiv.textContent = ` : ${1 * cal} `;
      amount.addEventListener('input', function () {
        const number = parseFloat(amount.value);
        if (!isNaN(number)) {
          // ทำการคำนวณหรือแสดงผลตามต้องการ
          resultDiv.textContent = ` : ${number * cal} `;
        }
      });
    } else if (val == 'Non Member of Thai Physics Society *4,000 Bath per Abstract') {
      var cal = 4000;
      document.getElementById('myDiv').style.display = 'contents';
      document.getElementById('studencard').style.display = 'none';
      resultDiv.textContent = ` : ${1 * cal} `;
      amount.addEventListener('input', function () {
        const number = parseFloat(amount.value);
        // ทำการคำนวณหรือแสดงผลตามต้องการ
        resultDiv.textContent = ` : ${number * cal} `;
      });
    } else if (val == 'Student **3,000 Bath per Abstract') {
      var cal = 3000;
      document.getElementById('myDiv').style.display = 'contents';
      document.getElementById('studencard').style.display = 'contents';
      resultDiv.textContent = ` : ${1 * cal} `;
      amount.addEventListener('input', function () {
        const number = parseFloat(amount.value);
        // ทำการคำนวณหรือแสดงผลตามต้องการ
        resultDiv.textContent = ` : ${number * cal} `;
      });
    } else {
      var cal = 3000;
      document.getElementById('myDiv').style.display = 'none';
      document.getElementById('studencard').style.display = 'none';
      resultDiv.textContent = ` : ${1 * cal} `;
    }
    console.log(cal);
  }
</script>