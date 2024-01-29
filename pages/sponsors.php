<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/connectdb.php');
?>
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

  <section class="mt-3">
    <div class="container">
      <h1 class="card-title centerer mt-3">Exhibitions</h1>
      <div class="blog-con">

        <div class="row">
          <div class="col-3" style="text-align: center;">
            <a href="http://www.thaiphysoc.org/" target="_blank">
              <img src="/spc2024/img/co-host/physic.png" class="img-fluid">
            </a>
          </div>
          <div class="col-3 center2">
            <h6>Thai physics society</h6>
          </div>
          <div class="col-3" style="text-align: center;">
            <a href="https://www.science.kmitl.ac.th/new" target="_blank">
              <img src="/spc2024/img/co-host/logo-b.png" class="img-fluid">
            </a>
          </div>
          <div class="col-3 center2">
            <h6>King Mongkut's Institute of Technology Ladkrabang</h6>
          </div>
        </div>

        <div class="row">
          <div class="col-2" style="text-align: center;">
            <a href="http://www.cmit.kmitl.ac.th/" target="_blank">
              <img src="/spc2024/img/co-host/cmit.png" class="img-fluid">
            </a>
          </div>
          <div class="col-2 center2">
            <h6>College of materials innovation and technology</h6>
          </div>
          <div class="col-2" style="text-align: center; margin:auto;">
            <a href="https://www.aru.ac.th/" target="_blank">
              <img src="/spc2024/img/co-host/pru.png" class="img-fluid w-50">
            </a>
          </div>
          <div class="col-2 center2">
            <h6>Phranakhon Si Ayutthaya Rajabhat University</h6>
          </div>
          <div class="col-2" style="text-align: center; margin:auto;">
            <a href="https://www.nst.or.th/" target="_blank">
              <img src="/spc2024/img/co-host/nst.png" class="img-fluid w-50">
            </a>
          </div>
          <div class="col-2 center2">
            <h6>Nuclear Society of Thailand</h6>
          </div>
        </div>

      </div>
      <h1 class="card-title centerer mt-3">Sponsors</h1>
      <div class="blog-con">
        <div class="blog-item">
        <img src="/spc2024/img/soon.png" style="display:block; margin:auto; width:50%;">
          <!-- <h2 style="text-align: center;">Supreme</h2> -->

          <!-- Supremea แถวที่ 1 -->
          <!-- <div class="row">
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.thep-center.org/en/" target="_blank">
                <img src="/spc2024/img/sponsors/02.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Thailand Center of Excellence in Physics </h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.slri.or.th/en/" target="_blank">
                <img src="/spc2024/img/sponsors/03.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Synchrotron Light Research Institute </h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.narit.or.th/index.php/en-home" target="_blank">
                <img src="/spc2024/img/sponsors/05.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>The National Astronomical Research Institute of Thailand (Public Organization)</h6>
            </div>
          </div> -->

          <!-- Supremea แถวที่ 2 -->
          <!-- <div class="row">
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://pmu-hr.or.th/" target="_blank">
                <img src="/spc2024/img/sponsors/07.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Program Management Unit for Human Resources & Institutional Development,Research and Innovation
                (PMU-B)</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.tsri.or.th/" target="_blank">
                <img src="/spc2024/img/sponsors/08.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Thailand Science Research and Innovation (TSRI)</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="http://www.costat.or.th/" target="_blank">
                <img src="/spc2024/img/sponsors/09.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>The Council of Scientific and Technological Associations of Thailand (COSTAT)</h6>
            </div>
          </div> -->

          <!-- <hr>
          <h2 style="text-align: center;">Platinum</h2> -->

          <!-- Platinum แถวที่ 1 -->
          <!-- <div class="row">
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.nrct.go.th/" target="_blank">
                <img src="/spc2024/img/sponsors/10.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>National Research Council of Thailand: NRCT</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.nstda.or.th/en/" target="_blank">
                <img src="/spc2024/img/sponsors/11.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>National Science and Technology Development Agency</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.ulvac.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/12.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>ULVAC (Thailand) Limited</h6>
            </div>
          </div> -->

          <!-- Platinum แถวที่ 2 -->
          <!-- <div class="row">
            <div class="col-2 center2" style="text-align: center;">
              <a href="http://www.ryts-instruments.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/13.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>RYTS Instruments Company Limited</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://abexglobalhc.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/14.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>ABEX Technologies Company Limited</h6>
            </div>
            <div class="col-2"></div>
            <div class="col-2"></div>
          </div> -->

          <!-- <hr>
          <h2 style="text-align: center;">Gold</h2> -->

          <!-- Gold แถวที่ 1 -->
          <!-- <div class="row">
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.fortistrading.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/15.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>FORTIS Trading Company Limited</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="http://www.pvpvacuum.com/" target="_blank">
                <img src="/spc2024/img/sponsors/16.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Professional Vacuum Partners Company Limited</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.puditec.com/" target="_blank">
                <img src="/spc2024/img/sponsors/17.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>PUDITEC Company Limited</h6>
            </div>
          </div> -->

          <!-- Gold แถวที่ 2 -->
          <!-- <div class="row">
            <div class="col-2 center2" style="text-align: center;">
              <a href="http://www.saengvith2000.com/" target="_blank">
                <img src="/spc2024/img/sponsors/18.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Saengvitch 2000 Company Limited</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.tint.or.th/en" target="_blank">
                <img src="/spc2024/img/sponsors/06.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Thailand Institute of Nuclear Technology (Public Organization)</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://aapps.org/" target="_blank">
                <img src="/spc2024/img/sponsors/19.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Association of Asia Pacific Physical Society (AAPPS)</h6>
            </div>
          </div> -->

          <!-- Gold แถวที่ 3 -->
          <!-- <div class="row">
            <div class="col-2 center2" style="text-align: center;">
              <a href="http://www.crest-group.net/" target="_blank">
                <img src="/spc2024/img/sponsors/20.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Crest Nanosolution (Thailand) Company Limited</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.irct.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/21.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>IRC Technology Limited</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://thailcinspace.com/" target="_blank">
                <img src="/spc2024/img/sponsors/22.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Thailand Liquid Crystals in Space (TLC)</h6>
            </div>
          </div> -->

          <!-- <hr>
          <h2 style="text-align: center;">Silver</h2> -->

          <!-- Silver แถวที่ 1 -->
          <!-- <div class="row">
            <div class="col-2 center2" style="text-align: center;"></div>
            <div class="col-2 center2"></div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.ipst.ac.th/ipsten" target="_blank">
                <img src="/spc2024/img/sponsors/01.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>The Institute for Promotion of Teaching Science and Technology (IPST)</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;"></div>
            <div class="col-2 center2"></div>
          </div> -->

          <!-- <hr>
          <h2 style="text-align: center;">Copper</h2> -->

          <!-- Copper แถวที่ 3 -->
          <!-- <div class="row">
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://stc.in.th/" target="_blank">
                <img src="/spc2024/img/sponsors/23.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Saktongpoon Construction Limited</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://www.siamanankit.com/" target="_blank">
                <img src="/spc2024/img/sponsors/24.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>Siam Anankit Limited</h6>
            </div>
            <div class="col-2 center2" style="text-align: center;">
              <a href="https://kinetics.co.th/" target="_blank">
                <img src="/spc2024/img/sponsors/25.png" class="img-fluid">
              </a>
            </div>
            <div class="col-2 center2">
              <h6>KINETICS Corporation Limited</h6>
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </section>

  </div>

  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
</body>

</html>