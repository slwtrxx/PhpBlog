<?php
require "../Includes/config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой первый блог</title>

    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="../media/assets/bootstrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="../media/css/style.css">
</head>
<body>

<div id="wrapper">

    <?php include "../Includes/header.php"; ?>


    <div id="content">
        <div class="container">
            <div class="row">
                <section class="content__left col-md-8">
                    <div class="block">
                        <h3>Правообладателям</h3>
                        <div class="block__content">

                            <div class="full-text">
                                копирайт инфл
                            </div>
                        </div>
                    </div>



                </section>
                <section class="content__right col-md-4">
                    <?php include "../Includes/sidebar.php"; ?>
                </section>
            </div>
        </div>
    </div>

    <?php include "../Includes/footer.php"; ?>


</div>

</body>
</html>