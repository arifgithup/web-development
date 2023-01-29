<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <header class=" cont">
        <div class="row hadetop">
            <div class="col-sm-4">
                <?php dynamic_sidebar('topleft');?>
            </div>
            <div class="col-sm-5"></div>
            <div class="col-sm-2 text-end">
            <?php dynamic_sidebar('topright');?>
            </div>
            <div class="col-sm-1 text-end textright">
            <?php dynamic_sidebar('topright1');?>
           
            </div>
        </div>
    </header>

    <section class="cont">
        <div class="logo">
            <div class="row">
                <div class="col-sm-4">
                    <?php the_custom_logo();?>
                </div>
                <div class="col-sm-5">
                <?php dynamic_sidebar('sarc');?>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="cont manu">

                    <ul class="nav ">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">হোম</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> বৈদেশিক বিনিয়োগ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">আইন-বিধি</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">তথ্য বাতায়ন</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">সেবাকুঞ্জ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ফরমস</a>
                        </li>
                        
                </ul>
            <!-- <div class="manu navbar-expand">
                <?php
                // wp_nav_menu( array (
                   
                //     'menu_class'		=> "tm", 
                //     'theme_location'	=> "navbar-nav", 
                // ) );
                ?>

            </div> -->
        </div>
    </section>

    <div class="cont">
        <div class="row">
            <div class="col-sm-8">
                    <div class="baner1">
                    <?php dynamic_sidebar('baner');?>
                    </div>
<!-- slider start -->
                    <div class="slider">

                            <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <?php 
                            $x=0;
                            while (have_posts()){the_post();

                            $x++;
                            ?>

                            <div class="carousel-item <?= ($x==1)?'active':''?>">
                            <?php the_post_thumbnail();?>
                            <!-- <img src="..." class="d-block w-100" alt="..."> -->
                            </div>
                           <?php }?>
                        </div>
                       
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    </div>

                    <!-- slider end -->
                    <div class="list">
                    <?php dynamic_sidebar('list1');?>
                    </div>
                    <!--  -->
                    <div class="row">
                        <div class="col-sm-4"> <?php dynamic_sidebar('img1');?></div>
                        <div class="col-sm-4"> <?php dynamic_sidebar('img1');?></div>
                        <div class="col-sm-4"> <?php dynamic_sidebar('img1');?></div>
                        <div class="col-sm-4"> <?php dynamic_sidebar('img1');?></div>
                        <div class="col-sm-4"> <?php dynamic_sidebar('img1');?></div>
                        <div class="col-sm-4"> <?php dynamic_sidebar('img1');?></div>
                        <div class="col-sm-4"> <?php dynamic_sidebar('img1');?></div>
                        <div class="col-sm-4"> <?php dynamic_sidebar('img1');?></div>
                        <div class="col-sm-4"> <?php dynamic_sidebar('img1');?></div>
                        <div class="col-sm-4"> <?php dynamic_sidebar('img1');?></div>
                    </div>
                    <!--  -->


            </div>
            <div class="col-sm-4 sid">
            <?php dynamic_sidebar('img5');?>
            <?php dynamic_sidebar('img6');?>
            <?php dynamic_sidebar('img5');?>
            <?php dynamic_sidebar('img5');?>
            <?php dynamic_sidebar('img5');?>
            <?php dynamic_sidebar('img5');?>
            <?php dynamic_sidebar('img5');?>
            <?php dynamic_sidebar('img5');?>
            <h5>সকল বাতায়ন</h5>
            <!--  -->
            <?php dynamic_sidebar('sarc2');?>
            <!--  -->
            <?php dynamic_sidebar('vidoe');?>
            <?php dynamic_sidebar('vidoe');?>

            </div>
        </div>
    </div>




    <!--  -->


<?php wp_footer();?>
</body>
</html>