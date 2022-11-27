<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href=" <?= get_template_directory_uri()?>./asetess/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>"> -->
    <?php wp_head();?>
    
    <title>Document</title>
</head>
<body>
    <div class="cont">
        <div class="row hader">
            <div class="col-lg-6">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-3 hadre2 d-flex">
                
            </div>
            <div class="col-lg-3 hadre2 d-flex">
                <p>৫ অগ্রহায়ণ, ১৪২৯</p>
                <a href="#">English</a>
            </div>
        </div>
    </div>
    <div class="cont">
        <div class="row">
            <div class="col-lg-5 logo">
                <a
                
                 href="#"><?php the_custom_logo();?>
                 <!-- <img src="<?= get_template_directory_uri()?>./asetess/image/hader/logo_bn.png" alt="logo"> -->
                
                </a>
            </div>
            <div class="col-lg-5 serch">
                <input type="text" placeholder="খুঁজুন ">
                <button>অনুসন্ধান </button>
            </div>
            <div class="col-lg-2">
                <div class="row">
                    <div class="col-lg-4 img-laft">
                        <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/hader/a2i-logo-footer.png" alt=""></a>
                    </div>
                    <div class="col-lg-8 img-right">
                        <p class="m-0">সাথে থাকুন:</p>
                        <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/hader/facebook-icon.png" alt=""></a>
                        <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/hader/twitter-blue-icon.png" alt=""></a>
                        <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/hader/gplus-icon.png" alt=""></a>
                        <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/hader/youtube-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hader part end -->
    <div class="cont">
        <div class="manu ">
            <ul class="d-flex list-inline">
                <li> <a href="#">হোম</a></li>
                <li> <a href="#">বাংলাদেশ সম্পর্কিত</a></li>
                <li> <a href="#">ই-সেবাসমূহ</a></li>
                <li> <a href="#">সেবাখাত</a></li>
                <li> <a href="#">ব্যবসা-বাণিজ্য</a></li>
                <li> <a href="#"> বৈদেশিক বিনিয়োগ</a></li>
                <li> <a href="#">আইন-বিধি</a></li>
                <li> <a href="#">তথ্য বাতায়ন</a></li>
                <li> <a href="#">সেবাকুঞ্জ</a></li>
                <li> <a href="#">ফরমস</a></li>
                
            </ul>
        </div>
    </div>
    <!-- manu end -->
    <div class="cont">
        <div class="row">
            <div class="col-lg-8 m-0">
                <div class="hero">
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/slider/padmabanner.jpg" alt=""></a>
                </div>
                <div class="slaider">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="<?= get_template_directory_uri()?>./asetess/image/slider/4-02.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="<?= get_template_directory_uri()?>./asetess/image/slider/6.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="<?= get_template_directory_uri()?>./asetess/image/slider/corona_banner.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        
                      </div>
                </div>

                <div class="drobdowen">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">দপ্তর ভিত্তিক সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">সকল ই-সেবা</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active d-flex " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/df/1 (1).png" alt=""> <br><p>কৃষি</p></a>
                           
                            <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/df/1 (2).png" alt=""><br><p>কল সেন্টার</p></a>
                            
                            <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/df/1 (3).png" alt=""><br><p>মৎস্য ও প্রাণী</p></a>
                            
                            <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/df/1 (4).png" alt=""><br><p>হেল্পডেস্ক</p></a>
                           
  
                            
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                      </div>
                </div>
                <div class="listt">
                    <h4>উদ্যোগ</h4>
                    <a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০) (১৩-০৬-২০১৬)</a>
                    <a href="#">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা। (১১-০৪-২০১৫)</a>
                    <a href="#">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা। (০৭-০৪-২০১৫)</a>
                    <a href="#">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা (২০১০-২০২১)। (০৭-০৪-২০১৫)</a>
                    <a href="#">দূর্যোগ ব্যবস্থাপনা জন্য জাতীয় পরিকল্পনা ২০১০-২০১৫। (০৭-০৪-২০১৫)</a>
                </div>
                <div class="but">
                    <button>সকল</button>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?= get_template_directory_uri()?>./asetess/image/photo baton/forms_portal_logo (1).png" alt="">
                        <img src="<?= get_template_directory_uri()?>./asetess/image/photo baton/forms_portal_logo (1).png" alt="">
                        <img src="<?= get_template_directory_uri()?>./asetess/image/photo baton/forms_portal_logo (1).png" alt="">
                        <img src="<?= get_template_directory_uri()?>./asetess/image/photo baton/forms_portal_logo (1).png" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="<?= get_template_directory_uri()?>./asetess/image/photo baton/forms_portal_logo (1).png" alt="">
                        <img src="<?= get_template_directory_uri()?>./asetess/image/photo baton/forms_portal_logo (1).png" alt="">
                        <img src="<?= get_template_directory_uri()?>./asetess/image/photo baton/forms_portal_logo (1).png" alt="">
                        
                    </div>
                    <div class="col-lg-4">
                        <img src="<?= get_template_directory_uri()?>./asetess/image/photo baton/forms_portal_logo (1).png" alt="">
                        <img src="<?= get_template_directory_uri()?>./asetess/image/photo baton/forms_portal_logo (1).png" alt="">
                        <img src="<?= get_template_directory_uri()?>./asetess/image/photo baton/forms_portal_logo (1).png" alt="">
                        
                    </div>
                </div>
                <div class="video">
                    <div class="vidoe-top">
                        <p>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</p>
                    <iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="217" height="150" src="https://www.youtube.com/embed/z6llDxY5JFs" title="আশ্রয়ণের  অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="217" height="150" src="https://www.youtube.com/embed/MvTLqrU9ZbQ" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </div>
            </div>


            <div class="col-lg-4">
                <div class="sidbar">
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/bangladesh-portal--batton-bangla.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/Jonotar-Sorkar-banner-Bangl (1).jpg" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/mygov_bn.jpg" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/discount_bn.jpg" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/Bangladesh-Directory.jpg" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/Tamplate_Apps_bn (5).png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/Tamplate_guard_bn.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/prottyon.jpg" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/Tamplate_policy_bn.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/Tamplate_Apps_bn (5).png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/Tamplate_fund_bn.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/Tamplate_Dictonary_bn.png" alt=""></a>
                </div>
                <p class="sidbar-pra">সকল বাতায়ন</p>

                <select class="select1">
                    <option value="">home</option>
                    <option value="">home</option>
                    <option value="">home</option>
                    <option value="">home</option>
                    <option value="">home</option>
                </select>
                <button>home</button>
                <div class="mujib">
                    <p>মুজিব১০০ আ্যাপ</p>
                <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="mask">
                    <p>মাস্ক পরুন সেবা নিন</p>
                    <img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/mask-bd-portal (1).jpg" alt="">
                </div>
                <div class="dangu">
                    <p>ডেঙ্গু প্রতিরোধে করণীয়</p>
                    <img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/dengu.jpg" alt="">
                </div>
                <div class="digital">
                    <p>ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর</p>
                    <iframe width="315" height="220" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="মাননীয় প্রধানমন্ত্রী জননেত্রী শেখ হাসিনার নেতৃত্বে ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর।" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <div class="rupmoy">
                    <p>রূপময় বাংলাদেশ</p>
                    <iframe width="315" height="220" src="https://www.youtube.com/embed/QNUSIOMb6vI" title="Beautiful Bangladesh - Land Of Stories" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <div class="sidbar">
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/budget_bn_new.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/stock_bangla.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/currency_bangla (1).png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./asetess/image/sidbar/weather_bn.png" alt=""></a>
                    
                </div>
            </div>
         </div>
    </div>
    <!--  -->
    <footer>
        <div class="cont">
            <div class="footer-top">
                <img src="<?= get_template_directory_uri()?>./asetess/image/footer/download.png" alt="">
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="footer-manu  ">
                        <ul class="list-inline d-flex">
                            <li><a href="#">গোপনীয়তার নীতিমালা</a></li>
                            <li><a href="#">ব্যবহারের শর্তাবলি</a></li>
                            <li><a href="#">সার্বিক সহযোগিতায়</a></li>
                            <li><a href="#">সাইট ম্যাপ</a></li>
                            <li><a href="#">সচরাচর জিজ্ঞাসা</a></li>
                        </ul>
                        <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    
                    <div class="row">
                        <div class="col-lg-4 footer-right1">
                            <p>পরিকল্পনা ও বাস্তবায়নে: </p>
                        </div>
                        <div class="col-lg-8 footer-right2">
                            <ul class="list-inline d-flex">
                                <li><a href="#"> এটুআই,</a></li>
                                <li><a href="#">মন্ত্রিপরিষদ বিভাগ,</a></li>
                                <li><a href="#">বিসিসি,</a></li>
                                <li><a href="#">বেসিস,</a></li>
                                <li><a href="#">ডিওআইসিটি</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 footer-butem">
                            <p>কারিগরি সহায়তায়: </p>
                        </div>
                        <div class="col-lg-9 footer-butem1">
                            <img src="<?= get_template_directory_uri()?>./asetess/image/footer/np-logo-set.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <?php wp_footer(); ?>
    <!-- <script src="<?= get_template_directory_uri()?>./asetess/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>