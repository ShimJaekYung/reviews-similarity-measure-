<?php
$searchapp =$_GET['varapp'];

$conn= mysqli_connect('localhost','root','0000','capstone','3306');

$sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
        or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
        or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$all_count = $row['count(writer)'];

$sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '업데이트' or category2 = '업데이트' or category3 = '업데이트'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$g_d1 = $row['count(writer)'];

$sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '용량' or category2 = '용량' or category3 = '용량'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$g_d2 = $row['count(writer)'];

$sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '다운' or category2 = '다운' or category3 = '다운'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$g_d3 = $row['count(writer)'];

$sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '버그' or category2 = '버그' or category3 = '버그'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$g_d4 = $row['count(writer)'];

$sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '설치' or category2 = '설치' or category3 = '설치'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$g_d5 = $row['count(writer)'];
?>


<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Custom fonts for this template-->
        <link
            href="vendor/fontawesome-free/css/all.min.css"
            rel="stylesheet"
            type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <script>
            function changeIframeUrl(url) {
                document.getElementById("main_frame").src = url;
            }
        </script>

    </head>
    <body>
      <!-- Project Card Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">[시스템] 하위 카테고리</h6>
          </div>
          <div class="card-body">
              <h4 class="small font-weight-bold">업데이트
                  <span class="float-right"><?=round($g_d1/$all_count*100)?>%</span></h4>
              <div class="progress mb-4">
                  <div
                      class="progress-bar bg-danger"
                      role="progressbar"
                      style="width: <?=$g_d1/$all_count*100?>%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">용량
                  <span class="float-right"><?=round($g_d2/$all_count*100)?>%</span></h4>
              <div class="progress mb-4">
                  <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: <?=$g_d2/$all_count*100?>%"
                      aria-valuenow="15"
                      aria-valuemin="0"
                      aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">다운
                  <span class="float-right"><?=round($g_d3/$all_count*100)?>%</span></h4>
              <div class="progress mb-4">
                  <div
                      class="progress-bar"
                      role="progressbar"
                      style="width: <?=$g_d3/$all_count*100?>%"
                      aria-valuenow="10"
                      aria-valuemin="0"
                      aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold" >버그
                  <span class="float-right"><?=round($g_d4/$all_count*100)?>%</span></h4>
              <div class="progress mb-4">
                  <div
                      class="progress-bar bg-info"
                      role="progressbar"
                      style="width: <?=$g_d4/$all_count*100?>%"
                      aria-valuenow="30"
                      aria-valuemin="0"
                      aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">설치
                  <span class="float-right"><?=round($g_d5/$all_count*100)?>%</span></h4>
              <div class="progress">
                  <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: <?=$g_d5/$all_count*100?>%"
                      aria-valuenow="20"
                      aria-valuemin="0"
                      aria-valuemax="100"></div>
              </div>
          </div>
      </div>
    </body>
</html>
