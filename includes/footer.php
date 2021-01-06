<div class="wrapper-footer">
    <div class="container">
        <div class="row footer-bloc">

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xlg-3" data-aos="fade-up" data-aos-duration="3500">
                <div class="footer-widget logo-widget">
                    <div class="title" id="open-menu-1" onclick="var idelt=this.id; openFooterMenu(idelt)"><h2><a href="index.php">MK BID</a></h2></div>
                    <!-- <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, officiis pariatur laudantium facilis non aspernatur! Inventore, ullam placeat similique in, dolor, molestiae molestias unde nulla magnam quae et cum quod.</p></div> -->
                    <ul class="footer-menu-item" data-menu="open-menu-1">
                        <li><a href="contact.html">Accueil</a></li>
                        <li><a href="contact.html">Nos réalisation</a></li>
                        <li><a href="contact.html">Votre projet</a></li>
                        <li><a href="contact.html">A propos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xlg-3" data-aos="fade-up" data-aos-duration="3000">
                <div class="footer-widget links-widget" >
                    <div class="title" id="open-menu-2" onclick="var idelt=this.id; openFooterMenu(idelt)"><h2>Links.</h2></div>
                    <ul class="footer-menu-item" data-menu="open-menu-2">
                        <li><a href="contact.html">Accueil</a></li>
                        <li><a href="contact.html">Nos réalisation</a></li>
                        <li><a href="contact.html">Votre projet</a></li>
                        <li><a href="contact.html">A propos</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xlg-3" data-aos="fade-up" data-aos-duration="2500">
                <div class="footer-widget about-widget" >
                    <div class="title"  id="open-menu-3" onclick="var idelt=this.id; openFooterMenu(idelt)"><h2>About Us.</h2></div>
                    <ul class="footer-menu-item" data-menu="open-menu-3">
                        <li><a href="contact.html">Accueil</a></li>
                        <li><a href="contact.html">Nos réalisation</a></li>
                        <li><a href="contact.html">Votre projet</a></li>
                        <li><a href="contact.html">A propos</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xlg-3" data-aos="fade-up" data-aos-duration="3000">
                <div class="footer-widget contact-widget" >
                    <div class="title"  id="open-menu-4" onclick="var idelt=this.id; openFooterMenu(idelt)"><h2>Contact Us.</h2></div>
                    <!-- <div class="text"><p>like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum sites still in their</p></div> -->
                    <ul class="footer-menu-item" data-menu="open-menu-4">
                        <li><a href="contact.html">Accueil</a></li>
                        <li><a href="contact.html">Nos réalisation</a></li>
                        <li><a href="contact.html">Votre projet</a></li>
                        <li><a href="contact.html">A propos</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="bottom-footer">
            <div class="row">
                <div class="col footer-logo" >
                    <a class="wrap-logo" href="./index.html">
                        <img src="images/logo.svg" alt="SAP">
                    </a>
                </div>
                <div class="col footer-links">
                    <!-- <div class="wrap-links"> -->
                        <span class="accroche-links">Find us on </span>
                        <ul class="social-links">
                            <li><a href="contact.html"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="contact.html"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="contact.html"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="contact.html"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    
</div>

<script>
    function openFooterMenu(idelement){
        // $("ul[class='footer-menu-item']").css("display", "none");
        if (window.matchMedia('(max-width: 575px)').matches){
            $("ul[data-menu="+idelement+"]").toggle();
            $("#"+idelement).toggleClass("open-widget");
        }
    }
    if (window.matchMedia('(min-width: 576px)').matches){
        $(".footer-menu-item").show();
    }
</script>

