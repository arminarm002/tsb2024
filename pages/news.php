<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSB2024 KMITL</title>
  <meta name="author" content="Suradech Kuruphan">
  <meta name="description"
    content="19 th of Siam Physics Congress 2024 (tsb2024), Krungsri River Hotel, Phra Nakorn Sri Ayutthaya, Thailand, JUNE 5-7, 2024.">
  <meta name="keywords"
    content="tsb2024, tsb2024,19 th of Siam Physics Congress, ครั้งที่ 19, ประกวดโครงงานอิสระ, สมาคมฟิสิกส์">
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
  <style>
    /* สีข้อความที่กระพริบ */
    .blinking {
      animation: blink-animation 1s infinite;
    }

    /* แอนิเมชันของการกระพริบ */
    @keyframes blink-animation {
      0% {
        opacity: 1.0;
      }

      50% {
        opacity: 0.0;
      }

      100% {
        opacity: 1.0;
      }
    }
  </style>
</head>

<body class="font-mitr">
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>

  <div class="container">
    <h1 class="card-title centerer mt-3">All Announcement & News</h1>
    <table class="table table-striped strip" style="border: thick double #ff7a01;">
      <thead>
        <tr>
          <th class="fs-28">Announcement</th>
          <th> </th>
        </tr>
      </thead>
      <tbody>

        <?php $i = 1;
        $query = $conn->query("SELECT * FROM tb_announcement ORDER BY id DESC");
        foreach ($query as $row) {
          if ($i <= 3) {
            ?>
            <tr>
              <td><b id="blinkingText<?php echo $i; ?>" class="blinkin"
                  style="color:red;">New</b><?php echo " " . $row['an_date']; ?></td>
              <td>
                <a class="anews" href="<?php echo $row['an_link']; ?>" target="_blank"><?php echo $row['an_detail']; ?>
                </a>
              </td>
            </tr>
            <?php
          } else { ?>
            <tr>
              <td><?php echo " " . $row['an_date']; ?></td>
              <td>
                <a class="anews" href="<?php echo $row['an_link']; ?>" target="_blank"><?php echo $row['an_detail']; ?>
                </a>
              </td>
            </tr>
            <?php
          }
          $i++;
        }
        ?>



      </tbody>
    </table>
  </div>

  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/blink.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/script.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/script/messenger.php');
  ?>

</body>

</html>