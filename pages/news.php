<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Announcement</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
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

<body>
  <?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
<img src="/img/messenger.png" class="img-fluid messenger">
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
  include ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/script/blink.php');
  include ($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');
  ?>

</body>

</html>