<?php
require_once __DIR__ . '/inc/header.php';
?>
<div class="container-fluid contactus mb-6">
    <!-- top banner -->
    <div class="contactbanner mb-5">
        <div class="container">
            <div class="p-5">
                <h2 class="text-center"><?php echo $lang["classes_n_programs"]; ?></h2>
            </div>
        </div>
    </div>

    <!-- below banner -->

    <div class="container" >
         <div class="classes-tab mb-5-rem" id="myBtnContainer">
            <ul class="nav nav-pills justify-content-center mb-3">
                <li class="nav-item mr-2">
                    <a class="link active" onclick="filterSelection('all')"><?php echo $lang["classes_category"]["all"]; ?></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="link" onclick="filterSelection('study_classes')"><?php echo $lang["classes_category"]["study_classes"]; ?></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="link" onclick="filterSelection('elite')"><?php echo $lang["classes_category"]["elite_classes"]; ?></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="link" onclick="filterSelection('special')"><?php echo $lang["classes_category"]["special_programs"]; ?></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="link" onclick="filterSelection('4to5')"><?php echo $lang["classes_category"]["age_4_5"]; ?></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="link" onclick="filterSelection('6to7')"><?php echo $lang["classes_category"]["age_6_7"]; ?></a>
                </li>
                <li class="nav-item">
                    <a class="link" onclick="filterSelection('8to13')"><?php echo $lang["classes_category"]["age_8_13"]; ?></a>
                </li>
            </ul>
         </div>
        <div class="row classes-list" id="fade-container">

            <!-- Study Classes -->
            
             <div class="col-sm-1 col-md-6 col-lg-4 card-outer column study_classes 4to5 content">
                    <div class="card h-100">
                        <div class="d-inline-block overflow-hidden">
                            <img src="images/classes/intelli_kids_class_preschool.jpg" class="card-img-top"
                                 alt="<?php echo $lang["preschool_learning_program"]["title"]; ?>">
                        </div>
                        <div class="card-body pt-5 position-relative">
                            <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["preschool_learning_program"]["title"]; ?></h6>
                            <p class="card-text color-gray40"><?php echo $lang["preschool_learning_program"]["description"]; ?></p>
                        </div>
                    </div>
             </div>
             
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column study_classes 6to7 8to13 content">
                    <div class="card h-100">
                        <div class="d-inline-block overflow-hidden">
                            <img src="images/classes/intelli_kids_class_study.jpg" class="card-img-top"
                                 alt="<?php echo $lang["study_class"]["title"]; ?>">
                        </div>
                        <div class="card-body pt-5 position-relative">
                            <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["study_class"]["title"]; ?></h6>
                            <p class="card-text color-gray40"><?php echo $lang["study_class"]["description"]; ?></p>
                        </div>
                    </div>
                </div>
                
                
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column study_classes 6to7 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_social_network.jpg" class="card-img-top"
                             alt="<?php echo $lang["intelli_social_network_club"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["intelli_social_network_club"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["intelli_social_network_club"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            
            
            <!-- Elite Classes -->
            
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column elite 6to7 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_math.jpg" class="card-img-top"
                             alt="<?php echo $lang["singapore_math"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["singapore_math"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["singapore_math"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <!--  -->
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column elite 6to7 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_100.jpg" class="card-img-top"
                             alt="<?php echo $lang["100_series"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["100_series"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["100_series"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column elite 6to7 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_oxford.jpg" class="card-img-top"
                             alt="<?php echo $lang["oxford_reading_tree"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["oxford_reading_tree"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["oxford_reading_tree"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column elite 6to7 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_jump.jpg" class="card-img-top"
                             alt="<?php echo $lang["jump_series"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["jump_series"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["jump_series"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column elite 6to7 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_summerclass.jpg" class="card-img-top"
                             alt="<?php echo $lang["summer_get_set_go"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["summer_get_set_go"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["summer_get_set_go"]["description"]; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column elite 6to7 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_chinese.jpg" class="card-img-top" alt="<?php echo $lang["chinese_classes"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["chinese_classes"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["chinese_classes"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column elite 6to7 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_reading.jpg" class="card-img-top"
                             alt="<?php echo $lang["reading_genius"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["reading_genius"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["reading_genius"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column elite 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_computer.jpg" class="card-img-top"
                             alt="<?php echo $lang["computer_explorer"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["computer_explorer"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["computer_explorer"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column elite 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_canada.jpg" class="card-img-top"
                             alt="<?php echo $lang["canadian_101"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["canadian_101"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["canadian_101"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column elite 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_world.jpg" class="card-img-top"
                             alt="<?php echo $lang["wow_in_the_world"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["wow_in_the_world"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["wow_in_the_world"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column elite 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_typing.jpg" class="card-img-top"
                             alt="<?php echo $lang["typing_guru"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["typing_guru"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["typing_guru"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            
            <!-- Special Programs -->
            
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column special 6to7 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_arts.jpg" class="card-img-top"
                             alt="<?php echo $lang["creative_kids"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["creative_kids"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["creative_kids"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column special 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_stem.jpg" class="card-img-top"
                             alt="<?php echo $lang["stem"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["stem"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["stem"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column special 6to7 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_lego.jpg" class="card-img-top"
                             alt="<?php echo $lang["lego_program"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["lego_program"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["lego_program"]["description"]; ?> </p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column special 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_fieldtrip.jpg" class="card-img-top"
                             alt="<?php echo $lang["summer_field_trip"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["summer_field_trip"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["summer_field_trip"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column special 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_cooking.jpg" class="card-img-top"
                             alt="<?php echo $lang["junior_chef"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["junior_chef"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["junior_chef"]["description"]; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-1 col-md-6 col-lg-4 card-outer column special 6to7 8to13 content">
                <div class="card h-100">
                    <div class="d-inline-block overflow-hidden">
                        <img src="images/classes/intelli_kids_class_speakup.jpg" class="card-img-top"
                             alt="<?php echo $lang["summer_speak_up_class"]["title"]; ?>">
                    </div>
                    <div class="card-body pt-5 position-relative">
                        <h6 class="card-title text-uppercase color-Prussianblue text-center"><?php echo $lang["summer_speak_up_class"]["title"]; ?></h6>
                        <p class="card-text color-gray40"><?php echo $lang["summer_speak_up_class"]["description"]; ?></p>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<div>
    <img src="images/footer.png" width="100%">
</div>

<script>
    filterSelection("all")
    function filterSelection(c) {
        shuffleDiv();
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            x[i].classList.remove('show');
        }
        setTimeout(function () {
            for (i = 0; i < x.length; i++) {
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        },100);
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }
    
    function shuffleDiv() {
        var parent = $("#fade-container");
        var divs = parent.children();
        while (divs.length) {
            parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
        }
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("link");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            // var element = document.getElementById("active");
            //element.classList.remove("active");
            var current = document.getElementsByClassName('link active')[0];
            current.classList.remove("active");
            //alert(current.className);
            this.classList.add("active");

            //  current.classList.remove("active");
           // current[0].className = current[0].className.replace(" active", "");
        });
    }

</script>
<?php
require_once __DIR__ . '/inc/footer.php';
?>
