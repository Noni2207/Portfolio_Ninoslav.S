 <?php include"config.php"; ?>



<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="XY0RIZdRPksIDZgYSksZAZ8WuwKPpia9SqGhM5boPjE" />
    
    <title><?php echo $lang ['title'] ?></title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleF.css">
    <link rel="icon" href="https://www.ninoslav.no/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="https://www.ninoslav.no/favicon.ico" type="image/x-icon" /> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
<body>
    <div class="scroll-up-btn">
        <i class=" fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <img src="images/Logo white.png" alt="10">
                </div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn"><?php echo $lang ['portfolio'] ?></a></li>
                <li><a href="#about" class="menu-btn"><?php echo $lang ['about'] ?></a></li>
                <li><a href="#services" class="menu-btn"><?php echo $lang ['service'] ?></a></li>
                <li><a href="#skills" class="menu-btn"><?php echo $lang ['skills'] ?></a></li>
                <li><a href="#project" class="menu-btn"><?php echo $lang ['project'] ?></a></li>
                <li><a href="#contact" class="menu-btn"><?php echo $lang ['contact'] ?></a></li>
                <li><a href="index.php?lang=en"class="menu-btn"><?php echo $lang ['lang_en'] ?><img src="images/flag1.en-min.png" alt="10"></a></li> 
                <li><a href="index.php?lang=no"class="menu-btn"><?php echo $lang ['lang_no'] ?><img src="images/flag.no-min.jpg" alt="10"></a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!--home section start-->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1"><?php echo $lang ['text-1'] ?></div>
                <div class="text-2"><?php echo $lang ['text-2'] ?></div>
                <div class="text-3"><?php echo $lang ['text-3'] ?><span> PHP Developer...!</span></div>
                <a href="#project" class= "work"><?php echo $lang ['work'] ?></a>
            </div>
        </div>
    </section>
    <!--about section start-->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title"><?php echo $lang ['about'] ?></h2><br>
            <div class="about-content">
                <div class="column left">
                    <img src="images/ME-min.png" alt="">
                </div>
                <div class="column right">
                    <div class="text-4"><?php echo $lang ['text-4'] ?> <span class="typing"></span></div>
                    <p class="pabout"><?php echo $lang ['pabout'] ?> 
                       <span class="aboutspan"><?php echo $lang ['aboutspan'] ?></span>
                        </p>
                    
                    <a href="CV.pdf" class= "cv"><?php echo $lang ['cv'] ?><i class="fa fa-file-pdf-o" style="font-size:24px"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--services section start-->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title"><?php echo $lang ['service'] ?></h2><br>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Desing</div>
                         <p class="pservices1"><?php echo $lang ['pservices1'] ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Front-end</div>
                         <p class="pservices2"><?php echo $lang ['pservices2'] ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Back-end</div>
                          <p class="pservices3"><?php echo $lang ['pservices3'] ?></p>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!--skills section start-->
     <section class="skills" id="skills">
         <div class="max-width">
            <h2 class="title"><?php echo $lang ['skills'] ?></h2><br>
             <div class="skills-content">
                 <div class="column left">
                     <div class="text-5" ><?php echo $lang ['text-5'] ?> <span class="skillsspan1" ><?php echo $lang ['skillsspan1'] ?></span> & <span class="skillsspan2" ><?php echo $lang ['skillsspan2'] ?></span></div>
                     <ul class="skills">
                         <li class="html"><strong>HTML</strong> <?php echo $lang ['html'] ?></li>
                         <li class="css"><strong>CSS</strong><?php echo $lang ['css'] ?></li>
                         <li class="js"><strong>Javascript</strong> <?php echo $lang ['js'] ?></li>
                         <li class="php"><strong>PHP</strong> <?php echo $lang ['php'] ?></li>
                         <li class="mysql"><strong>MYSQL</strong> <?php echo $lang ['mysql'] ?></li>
                         <li class="wp"><strong>WORDPRESS</strong><?php echo $lang ['wp'] ?></li>
                     </ul>
                   </div>
                 <div class="column right">
                     <div class="bars">
                      <div class="info">
                            <div class="line html"></div>
                            <span><img src="images/html2-min.png" alt="1"></span>
                            </div>
                        </div>
                        <div class="bars">
                        <div class="info">
                            <span><img src="images/css2-min.png" alt="2"></span>
                            <div class="line html"></div>
                        </div>
                    </div>
                    <div class="bars">
                        <div class="info">
                        <div class="line html"></div>
                            <span><img src="images/js2-min.png" alt="3"></span>
                        </div>
                       </div>
                     <div class="bars">
                        <div class="info">
                            <span><img src="images/php2-min.png" alt="4"></span>
                            <div class="line html"></div>
                        </div>
                    </div>
                    <div class="bars">
                        <div class="info">
                        <div class="line html"></div>
                            <span><img src="images/mysql-min.png" alt="5"></span>
                        </div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span><img src="images/word press 1-min.png" alt="6"></span>
                            <div class="line html"></div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </section>
    <!--project section start-->
    <section class="project" id="project">
        <div class="max-width">
            <h2 class="title"><?php echo $lang ['project'] ?></h2><br>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                      <img src="images/Bærum hub M-min.png" alt="7">
                       <div class="text">Bærum hub...</div>
                       <a href="https://www.bih.genex.no/" class="bbutton" target="_blank"><?php echo $lang ['bbutton'] ?></a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Piks M-min.png" alt="8">
                        <div class="text">Piks...</div>
                        <a href="https://piks.no/" class="bbutton" target="_blank"><?php echo $lang ['bbutton'] ?></a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                      <img src="images/Genex M-min.png" alt="9">
                       <div class="text">Genex...</div>
                       <a href="https://www.genex.no/" class="bbutton" target="_blank"><?php echo $lang ['bbutton'] ?></a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Cristiania bygg -min.png" alt="11">
                       <div class="text">Cristiania bygg...</div>
                       <a href="https://www./" class="bbutton" target="_blank"><?php echo $lang ['bbutton'] ?></a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                      <img src="images/1-min1.png" alt="12">
                       <div class="text">Desing...</div>
                       <p class="desing"><?php echo $lang ['desing'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section start-->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title"><?php echo $lang ['contact'] ?></h2><br>
            <div class="contact-content">
                <div class="column left">
                    <div class="text-6"><?php echo $lang ['text-6'] ?></div>
                    <p class="pcontact"><?php echo $lang ['pcontact'] ?></p>
                    <div class="icons">
                         <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head" class="n"><?php echo $lang ['n'] ?></div>
                                <div class="sub-title">Ninoslav Stanojevic</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head"class="a"><?php echo $lang ['a'] ?></div>
                                <div class="sub-title">Sandvika, Norway</div>
                            </div>
                        </div>

                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head"class="e"><?php echo $lang ['e'] ?></div>
                                <div class="sub-title">stanojevic.ninoslav@yahoo.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-linkedin"></i>
                            <div class="info">
                                <div class="head">Linkedin</div>
                                <div class="sub-title"><a href="https://www.linkedin.com/in/ninoslavstanojevic" target="_blank">ninoslavstanojevic</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="column right">
                      <?php include"form_process.php"; ?>
                        <div class="container"> 
                        <form id="contact1"  method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
                           <h3 class="h3contact"><?php echo $lang ['h3contact'] ?></h3>
                            <h4 class="h4contact"><?php echo $lang ['h4contact'] ?></h4>
                          <fieldset>
                           <input class= "name1" placeholder="<?php echo $lang ['name1'] ?>"type="text" name="name" value="<?= $name ?>" tabindex="1"  autofocus>
                           <span class="error"><?= $name_error ?></span>
                          </fieldset>
                          <fieldset>
                           <input class="email1" placeholder="<?php echo $lang ['email1'] ?>" type="text" name="email" value="<?= $email ?>" tabindex="2" >
                           <span class="error"><?= $email_error ?></span>
                          </fieldset>
                          <fieldset>
                           <input class="subject1"placeholder="<?php echo $lang ['subject1'] ?>" type="text" name="subject"  value="<?= $subject ?>" tabindex="3" >
                          </fieldset>
                          <fieldset>
                           <textarea class="textarea1" placeholder="<?php echo $lang ['textarea1'] ?>" type="text" name="message" value="<?= $message ?>" tabindex="5"  ></textarea>
                          </fieldset>
                          <fieldset>
                           <button name="submit" type="submit" id="contact-submit" class="send" data-submit="...Sending"><?php echo $lang ['send'] ?></button>
                          </fieldset>
                          <div class = "success"><?= $success; ?></div>
                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </section>
     <!--footer section start-->
     <footer>
         <div class="max-width">
                <span>Created By <a href="#">Ninoslav.no</a> | <span class="far fa-copyright">2020 All right reserved.</span></span>
         </div>
     </footer>
     <script src="script.js"></script> 
</body>
</html>
