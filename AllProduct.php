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
    <div  style="width: 80%;">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Image</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            </tbody>
        </table>
    </div>
<?php
}