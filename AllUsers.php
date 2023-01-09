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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ثبت مخصول</title>
</head>

<body dir="rtl">
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
    $data = new mysqli()
    ?>
    <div  class="card-body table-responsive p-0">
        <table class="table table-striped text-right">
            <tr>
                <th>شماره</th>
                <th>کاربر</th>
                <th>تاریخ</th>
                <th>وضعیت</th>
                <th>دلیل</th>
            </tr>
<!--            --><?php //foreach ($data as $item) : ?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $item->name;?><!--</td>-->
<!--                    <td>محمد</td>-->
<!--                    <td>11-7-2014</td>-->
<!--                    <td><span class="badge badge-success">تایید شده</span></td>-->
<!--                    <td>-->
<!--                        <a href="#" class="btn btn-primary">ویرایش</a>-->
<!--                        <a href="#" class="btn btn-danger">حذف</a>-->
<!--                    </td>-->
<!--                </tr>-->
<!--            --><?php //endforeach; ?>

            <tr>
                <td>219</td>
                <td>حسام</td>
                <td>11-7-2014</td>
                <td><span class="badge bg-danger">در حال بررسی</span></td>
                <td>
                    <a href="#" class="btn btn-primary">ویرایش</a>
                    <a href="#" class="btn btn-danger">حذف</a>
                </td>
            </tr>
            <tr>
                <td>657</td>
                <td>رضا</td>
                <td>11-7-2014</td>
                <td><span class="badge badge-primary">تایید شده</span></td>
                <td>
                    <a href="#" class="btn btn-primary">ویرایش</a>
                    <a href="#" class="btn btn-danger">حذف</a>
                </td>
            </tr>
            <tr>
                <td>175</td>
                <td>پرهام</td>
                <td>11-7-2014</td>
                <td><span class="badge badge-danger">رد شده</span></td>
                <td>
                    <a href="#" class="btn btn-primary">ویرایش</a>
                    <a href="#" class="btn btn-danger">حذف</a>
                </td>
            </tr>
        </table>
    </div>
    <?php
}