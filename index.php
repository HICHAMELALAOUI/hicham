<?php
session_start();
   $_SESSION['lang'] = "en";
    include "config.php";
?>
<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img/favicon.ico?v=5">
    <title>PORTFOLIO</title>

    <!-- Global stylesheets -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="css/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <?php
      if($_SESSION['lang'] == "en"){
?><a href="index.php?lang=fr"><img src="img/fr.png"></a><?php
      }else if($_SESSION['lang'] = "fr"){
?><a href="index.php?lang=en"><img src="img/en.png"></a><?php
      }

      ?>
      
      
      <a href="index.php?lang=en"><img src="img/en2.png"></a>

<a href="index.php?lang=en"><img src="img/fr2.png"></a>
<a href="index.php?lang=en"><img src="img/en4.png"></a>
<a href="index.php?lang=en"><img src="img/france.png"></a>
<a href="index.php?lang=en"><img src="img/uk.png"></a>
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none  mx-0 px-0"><img src="img/logo-white.png" alt="" class="img-fluid"></span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about"><?php echo $lang['about'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experiences">Experiences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#skills"><?php echo $lang['skills'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

    <!--====================================================
                        ABOUT
    ======================================================-->
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
          <div class="my-auto white" >
             <div class="subheading mb-0"> Hicham ELALAOUI</div>
              <h2 class="mb-5 white"><?php echo $lang['profile'] ?>
              </h2>
              <!--div class="typewrite subheading mb-5" data-period="2000" data-type='[ "Hi, Im Si.", "DÉVELOPPEUR INFORMATIQUE INDÉPENDANT", "I Love Design.", "I Love to Develop." ]'></div-->
              
              <p class="mb-5" style="margin:0 auto; max-width: 600px;" ><?php echo $lang['presentation'] ?></p>
              <ul class="list-inline list-social-icons mb-0">
                  <li class="list-inline-item">
                      <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                   </a>
                  </li>
                  <li class="list-inline-item">
                      <a href="https://join.skype.com/invite/fMLYBLbYd52X">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-skype fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                  </li>
                   <li class="list-inline-item">
                      <a href="">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                  </li>
                   <li class="list-inline-item">
                      <a href="">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                  </li>
                   <li class="list-inline-item">
                      <a href="">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                  </li>
                  <li class="list-inline-item">
                      <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                  </li>
                  <li class="list-inline-item">
                      <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                  </li>
              </ul>
          </div>
      </section>

    <!--====================================================
                        EXPERIENCE
    ======================================================-->      
      <section class="resume-section p-3 p-lg-5 " id="experiences">
          <div class="row my-auto">
              <div class="col-12">
                <h2 class="  text-center">Experiences</h2>
                <div class="mb-5 heading-border"></div>
              </div>
              <div class="resume-item col-md-6 col-sm-12 " > 
                <div class="card mx-0 p-4 mb-5" style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                  <div class=" resume-content mr-auto">
                      <h4 class="mb-3"><i class="fa fa-globe mr-3 text-info"></i><?php echo $lang['dv'] ?></h4>
                      <p><?php echo $lang['dvdescription'] ?></p>
                  </div>
                  <div class="resume-date text-md-right">
                      <span class="text-primary"><?php echo $lang['october'] ?> 2019 - Present</span>
                  </div>
                </div>  
              </div>
              <div class="resume-item col-md-6 col-sm-12">
                <div class="card mx-0 p-4 mb-5" style="border-color: #ffc107; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                  <div class="resume-content mr-auto">
                      <h4 class="mb-3"><i class="fa fa-laptop mr-3 text-warning"></i><?php echo $lang['eclipse'] ?></h4>
                      <p><?php echo $lang['eclipsedescription'] ?></p>
                  </div>
                  <div class="resume-date text-md-right">
                      <span class="text-primary"><?php echo $lang['february'] ?> 2018 - <?php echo $lang['june'] ?> 2018</span>
                  </div>
                </div>  
              </div>
              <div class="resume-item col-md-6 col-sm-12">
                <div class="card mx-0 p-4 mb-5" style="border-color: #28a745; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                  <div class="resume-content mr-auto">
                      <h4 class="mb-3"><i class="fa fa-camera mr-3 text-success"></i><?php echo $lang['leoni'] ?></h4>
                      <p><?php echo $lang['leonidescription'] ?></p>
                  </div>
                  <div class="resume-date text-md-right">
                      <span class="text-primary"><?php echo $lang['may'] ?> 2016 - <?php echo $lang['july'] ?> 2016</span>
                  </div>
                </div>  
              </div>
              <div class="resume-item col-md-6 col-sm-12">
                <div class="card mx-0 p-4 mb-5" style="border-color: #1a1b36; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                  <div class="resume-content mr-auto">
                      <h4 class="mb-3"><i class="fa fa-area-chart mr-3 text-primary"></i><?php echo $lang['trainer'] ?></h4>
                      <p><?php echo $lang['trainerdescription'] ?></p>
                  </div>
                  <div class="resume-date text-md-right">
                      <span class="text-primary"><?php echo $lang['january'] ?> 2016 - <?php echo $lang['april'] ?> 2016</span>
                  </div>
                </div>  
              </div>
          </div>
      </section>

    <!--====================================================
                        PORTFOLIO
    ======================================================-->      
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="portfolio"> 
          <div class="row my-auto">
              <div class="col-12">
                <h2 class="  text-center">Portfolio</h2>
                <div class="mb-5 heading-border"></div>
              </div>
              <div class="col-md-12">
                <div class="port-head-cont">
                  <button class="btn btn-general btn-green filter-b" data-filter="all">All</button>
                  <button class="btn btn-general btn-green filter-b" data-filter="consulting">Websites</button>
                  <button class="btn btn-general btn-green filter-b" data-filter="finance">Landing Pages</button>
                  <button class="btn btn-general btn-green filter-b" data-filter="marketing">E-commerce</button> 
                </div>
              </div>
          </div>
          <div class="row my-auto">
              <div class="col-sm-4 portfolio-item filter finance">
                  <a class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
                      <div class="my-custom-scrollbar my-custom-scrollbar-primary">
                        <img class="img-fluid" src="img/portfolio/p-4.jpg">
                      </div>
                  </a>
              </div>
              <div class="col-sm-4 portfolio-item filter marketing">
                  <a class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
                      <div class="my-custom-scrollbar my-custom-scrollbar-primary">
                        <img class="img-fluid" src="img/portfolio/p-5.jpg">
                      </div>
                  </a>
              </div>
              <div class="col-sm-4 portfolio-item filter consulting">
                  <a class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
                      <div class="my-custom-scrollbar my-custom-scrollbar-primary">
                        <img class="img-fluid" src="img/portfolio/p-6.jpg">
                      </div>
                  </a>
              </div>              
              <div class="col-sm-4 portfolio-item filter consulting">
                  <a class="portfolio-link" href="#portfolioModal7" data-toggle="modal">
                      <div class="my-custom-scrollbar my-custom-scrollbar-primary">
                        <img class="img-fluid" src="img/portfolio/p-7.jpg">
                      </div>
                  </a>
              </div>
              <div class="col-sm-4 portfolio-item filter consulting">
                  <a class="portfolio-link" href="#portfolioModal8" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/portfolio/p-8.jpg" alt="">
                  </a>
              </div>
              <div class="col-sm-4 portfolio-item filter finance">
                  <a class="portfolio-link" href="#portfolioModal9" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/portfolio/p-9.jpg" alt="">
                  </a>
              </div>              
              <div class="col-sm-4 portfolio-item filter marketing">
                  <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/portfolio/p-1.jpg" alt="">
                  </a>
              </div>
              <div class="col-sm-4 portfolio-item filter marketing">
                  <a class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/portfolio/p-2.jpg" alt="">
                  </a>
              </div>
              <div class="col-sm-4 portfolio-item filter finance">
                  <a class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
                      <div class="caption-port">
                          <div class="caption-port-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img class="img-fluid" src="img/portfolio/p-3.jpg" alt="">
                  </a>
              </div> 
          </div>
      </section>
<!--====================================================
                        SKILLS
    ======================================================-->       
      <section class=" d-flex flex-column" id="skills">
         <div class="p-lg-3 skill-cover white-cover">
          <div class="my-row row ">
            <div class="p-lg-5 px-5 py-4 col-md-6 col-sm-12 ">
          <h3 class="text-center "><?php echo $lang['codingskills'] ?></h3>
         <div class="skill-mf">
                    <span>HTML - CSS - Sass</span> <span class="pull-right">85%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">80%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVA - J2EE</span> <span class="pull-right">80%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>C - C++</span> <span class="pull-right">65%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Wordpress</span> <span class="pull-right">75%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Bootstrap</span> <span class="pull-right">80%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>SQL - MySQL</span> <span class="pull-right">80%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Symfony</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Spring</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Angular</span> <span class="pull-right">60%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
              </div>
                <div class="p-lg-5 px-5 py-4 col-md-6 col-sm-12">
          <h3 class="text-center "><?php echo $lang['modeling'] ?></h3>
         <div class="skill-mf">
                    <span>UML</span> <span class="pull-right">80%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>MERISE</span> <span class="pull-right">80%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>MS PROJECT</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Scrum</span> <span class="pull-right">65%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                   <h3 class="text-center pt-5"><?php echo $lang['others'] ?></h3>
         <div class="skill-mf">
                    <span>Photoshop</span> <span class="pull-right">80%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span><?php echo $lang['ads'] ?></span> <span class="pull-right">60%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                   
                    </div>
                    <span><?php echo $lang['marketing'] ?></span> <span class="pull-right">60%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                   
                    </div>
                  </div>
              </div>
              </div>
         </div> 
      </section>

    <!--====================================================
                        services
    ======================================================-->       
      <section class=" d-flex flex-column" id="services">
         <div class="p-lg-5 p-3 skill-cover">
          <h3 class="text-center text-white">services</h3>
          <div class="row text-center my-auto "> 
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-html5 fa-5x"></i>
                      <h2><span class="counter"> 84 </span><span>%</span></h2>
                      <p>HTML5</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-css3 fa-5x"></i>
                      <h2><span class="counter"> 95 </span><span>%</span></h2>
                      <p>CSS3</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-code fa-5x"></i>
                      <h2><span class="counter"> 65 </span><span>%</span></h2>
                      <p>JQuery</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="skill-item">
                      <i class="fa fa-globe fa-5x"></i>
                      <h2><span class="counter"> 89 </span><span>%</span></h2>
                      <p>PHP</p>
                  </div>
              </div>
          </div>
         </div> 
      </section>

    

    <!--====================================================
                          CONTACT
    ======================================================-->       
      <section class="resume-section p-3 p-lg-5 d-flex flex-column"> 
        <h3 class="text-center" style="font-size: 45px"><?php echo $lang['contactus'] ?></h3>
          <div class="row my-auto" id="contact"> 
            <div class="col-md-6 col-sm-12 mt-5"> 
              <div class="contact-cont">
                
                <div class="heading-border-light"></div>
                <p><?php echo $lang['contactdescription'] ?></p>
              </div><div class="contact-cont2"> 
                
                
                <div class="contact-mail contact-side-desc contact-box-desc">
                  
                <address class="address-details-f">
                  <i class="fa fa-phone cl-atlantis fa-0x"></i>+212 664640795 <br>
                  <i class="fa fa-envelope-o cl-atlantis fa-0x"> </i><a href="mailto:mr.elalaoui.hicham@gmail.com" class="">mr.elalaoui.hicham@gmail.com</a>
                <ul class="list-inline list-social-icons mb-0">
                  <li class="list-inline-item">
                  <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                  </a>
                  </li>
                  <li class="list-inline-item">
                      <a href="https://join.skype.com/invite/fMLYBLbYd52X">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-skype fa-stack-1x fa-inverse"></i>
                  </span>
                  </a>
                  </li>
                   <li class="list-inline-item">
                      <a href="">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                  </span>
                  </a>
                  </li>
                   <li class="list-inline-item">
                      <a href="">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                  </span>
                  </a>
                  </li>
                   <li class="list-inline-item">
                      <a href="">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                  </span>
                  </a>
                  </li>
                  <li class="list-inline-item">
                      <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                  </span>
                  </a>
                  </li>
                  <li class="list-inline-item">
                      <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                  </a>
                  </li>
                </ul>
                </address>
                
                </div>
              </div>
            </div><div class="col-md-6 center">
                 
              <div class="row con-form">
                <div class="col-md-12">
                  <input type="text" name="full-name" placeholder="Full Name" class="form-control">
                </div>
                <div class="col-md-12">
                  <input type="text" name="email" placeholder="Email Id" class="form-control">
                </div>
                <div class="col-md-12">
                  <input type="text" name="subject" placeholder="Subject" class="form-control">
                </div>
                <div class="col-md-12"><textarea name="" id=""></textarea></div>
                <div class="col-md-12 sub-but"><button class="btn btn-lg btn-white" role="button"><?php echo $lang['send'] ?></button></div>
              </div>
            </div>
             
          </div>
      </section>

    


    </div>

<!--====================================================
                    PORTFOLIO MODALS
======================================================-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" >
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl"></div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                          <div class="modal-body">
                              <div class="title-bar">
                                <div class="col-md-12">
                                  <h2 class="text-center">Our Project</h2>
                                  <div class="heading-border"></div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <img class="img-fluid img-centered" src="img/portfolio/p-1.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                  <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                  <ul class="list-inline item-details">
                                      <li>Client:
                                          <strong>
                                            <a href="#">Techs Soft</a>
                                          </strong>
                                      </li>
                                      <li>Date:
                                          <strong>
                                            <a href="#">April 2018</a>
                                          </strong>
                                      </li>
                                      <li>Service:
                                          <strong>
                                            <a href="#">Web Development</a>
                                          </strong>
                                      </li>
                                  </ul>
                                  <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                      <i class="fa fa-times"></i> Close
                                  </button>
                              </div>
                            </div>
                          </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-2.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-3.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                              </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">E-commerce website</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-4.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                              </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-5.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-6.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>    
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-7.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-8.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-9.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>    


    <!-- Global javascript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/counter/jquery.waypoints.min.js"></script>
    <script src="js/counter/jquery.counterup.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function(){

        $(".filter-b").click(function(){
            var value = $(this).attr('data-filter');
            if(value == "all")
            { 
                $('.filter').show('1000');
            }
            else
            { 
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
            }
        });
        
        if ($(".filter-b").removeClass("active")) {
          $(this).removeClass("active");
        }
        $(this).addClass("active");
        });

        // SKILLS
        $(function () {
            $('.counter').counterUp({
                delay: 10,
                time: 2000
            });

        });
    </script> 
  <script type="text/javascript">
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
  </script>
  <style type="text/css">
    .center{text-align: center;}
    .contact-mail i{margin:10px;}
    .my-auto h2{text-align: center;}
    .white-cover{background: white;}
    .my-row{margin-right: 0px;margin-left: 0px; }
  </style>
  <style type="text/css">
  .my-custom-scrollbar {
  position: relative;
    width: 100%;
    height: 200px;
  overflow: auto;
}

</style>
<!--script type="text/javascript">
  var myCustomScrollbar = document.querySelector('.my-custom-scrollbar');
var ps = new PerfectScrollbar(myCustomScrollbar);

var scrollbarY = myCustomScrollbar.querySelector('.ps__rail-y');

myCustomScrollbar.onscroll = function () {
  scrollbarY.style.cssText = `top: ${this.scrollTop}px!important; height: 400px; right: ${-this.scrollLeft}px`;
}
</script-->
</body>

</html>