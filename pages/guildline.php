<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSB2024 KMITL</title>
  <link rel="stylesheet" href="/tsb2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/tsb2024/theme/css/self.css">
</head>

<body class="font-concert">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/tsb2024/components/navbar.php');
  ?>
  <div class="container">
    <h1 class="card-title centerer mt-3">Presentation Guidelines & Award </h1>
    <div class="card border-0" style="color: #494949;">
      <h5>Instruction for oral presentation</h5>
      <p>You are requested to upload your presentation file in your presenting room at least 1 hour before your
        presentation time. Your files will be completely removed after finishing the session. Both PDF and Microsoft
        power point files are recommended in case there are font-compatible problems.</p>
      <ul class="unlist">
        <li>Plenary lectures will have 40 minutes for lecture and 5 minutes for Q&A (i.e. 45 min total)</li>
        <li>Keynote/Invited speakers will have 25 minutes for lecture and 5 minutes for Q&A (i.e. 30 min total)</li>
        <li>All regular presenters will have 12 minutes for lecture and 3 minutes for Q&A (i.e. 15 min total).</li>
      </ul>
      <hr>
      <h5>Instruction for poster presentation</h5>
      <ul class="unlist">
        <li>The poster size should not exceed A0size(84.1 cm width x 118.9 cm height) displayed vertically (portrait
          layout).</li>
        <li>Each accepted paper should be WITHIN 4 PAGES (final format; A4-sized).</li>
        <li>A Poster board/double-sided tape will be provided in the poster presentation session area.</li>
        <li>Place your Title and Authors’ names prominently at the top of the poster to allow viewers to identify
          your paper easily. The corresponding author name and e-mail address information should be highlighted (or
          in bold) in case the viewer is interested in contacting you for more information.</li>
        <li>Poster presenters are required to be at their posters during the poster session.</li>
      </ul>
      <hr>
      <h5>Poster Presentation and Display Schedule</h5>
      <ul class="unlist">
        <li>Authors are responsible for setting up their poster on June 15, 2024 (before 12:00 pm), and removing
          it at the end of session (June 16, 2024 before 11:00 am)</li>
        <li>Posters will be grouped by topic, and Each poster board will be identified by a poster number. Please
          refer to the Final Program book to confirm the number assigned to your poster presentation.</li>
        <li>Authors are asked to present their posters during the poster presentation sessions from 16:30 to 18:30
          on June 15, 2024, to discuss their findings with participants and answer any questions.</li>
      </ul>
      <hr>
      <h5>Presentation Awards</h5>
      <ul class="unlist">
        <li>Best Oral Presentation Awards</li>
        <li>Best Poster Awards</li>
        <li>Honorable Mention Awards</li>
      </ul>
    </div>
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
</body>

</html>