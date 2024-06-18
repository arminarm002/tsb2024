<script>
  function opennumber(val) {
    if (val == 'Oral Presenter' || val == 'Poster Presenter') {
      document.getElementById('inputabnum').style.display = 'contents';
    }
    else {
      document.getElementById('inputabnum').style.display = 'none';
      document.getElementById('ab-number').value='';
    }
  }

  function openamount(val) {

    var date = new Date();
    var p;

    var reound1 = <?= json_encode($date1) ?>;
    var dateexten1 = new Date(reound1);
                    
    var reound2 = <?= json_encode($date2) ?>;
    var dateexten2 = new Date(reound2);
                    
    var reound3 = <?= json_encode($date3) ?>;
    var dateexten3 = new Date(reound3);
    
    var sss = [];
    sss = <?= json_encode($data) ?>;
    for (var i = 0; i < sss.length; i++) {
      if (sss[i][0] == val) {
        if (date >= dateexten1 && date < dateexten2) {
          p = sss[i][5];
          console.log("day1");
        } else if (date >= dateexten2 && date < dateexten3) {
          p = sss[i][6];
          console.log("day2");
        } else if (date >= dateexten3){
          p = sss[i][7];
          console.log("day3");
        }
      }

    }
    
    console.log(p);

    const amount = document.getElementById('amount');
    const resultDiv = document.getElementById('result');
    amount.value = 1;

    if (val == '1' || val == '2') {
      document.getElementById('myDiv').style.display = 'contents';
      resultDiv.textContent = ` : ${1 * p} `;
      amount.addEventListener('input', function () {
        const number = parseFloat(amount.value);
        // ทำการคำนวณหรือแสดงผลตามต้องการ
        resultDiv.textContent = ` : ${number * p} `;
      });
    }

    if (val == '3') {
      document.getElementById('myDiv').style.display = 'contents';
      resultDiv.textContent = ` : ${1 * p} `;
      amount.addEventListener('input', function () {
        const number = parseFloat(amount.value);
        resultDiv.textContent = ` : ${number * p} `;
      });
    }

    if (val == '4' || val == '5') {
      document.getElementById('myDiv').style.display = 'none';
      resultDiv.textContent = ` : ${1 * p} `;
      
    }
  } 
</script>