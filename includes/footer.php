<?php include_once "db.php"; ?>
    <!-- footer-area-start -->
    <footer>
        <div class="footer-area footer-white pt-95 pb-70" style="background-image:url(img/bg/6.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/logo/white.png" alt=""></a>
                            </div>
                            <div class="footer-text">
                                <h3>For any additional inquiries please feel free to send us an e-mail or call</h3>
                                <p><a href="mailto:isthihar75@gmail.com" </a>isthihar75@gmail.com</p>
                                <span>(+94)77 748 8880</span>
                            </div>
                            <div class="footer-icon">
                                <a target=" " href="https://web.facebook.com/isthiharimadudeenOfficial"><i class="fab fa-facebook-f"></i></a>
                                <a target=" " href="https://twitter.com/isthiharimadud1"><i class="fab fa-twitter"></i></a>
                                <a target=" " href="https://www.youtube.com/channel/UCyDArnae-LDWf2Ip_WiFbVQ/"><i class="fab fa-youtube"></i></a>
                                <a target=" " href="https://www.instagram.com/isthiharimadudeen/"><i class="fab fa-instagram"></i></a>
                                <!-- <a target=" " href="#"><i class="fab fa-dribbble"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Recent News</h3>
                            <ul class="footer-news">

                <?php
    $query = "SELECT * FROM news WHERE news_status = 'Active' ORDER BY news_id DESC LIMIT 3";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_array($result)):
                ?>

                                <li>
                                  
                                    <div class="footer-news-text">
                                        <h4><a href="#"><?php echo $row['news_title']; ?></a></h4>
                                        <span><?php echo $row['news_date']; ?></span>
                                    </div>
                                </li>
                <?php endwhile; ?>
         
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Newsletters</h3>
                            <div class="footer-content">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                            </div>
                            <div class="subscribes-form">
                                <form action="#">
                                    <input placeholder="Enter your email" type="email">
                                    <button class="btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area footer-bottom-white blue3-bg pt-25 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="copyright">
                            <p><i class="far fa-copyright"></i> 2020 Isthihar Imadudeen. All Rights Reserved. </br> <a target=" " href="http://www.ajsolutions.lk/">Designed By AJ Solutions.</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
    
    <!-- JS here -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
