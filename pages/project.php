<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/ะหิ2024/connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSB2024 KMITL</title>
  <link rel="stylesheet" href="/ะหิ2024/theme/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/ะหิ2024/theme/css/self.css">
</head>

<body class="font-concert">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/ะหิ2024/components/navbar.php');
  ?>
  <div class="container">
    <h1 class="card-title centerer mt-3">ประกวดโครงงานครั้งที่ 16 “ค้นคว้าอิสระปริญญาตรี สาขาวิชาฟิสิกส์”</h1>
    <div class="row" style="margin: 15px auto;">
      <div class="col-6">
        <a href="/spc2024/file/download/project1.jpg" target="_blank">
          <img src="/spc2024/img/news/project1.jpg" class="d-block w-100  border border-warning">
        </a>
      </div>
      <div class="col-6">
        <a href="/spc2024/file/download/project2.jpg" target="_blank">
          <img src="/spc2024/img/news/project2.jpg" class="d-block w-100  border border-warning">
        </a>
      </div>
    </div>
    <div class="row" style="margin: 15px auto;">
      <div class="col-12">
        <div class="card border-0">
          <table class="table table-success table-striped table-hover mt-5">
            <thead style="text-align: center;">
              <tr>
                <td>
                  <h4 class="fs-35">กำหนดการ</h4>
                </td>
                <td>
                  <h4 class="fs-35">วันที่</h4>
                </td>
              </tr>
            </thead>
            <tbody class="fs-22">
              <tr>
                <td>เปิดรับสมัครลงทะเบียน (ส่งเฉพาะ abstract)</td>
                <td>ตั้งแต่วันที่ 15 มีนาคม - 15 เมษายน 2567</td>
              </tr>
              <tr>
                <td>ประกาศผลโครงงานที่ผ่านรอบคัดเลือก รอบแรก</td>
                <td>ภายใน วันที่ 17 เมษายน 2567</td>
              </tr>
              <tr>
                <td>ผู้ผ่านเข้ารอบสองส่งรายงานโครงงานฉบับสมบูรณ์ออนไลน์ผ่านเว็บไซท์ SPC 2024</td>
                <td>ภายใน วันที่ 10 พฤษภาคม 2567</td>
              </tr>
              <tr>
                <td>ประกาศผลโครงงานที่ผ่านรอบคัดเลือก รอบสอง</td>
                <td>ภายใน วันที่ 15 พฤษภาคม 2567</td>
              </tr>
              <tr>
                <td>ประกาศผลโครงงานที่ผ่านเข้ารอบสุดท้าย</td>
                <td>ภายใน วันที่ 20 พฤษภาคม 2567</td>
              </tr>
              <tr>
                <td>นักศึกษานำเสนอผลงานในงานประชุม Siam Physics Congress 2024 (SPC 2024)</td>
                <td>วันที่ 6 มิถุนายน 2567</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <hr>
    <div class="row" style="margin: 15px auto;">
      <h1 class="card-title centerer">เงื่อนไขและเอกสารประกอบการสมัคร</h1>
      <div class="col-12">
        <div class="card border-0" style="color: #494949;">
          <p>โครงงานค้นคว้าอิสระที่ส่งเข้าประกวด ต้องเป็นโครงงานอิสระระดับปริญญาตรี สาขาฟิสิกส์ ของบัณฑิต วท.บ. ฟิสิกส์
            ปีการศึกษา 2565 หรือ นักศึกษาที่จะกำลังสำเร็จการศึกษา วท.บ. ฟิสิกส์ ปีการศึกษา 2566
            โดยมีเอกสารประกอบการสมัครดังนี้</p>
          <h5>รอบแรก</h5>
          <ul class="unlist">
            <li>Abstract Template for Physics Project 2024
              <a href="/spc2024/file/download/spc2024-abstract-template_physics project.docx">Download File</a>
            </li>
            <li>แบบยินยอมให้ส่งผลงานเข้าประกวดจากอาจารย์ที่ปรึกษาโครง งานค้นคว้าอิสระ
              <a href="/spc2024/file/download/spc2024.docx">Download File</a>
            </li>
          </ul>
          <h5>รอบสอง </h5>
          <ul class="unlist">
            <li>ไฟล์รายงานโครงงานอิสระฉบับสมบูรณ์ ส่งได้ที่ >> Link
              <!-- <a href="https://docs.google.com/forms/d/1IsirhQ02JlNmnFgziYkFuLBH6NOZeQFXd6KtBPQ8RFA/edit?pli=1">Link</a> -->
            </li>
            <li>การนำเสนอผลงาน ภาษาที่จะใช้ในการนำเสนอรอบสุดท้าย ท่านสามารถนำเสนอได้ทั้งภาษาไทยและภาษาอังกฤษ </li>
          </ul>
          <h5>รางวัลชนะเลิศ</h5>
          <ul class="unlist">
            <li>ถ้วยพระราชทานสมเด็จพระเจ้าพี่นางเธอ เจ้าฟ้ากัลยาณิวัฒนา กรมหลวงนราธิวาสราชนครินทร์</li>
            <li>เงินรางวัล 25,000 บาท + ประกาศนียบัตร</li>
            <li>รางวัลรองชนะเลิศอันดับ 1 : เงินรางวัล 15,000 บาท + ประกาศนียบัตร</li>
            <li>รางวัลรองชนะเลิศอันดับ 2 : เงินรางวัล 10,000 บาท + ประกาศนียบัตร</li>
            <li>รางวัลรองชนะเลิศอันดับ (2 รางวัล) : เงินรางวัล 5,000 บาท + ประกาศนียบัตร</p>
            </li>
          </ul>
          <p>หมายเหตุ: ผู้ที่ผ่านเข้ารอบสุดท้ายจะได้รับรางวัลประกาศณียบัตรทุกคน</p>
        </div>
      </div>
    </div>
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/components/footer.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/script.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/spc2024/script/messenger.php');
  ?>
</body>

</html>