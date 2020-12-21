<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- js link -->
    <script src="js/jquery-1.11.2.min.js"></script>

    <!-- internal projet css links -->
    <link rel="stylesheet" href="services_v2.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="testimonial.css">
    <link rel="stylesheet" href="footer.css"> 

    <!-- external projet css links -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css fontawesome -->
    <link rel="stylesheet" href="fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

    <div class="wrapper-body"  id="main">
        <?php include('includes/header.php') ?>
        <!-- bloc-banniere -->
        <div class="wrapper-banniere">
            <div class="row wrap-banniere">
                <!-- <div class="image-banniere"><img src="images/bg-banniere.jpg" alt=""></div> -->
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
                        <div class="responsive-show item active">
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
                        <div class="responsive-show item">
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
                        <div class="responsive-show item">
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
                        <div class="responsive-show item">
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
                        <div class="responsive-show item">
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
                        <div class="responsive-show item">
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
            <div class="container bloc-product">

                <div class="row">
                    <div class="wrap-title-bloc">
                        <h3>Featured Products</h3>
                        <p>Find the right products to enable digital transformation across your enterprise and run business-critical processes quickly and securely in the cloud – today and as your business needs evolve.</p>
                    </div>
                </div>

                <div class="wrap-product">
                    <div class="bloc-product">
                        <div class="product-logo">
                            <div class="wrap-logo-product">
                                <img src="images/product1.png" alt="">
                            </div>
                        </div>
                        <div class="wrap-brief">
                            <div class="">
                                <h3>SAP S/4HANA</h3>
                            </div>
                            <div class="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                            </div>
                        </div>
                        <div class="wrap-see-more-product">
                            <a href="">SAP S/4HANA</a>
                        </div>
                    </div>
                    <div class="bloc-product">
                        <div class="product-logo">
                            <div class="wrap-logo-product">
                                <img src="images/product2.png" alt="">
                            </div>
                        </div>
                        <div class="wrap-brief">
                            <div class="">
                                <h3>SAP Cloud Platform</h3>
                            </div>
                            <div class="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium, animi modi porro obcaecati quis mollitia possimus placeat culpa.</p>
                            </div>
                        </div>
                        <div class="wrap-see-more-product">
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
                    <div class="responsive-show item active">
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
                    <div class="responsive-show item">
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
                    <div class="responsive-show item">
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
                    <div class="responsive-show item">
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
                    <div class="responsive-show item">
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
                    <div class="responsive-show item">
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
                        <div class="responsive-show item active">
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
                        <div class="responsive-show item">
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
                        <div class="responsive-show item">
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
                        <div class="responsive-show item">
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
                        <div class="responsive-show item">
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
                        <div class="responsive-show item">
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
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="M53.333,224C23.936,224,0,247.936,0,277.333V448c0,29.397,23.936,53.333,53.333,53.333h64    c12.011,0,23.061-4.053,32-10.795V224H53.333z" fill="#000000" data-original="#000000" style="" class=""/>
                                </g>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="M512,304c0-12.821-5.077-24.768-13.888-33.579c9.963-10.901,15.04-25.515,13.653-40.725    c-2.496-27.115-26.923-48.363-55.637-48.363H324.352c6.528-19.819,16.981-56.149,16.981-85.333c0-46.272-39.317-85.333-64-85.333    c-22.165,0-37.995,12.48-38.677,12.992c-2.517,2.027-3.989,5.099-3.989,8.341v72.341l-61.44,133.099l-2.56,1.301v228.651    C188.032,475.584,210.005,480,224,480h195.819c23.232,0,43.563-15.659,48.341-37.269c2.453-11.115,1.024-22.315-3.861-32.043    c15.765-7.936,26.368-24.171,26.368-42.688c0-7.552-1.728-14.784-5.013-21.333C501.419,338.731,512,322.496,512,304z" fill="#000000" data-original="#000000" style="" class=""/>
                                </g>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                            </g>
                            </g>
                        </svg>
                    </span>
                    <span class="dislike-page">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
                        <g xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M117.333,10.667h-64C23.936,10.667,0,34.603,0,64v170.667C0,264.064,23.936,288,53.333,288h96V21.461    C140.395,14.72,129.344,10.667,117.333,10.667z" fill="#000000" data-original="#000000" style=""/>
                            </g>
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M512,208c0-18.496-10.581-34.731-26.347-42.667c3.285-6.549,5.013-13.803,5.013-21.333    c0-18.517-10.603-34.752-26.368-42.688c4.885-9.728,6.315-20.928,3.861-32.043C463.381,47.659,443.051,32,419.819,32H224    c-13.995,0-35.968,4.416-53.333,12.608v228.651l2.56,1.301l61.44,133.12V480c0,3.243,1.472,6.315,3.989,8.341    c0.683,0.512,16.512,12.992,38.677,12.992c24.683,0,64-39.061,64-85.333c0-29.184-10.453-65.515-16.981-85.333h131.776    c28.715,0,53.141-21.248,55.637-48.363c1.387-15.211-3.691-29.824-13.653-40.725C506.923,232.768,512,220.821,512,208z" fill="#000000" data-original="#000000" style=""/>
                            </g>
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        </g>
                    </svg>
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