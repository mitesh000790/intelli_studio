<?php

require_once __DIR__ . '/inc/header.php';
?>

<div class="container-fluid contactus mb-6">
    <!-- top banner -->
    <div class="contactbanner mb-5">
        <div class="container">
            <div class="p-5">
                <h2 class="text-center"><?php echo $lang["contactus"]; ?></h2>
            </div>
        </div>
    </div>
    
    <!-- below banner -->
    <div class="container mb-5-rem" id="contact_us_container">
        <div class="row">
            <div class="col-md-6">
                <h3><?php echo $lang["contactus_title"]; ?></h3>
                <p><?php echo $lang["contactus_intro"]; ?></p>
                <div class="contact d-flex">
                    <span class="mr-2 d-inline-block">
                        <i class="far fa-envelope color-pink"></i>
                    </span>
                    <p class="d-inline-block">
                        <a href="mailto:brenda@intellistudio.ca">brenda@intellistudio.ca</a>
                    </p>
                </div>
                <div class="contact d-flex">
                    <span class="mr-2 d-inline-block">
                        <i class="fas fa-fax color-pink"></i>
                    </span>
                    <p class="d-inline-block color-GovernorBay">
                        +1 (604) 779-8829
                    </p>
                </div>
                <div class="contact d-flex">
                    <span class="mr-2 d-inline-block">
                        <i class="fas fa-map-marker-alt color-pink"></i>
                    </span>
                    <p class="d-inline-block color-GovernorBay">
                        200-3071 No.5 Road, Richmond, BC, Canada, V6X 2T4
                    </p>
                </div>
                <div class="contact d-flex">
                    <span class="mr-2 d-inline-block">
                        <i class="fab fa-facebook-f color-pink"></i>
                    </span>
                    <p class="d-inline-block color-GovernorBay">
                       <a href="https://www.facebook.com/intellitrainingcenter"><?php echo $lang["contactus_follow"]; ?></a>
                    </p>
                </div>

            </div>
            <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2608.5708019846825!2d-123.15585118480998!3d49.17075437931938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54860ad1d2ad3753%3A0xb883b79b392c3529!2sIntelli%20Group!5e0!3m2!1sen!2sin!4v1566553570080!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>            </div>
        </div>
    </div>
</div>

<div id="contact_us_footer_banner">
    <img src="images/footer.png" width="100%" alt="Intelli Training Center 才藝訓練中心">
</div>



<?php
require_once __DIR__ . '/inc/footer.php';
?>
