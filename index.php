<?php

require_once __DIR__ . '/inc/header.php';
?>

    <!-- Banner slider -->
    <div id="top-slider" class="carousel slide" data-ride="carousel" data-keyboard="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="top-slider slider-1">
                    <div class="container h-100">
                        <div class="slider-details pt-5 h-100">
                            <h1 class="slider-title "><?php echo $lang['slider1_heading'] ;?></h1>
                            <p class="banner-description text-justify mt-5 color-gray40 w-90">
                            <?php echo $lang['slider1_detail'] ;?></p>
                            <a class="slider-button mt-4 btn" href="about_us.php"><?php echo $lang['discover_more'] ;?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="top-slider slider-2">
                    <div class="container h-100">
                        <div class="slider-details pt-5 h-100">
                            <h1 class="slider-title "><?php echo $lang['slider2_heading'] ;?></h1>
                            <p class="banner-description  text-justify mt-5 color-gray40 w-90">
                            <?php echo $lang['slider2_detail'] ;?></p>
                            <a class="slider-button mt-4 btn" href="class.php"><?php echo $lang['discover_more'] ;?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="top-slider slider-3">
                    <div class="container h-100">
                        <div class="slider-details pt-5 h-100">
                            <h1 class="slider-title "><?php echo $lang['slider3_heading'] ;?></h1>
                            <p class="banner-description text-justify mt-5 color-gray40 w-90">
                            <?php echo $lang['slider3_detail'] ;?></p>
                            <a class="slider-button mt-4 btn" href="class.php"><?php echo $lang['discover_more'] ;?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#top-slider" data-slide="prev">
            <span id="top-slider-prev">&nbsp;</span>
        </a>
        <a class="carousel-control-next" href="#top-slider" data-slide="next">
            <span id="top-slider-next">&nbsp;</span>
        </a>

    </div>
    
    
    
    
    <!-- Highlights -->
    
    <div class="jumbotron highlights">
        <div class="container">
            <div class="row">
                <div class="col-sm-1 col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="d-block">
                            <img src="images/home/highlights_abc.png" border="0" alt="ACTIVE LEARNING 互動式教學"/>
                            <h6 class="mt-4 hightlights-title"><?php echo $lang['highlight1_heading'] ;?></h6>
                        </div>
                        <p class="color-gray40"><?php echo $lang['highlight1_description'] ;?></p>
                    </div>
                </div>
                <div class="col-sm-1 col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="d-block">
                            <img src="images/home/highlights_graduate.png" border="0" alt="EXPERIENCE TEACHERS 經驗豐富  師資優良"/>
                            <h6 class="mt-4 hightlights-title"><?php echo $lang['highlight2_heading'] ;?></h6>
                        </div>
                        <p class="color-gray40"><?php echo $lang['highlight2_description'] ;?></p>
                    </div>
                </div>
                <div class="col-sm-1 col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="d-block">
                            <img src="images/home/highlights_globe.png" border="0" alt="INNOVATIVE PROGRAMS 創新課程"/>
                            <h6 class="mt-4 hightlights-title"><?php echo $lang['highlight3_heading'] ;?></h6>
                        </div>
                        <p class="color-gray40"><?php echo $lang['highlight3_description'] ;?></p>
                    </div>
                </div>
                <div class="col-sm-1 col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="d-block">
                            <img src="images/home/highlights_calendar.png" border="0" alt="PROGRESSIVE PROGRAMS AVAILABLE 漸進式課程"/>
                            <h6 class="mt-4 hightlights-title"><?php echo $lang['highlight4_heading'] ;?></h6>
                        </div>
                        <p class="color-gray40"><?php echo $lang['highlight4_description'] ;?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    <!-- About Training Center -->
    
    <div class="jumbotron about-training-center bg-white py-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/home/intelli_training_center_about_us.png" class="img-fluid m-auto d-block" alt="About Intelli Training Center 才藝訓練中心">
                </div>
                <div class="col-lg-6 mt-3 d-block">
                    <h3 class="title text-center"><?php echo $lang['home_about_heading'] ;?></h3>
                    <div class="leaf-border text-center"><img src="images/home/home_leaf.png" alt="Intelli Training Center 才藝訓練中心"/></div>
                    <div class="text-justify mt-3 mb-3 color-gray40"><?php echo $lang['home_about_detail'] ;?>
                    </div>
                    <div class="mb-3">
                        <ul id="about-training-center-list">
                            <li><?php echo $lang["home_about_points"][0]; ?></li>
                            <li><?php echo $lang["home_about_points"][1];?></li>
                            <li><?php echo $lang["home_about_points"][2]; ?></li>
                        </ul>
                    </div>
                    <a class="btn mt-2 read_more" href="about_us.php"><?php echo $lang['read_more'] ;?></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
   
    
    <!-- Our classes -->
