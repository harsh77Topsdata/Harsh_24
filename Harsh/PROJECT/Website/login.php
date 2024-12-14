<?php

include_once('header.php');

?>

<!DOCTYPE html>
<html>

<body>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" data-background="assets/img/hero/hero2.png">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h1>Login</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8">
                        <form enctype="multipart/form-data" class="form-contact contact_form" action="" method="post">
                            <div class="row">


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <br>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="password" id="password" type="text"
                                            placeholder="Enter your password">
                                    </div>
                                </div>
                                <br>


                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="submit"
                                    class="button button-contactForm boxed-btn">Login</button>
                                <br>

                                <a href="signup" class="ms-5 text-primary">If you not Regisrtered then signup
                                    Here</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- Contact Area End -->
        <?php


        include_once('footer.php');
        ?>
    </main>
</body>

</html>