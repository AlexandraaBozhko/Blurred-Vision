<!-- HEAD  -->
    <?php
        $pageTitle = 'Обо мне';
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
        <!-- Back End Content -->
        
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail aboutUs equalize bg-img" style="background-image: url(img/bg-img/about.jpg);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content aboutUs equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="line"></div>
                        <h2>Здравствуйте, меня зовут Александр Лукашанец, и я начинающий фотограф</h2>
                        <p class="about-me-p">Приветствую Вас на своем сайте! Фото-творчество - это увлекательный процесс, занимающий практически все мое свободное от основной работы время с 2018 года.
                            <p class="about-me-p">Основными и любимыми жанрами являются - портретная фотография, 
                                на свежем воздухе-в городе или на природе, а так же пейзажи. Важным моментом помимо самой съемки для меня является обработка кадров, я слежу за работами известных миру фотографами, всегда учусь, беру индивидуальные уроки у профессионалов фото-искусства, потому как новые методы и способы обработки позволяют создать красивые необычные снимки, идти в ногу со временем. Но так как это процесс творческий, и у каждого свой взгляд и свое видение мира, то работы фотографов отличаются, они как разные художники не могут написать один и тот же пейзаж или портрет одинаково. </p>
                        <a href="contacts" class="btn sonar-btn white-btn">записаться на съемку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <div class="sonar-about-us-area bg-img" style="background-image: url(img/bg-img/p3.jpg);">
        <!-- Back End Content -->
        <div class="backEnd-content">
            <h2>Dream</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="about-us-content bg-white">
                        <div class="section-heading text-left wow fadeInUp" data-wow-delay="300ms">
                            <div class="line"></div>
                            <h2>Личные качества фотографа</h2>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay="600ms">Считается, что профессия фотограф – простая и несложная, казалось бы, что трудного в том, чтобы держать фотоаппарат в руках и делать снимки.
                         Однако профессия фотографа далеко не так проста, как многие думают.<br> Чтобы стать настоящим профессионалом, 
                         фотограф должен обладать многими качествами. <br><br><strong> Мои качества:</strong> </p>
                        <!-- Progress Bar Content Area -->
                        <div class="services-progress-bar mt-50 wow fadeInUp" data-wow-delay="900ms">
                            <!-- Single Progress Bar -->
                            <div class="single_progress_bar">
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="80"></span>
                                </div>
                                <p>Терпеливость</p>
                            </div>
                            <!-- Single Progress Bar -->
                            <div class="single_progress_bar">
                                <div id="bar2" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="90"></span>
                                </div>
                                <p>Креативность</p>
                            </div>
                            <!-- Single Progress Bar -->
                            <div class="single_progress_bar">
                                <div id="bar3" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="100"></span>
                                </div>
                                <p>Идейность</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sonar-about-us-area second-part bg-img" style="background-image: url(img/bg-img/p1.jpg);">
        <!-- Back End Content -->
        <div class="backEnd-content">
            <h2>Really</h2>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="about-us-content bg-white">
                        <div class="section-heading text-left wow fadeInUp" data-wow-delay="300ms">
                            <div class="line"></div>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay="600ms">Здесь вы можете увидеть, какая из категорий наиболее популярна на данный момент</p>
                        <div class="row mt-100 text-center wow fadeInUp" data-wow-delay="900ms">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-pie-bar" data-percent="90">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>Пейзажи</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-pie-bar" data-percent="65">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>Портреты</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-pie-bar" data-percent="25">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>Ночная фотография</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-pie-bar" data-percent="80">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>Уличная фотография</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-pie-bar" data-percent="10">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>Макрофотография</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <?php
        include __DIR__ . '/../common/footer.php';
    ?>
    <!-- ***** Footer Area End ***** -->
</body>

</html>