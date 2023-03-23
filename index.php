<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SKUDRIOD - DYNAMIC SERVICES</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="css/common-style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body class="home-one">
<div class="preloader"></div>
<!-- HEADER -->
<?php
 require_once("include/header.php");
?>

<!-- HEADER ENDS -->



<section class="rev_slider_wrapper">
    <h2 class="hidden">rev slider</h2>
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <!-- <li class="gradient-overlay" data-transition="slotzoom-horizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                <img src="images/main-slider/1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                
                
                <div class="tp-caption lfl sfb tp-resizeme start"
                data-x="left" data-hoffset="245"
                data-y="center" data-voffset="-190"
                data-speed="1500"
                data-start="1000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/main-slider/1.png" alt=""></div>
                
                <div class="tp-caption lft sfb tp-resizeme start"
                data-x="center" data-hoffset="50"
                data-y="center" data-voffset="-110"
                data-speed="1500"
                data-start="1500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/main-slider/2.png" alt=""></div>
                
                <div class="tp-caption lfr sfb tp-resizeme start"
                data-x="right" data-hoffset="150"
                data-y="center" data-voffset="-40"
                data-speed="1500"
                data-start="2000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/main-slider/4.png" alt=""></div>
                
                <div class="tp-caption lfb sfb tp-resizeme start"
                data-x="center" data-hoffset="240"
                data-y="center" data-voffset="160"
                data-speed="1500"
                data-start="2500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/main-slider/3.png" alt=""></div>
            </li> -->
            <li class="gradient-overlay overly" data-transition="slotzoom-horizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                <img src="images/main-slider/2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                
                
                <div class="tp-caption lfl sfb tp-resizeme start"
                data-x="left" data-hoffset="0"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="1000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/main-slider/hero1.png" alt="" style="width: 650px; height: 650px;"></div>
                
                <div class="tp-caption lft sfb tp-resizeme start"
                data-x="right" data-hoffset="0"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="1500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><div class="outer-box">
                    <p>Skudriod </p>
                    <h3>Help Students Learn STEM <br> As Well As Help Teachers Manage Their <br> Class Activities</h3>     
                </div></div>
                
            </li>

            <li class="gradient-overlay" data-transition="slotzoom-horizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                <img src="images/main-slider/3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                
                
                <div class="tp-caption lfl sfb tp-resizeme start"
                data-x="left" data-hoffset="0"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="1000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/main-slider/hero2.png" alt="" style="width: 600px; height: 650px;"></div>
                
                <div class="tp-caption lft sfb tp-resizeme start"
                data-x="left" data-hoffset="600"
                data-y="center" data-voffset="-100"
                data-speed="1500"
                data-start="1500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><h2>Our goal is to Bring out <br> the best of you</h2></div>

                <div class="tp-caption lfr sfr tp-resizeme start"
                data-x="left" data-hoffset="600"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="2000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><p>We Developed A Special Curriculum Called C-STEAM <br> We Use Deep And Smart Technologies For Solve And Bring Out The Best.</p></div>

                <div class="tp-caption lfb sfb tp-resizeme start"
                data-x="left" data-hoffset="600"
                data-y="center" data-voffset="80"
                data-speed="1500"
                data-start="2500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Get Started</a></div>

            </li> 

                
        </ul>
    </div>
</section>



<section class="about">
    <div class="container">
                
        <div class="row">
            <div class="single-column col-md-6 col-sm-12">
                <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="post-content">
                        <div class="section-title">
                            <h2>Welcome TO <span>Skudriood</span> </h2>
                        </div>
                        <div class="text">
                            <p>We Help Students Learn STEM As Well As Help
                                Teachers Manage Their Class Activities Seamlessly
                                Issues A Business May Face.</p>
                        </div>
                        <ul class="list">
                            <li>Learn and understand Robotics</li>
                            <li>Explore Virtual Reality</li>
                            <li>Smart Edu-devices and Smart class room</li>
                        </ul>
                        <div class="link">
                            <a href="#" class="read-more">Get Involved</a>
                            <a href="#" class="read-more">Join Now</a>
                        </div>
                    </div>
                </div>    
                    

            </div>
            <div class="single-column col-md-6 col-sm-12">  
                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <figure class="img-box">
                        <a href="#"><img src="images/resource/23.jpg" alt=""></a>
                    </figure>
                </div> 
            </div>
        </div>
    </div>           
