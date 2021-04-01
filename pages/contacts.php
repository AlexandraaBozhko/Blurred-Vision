<!-- HEAD  -->
<?php
        include __DIR__ . '/../mail.php';

        $pageTitle = 'Контакты';
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
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/bg-img/contacts.jpg);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="line"></div>
                        <h2>Запись на фотосессию</h2>
                        <p>Чтобы записаться на фотосессию, убедитесь что вы ознакомились с моими работами в галерее и Вам подходит стиль съемки и обработки фотографий (СМОТРЕТЬ ПОРТФОЛИО).
                        <br><br>
                        Вы можете заполнить форму ниже либо связаться со мной через соцсети, чтобы оговорить тему и дату съемки.
                        <br><br>
                        Пожалуйста, бронируйте время заранее, особенно если планируете съемку на выходные дни.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <section class="sonar-contact-area section-padding-100">
        
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12">
                    <div class="contact-form text-center">

                        <h2>Оформить заявку</h2>
                        <h4>Написать</h4>

                        <form method="POST">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="contact-name" placeholder="Ваше имя">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="Ваш Email">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="theme" id="contact-email" placeholder="Тема съемки">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Сообщение"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn sonar-btn" name="send">Отправить</button>
                                </div>
                            </div>
                        </form>

                        <?php 
                        if( isset( $_POST['send'] ) ){
                            $email= $_POST['contact-email'];
                            $message= $_POST['message'];
                            $name= $_POST['name'];
                            $theme= $_POST['theme'];
                            
                            $mailService = new MailService();
                            $mailService->sendEmail($email, $message, $name, $theme);
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ***** Footer Area Start ***** -->
    <?php
        include __DIR__ . '/../common/footer.php';
    ?>

</body>

</html>