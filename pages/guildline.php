<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/db/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submission Guidelines</title>
  <link rel="stylesheet" href="/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/theme/css/self.css">
</head>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
  ?>
  <a href="https://www.messenger.com/t/279532238569467/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792&recurring_notification=0"
    target="_blank">
    <img src="/../img/messenger.png" class="img-fluid messenger">
  </a>
  <div class="container">
    <h1 class="card-title centerer mt-3">Presentation Guidelines & Award </h1>
    <h3 class="centerer mt-3">Thank you for presenting at TSB2024.</h3>
    <div class="col-12">
      <div class="card border-0" style="color: #494949;">
        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are grateful for your participation in
          this conference. This page is designed to prepare you for your poster and oral presentation at TSB2024. Please
          visit the page regularly for updates on technical requirements and related information.
        </h5><hr style="border: none;height: 9px;background-color: #ff4a00;">

        <h3 class="mt-3" style="color:black">Guidelines for poster presenters</h3>
        <h5>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          1) The poster must be in English and printed in size A0 (33.1 x 46.8 inches or 841 x 1189 mm).<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          2) Adhesive tapes and mounting materials will be provided by the organizer.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          3) Poster presenters can put up their poster on Thursday 14th November 2024 from 15.00 onward. <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          4) Poster presenters are required to be in the vicinity of their poster for discussion and to answer
          questions. <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          5) Posters must be removed from the board before 15.00 on the last day of the conference (Saturday 16th
          November 2024). If the posters are left after 15.00, the organizer reserves the right to remove and discard
          them.
        </h5><hr style="border: none;height: 9px;background-color: #ff4a00;">

        <h3 class="mt-3" style="color:black">Guidelines for oral presenters</h3>
        <h5>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          1) Oral presenters must check in with your presentation on a USB Memory stick with the technician at the
          Speakers’ Preparation Desk.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          2) You can upload your presentation materials onto the organizer’s computers on Thursday 14th November 2024
          from 15.00 onward.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          3) The uploading of presentation files must be completed at least 30 minutes before the start of your
          session.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          4) Using your own computer is NOT ALLOWED due to technical errors in different formats and operating
          systems.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          5) Each oral presenter will receive an email notifying them of the schedule for their presentation. In case
          you have not received notifying e-mail, please check your junk mail.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          6) In general, each oral presenter will have 10-12 minutes for presentation and 3-5 minutes for Q&A.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          7) There will be warning signals for the end of your presentation.
        </h5><hr style="border: none;height: 9px;background-color: #ff4a00;">

        <h3 class="mt-3" style="color:black">Oral presenters’ slide preparation</h3>
        <h5>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          1)	The first slide of your presentation must be your name, affiliation and presentation title.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          2)	The conference computers in the session halls are supplied with MS-Office 365.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          3)	Your presentation must be prepared in either .PPT or .PPTX format (MS PowerPoint) or .PDF format (Acrobat Reader).<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          4)	PDF format is highly recommended because it prevents crashes in formats and fonts during presentations. <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          5)	For MAC users, you need to convert your slides to .PPT or .PDF.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          6)	Common fonts such as Arial, Times New Roman, Verdana etc. are highly recommended. Special characters might be changed to a default font on a PowerPoint-based PC<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          7)	If you include video clips with PowerPoint, the videos must be embedded as an MP4.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          8)	A laser pointer will be provided in the meeting room.
        </h5><hr style="border: none;height: 9px;background-color: #ff4a00;">

      </div>
    </div>
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/script/script.php');

  ?>
</body>

</html>