</section>


<section class="call-out">
    <div class="container">
        <div class="row">

            <div class="column col-md-9 col-sm-12 col-xs-12">
                <div class="text-left clearfix">
                    <h2>Enroll Now!</h2>
                    <p>Nothing is more important than your child’s Education. Join skudriod <br>and training and learn how to keep it.</p>
                </div>
                    
            </div>

            <div class="column col-md-3 col-sm-12 col-xs-12">
                <div class="text-right padd-top-20">
                    <a href="#" class="theme-btn btn-style-one">Get Involved</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature">
    <div class="container">
        <div class="section-title center pb-60">
            <h2>Our<span>Feature</span> </h2>
        </div>
        <div class="row">

            <div class="column col-md-4 col-sm-12">
                <div class="item right">
                    <div class="icon"><span class="icon-food"></span></div>
                    <h4><a href="#">Robotics</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 
                <div class="item right">
                    <div class="icon"><span class="icon-blocks"></span></div>
                    <h4><a href="#">Virtual Reality</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 
                <div class="item right">
                    <div class="icon"><span class="icon-school"></span></div>
                    <h4><a href="#">STEM</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 

            </div>

            <div class="column col-md-4 col-sm-12">
                <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <figure class="img-box">
                        <a href="#"><img src="images/" alt=""></a>
                    </figure>
                </div>
                            
            </div>

           <div class="column col-md-4 col-sm-12">
                <div class="item left">
                    <div class="icon"><span class="icon-library"></span></div>
                    <h4><a href="#">Engineering</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 
                <div class="item left">
                    <div class="icon"><span class="icon-paint-1"></span></div>
                    <h4><a href="#">Smart Edu-devices</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 
                <div class="item left">
                    <div class="icon"><span class="icon-gestures"></span></div>
                    <h4><a href="#">Smart class room</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 
                   
            </div>

        </div>
    </div>
    <div class="see-more">
        <div class="container">
            <div class="text-center">
                <h2>See Our Kindergarten Special Features!</h2>
                <div class="link">
                    <a href="#" class="theme-btn btn-style-one">Get Involved</a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="call-out">
    <div class="container">
        <div class="row">

            <div class="column col-md-9 col-sm-12 col-xs-12">
                <div class="text-left clearfix">
                    <h2>Join Now!</h2>
                    <p>Nothing is more important than your child’s well-being. Join our seminars <br>and training and learn how to keep it.</p>
                </div>
                    
            </div>

            <div class="column col-md-3 col-sm-12 col-xs-12">
                <div class="text-right padd-top-20">
                    <a href="#" class="theme-btn btn-style-one">Get Involved</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature">
    <div class="container">
        <div class="section-title center pb-60">
            <h2>Our<span>Feature</span> </h2>
        </div>
        <div class="row">

            <div class="column col-md-4 col-sm-12">
                <div class="item right">
                    <div class="icon"><span class="icon-food"></span></div>
                    <h4><a href="#">Meals Provided</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 
                <div class="item right">
                    <div class="icon"><span class="icon-blocks"></span></div>
                    <h4><a href="#">Language Lessons</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 
                <div class="item right">
                    <div class="icon"><span class="icon-school"></span></div>
                    <h4><a href="#">Transportation</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 

            </div>

            <div class="column col-md-4 col-sm-12">
                <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <figure class="img-box">
                        <a href="#"><img src="images/resource/2.png" alt=""></a>
                    </figure>
                </div>
                            
            </div>

           <div class="column col-md-4 col-sm-12">
                <div class="item left">
                    <div class="icon"><span class="icon-library"></span></div>
                    <h4><a href="#">Full Day Session</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 
                <div class="item left">
                    <div class="icon"><span class="icon-paint-1"></span></div>
                    <h4><a href="#">Special Education</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 
                <div class="item left">
                    <div class="icon"><span class="icon-gestures"></span></div>
                    <h4><a href="#">Qualified Teachers</a></h4>
                    <p>Lorem ipsum dolor sit amet cotetur adipisicing elit mod tempor incididuntut labore</p>
                </div> 
                   
            </div>

        </div>
    </div>
    <div class="see-more">
        <div class="container">
            <div class="text-center">
                <h2>See Our Kindergarten Special Features!</h2>
                <div class="link">
                    <a href="#" class="theme-btn btn-style-one">Get Involved</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cource">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <div class="img-column" role="tablist">
                    
                    <div class="item active wow fadeIn" data-tab-name="tab-1" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                        <a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab" class="clearfix">
                                <img src="images/resource/1.jpg" alt="">
                                <div class="text">happy environment</div>
                            </a>

                    </div>
                    <div class="item wow fadeIn" data-tab-name="tab-2" data-wow-duration="2s" data-wow-delay="0.6s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                        <a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab" class="clearfix">
                            <img src="images/resource/2.jpg" alt="">
                            <div class="text">happy environment</div>
                        </a>

                    </div>
                    <div class="item wow fadeIn" data-tab-name="tab-3" data-wow-duration="2s" data-wow-delay="0.7s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                        <a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab" class="clearfix">
                            <img src="images/resource/3.jpg" alt="">
                            <div class="text">happy environment</div>
                        </a>

                    </div>
                    <div class="item wow fadeIn" data-tab-name="tab-4" data-wow-duration="2s" data-wow-delay="0.8s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                        <a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab" class="clearfix">
                            <img src="images/resource/4.jpg" alt="">
                            <div class="text">happy environment</div>
                        </a>

                    </div>

 
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="content-column tab-content center">
                    <div class="inner-box tab-pane fade in active " id="tab-1">
                        <div class="section-title center sep-2">
                            <h2>Our Special Cources programes</h2>
                        </div>
                        <div class="post-content">
                            <h3>Watch Our Videos</h3>
                            
                            <p>Praesent arcu gravida vehicula est node maecenas loareet morbi a dosis luctus. <br> interdum, nibh vitae sodales, magna ante feugiat elit maecenas.</p>
                            <h4>Next Events Start In</h4>
                            <div class="time">20-July-2016  To  25-July-2016</div>
                        </div>
                    </div>
                    <div class="inner-box tab-pane fade " id="tab-2">
                        <div class="section-title center sep-2">
                            <h2>Our Special Cources programes</h2>
                        </div>
                        <div class="post-content">
                            <h3>Watch Our Videos</h3>
                            
                            <p>Praesent arcu gravida vehicula est node maecenas loareet morbi a dosis luctus. <br>interdum, nibh vitae sodales, magna ante feugiat elit maecenas.</p>
                            <h4>Next Events Start In</h4>
                            <div class="time">20-July-2016  To  25-July-2016</div>
                        </div>
                    </div>
                    <div class="inner-box tab-pane fade " id="tab-3">
                        <div class="section-title center sep-2">
                            <h2>Our Special Cources programes</h2>
                        </div>
                        <div class="post-content">
                            <h3>Watch Our Videos</h3>
                            
                            <p>Praesent arcu gravida vehicula est node maecenas loareet morbi a dosis luctus. <br>interdum, nibh vitae sodales, magna ante feugiat elit maecenas.</p>
                            <h4>Next Events Start In</h4>
                            <div class="time">20-July-2016  To  25-July-2016</div>
                        </div>
                    </div>

                    <div class="inner-box tab-pane fade " id="tab-4">
                        <div class="section-title center sep-2">
                            <h2>Our Special Cources programes</h2>
                        </div>
                        <div class="post-content">
                            <h3>Watch Our Videos</h3>
                            
                            <p>Praesent arcu gravida vehicula est node maecenas loareet morbi a dosis luctus. <br>interdum, nibh vitae sodales, magna ante feugiat elit maecenas.</p>
                            <h4>Next Events Start In</h4>
                            <div class="time">20-July-2016  To  25-July-2016</div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        
        
        
    </div>
