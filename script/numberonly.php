<script>
  $('#ab-number').on('change, keyup', function () {
    var currentInput = $(this).val();
    var fixedInput = currentInput.replace(/[ก-ฮA-Za-z!@#$%^&*().]/g, '');
    $(this).val(fixedInput);
    console.log(fixedInput);
  });

  $('#tax').on('change, keyup', function () {
    var currentInput = $(this).val();
    var fixedInput = currentInput.replace(/[ก-ฮA-Za-z!@#$%^&*().,]/g, '');
    $(this).val(fixedInput);
    console.log(fixedInput);
  });
</script>