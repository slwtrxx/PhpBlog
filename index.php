<?php
require "Includes/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $config['title'] ;?></title>

    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="media/assets/bootstrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="media/css/style.css">
</head>
<body>

<div id="wrapper">
    <?php include "Includes/header.php"; ?>

    <div id="content">
        <div class="container">
            <div class="row">
                <section class="content__left col-md-8">
                    <div class="block">
                        <a href="/Php_Blog/articles.php">Все записи</a>
                        <h3>Новейшее_в_блоге</h3>
                        <div class="block__content">
                            <div class="articles articles__horizontal">

                                <?php $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 10"); ?>
                                <?php
                                    while ($art = mysqli_fetch_assoc($articles))
                                    {
                                       ?>
                                        <article class="article">
                                            <div class="article__image" style="background-image: url(./Static/images/<?php echo $art['image']; ?>);"></div>
                                            <div class="article__info">
                                                <a href="/article.php?id=<?php echo $art['id']; ?>"><?php echo $art['title']; ?></a>
                                                <div class="article__info__meta">
                                                <?php
                                                //Вывод названия категорий!!
                                                $art_cat = false;
                                                foreach ($categories as $category) {
                                                    if ($category['id'] == $art['categorie_id'])
                                                    {
                                                        $art_cat = $category;
                                                        break;
                                                    }
                                                }?>
                                                <small>Категория: <a href="/articles.php?categorie=<?php echo $art_cat['id']?>"><?php echo $art_cat['title'];?> </a></small>
                                            </div>
                                                <div class="article__info__preview"><?php  echo mb_substr(strip_tags($art['text']), 0, 100, 'utf-8') . ' ...'; ?></div>
                                        </div>
                                    </article>
                                <?php

                                    }
                                ?>

                            </div>
                        </div>
                    </div>

                    <div class="block">
                        <a href="/articles.php?categorie=7">Все записи</a>
                        <h3>Безопасность [Новейшее]</h3>
                        <div class="block__content">
                            <div class="articles articles__horizontal">

                                <?php
                                $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id` = 6 ORDER BY `id` DESC LIMIT 10");
                                ?>

                                <?php
                                while ($art = mysqli_fetch_assoc($articles))
                                {
                                    ?>
                                    <article class="article">
                                        <div class="article__image" style="background-image: url(./Static/images/<?php echo $art['image']; ?>);"></div>
                                        <div class="article__info">
                                            <a href="/article.php?id=<?php echo $art['id']; ?>"><?php echo $art['title']; ?></a>
                                            <div class="article__info__meta">
                                                <?php
                                                //Вывод названия категорий!!
                                                $art_cat = false;
                                                foreach ($categories as $category) {
                                                    if ($category['id'] == $art['categorie_id'])
                                                    {
                                                        $art_cat = $category;
                                                        break;
                                                    }
                                                }?>
                                                <small>Категория: <a href="/article.php?categorie=<?php echo $art_cat['id']?>"><?php echo $art_cat['title'];?> </a></small>
                                            </div>
                                            <div class="article__info__preview"><?php  echo mb_substr(strip_tags($art['text']), 0, 100, 'utf-8') . ' ...'; ?></div>
                                        </div>
                                    </article>
                                    <?php

                                }
                                ?>
                    </div>
                </section>
                <section class="content__right col-md-4">
                    <div class="block">
                        <h3>Мы_знаем</h3>
                        <div class="block__content">
                            <script type="text/javascript" src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
                        </div>
                    </div>
                    <?php include "Includes/sidebar.php"?>
                </section>
            </div>
        </div>
    </div>

     <?php include "Includes/footer.php"?>

</div>

</body>
</html>