</section>

<section class="team">
    <div class="container">
        <div class="section-title center pb-60">
            <h2>our team <span>member</span></h2>
        </div>

        <div class="team-list">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="item">
                        <div class="img-holder">
                            <figure><a href="#"><img src="images/team/1.jpg" alt="Awesome Image"/></a></figure>
                            <div class="content">
                                <h2><a href="#">Daryl Dixon</a></h2>
                                <p>head teacher</p>
                            </div>
                            
                        </div>
                        
                        <div class="overlay">
                            <div class="inner">
                                <div class="content">
                                    <h2><a href="#">Daryl Dixon</a></h2>
                                    <p>head teacher</p>
                                </div>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="item">
                        <div class="img-holder">
                            <figure><a href="#"><img src="images/team/2.jpg" alt="Awesome Image"/></a></figure>
                            <div class="content">
                                <h2><a href="#">Jon Snow</a></h2>
                                <p>head teacher</p>

                            </div>
                        </div>
                        <div class="overlay">
                            <div class="inner">
                                <div class="content">
                                    <h2><a href="#">Jon Snow</a></h2>
                                    <p>head teacher</p>
                                </div>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        
                    
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.7s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="item">
                        <div class="img-holder">
                            <figure><a href="#"><img src="images/team/3.jpg" alt="Awesome Image"/></a></figure>
                            <div class="content">
                                <h2><a href="#">Peter Parker</a></h2>
                                <p>head teacher</p>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="inner">
                                <div class="content">
                                    <h2><a href="#">Peter Parker</a></h2>
                                    <p>head teacher</p>
                                </div>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="item">
                        <div class="img-holder">
                            <figure><a href="#"><img src="images/team/4.jpg" alt="Awesome Image"/></a></figure>
                            <div class="content">
                                <h2><a href="#">Luck Walker</a></h2>
                                <p>head teacher</p>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="inner"> 
                                <div class="content">
                                    <h2><a href="#">Luck Walker</a></h2>
                                    <p>head teacher</p>
                                </div>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
            

    </div>
