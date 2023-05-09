<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thewebmax.org/jobzilla/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2023 11:44:52 GMT -->
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('/images/MSU_logo_nobg.png')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon"  href="{{asset('/images/MSU_logo_nobg.png')}}" />
    
    <!-- PAGE TITLE HERE -->
    <title>Home</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/feather.css"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/lc_lightbox.css"><!-- Lc light box popup -->     
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css"><!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.min.css"><!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="css/select.bootstrap5.min.css"><!-- DASHBOARD select bootstrap  STYLE SHEET  -->     
    <link rel="stylesheet" type="text/css" href="css/dropzone.css"><!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/scrollbar.css"><!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"><!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css"> <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css"><!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="css/style.css"><!-- MAIN STYLE SHEET -->   


</head>

<body>

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

	<div class="page-wraper">


  
     
        <!-- HEADER START -->
        <header  class="site-header header-style-3 mobile-sider-drawer-menu">

            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">  
                                    
                    <div class="container-fluid clearfix"> 
                
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="#">
                                <img src="{{asset('/images/MSU_logo_nobg.png')}}" alt="" style="height: 80px">
                                </a>
                            </div>
                        </div>  
                        
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button> 

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
 
                            <ul class=" nav navbar-nav">
                                <li class="has-child"><a href="#">Home</a> </li>
                                
                                
                                {{-- <li class="has-child"><a href="javascript:;">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-1.html">About Us</a></li> 
                                        <li><a href="pricing.html">Pricing</a></li> 
                                        <li><a href="error-404.html">Error-404</a></li>
                                        <li><a href="faq.html">FAQ's</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="under-maintenance.html">Under Maintenance</a></li>
                                        <li><a href="coming-soon.html">Coming soon</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="after-login.html">After Login</a></li>
                                        <li><a href="icons.html">Icons</a></li> 
                                    </ul>                                                                
                                </li> --}}
                                
                                
                            </ul>

                        </div>
                        
                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                            {{-- <div class="extra-cell">
                                <div class="header-search">
                                    <a href="#search" class="header-search-icon"><i class="feather-search"></i></a>
                                </div>                                
                            </div> --}}
                            <div class="extra-cell">
                                <div class="header-nav-btn-section">
                                    <div class="twm-nav-btn-left">
                                        <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup" role="button">
                                            <i class="feather-log-in"></i> Sign Up
                                        </a>
                                    </div>
                                    {{-- <div class="twm-nav-btn-right">
                                        <a href="dash-post-job.html" class="twm-nav-post-a-job">
                                            <i class="feather-briefcase"></i> Post a job
                                        </a>
                                    </div> --}}
                                </div>
                            </div> 
                                
                        </div>                            
                    
                                                    
                        
                    </div>    
                
                
                </div>

                <!-- SITE Search -->
                {{-- <div id="search"> 
                    <span class="close"></span>
                    <form role="search" id="searchform" action="https://thewebmax.org/search" method="get" class="radius-xl">
                        <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
                        <span class="input-group-append">
                            <button type="button" class="search-btn">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </span>
                    </form>
                </div>  --}}
            </div>



            
             


            
        </header>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">

            <!--Banner Start-->
            <div class="twm-home-6-banner-section">
                <div class="container">
                    <div class="row">
                        
                        <!--Left Section-->
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="twm-bnr-left-section">
                                <div class="twm-bnr-title-small">
                                    <div class="bnr-title-bedge">
                                        <i class="fa fa-arrow-down"></i>
                                    </div>
                                    Don't let resumes
                                    <span class="site-text-primary">slow</span> you down ;
                                </div>
                                <div class="twm-bnr-title-large site-text-secondary">
                                     Let Our<p class="site-text-primary"> ResumeParser Engine</p> Do The Work.</div>
                                <div class="twm-bnr-discription">
                                    Empower your team with the insights and data they need to make smarter hiring decisions.
                                </div>

                                {{-- <div class="twm-bnr-search-bar">
                                    <form>
                                        <div class="row">
                                            <!--Title-->

                                            <!--All Category-->
                                            <div class="form-group col-xl-4 col-lg-12 col-md-12">
                                                <label>Type</label>
                                                <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-All_Category" data-bv-field="size">
                                                    <option disabled selected value="">Select Category</option>
                                                    <option>All Category</option>
                                                    <option>Web Designer</option>
                                                    <option>Developer</option>
                                                    <option>Acountant</option>
                                                </select>
                                            </div>

                                            <!--Location-->
                                            <div class="form-group col-xl-5 col-lg-12 col-md-12">
                                                <label>Location</label>
                                                <div class="twm-inputicon-box">
                                                    <input name="username" type="text" required class="form-control" placeholder="Search...">
                                                    <i class="twm-input-icon fas fa-map-marker-alt"></i>
                                                </div>
                                            </div>

                                            <!--Find job btn-->
                                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                                <button type="button" class="site-button">Find Job</button>
                                            </div>

                                        </div>
                                    </form>
                                </div> --}}

                            
                            </div>
                        </div>

                        <!--right Section-->
                        <div class="col-xl-6 col-lg-6 col-md-12 twm-bnr-right-section">
                            <div class="twm-bnr-right-content">
                                <div class="bnr-media">
                                    <img src="images/home-8/bnr-right-pic.png" alt="#">
                                </div>
                                <div class="bnr-bg-circle">
                                    <span></span>
                                    
                                </div>
                                <div class="bnr-bg-icons">
                                    <div class="icon-plus1 bounce"><i class="fa fa-plus"></i></div>
                                    <div class="icon-plus2 bounce2"><i class="fa fa-plus"></i></div>
                                    <div class="icon-plus3 bounce"><i class="fa fa-plus"></i></div>
                                    <div class="icon-ring1 bounce2"></div>
                                    <div class="icon-ring2 bounce"></div>
                                    <div class="icon-ring3 bounce2"></div>

                                    <div class="bnr-block-1 bounce">
                                        <div class="bnr-block-1-content">
                                            <div class="media"><img src="images/home-6/cv-icon.png" alt=""></div>
                                            <h3 class="title">Upload CV</h3>
                                        </div>
                                    </div>
                                    <div class="bnr-block-2 bounce2">
                                        
                                        <div class="bnr-block-2-content">
                                            <div class="bnr-block-2-bag">
                                                <span><img src="images/home-6/bag.png" alt=""></span>
                                            </div>
                                            <div class="bnr-block-2-content-top">
                                               <h3 class="title">25+</h3>
                                               <div class="media"><img src="images/home-6/graph-icon.png" alt=""></div>  
                                            </div>
                                            <div class="bnr-block-2-content-bottom">Comapnies Uses RPE</div>
                                            
                                        </div>
                                    </div>
                                    <div class="bnr-block-3 bounce">
                                        <img src="images/home-6/pdf-file.png" alt="#">
                                    </div>

                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Banner End-->

            {{-- introduction strat --}}
            <div class="section-full site-bg-white h-page6-getjobs-wrap">
                <div class="h-page6-client-slider-outer">
                    <div class="container">
                        <div class="h-page6-client-slider">
                            <div class="row">
                                <div class="col-xl-4 col-lg-12">
                                    <div class="h-page-6-client-slide-title">
                                        Trusted by more than <span class="site-text-primary">+100 companies</span>
                                    </div>
                                </div>

                                <div class="col-xl-8 col-lg-12">
                                    <div class="owl-carousel home-client-carousel6 owl-btn-vertical-center owl-loaded owl-drag">
                                
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1305px, 0px, 0px); transition: all 0.25s ease 0s; width: 4352px;"><div class="owl-item cloned" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w6.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w1.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w2.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w3.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w5.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w1.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w2.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w3.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w4.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w5.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w6.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w1.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w2.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w3.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w5.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w1.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w2.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w3.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w4.png" alt=""></a></div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 187.554px; margin-right: 30px;"><div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo client-logo-media">
                                                <a href="employer-list.html"><img src="images/client-logo2/w5.png" alt=""></a></div>
                                            </div>
                                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="h-page-6-getjobs-wrap">
                        <div class="row">
                            
                            <div class="col-lg-7 col-md-12">
                                <div class="h-page-6-getjobs-left">

                                <div class="twm-media ">
                                    <img src="{{asset('/images/deciphers-complex-resumes.svg')}}" alt="#" style="height: 480px; margin-top: 80px;">
                                    <div class="twm-media-bg-circle"></div>
                                    <div class="twm-media-bg-circle2"></div>
                                    <div class="twm-media-bg-circle3">
                                        <div class="rotate-center">
                                            <span class="ring1"></span>
                                            <span class="ring2"></span>
                                            <span class="ring3"></span>
                                        </div>
                                    </div>
                                </div>
                                

                                </div> 
                            </div>

                            <div class="col-lg-5 col-md-12 ml-10">
                                <div class="h-page-6-getjobs-right">
                                    <!-- TITLE START-->
                                    <div class="section-head left wt-small-separator-outer" style="margin-top: -120px">
                                        <div class="wt-small-separator ">
                                            <h4>About</h4>                                
                                        </div>
                                        <h2 class="wt-title"><span class="site-text-primary">Resume Parser Engine</span> </h2>
                                        <div style="font-size: 17px">
                                        <p>A resume parser engine can extracts and parses data from resumes, cover letters, and other job application documents. By using natural language processing (NLP) algorithms, the parser engine can automatically analyze the text and identify key pieces of information, such as candidate name, work experience, education, skills, and contact details.
                                        </p>
                                        <p>The parser engine then converts this unstructured data into a structured format, making it easier for recruiters to quickly analyze and compare candidate information. This saves valuable time and effort in the recruitment process, as well as reduces errors and inconsistencies that can arise from manual data entry.
                                        </p>
                                    </div>
                                    </div>
                                    <!-- TITLE END-->
                                    {{-- <div class="twm-read-more">
                                        <a href="about-1.html" class="site-button">About More</a>
                                    </div>                --}}
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
            {{-- introduction end --}}

            {{-- how it works strat --}}
            <div class="section-full p-t120 p-b90 site-bg-white twm-how-it-work-area">
                        
                <div class="container">

                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div>Working Process</div>                                
                        </div>
                        <h2 class="wt-title">How It Works</h2>
                        
                    </div>                  
                    <!-- TITLE END-->

                    <div class="twm-how-it-work-section">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps">
                                    <span class="twm-large-number">01</span>
                                    <div class="twm-w-pro-top bg-clr-sky">
                                        <div class="twm-media">
                                            <span><img src="images/work-process/icon1.png" alt="icon1"></span>
                                        </div>
                                        <h4 class="twm-title">Upload<br>Resumes</h4>
                                    </div>
                                    <p>Resumes in any document formats such as PDF, DOCX, or TXT have to upload .</p>
                                </div>
                            </div>

                            

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps">
                                    <span class="twm-large-number">02</span>
                                    <div class="twm-w-pro-top bg-clr-green">
                                        <div class="twm-media">
                                            <span><img src="images/work-process/icon3.png" alt="icon1"></span>
                                        </div>
                                        <h4 class="twm-title">Resume<br> Parsing Engine</h4>
                                    </div>
                                    <p>Engine will extracts and parses the data to identify candidate    details.</p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps">
                                    <span class="twm-large-number">03</span>
                                    <div class="twm-w-pro-top bg-clr-pink">
                                        <div class="twm-media">
                                            <span><img src="images/work-process/icon2.png" alt="icon1"></span>
                                        </div>
                                        <h4 class="twm-title">Data <br>
                                            Extraction</h4>
                                    </div>
                                    <p>Review and analyze the extracted data in our user-friendly interface.</p>
                                </div>
                            </div>

                        </div>
                    </div>                  
                </div>

            </div>
            {{-- how it works end --}}

            {{-- lib1 start --}}
            <div class="section-full p-t120 p-b90 site-bg-white job-categories-home-5-wrap twm-bdr-bottom-1">
                <div class="container">
                   
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div></div>                                
                        </div>
                        <h2 class="wt-title site-text-primary">Libraries We Used</h2>
                    </div>                  
                    <!-- TITLE END-->

                </div>

                <div class="section-content twm-jobs-grid-h5-section-outer">
                    <div class="twm-jobs-grid-h5-section overlay-wraper" style="background-image: url();">
                        <div class="overlay-main site-bg-primary opacity-09"></div>
                        
                        <div class="swiper-container category-5-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-grid">
                            <div class="swiper-wrapper" id="swiper-wrapper-397c4b75a42b2e47" aria-live="polite" style="width: 3111px;">

                              <!--1-->  
                              <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 24" style="width: 229.25px; margin-right: 30px;">
                                <div class="job-categories-home-5">
                                    <div class="twm-media cat-bg-clr-1">
                                        <div class="flaticon-deal"></div>
                                    </div>                                   
                                    <div class="twm-content">
                                        <a href="job-detail.html">Marketing &amp; Sale</a>
                                        <div class="twm-jobs-available">1526 Jobs Available</div>
                                        
                                    </div>                               
                                </div>
                              </div>

                              <!--2-->  
                              <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 24" style="width: 229.25px; margin-right: 30px;">
                                <div class="job-categories-home-5">
                                    <div class="twm-media cat-bg-clr-3">
                                        <div class="flaticon-customer-support"></div>
                                    </div>                                   
                                    <div class="twm-content">
                                        <a href="job-detail.html">Customer Help</a>
                                        <div class="twm-jobs-available">1526 Jobs Available</div>
                                        
                                    </div>                               
                                </div>
                              </div>

                              <!--3-->  
                              <div class="swiper-slide" role="group" aria-label="3 / 24" style="width: 229.25px; margin-right: 30px;">
                                <div class="job-categories-home-5">
                                    <div class="twm-media cat-bg-clr-2">
                                        <div class="flaticon-bars"></div>
                                    </div>                                   
                                    <div class="twm-content">
                                        <a href="job-detail.html">Finance</a>
                                        <div class="twm-jobs-available">168 Jobs Available</div>
                                        
                                    </div>                               
                                </div>
                              </div>

                              <!--4-->  
                              <div class="swiper-slide" role="group" aria-label="4 / 24" style="width: 229.25px; margin-right: 30px;">
                                <div class="job-categories-home-5">
                                    <div class="twm-media cat-bg-clr-4">
                                        <div class="flaticon-dashboard"></div>
                                    </div>                                   
                                    <div class="twm-content">
                                        <a href="job-detail.html">Software</a>
                                        <div class="twm-jobs-available">300 Jobs Available</div>
                                        
                                    </div>                               
                                </div>
                              </div>

                              <!--5-->  
                              <div class="swiper-slide" role="group" aria-label="5 / 24" style="width: 229.25px; margin-right: 30px;">
                                <div class="job-categories-home-5">
                                    <div class="twm-media cat-bg-clr-1">
                                        <div class="flaticon-hr"></div>
                                    </div>                                   
                                    <div class="twm-content">
                                        <a href="job-detail.html">Human Resource</a>
                                        <div class="twm-jobs-available">125 Jobs Available</div>
                                        
                                    </div>                               
                                </div>
                              </div>

                              

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-397c4b75a42b2e47" aria-disabled="true"></div>
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-397c4b75a42b2e47" aria-disabled="false"></div>
                          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

                    </div>
                </div>
                
            </div>
            {{-- lib1 end --}}

            {{-- libararies 2 we use strat --}}
            {{-- <div class="section-full p-t120 p-b90 site-bg-white twm-job-categories-area3">
                <div class="container">

                    <div class="wt-separator-two-part">
                        <div class="row wt-separator-two-part-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div>Jobs by Categories</div>                                
                                    </div>
                                    <h2 class="wt-title">Choose Your Desire Category</h2>
                                </div>                  
                                <!-- TITLE END-->
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                                <a href="job-list.html" class=" site-button">All Categories</a>
                            </div>
                        </div>
                    </div>

                    <div class="twm-job-categories-section-3 m-b30">
                       
                        <div class="job-categories-style3">
                            <div class="row">
                            
                                <!-- COLUMNS 1 --> 
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 m-b30">
                                    <div class="job-categories-3-wrap">
                                        <div class="job-categories-3">
                                            <div class="twm-media">
                                                <div class="flaticon-dashboard"></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available">9,185 Jobs</div>
                                                <a href="job-detail.html">Business Development</a>
                                            </div>                               
                                        </div>
                                    </div>
                                </div>

                                <!-- COLUMNS 2 --> 
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 m-b30">
                                    <div class="job-categories-3-wrap">
                                        <div class="job-categories-3">
                                            <div class="twm-media">
                                                <div class="flaticon-project-management"></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available">3,205 Jobs</div>
                                                <a href="job-detail.html">Project Management</a>
                                            </div>                               
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- COLUMNS 3 --> 
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 m-b30">
                                    <div class="job-categories-3-wrap">
                                        <div class="job-categories-3">
                                            <div class="twm-media">
                                                <div class="flaticon-note"></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available">2,100 Jobs</div>
                                                <a href="job-detail.html">Content Writer &amp; Blogging</a>
                                            </div>                               
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- COLUMNS 4 --> 
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 m-b30">
                                    <div class="job-categories-3-wrap">
                                        <div class="job-categories-3">
                                            <div class="twm-media">
                                                <div class="flaticon-customer-support"></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available">1,500 Jobs</div>
                                                <a href="job-detail.html">Costomer Services</a>
                                            </div>                               
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- COLUMNS 5 --> 
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 m-b30">
                                    <div class="job-categories-3-wrap">
                                        <div class="job-categories-3">
                                            <div class="twm-media">
                                                <div class="flaticon-bars"></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available">9,185 Jobs</div>
                                                <a href="job-detail.html">Accounting Finance</a>
                                            </div>                               
                                        </div>
                                    </div>
                                </div>

                                <!-- COLUMNS 6 --> 
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 m-b30">
                                    <div class="job-categories-3-wrap">
                                        <div class="job-categories-3">
                                            <div class="twm-media">
                                                <div class="flaticon-user"></div>
                                            </div>                                   
                                            <div class="twm-content">
                                                <div class="twm-jobs-available">3,205 Jobs</div>
                                                <a href="job-detail.html">Sales and Marketing</a>
                                            </div>                               
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                      </div>

                </div>

            </div> --}}
            {{-- lib 2 end --}}

            {{-- benifits strat --}}
            <div class="section-full p-t120 p-b90 site-bg-gray bg-cover overlay-wraper" style="background-image:url(images/background/bg-2.jpg)">
                <div class="overlay-main site-bg-primary opacity-01"></div>
                <div class="container">
                   
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div>Benifits </div>                                
                        </div>
                        <h2 class="wt-title site-text-white"></h2>
                        
                    </div>                  
                    <!-- TITLE END-->


                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5 col-md-12 m-b30">
                                <!--Block one-->
                                <div class="blog-post twm-blog-post-2-outer">
                                    <div class="wt-post-media">
                                        <a href="blog-single.html"><img src="images/blog/latest-2/l-1.jpg" alt=""></a>
                                    </div>                                    
                                    <div class="wt-post-info">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date">April 05, 2023</li>
                                            </ul>
                                        </div>
                                                                     
                                    <div class="wt-post-title ">
                                        <h4 class="post-title">
                                            <a href="blog-single.html">
                                                How to convince recruiters and get your 
                                                dream job. Get behind the wheel!
                                            </a>
                                        </h4>
                                    </div>
                                   
                                    <div class="wt-post-readmore ">
                                        <a href="blog-single.html" class="site-button-link site-text-secondry">Read More</a>
                                    </div>                                        
                                </div>                                
                                </div>
                            </div>
                            
                            <div class="col-lg-7 col-md-12">

                                <div class="twm-blog-post-wrap-right">
                                    <!--Block two-->
                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b30">
                                        <div class="wt-post-info">

                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">March 05, 2023</li>
                                                    <li class="post-author">By <a href="candidate-detail.html">David Wish</a></li>
                                                </ul>
                                            </div>
                                                                        
                                            <div class="wt-post-title ">
                                                <h4 class="post-title">
                                                    <a href="blog-single.html">5 things to know about the March
                                                        2023 jobs report</a>
                                                </h4>
                                            </div>
                                            <div class="wt-post-text ">
                                                <p>
                                                    New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis.
                                                </p>
                                            </div>
                                            <div class="wt-post-readmore ">
                                                <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                            </div> 

                                        </div>                                
                                    </div>

                                    <!--Block three-->
                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b30">
                                        <div class="wt-post-info">
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">March 05, 2023</li>
                                                    <li class="post-author">By <a href="candidate-detail.html">Mike Doe</a></li>
                                                </ul>
                                            </div>
                                                                        
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">
                                                <a href="blog-single.html">Job Board is the most important 
                                                    sector in the world</a>
                                            </h4>
                                        </div>
                                        <div class="wt-post-text ">
                                            <p>
                                                New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis.
                                            </p>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                        </div>                                        
                                        </div> 
                                    </div>

                                    <!--Block four-->
                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b30">
                                        <div class="wt-post-info">

                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">March 05, 2023</li>
                                                    <li class="post-author">By <a href="candidate-detail.html">David Wish</a></li>
                                                </ul>
                                            </div>
                                                                        
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">
                                                <a href="blog-single.html">5 things to know about the March
                                                    2023 jobs report</a>
                                            </h4>
                                        </div>
                                        <div class="wt-post-text ">
                                            <p>
                                                New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis.
                                            </p>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                        </div>                                        
                                        </div>                                
                                    </div>
                                </div>

                            </div>                                                        
                                                        
                        </div>
                    </div>
                   
                </div>
            </div>
            {{-- benifit end --}}




          

            


           
            

          



        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="footer-light ftr-light-with-bg site-bg-cover" style="background-image: url(images/ftr-bg.jpg);">
            <div class="container">

                <!-- FOOTER BLOCKES START -->  
                <div class="footer-top">
                    <div class="row">

                        <div class="col-lg-3 col-md-12">
                            
                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href="index.html"><img src="{{asset('/images/MSU_logo_nobg.png')}}" alt=""></a>
                                </div>
                                <p>Many desktop publishing packages and web page editors now.</p>
                                <ul class="ftr-list">
                                    <li><p><span>Address :</span>65 Sunset CA 90026, USA </p></li>
                                    <li><p><span>Email :</span>example@max.com</p></li>
                                    <li><p><span>Call :</span>555-555-1234</p></li>
                                </ul>
                            </div>                            
                            
                        </div> 

                        <div class="col-lg-9 col-md-12">
                            <div class="row">
                               
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">For Candidate</h3>
                                        <ul>
                                            <li><a href="dashboard.html">User Dashboard</a></li>
                                            <li><a href="dash-resume-alert.html">Alert resume</a></li>
                                            <li><a href="candidate-grid.html">Candidates</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog single</a></li>
                                        </ul>
                                    </div>
                                </div>
                            
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">For Employers</h3>
                                        <ul>
                                            <li><a href="dash-post-job.html">Post Jobs</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="job-list.html">Jobs Listing</a></li>
                                            <li><a href="job-detail.html">Jobs details</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Helpful Resources</h3>
                                        <ul>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="employer-detail.html">Employer detail</a></li>
                                            <li><a href="dash-my-profile.html">Profile</a></li>
                                            <li><a href="error-404.html">404 Page</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">  
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Quick Links</h3>
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-1.html">About us</a></li>
                                            <li><a href="dash-bookmark.html">Bookmark</a></li>
                                            <li><a href="job-grid.html">Jobs</a></li>
                                            <li><a href="employer-list.html">Employer</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>  

                        </div> 

                    </div>
                </div>
                <!-- FOOTER COPYRIGHT -->
                <div class="footer-bottom">
                
                    <div class="footer-bottom-info">
                        <div class="footer-copy-right">
                            <span class="copyrights-text">Copyright © 2023 by thewebmax All Rights Reserved.</span>
                        </div>
                        <ul class="social-icons">
                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                        </ul>
                    </div>
                    
                </div>

            </div>
    
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

        <!--Model Popup Section Start-->
            <!--Signup popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form>

                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                                <p>Sign Up and get access to all the features of Jobzilla</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <!--Signup Candidate-->  
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                    </li>
                                    <!--Signup Employer-->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                    </li>
                                    
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                    <!--Signup Candidate Content-->  
                                    <div class="tab-pane fade show active" id="sign-candidate">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree1">
                                                        <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--Signup Employer Content--> 
                                    <div class="tab-pane fade" id="sign-Employer">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree2">
                                                        <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div> 
                            </div>

                            <div class="modal-footer">
                                <span class="modal-f-title">Login or Sign up with</span>
                                <ul class="twm-modal-social">
                                    <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>

                        </form>
                    </div>
                </div>
                
            </div>
            <!--Login popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                        <form>
                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                                <p>Login and get access to all the features of Jobzilla</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                        <!--Login Candidate-->  
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                        </li>
                                        <!--Login Employer-->
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                        </li>
                                    
                                    </ul>
                                    
                                    <div class="tab-content" id="myTab2Content">
                                        <!--Login Candidate Content-->  
                                        <div class="tab-pane fade show active" id="login-candidate">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password3">
                                                            <label class="form-check-label rem-forgot" for="Password3">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Log in</button>
                                                    <div class="mt-3 mb-3">Don't have an account ? 
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--Login Employer Content--> 
                                        <div class="tab-pane fade" id="login-Employer">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password4">
                                                            <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Log in</button>
                                                    <div class="mt-3 mb-3">Don't have an account ? 
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div> 
                            </div>
                            <div class="modal-footer">
                                <span class="modal-f-title">Login or Sign up with</span>
                                <ul class="twm-modal-social">
                                    <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!--Model Popup Section End-->


 	</div>



<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="js/jquery-3.6.0.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script  src="js/lc_lightbox.lite.js" ></script><!-- IMAGE POPUP -->
<script  src="js/bootstrap-select.min.js"></script><!-- Form js -->
<script  src="js/dropzone.js"></script><!-- IMAGE UPLOAD  -->
<script  src="js/jquery.scrollbar.js"></script><!-- scroller -->
<script  src="js/bootstrap-datepicker.js"></script><!-- scroller -->
<script  src="js/jquery.dataTables.min.js"></script><!-- Datatable -->
<script  src="js/dataTables.bootstrap5.min.js"></script><!-- Datatable -->
<script  src="js/chart.js"></script><!-- Chart -->
<script  src="js/bootstrap-slider.min"></script><!-- Price range slider -->
<script  src="js/swiper-bundle.min"></script><!-- Swiper JS -->
<script  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->

</body>


<!-- Mirrored from thewebmax.org/jobzilla/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2023 11:45:00 GMT -->
</html>