<?php
require __DIR__ . '/inc/home_classes.php';
?>


    <!-- Counter -->
    
    
    <div class="jumbotron counter">
        <div class="container">
            <div class="row">
                <div class="col-sm-1 col-md-6 col-lg-3 mb-3">
                    <div class="d-table m-auto">
                        <div class="dashed_blue_border counter-circle">
                            <h2 class="mt-2 align-bottom counter-label" data-count="90"><span>0</span><span>%</span>
                            </h2>
                            <h6 class="mt-2 text-uppercase"><?php echo $lang['counter1'] ;?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1 col-md-6 col-lg-3 mb-3">
                    <div class="d-table m-auto">
                        <div class="dashed_blue_border counter-circle">
                            <h2 class="mt-2 align-bottom counter-label" data-count="20"><span>0</span></h2>
                            <h6 class="mt-2 text-uppercase"><?php echo $lang['counter2'] ;?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1 col-md-6 col-lg-3 mb-3">
                    <div class="d-table m-auto">
                        <div class="dashed_blue_border counter-circle">
                            <h2 class="mt-2 align-bottom counter-label" data-count="100"><span>0</span><span>%</span>
                            </h2>
                            <h6 class="mt-2 text-uppercase"><?php echo $lang['counter3'] ;?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1 col-md-6 col-lg-3 mb-3">
                    <div class="d-table m-auto">
                        <div class="dashed_blue_border counter-circle">
                            <h2 class="mt-2 align-bottom counter-label" data-count="20"><span>0</span></h2>
                            <h6 class="mt-2 text-uppercase"><?php echo $lang['counter4'] ;?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="images/home/home_percentage_cloud.png" class="belowcounter img-fluid" alt="About Intelli Training Center 才藝訓練中心">



    <!-- Special Programs -->
    
    <div class="container">
        <div class="text-center mt-5">
            <h3 class="title"><?php echo $lang['special_program_heading'] ;?></h3>
            <div class="leaf-border mb-3"><img src="images/home/home_leaf.png" alt="About Intelli Training Center 才藝訓練中心"/></div>
        </div>
        <div class="activities">
            <div class="row mb-4">
                <div class="col-lg-5 col-md-12">
                    <div class="card activitycard activity1">
                        <div class="card-body text-left w-70">
                            <a href="class.php">
                            <h3 class="text-uppercase title"><?php echo $lang['special_program1'] ;?></h3>
                            <p><?php echo $lang['special_program1_detail'] ;?></p>
                            </a>
                            <a href="class.php" class="color-blue font-weight-normal"><?php echo $lang['load_more'] ;?> <i
                                        class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5  offset-lg-2 col-md-12">
                    <div class="card activitycard activity2 clearfix ">
                        <div class="card-body text-left">

                            <div class="w-30 float-left">&nbsp;</div>
                            <div class=" w-70 float-right">
                                <a href="class.php">

                                <h3 class="text-uppercase title"><?php echo $lang['special_program2'] ;?></h3>
                                <p><?php echo $lang['special_program2_detail'] ;?></p>
                                </a>
                                <a href="class.php" class="color-yellow font-weight-normal"><?php echo $lang['load_more'] ;?> <i
                                            class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-5 col-md-12">
                    <div class="card activitycard activity3">
                        <div class="card-body text-left w-70">
                            <a href="class.php">

                            <h3 class="text-uppercase title"><?php echo $lang['special_program3'] ;?></h3>
                            <p><?php echo $lang['special_program3_detail'] ;?></p>
                            </a>
                            <a href="class.php" class="color-green font-weight-normal"><?php echo $lang['load_more'] ;?> <i
                                        class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5  offset-lg-2 col-md-12">
                    <div class="card activitycard activity4 clearfix">
                        <div class="card-body text-left">
                            <div class="w-30 float-left">&nbsp;</div>
                            <div class=" w-70 float-right">
                                <a href="class.php">

                                <h3 class="text-uppercase title"><?php echo $lang['special_program4'] ;?></h3>
                                <p><?php echo $lang['special_program4_detail'] ;?></p>
                                </a>
                                <a href="class.php" class="color-pink font-weight-normal"><?php echo $lang['load_more'] ;?> <i
                                            class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boyonactivity">
                <img src="images/home/intelli_training_center_special_program.png" class="img-fluid p-2 w-100 h-100 rounded-circle" alt="Intelli Training Center Special Program 才藝訓練中心">
            </div>
        </div>
    </div>
    
    
    <!-- Why Choose Us -->
    
    <div class="container-fluid why-us">
        <div class="container text-center">
            <h3 class="title"><?php echo $lang['whychoose_heading'] ;?></h3>
            <div class="leaf-border mb-3"><img src="images/home/home_leaf.png" alt="About Intelli Training Center 才藝訓練中心"/></div>
        </div>
        <img src="images/home/home_feature_dotted_line.png" class="img74" alt="About Intelli Training Center 才藝訓練中心">
        <div class="container" style="margin-bottom: -150px;">
            <div class="row why-us-image">
                <div class="col-lg-3 col-md-6 whyus1">
                    <div class="icon-box">
                            <img src="images/home/intelli_training_center_feature_1.png" class="img-fluid d-block m-auto" alt="Experienced Teachers 經驗豐富師資優良">
                        <div class="content">
                            <h3 class="text-center">
                                <p class="text-uppercase title"><?php echo $lang['whychoose1'] ;?></p>
                            </h3>
                            <p class="text-center"><?php echo $lang['whychoose1_detail'] ;?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whyus2">
                    <div class="icon-box">
                            <img src="images/home/intelli_training_center_feature_2.png" class="img-fluid d-block m-auto" alt="Progressive Learning Module 漸進式的學習模式">
                        <div class="content">
                            <h3 class="text-center">
                                <p class="text-uppercase title"><?php echo $lang['whychoose2'] ;?></p>
                            </h3>
                            <p class="text-center"><?php echo $lang['whychoose2_detail'] ;?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whyus3">
                    <div class="icon-box">
                            <img src="images/home/intelli_training_center_feature_3.png" class="img-fluid d-block m-auto" alt="Array of Programs Available 一系列課程可供選擇">
                        <div class="content">
                            <h3 class="text-center">
                                <p class="text-uppercase title"><?php echo $lang['whychoose3'] ;?></p>
                            </h3>
                            <p class="text-center"><?php echo $lang['whychoose3_detail'] ;?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whyus4">
                    <div class="icon-box">
                            <img src="images/home/intelli_training_center_feature_4.png" class="img-fluid d-block m-auto"  alt="Proven Track Record 培訓實力">
                        <div class="content">
                            <h3 class="text-center">
                                <p class="text-uppercase title"><?php echo $lang['whychoose4'] ;?></p>
                            </h3>
                            <p class="text-center"><?php echo $lang['whychoose4_detail'] ;?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Above Footer -->
    <img src="images/home/home_contact_cloud.png" alt="About Intelli Training Center 才藝訓練中心" class="img-fluid bg-Summersky"/>
    
    
    <!-- home contactus -->
    
    <div class="container-fluid bg-Summersky">
        <div class="home_contactus">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <h3 class="color-Prussianblue"><?php echo $lang['home_contactus'] ;?></h3>
                        <div class="home-contact">
                                <span class="mr-2 d-inline-block">
                                    <i class="far fa-envelope color-pink"></i>
                                </span>
                            <span class=" d-inline-block">
                                    <a href="#">brenda@intellistudio.ca</a>
                                </span>
                        </div>
                        <div class="home-contact">
                                <span class="mr-2 d-inline-block">
                                    <i class="fas fa-fax color-pink"></i>
                                </span>
                            <span class=" d-inline-block color-gray40">
                        604-779-8829
                                </span>
                        </div>
                        <div class="home-contact d-flex">
                        <span class="mr-2 d-inline-block">
                                    <i class="fas fa-map-marker-alt color-pink"></i>
                                </span>
                            <p class="d-inline-block color-gray40">200-6751 Westminster Hwy, Richmond, BC, Canada, V7C
                                4V4</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once __DIR__ . '/inc/footer.php';
?>