</section>


<section class="two-column">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 tab-column">
                <div class="section-title">
                    <h2>Our Child <span>Care Activities</span></h2>
                </div>
                <div class="outer-box">
                    <ul class="tab-list" role="tablist">
                        <li class="item active hvr-bubble-bottom" data-tab-name="Education">
                            <a href="#Education" aria-controls="Education" role="tab" data-toggle="tab" class="clearfix">
                                Education
                            </a>
                        </li>
                        <li class="item hvr-bubble-bottom" data-tab-name="Activities">
                            <a href="#Activities" aria-controls="Activities" role="tab" data-toggle="tab" class="clearfix">
                                Activities
                            </a>
                        </li>
                        <li class="item hvr-bubble-bottom"  data-tab-name="Painting">
                            <a href="#Painting" aria-controls="Painting" role="tab" data-toggle="tab" class="clearfix">
                                Coding
                            </a>
                        </li>
                        <li class="item hvr-bubble-bottom"  data-tab-name="Games">
                            <a href="#Games" aria-controls="Games" role="tab" data-toggle="tab" class="clearfix">
                                Robotics
                            </a>
                      


                    </ul>
                </div>
                
                <div class="content-column tab-content">
                    <div class="inner-box tab-pane fade in active " id="Education">
                        <div class="content">
                            <h2>Let the Learning Begin </h2>
                            <p>We are group of teachers who really love childrens and enjoy every moment of teaching and playing with our students.Our teachers graduated from differnt Universities with as different subjects but its all included in Education Major. Therefore, we are very confident with our knowledge and teaching skills.</p>
                            <a href="#" class="link">Read More</a>
                        </div>
                    </div>
                    <div class="inner-box tab-pane fade " id="Activities">
                        <div class="content">
                            <h2>Let the Learning Begin </h2>
                            <p>We are group of teachers who really love childrens and enjoy every moment of teaching and playing with our students.Our teachers graduated from differnt Universities with as different subjects but its all included in Education Major. Therefore, we are very confident with our knowledge and teaching skills.</p>
                            <a href="#" class="link">Read More</a>
                        </div>
                    </div>
                    <div class="inner-box tab-pane fade " id="Painting">
                        <div class="content">
                            <h2>Let the Learning Begin </h2>
                            <p>We are group of teachers who really love childrens and enjoy every moment of teaching and playing with our students.Our teachers graduated from differnt Universities with as different subjects but its all included in Education Major. Therefore, we are very confident with our knowledge and teaching skills.</p>
                            <a href="#" class="link">Read More</a>
                        </div>
                    </div>
                    <div class="inner-box tab-pane fade " id="Games">
                        <div class="content">
                            <h2>Let the Learning Begin </h2>
                            <p>We are group of teachers who really love childrens and enjoy every moment of teaching and playing with our students.Our teachers graduated from differnt Universities with as different subjects but its all included in Education Major. Therefore, we are very confident with our knowledge and teaching skills.</p>
                            <a href="#" class="link">Read More</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 testimonial">
                <div class="section-title">
                    <h2>What The <span>Parents Say</span></h2>
                </div>
                <div class="testimonial-slide">

                    <div class="item center">
                        <img src="images/team/t1.jpg" alt="">
                        <div class="img-ifo">
                            <div class="text">
                                <p>I noticed my son can think beyond, and also try solving basic problems</p>
                            </div>
                            <div class="rating">
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                            </div>
                            <div class="link">
                                <a href="#" class="btn-style-one">Chika Ugwu</a>
                            </div>
                        </div>
                    </div>
                    <div class="item center">
                        <img src="images/team/t1.jpg" alt="">
                        <div class="img-ifo">
                            <div class="text">
                                <p>My kids are actually doing great, they will always come home trying to build something</p>
                            </div>
                            <div class="rating">
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                            </div>
                            <div class="link">
                                <a href="#" class="btn-style-one">Joseph Ikenna</a>
                            </div>
                        </div>
                    </div>
                    <div class="item center">
                        <img src="images/team/t1.jpg" alt="">
                        <div class="img-ifo">
                            <div class="text">
                                <p>The Robotics and Coding Class has been so useful to my kids, this is so great!</p>
                            </div>
                            <div class="rating">
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                                <span class="star fa fa-star-o"></span>
                            </div>
                            <div class="link">
                                <a href="#" class="btn-style-one">Chimaobi Love</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
            

                
        
    </div>
