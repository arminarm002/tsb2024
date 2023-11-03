<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPC2024 KMITL</title>
  <link rel="stylesheet" href="/spc2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/spc2024/theme/css/self.css">
</head>

<body class="font-mitr">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/navbar.php');
  ?>
  <img src="/spc2024/img/home01.jpg" class="img-fluid" style="width:100%">
  <div class="container">
    <div class="cards mb-3">
      <h1 class="card-title centerer mt-4" style="color: #7b7b7b;">Announcement</h1>
      <div class="image">
        <div class="row" style="margin: 15px auto;">
          <div class="col-6 centerer">
            <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
              <img class="border-bottom border-warning" src="/spc2024/img/news/nobel.jpg" style="width:100%; ">
              <div class="card-body">
                <h5 class="card-title">✨New✨ 3 October 2024</h5>
                <p class="card-text">3 scientists awarded 2023 Nobel Prize in Physics for use of light to study electrons</p>
                <a href="https://news.cgtn.com/news/2023-10-03/3-scientists-awarded-2023-Nobel-Prize-in-Physics-1nBg0xV00aA/index.html"
                  class="btn btn-warning" target="_blank">
                  <h6 class="card-title">-- More --</h6>
                </a>
              </div>
            </div>
          </div>
          <div class="col-6 centerer">
            <div class="card border border-warning rounded" style="width: 28rem;"><!-- 18rem -->
              <img class="border-bottom border-warning" src="/spc2024/img/news/flag.jpg" style="width:100%; ">
              <div class="card-body">
                <h5 class="card-title">✨New✨ 17 June 2023</h5>
                <p class="card-text">The Department of Physics, Faculty of Science and the College of Technology and Innovation in Materials, received the flag to co-host the 19th Siam Physics Congress.</p>
                <a href="https://www.facebook.com/profile/100063613568041/search/?q=%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%A1%E0%B8%AD%E0%B8%9A%E0%B8%98%E0%B8%87"
                  class="btn btn-warning" target="_blank">
                  <h6 class="card-title">-- More --</h6>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script.php');
  ?>
  <!-- Messenger ปลั๊กอินแชท Code -->
  <div id="fb-root"></div>

  <!-- Your ปลั๊กอินแชท code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "120168344509959");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  <!-- Your SDK code -->
  <script>
    window.fbAsyncInit = function () {
      FB.init({
        xfbml: true,
        version: 'v18.0'
      });
    };

    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
</body>

</html>