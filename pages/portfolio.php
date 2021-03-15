<!-- HEAD  -->
<?php
    $db = new Database();
    $images  = $db->getImages();

    $pageTitle = 'Портфолио';
    require __DIR__ . '/../common/head.php';
?>

<body>
    <!-- Preloader Start -->
    <?php
        include __DIR__ . '/../common/preloaded.php';
    ?>
    <!-- Preloader End -->

    <!-- ***** Main Menu Area Start ***** -->
    <?php
        include __DIR__ . '/../common/main_menu.php';
    ?>
    <!-- ***** Main Menu Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <?php
        include __DIR__ . '/../common/header.php';
    ?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/bg-img/portfolio.jpg);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="line"></div>
                        <h2>Взгляните на мое портфолио</h2>
                        <p>Лучший способ оценить фотографа – это посмотреть на его портфолио. И, что бы ни было написано в биографии фотографа, фотографии сами все о нем расскажут. Самые приятные моменты - это когда то, что ты делаешь, нравится людям. Когда они видят результат вашей совместной работы и остаются довольны,
                         что твой труд дарит положительные эмоции, потому что в каждый кадр ты вкладываешь свою душу.</p>
                        <a href="contact.html" class="btn sonar-btn white-btn">записаться на съемку</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Menu -->
        <div class="sonar-portfolio-menu">
            <div class="text-center portfolio-menu">
                <button class="btn active" data-filter="*">Все</button>
                <button class="btn" data-filter=".landscapes">Пейзажи</button>
                <button class="btn" data-filter=".portraits">Портреты</button>
                <button class="btn" data-filter=".fashion">Уличные</button>
                <button class="btn" data-filter=".studio">Ночные</button>
                <button class="btn" data-filter=".macro">Макро</button>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <!-- ****** Gallery Area Start ****** -->
    <section class="sonar-projects-area" id="projects">
        <div class="container-fluid">
            <div class="row sonar-portfolio">

                <?php foreach($images as $image) :?>
                    <!-- Single gallery Item -->
                    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item <?=$image['type_name']?> wow fadeInUpBig" data-wow-delay="300ms">
                        <a target="_blank" href="/image?id=<?=$image['image_id']; ?>"><img src="data:image/png;base64,<?php echo base64_encode($image['image']); ?>"/></a>
                        <!-- Gallery Content -->
                        <div class="gallery-content">
                            <h4><?=$image['name']; ?></h4>
                            <p><?=$image['category']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>    
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->

    <!-- ***** Footer Area Start ***** -->
    <?php
        include __DIR__ . '/../common/footer.php';
    ?>
    <!-- ***** Footer Area End ***** -->

</body>

</html>