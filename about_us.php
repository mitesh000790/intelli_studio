<?php
require_once __DIR__ . '/inc/header.php';
?>
<div class="container-fluid aboutus mb-6">
    <!-- top banner -->
    <div class="aboutbanner mb-5">
        <div class="container">
            <div class="p-5">
                <h2 class="text-center"><?php echo $lang["aboutus"]; ?></h2>
                
            </div>
        </div>
    </div>
    
    
    <!-- About Intelli Training Center -->
    
    
    <div class="container mb-5">
        <div class="row mb-4">
            <div class="col-md-6">
                <img src="images/aboutus/intelli_training_center_aboutus_1.jpg" class="img-fluid" alt="Intelli Training Center 才藝訓練中心">
            </div>
            <div class="col-md-6">
                <h3 class="text-center mt-4"><?php echo $lang["aboutus1_title"]; ?></h3>
                <p><?php echo $lang["aboutus1_detail"]; ?></p>

            </div>
        </div>
    
    
    
    
    <!-- Real-time assessment and feedbacks -->
    
    
   
        <div class="row mb-5">
            <div class="col-md-6 order-md-12">
                <img src="images/aboutus/intelli_training_center_aboutus_2.jpg" class="img-fluid" alt="Intelli Training Center 才藝訓練中心">
            </div>
            <div class="col-md-6 order-md-1">
                <h3 class="text-center"><?php echo $lang["aboutus2_title"]; ?></h3>
                <p><?php echo $lang["aboutus2_detail"]; ?></p>
                <div class="phonedetail mt-5">
                    <div class="pd-icon d-inline-block">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="pd-box d-inline-block">
                        <span class="pd-text"> <?php echo $lang["aboutus_need_help"]; ?></span><br/>
                        <span class="pd-number">+1 (604) 779-8829</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div>
    <img src="images/footer.png" width="100%" alt="Intelli Training Center 才藝訓練中心">
</div>

<?php
require_once __DIR__ . '/inc/footer.php';
?>