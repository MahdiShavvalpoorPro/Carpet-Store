<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="Css/panel.css" />
  <link rel="stylesheet" href="Css/main.css" />
  <link rel="stylesheet" href="Css/flexboxgrid.css" />
    <link rel="stylesheet" href="./fontawesome/css/all.css">

  <title>Document</title>
</head>

<body>
  <div id="panel" class="panel">
    <?php include "./Sidebar.php";?>
    <div id="left">
      <section class="main-box">
        <?php include "./Header.php";?>
        <?php echo Content();?>
      </section>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0/dist/Chart.min.js"></script>
  <script src="./js/panel.js"></script>

</body>

</html>

<?php

function Content(){
    ?>
    <div class="holder">
        <div class="row">
            <div class="col-lg-3">
                <div class="mini-card-report">
                    <div class="right">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="left">
                        <span>تکمیل انبار</span>
                        <span>400</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mini-card-report">
                    <div class="right">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="left">
                        <span>تکمیل انبار</span>
                        <span>400</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mini-card-report">
                    <div class="right">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="left">
                        <span>تکمیل انبار</span>
                        <span>400</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mini-card-report">
                    <div class="right">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="left">
                        <span>تکمیل انبار</span>
                        <span>400</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="revenue-box">
            <div class="head">
                <div class="right">
                    دآمد
                </div>
                <div class="left">
                    <i class="fas fa-cog"></i>
                    <i class="fas fa-redo"></i>
                </div>
            </div>
            <div class="content">
                <canvas id="myChart" width="300" height="150"></canvas>
            </div>
        </div>
    </div>
    <?php
}