</section>

<section class="gallery-section gallery-three-column">
    <div class="container">
    <div class="section-title">
        <h2>Our <span>Gallery</span></h2>
    </div>
    
        <!--Sortable Masonry-->
        <!-- MOVE TO PORTFOLIO.TXT TO GET CODE FOR THE PORTFOLIO -->
        <!-- >>>>>>> -->


    <div class="see-more style-2">
        <div class="container">
            <div class="clearfix">
                <h2 class="pull-left">See Our Galleries and beautify Events!</h2>
                <div class="link pull-right">
                    <a href="#" class="theme-btn btn-style-one">See Gallery</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="shop">
    <div class="container">
        <div class="section-title center pb-60">
            <h2>Our Latest <span>Products</span></h2>
        </div>


        <div class="team-list row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <figure class="img-holder">
                        <a href="#"><img src="images/product/1.jpg" alt="Awesome Image"/></a>
                    </figure>
                    <div class="content">
                        <h2><a href="#">Jigsaw box alphabets</a></h2>
                        <p>$ 85</p>
                        <div class="cart">
                            <a href="cart-page.html"><span class="flaticon-shop"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <figure class="img-holder">
                        <a href="#"><img src="images/product/2.jpg" alt="Awesome Image"/></a>
                    </figure>
                    <div class="content">
                        <h2><a href="#">Jigsaw box alphabets</a></h2>
                        <p>$ 85</p>
                        <div class="cart">
                            <a href="cart-page.html"><span class="flaticon-shop"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <figure class="img-holder">
                        <a href="#"><img src="images/product/3.jpg" alt="Awesome Image"/></a>
                    </figure>
                    <div class="content">
                        <h2><a href="#">Jigsaw box alphabets</a></h2>
                        <p>$ 85</p>
                        <div class="cart">
                            <a href="cart-page.html"><span class="flaticon-shop"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <figure class="img-holder">
                        <a href="#"><img src="images/product/4.jpg" alt="Awesome Image"/></a>
                    </figure>
                    <div class="content">
                        <h2><a href="#">Jigsaw box alphabets</a></h2>
                        <p>$ 85</p>
                        <div class="cart">
                            <a href="cart-page.html"><span class="flaticon-shop"></span></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section> -->


<!-- <section class="map-section">
    <div class="google-map" id="contact-google-map" data-map-lat="37.668705" data-map-lng="-121.882048" data-map-title="Awesome Place" data-map-zoom="12">
        
    </div>
</section> -->

<?php
require_once("include/footer.php");
?>






</body>

</html>
