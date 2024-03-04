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
    <h1 class="card-title centerer mt-3">Plenary Talks & Speakers</h1>
    <h2 style="text-align: center;">Plenary Talks</h2>
    <div style="text-align: center;">
      <img src="/spc2024/img/speaker/pss01.png" class="w-25">
      <h2 style="color:blue">Prof. Yifang WANG</h2>
      <h5 style="color:blue">Director of Institute of High Energy Physics of Chinese Academy of Sciences</h5>
      <h5 style="color:blue"><b>Title : </b> Jiangmen Underground Neutrino Observatory (JUNO)</h5>
      <p class="color-black" style="text-align:justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; He is an author on more
        than 500 scientific papers on neutrino physics, e+ e- collision physics, cosmic rays and astrophysics,
        detector design and construction, and methods for data analysis, covering his work on the L3, AMS, Palo Verde,
        KamLAND and BES experiments. He led the design and construction of the BESIII detector at the Beijing
        Electron-Positron Collider, and the Daya Bay Reactor Neutrino Experiment, which precisely measured the
        neutrino mixing angle theta13. He proposed the idea of the Circular Electron-Positron Collider (CEPC) followed
        by a proton collider (SPPC) as a possible future step for particle physics. As the spokesperson of Jiangmen
        Underground Neutrino Observatory(JUNO), he is leading the design and construction of the project.
        He was awarded the W. K. H. Panofsky Prize in 2013, the 20th Nikkei Asia Prize in 2015, the Breakthrough Prize
        in Fundamental Physics in 2016 , the Bruno Pontecorvo Prize in 2016 and the Future Science Prize in 2019.
      </p>
    </div>
    <div style="text-align: center;">
      <img src="/spc2024/img/speaker/pss02.png" class="w-25">
      <h2 style="color:blue">Prof. Albrecht Karle</h2>
      <h5 style="color:blue">Full professor and former Chair of the Department of Physics at the University of
        Wisconsin-Madison.</h5>
        <h5 style="color:blue"><b>Title : </b> The Telescope in the Ice: Neutrino astronomy at the South Pole - recent results from IceCube</h5>
      <p class="color-black" style="text-align:justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; His primary research is
        about our understanding of the origin of energetic cosmic rays and neutrinos using the IceCube Neutrino
        Observatory, where he is Associate Director for Science and Instrumentation.
        He is a Co-Principal Investigator of IceCube Neutrino Observatory and Principal Investigator of the IceCube
        Upgrade construction project, an extension of IceCube for precision neutrino physics and astrophysics.
        Karle analyzes data focusing on the search for sources of neutrinos in the Southern Sky using veto techniques to
        reject backgrounds. Karle is also involved in advancing the radio detection method of cosmic neutrinos using the
        glacial ice at the South Pole and in Greenland.
        He is also working on developing the conceptual design of the next-generation large extension IceCube-Gen2.
      </p>
    </div>
  </div>
  <hr>
  <h2 style="text-align: center;">Keynote Lectures</h2>
  <img src="/spc2024/img/soon.png" style="display:block; margin:auto; width:50%;">
  <hr>
  <h2 style="text-align: center;">Invited Speakers</h2>
  <img src="/spc2024/img/soon.png" style="display:block; margin:auto; width:50%;">
  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
</body>

</html>