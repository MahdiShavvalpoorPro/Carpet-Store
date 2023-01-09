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

    <title>ثبت مخصول</title>
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
<h1 class="h-100 d-flex align-items-center justify-content-center"> اضافه کردن محصول</h1>
<br>
<div class="h-100 d-flex align-items-center justify-content-center">
    <form class="row g-3">
        <div class="col-md-6">
            <label for="" class="form-label">نام محصول</label>
            <input type="text" class="form-control" id="">
        </div>
        <div class="col-md-12">
            <label for="" class="form-label">قیمت محصول</label>
            <input type="number" class="form-control" id="">
        </div>
        <div class="col-md-12">
            <label for="" class="form-label">تصویر محصول</label>
            <input type="file" class="form-control" id="">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">ثبت محصول جدید</button>
        </div>
    </form>
</div>
<?php
}