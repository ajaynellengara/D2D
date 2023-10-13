<?php include "./includes/main.php" ?>

<div id="viewport">
    <!-- <?php include "./includes/manufacturer-header.php" ?> -->

    <div id="pageWrapper">

        <!-- <section id="MainBanner">
            <div id="bannerCarousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-touch="false"
                data-bs-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <picture>
                            <source media="(min-width: 468px)" srcset="assets/images/home-bnr-1.jpg"
                                data-srcset="assets/images/home-bnr-1.jpg">
                            <img src="assets/images/home-bnr-1.jpg" data-src="assets/images/home-bnr-1.jpg" width="1920"
                                height="1080" alt="Banner Image" loading="lazy" class="lazy" />
                        </picture>
                        <div class="container">
                            <div class="content-wrapper">
                                <h1 class="mHead">Providing flexible, improved service & accelerated delivery</h1>
                                <div class="btnWrap">
                                    <a href="javascript:void(0)" class="baseBtn hoveranim">
                                        <span>CONTACT US</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section id="Welcome">
            <img src="assets/images/thumb-img.webp" data-src="assets/images/landing-bg.png" width="1920" height="920" class="lazy" alt="banner">
            <div class="container">
                <div class="cntWrap">
                    <div class="imgWrap">
                        <img src="assets/images/logo.svg" alt="logo">
                    </div>
                    <div class="btnWrap">
                        <div class="item">
                            <a href="" class="baseBtn hoveranim">
                                <span>Manufacturer & Exporter</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="" class="baseBtn baseBtn2 hoveranim">
                                <span>Manufacturer & Exporter</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bttmWrap">
                <div class="txt">Design & Code | <a href="www.squirrsoft.com">Squirrsoft.com</a></div>
            </div>
        </section>

        <!-- TOUCH_SWIPE -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"
            integrity="sha512-YYiD5ZhmJ0GCdJvx6Xe6HzHqHvMpJEPomXwPbsgcpMFPW+mQEeVBU6l9n+2Y+naq+CLbujk91vHyN18q6/RSYw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- OWL-->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
        // TOUCH_SWIPE
        $(".carousel").swipe({
            swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');
            },
            allowPageScroll: "vertical"
        })
        // OWL
        var mydir = $("html").attr("dir");
        if (mydir == 'rtl') {
            var rtlVal = true
        } else {
            var rtlVal = false
        }
        // DEMO
        $('.demo').owlCarousel({
            loop: false,
            rewind: true,
            autoplay: true,
            smartSpeed: 500,
            autoplayTimeout: 3500,
            autoplayHoverPause: true,
            responsiveClass: true,
            nav: true,
            dots: false,
            rtl: rtlVal,
            items: 1,
            margin: 2,
            responsive: {
                368: {
                    items: 2,
                    margin: 10,
                },
                768: {
                    items: 3,
                    margin: 20,
                    nav: true,
                },
                1200: {
                    items: 4,
                    margin: 30,
                },
            }
        });
        </script>

    </div>

    <?php include "./includes/manufacturer-footer.php" ?>