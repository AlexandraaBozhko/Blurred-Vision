<?php
    require_once __DIR__ . '/core/bootstrap.php';
    $db = new Database();
    $images = $db->getRandomImagesArrayByType(1, 7);
?>

<!-- HEAD  -->
<?php
    $pageTitle = 'BLURRED VISION';
    require __DIR__ . '/common/head.php';
?>

<body>
    <!-- Preloader Start -->
    <?php
        include __DIR__ . '/common/preloaded.php';
    ?>
    <!-- Preloader End -->

    <!-- Main Menu -->
    <?php
        include __DIR__ . '/common/main_menu.php';
    ?>
    <!-- Main Menu End-->

    <!-- ***** Header Area Start ***** -->
    <?php
        include __DIR__ . '/common/header.php';
    ?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <?php
        include __DIR__ . '/common/heroarea.php';
    ?>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <div class="portfolio-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-title">
                        <h2>“В фотографии есть настолько тонкая реальность, что она становится все более <span>реальной</span>, чем сама реальность.”</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-5">
                    <div class="single-portfolio-item mt-100 portfolio-item-1 wow fadeIn">
                        <div class="backend-content">
                            <h2>Reality</h2>
                        </div>
                        <?php $image = array_shift($images); ?>
                        <?php require __DIR__ . '/widget/portfolio_image.php' ?>
                    </div>
                </div>
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-6">
                    <div class="single-portfolio-item mt-230 portfolio-item-2 wow fadeIn">
                        <div class="backend-content">                            
                        </div>
                        <?php $image = array_shift($images); ?>
                        <?php require __DIR__ . '/widget/portfolio_image.php' ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-10">
                    <div class="single-portfolio-item mt-100 portfolio-item-3 wow fadeIn">
                        <div class="backend-content">                            
                            <h2>Photography</h2>
                        </div>
                        <?php $image = array_shift($images); ?>
                        <?php require __DIR__ . '/widget/portfolio_image.php' ?>
                    </div>
                </div>
            </div>

            <div class="row justify-content-end">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-6">
                    <div class="single-portfolio-item portfolio-item-4 wow fadeIn">
                        <?php $image = array_shift($images); ?>
                        <?php require __DIR__ . '/widget/portfolio_image.php' ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-5">
                    <div class="single-portfolio-item portfolio-item-5 wow fadeIn">
                        <?php $image = array_shift($images); ?>
                        <?php require __DIR__ . '/widget/portfolio_image.php' ?>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
              
            </div>

        </div>
    </div>
    <!-- ***** Portfolio Area End ***** -->

    <!-- ***** Call to Action Area Start ***** -->
    <?php
        include __DIR__ . '/common/calltoaction.php';
    ?>
    <!-- ***** Call to Action Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <?php
        include __DIR__ . '/common/footer.php';
    ?>
    <!-- ***** Footer Area End ***** -->

</body>

</html>