
<header id="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top__logo">
                <h1><?php echo $config['title'] ;?></h1>
            </div>
            <nav class="header__top__menu">
                <ul>
                    <li><a href="/Php_Blog/">Главная</a></li>
                    <li><a href="/Php_Blog/Pages/about.php">Обо мне</a></li>
                    <li><a href="<?php echo $config['vk_url'] ?>">Я Вконтакте</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <?php $categories_q = mysqli_query($connection, "SELECT * FROM `articles_categories`");
    $categories = array();
    while ($cat = mysqli_fetch_assoc($categories_q))
    {
        $categories[] = $cat;
    }
    ?>
    <div class="header__bottom">
        <div class="container">
            <nav>
                <ul>
                    <?php
                    foreach ($categories as $category)
                    {
                        ?>
                        <li><a href="/articles.php?categorie=<?php echo $category['id']; ?>"><?php echo $category['title']; ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</header>