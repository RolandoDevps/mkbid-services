<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- js link -->
    <script src="js/jquery-1.8.2.min.js"></script>

    <!-- internal projet css links -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/testimonial.css">
    <link rel="stylesheet" href="css/footer.css"> 

    <!-- external projet css links -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css fontawesome -->
    <link rel="stylesheet" href="fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>

    <div class="wrapper-body"  id="main">
        <?php include('includes/header.php') ?>
        <!-- bloc-banniere -->
        <div class="wrapper-banniere">
            <div class="annimation-banniere">
                <div class="wrap-annimation">
                    <ul>
                        <li><img src="images/bg-ban-an1.png" alt=""></li>
                        <li><img src="images/bg-ban-an2.png" alt=""></li>
                        <li><img src="images/bg-ban-an3.png" alt=""></li>
                        <li><img src="images/bg-ban-an4.png" alt=""></li>
                        <li><img src="images/bg-ban-an5.png" alt=""></li>
                        <li><img src="images/bg-ban-an6.png" alt=""></li>
                        <li><img src="images/bg-ban-an7.png" alt=""></li>
                        <li><img src="images/bg-ban-an8.png" alt=""></li>
                        <li><img src="images/bg-ban-an9.png" alt=""></li>
                        <li><img src="images/bg-ban-an10.png" alt=""></li>
                        <li><img src="images/bg-ban-an11.png" alt=""></li>
                        <li><img src="images/bg-ban-an9.png" alt=""></li>
                        <li><img src="images/bg-ban-an12.png" alt=""></li>
                        <li><img src="images/bg-ban-an13.png" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="wrap-banniere">
                <div class="breacktrumps">
                    <small>Home</small>
                    <p>SERVICES</p>
                </div>
                <div class="text-banniere col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xlg-5">
                    <h3>MKBID Providing Business Services</h3>
                </div>
            </div>
        </div>
        <!-- end bloc-banniere -->
        <!-- bloc-portfolio -->
        <div class="wrapper-portfolio">
            <div class="container bloc-portfolio">

                <div class="row">
                    <div class="wrap-title-bloc">
                        <h3>Portfolio Categories</h3>
                        <p>Explore our comprehensive solutions for all business processes across all industries to find the solutions you need to run your business better, faster, and simpler enterprise-wide.</p>
                    </div>
                </div>
                <div id="carouselPortfolioControls" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" style="display: none">
                        <li data-target="#carouselPortfolioControls" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselPortfolioControls" data-slide-to="1"></li>
                        <li data-target="#carouselPortfolioControls" data-slide-to="2"></li>
                        <li data-target="#carouselPortfolioControls" data-slide-to="3"></li>
                        <li data-target="#carouselPortfolioControls" data-slide-to="4"></li>
                        <li data-target="#carouselPortfolioControls" data-slide-to="5"></li>
                    </ol>
                    <div class="wrap-service">
                        <div class="responsive-show item active" data-aos="fade-down" data-aos-duration="1500">
                            <div class="col bloc-service">
                                <div class="wrap-brief">
                                    <h3>ERP and Finance</h3>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP HANA <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP HANA <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP HANA <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-show item" data-aos="fade-down" data-aos-duration="1500">
                            <div class="col bloc-service">
                                <div class="wrap-brief">
                                    <h3>CRM and Customer Experience</h3>
                                </div>
                                <div class="service-details">
                                    <a href="">Concur Expense <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">Concur Expense <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">Concur Expense <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-show item" data-aos="fade-down" data-aos-duration="1500">
                            <div class="col bloc-service">
                                <div class="wrap-brief">
                                    <h3>Network and Spend Managemen</h3>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP Ariba Strategic Sourcing Suite <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP Ariba Strategic Sourcing Suite <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP Ariba Strategic Sourcing Suite <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-show item" data-aos="fade-up" data-aos-duration="1500">
                            <div class="col bloc-service">
                                <div class="wrap-brief">
                                    <h3>Supply Chain Management</h3>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP BusinessObjects Business Intelligence Suite <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP BusinessObjects Business Intelligence Suite <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP BusinessObjects Business Intelligence Suite <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-show item" data-aos="fade-up" data-aos-duration="1500">
                            <div class="col bloc-service">
                                <div class="wrap-brief">
                                    <h3>HR and People Engagement</h3>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP Commerce Cloud <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP Commerce Cloud <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP Commerce Cloud <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-show item" data-aos="fade-up" data-aos-duration="1500">
                            <div class="col bloc-service">
                                <div class="wrap-brief">
                                    <h3>Business Technology Platform</h3>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP SuccessFactors Employee Central <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP SuccessFactors Employee Central <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="service-details">
                                    <a href="">SAP SuccessFactors Employee Central <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-see-more-portfolio">
                        <a href="">Explore all products from A-Z <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                
            </div>

        </div>
        <!-- end bloc-portfolio -->
        <div class="wrapper-section-divider paddingTop">
            <div class="section-divider"></div>
        </div>
        <!-- bloc-product -->
        <div class="wrapper-product">
            
            <div class="scale-spinner-effect left">
                <div class="scale-spinner-circle circle-1"></div>
                <div class="scale-spinner-circle circle-2"></div>
            </div>
            <div class="container bloc-product">

                <div class="row">
                    <div class="wrap-title-bloc">
                        <h3>Featured Products</h3>
                        <p>Find the right products to enable digital transformation across your enterprise and run business-critical processes quickly and securely in the cloud – today and as your business needs evolve.</p>
                    </div>
                </div>

                <div class="wrap-product">
                    <div class="bloc-product">
                        <div class="product-logo" data-aos="fade-up" data-aos-delay="50" data-aos-anchor-placement="center-bottom">
                            <div class="wrap-logo-product">
                                <img src="images/product1.png" alt="">
                            </div>
                        </div>
                        <div class="wrap-brief" data-aos="fade-right">
                            <div class="">
                                <h3>SAP S/4HANA</h3>
                            </div>
                            <div class="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                            </div>
                        </div>
                        <div class="wrap-see-more-product" data-aos="fade-right">
                            <a href="">SAP S/4HANA</a>
                        </div>
                    </div>
                    <div class="bloc-product">
                        <div class="product-logo"  data-aos="fade-up" data-aos-delay="50" data-aos-anchor-placement="center-bottom">
                            <div class="wrap-logo-product">
                                <img src="images/product2.png" alt="">
                            </div>
                        </div>
                        <div class="wrap-brief" data-aos="fade-left">
                            <div class="">
                                <h3>SAP Cloud Platform</h3>
                            </div>
                            <div class="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                            </div>
                        </div>
                        <div class="wrap-see-more-product" data-aos="fade-left">
                            <a href="">SAP Cloud Platform</i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div> 
        <div class="wrapper-services">
            
            <div id="carouselProductControls" class="carousel slide container" data-ride="carousel">
                <ol class="carousel-indicators" style="display: none">
                    <li data-target="#carouselProductControls" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselProductControls" data-slide-to="1"></li>
                    <li data-target="#carouselProductControls" data-slide-to="2"></li>
                    <li data-target="#carouselProductControls" data-slide-to="3"></li>
                    <li data-target="#carouselProductControls" data-slide-to="4"></li>
                    <li data-target="#carouselProductControls" data-slide-to="5"></li>
                </ol>
                <div class="wrap-service">
                    <div class="responsive-show item active" data-aos="fade-up" data-aos-delay="50" data-aos-duration="4000">
                        <div class="col bloc-service">
                            <div class="wrap-brief">
                                <div class="">
                                    <h3>SAP HANA</h3>
                                </div>
                                <div class="">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                </div>
                            </div>
                            <div class="service-details">
                                <a href="">SAP HANA <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-show item" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500">
                        <div class="col bloc-service">
                            <div class="wrap-brief ">
                                <div class="">
                                    <h3>Concur Expense</h3>
                                </div>
                                <div class="">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                </div>
                            </div>
                            <div class="service-details">
                                <a href="">Concur Expense <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-show item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2500">
                        <div class="col bloc-service">
                            <div class="wrap-brief ">
                                <div class="">
                                    <h3>SAP Ariba Strategic Sourcing Suite</h3>
                                </div>
                                <div class="">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                </div>
                            </div>
                            <div class="service-details">
                                <a href="">SAP Ariba Strategic Sourcing Suite <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-show item" data-aos="fade-up" data-aos-delay="250" data-aos-duration="2000">
                        <div class="col bloc-service">
                            <div class="wrap-brief ">
                                <div class="">
                                    <h3>SAP BusinessObjects Business Intelligence Suite</h3>
                                </div>
                                <div class="">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                </div>
                            </div>
                            <div class="service-details">
                                <a href="">SAP BusinessObjects Business Intelligence Suite <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-show item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000">
                        <div class="col bloc-service">
                            <div class="wrap-brief ">
                                <div class="">
                                    <h3>SAP Commerce Cloud</h3>
                                </div>
                                <div class="">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                </div>
                            </div>
                            <div class="service-details">
                                <a href="">SAP Commerce Cloud <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-show item" data-aos="fade-up" data-aos-delay="350" data-aos-duration="3500">
                        <div class="col bloc-service">
                            <div class="wrap-brief ">
                                <div class="">
                                    <h3>SAP SuccessFactors Employee Central</h3>
                                </div>
                                <div class="">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                </div>
                            </div>
                            <div class="service-details">
                                <a href="">SAP SuccessFactors Employee Central <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end bloc-product -->
        <div class="wrapper-section-divider">
            <div class="section-divider"></div>
        </div>
        <!-- bloc-services-mkbid -->
        <div class="wrapper-services">
            <div class="container bloc-services">

                <div class="scale-spinner-effect right">
                    <div class="scale-spinner-circle circle-1"></div>
                    <div class="scale-spinner-circle circle-2"></div>
                </div>

                <div class="row">
                    <div class="wrap-title-bloc">
                        <h3>Technology and Innovation</h3>
                        <p>In the digital age, business leaders must stay on top of new, emerging, and future technologies or risk falling behind. But where do you start? Explore the latest digital trends to determine the best opportunities for your company.</p>
                    </div>
                </div>

                <div id="carouselServicesControls" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" style="display: none">
                        <li data-target="#carouselServicesControls" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselServicesControls" data-slide-to="1"></li>
                        <li data-target="#carouselServicesControls" data-slide-to="2"></li>
                        <li data-target="#carouselServicesControls" data-slide-to="3"></li>
                        <li data-target="#carouselServicesControls" data-slide-to="4"></li>
                        <li data-target="#carouselServicesControls" data-slide-to="5"></li>
                    </ol>
                    <div class="wrap-service">
                        <div class="responsive-show item active" data-aos="fade-up" data-aos-delay="50" data-aos-duration="4000">
                            <div class="col bloc-service">
                                <div class="service-logo">
                                    <div class="wrap-logo">
                                        <img src="images/service-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="wrap-brief">
                                    <div class="">
                                        <h3>Managment & Marketing</h3>
                                    </div>
                                    <div class="">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <a href="">Learn more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-show item" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500">
                            <div class="col bloc-service">
                                <div class="service-logo">
                                    <div class="wrap-logo ">
                                        <img src="images/service-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="wrap-brief ">
                                    <div class="">
                                        <h3>Technical SEO Audit</h3>
                                    </div>
                                    <div class="">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <a href="">Learn more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-show item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2500">
                            <div class="col bloc-service">
                                <div class="service-logo">
                                    <div class="wrap-logo ">
                                        <img src="images/service-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="wrap-brief ">
                                    <div class="">
                                        <h3>Reports & Analytics</h3>
                                    </div>
                                    <div class="">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <a href="">Learn more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-show item" data-aos="fade-up" data-aos-delay="250" data-aos-duration="2000">
                            <div class="col bloc-service">
                                <div class="service-logo">
                                    <div class="wrap-logo ">
                                        <img src="images/service-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="wrap-brief ">
                                    <div class="">
                                        <h3>Strategy & Research</h3>
                                    </div>
                                    <div class="">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <a href="">Learn more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-show item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000">
                            <div class="col bloc-service">
                                <div class="service-logo">
                                    <div class="wrap-logo ">
                                        <img src="images/service-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="wrap-brief ">
                                    <div class="">
                                        <h3>Onsite SEO</h3>
                                    </div>
                                    <div class="">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <a href="">Learn more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="responsive-show item" data-aos="fade-up" data-aos-delay="350" data-aos-duration="3500">
                            <div class="col bloc-service">
                                <div class="service-logo">
                                    <div class="wrap-logo ">
                                        <img src="images/service-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="wrap-brief ">
                                    <div class="">
                                        <h3>Reports & Analytics</h3>
                                    </div>
                                    <div class="">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                                    </div>
                                </div>
                                <div class="service-details">
                                    <a href="">Learn more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end bloc-services-mkbid -->
        <div class="wrapper-section-divider">
            <div class="section-divider"></div>
        </div> 
        <!-- end bloc-before-footer -->
        <div class="Wrapper-exp-page">
            <div class="row">
                <h4 class="exp-title">How is your experience with this page?</h4>
                <div class="wrap-exp-page">
                    <span class="like-page">
                        <img src="images/like.svg" alt="">
                    </span>
                    <span class="dislike-page">
                        <img src="images/dislike.svg" alt="">
                    </span>
                </div>
            </div>
        </div>

        <?php include('includes/footer.php') ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script>
         $(document).load($(window).bind("resize", checkWidthBlocServices));

        function checkWidthBlocServices(){
            if (window.matchMedia('(max-width: 768px)').matches)
            {
                $(".wrap-service").addClass("carousel-inner");
                $(".responsive-show").addClass("carousel-item");
            }
            else{
                $(".wrap-service").removeClass("carousel-inner");
                $(".responsive-show").removeClass("carousel-item");
            }
        }
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>