<div class="wrapper-header" id="wrapper_header">
    <div class="container">
        <div class="row wrap-header">
            
            <div class="col-1 logo-header">
                <a class="wrap-logo" href="./index.html">
                    <img src="images/logo.svg" alt="SAP">
                </a>
            </div>
        
            <div class="col-7 header-center toggle-display-none menu-mobile-display-none">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span class="menu-title">Accueil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">
                            <span class="menu-title">Services</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span class="menu-title">Pricing</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span class="menu-title">Training</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span class="menu-title">About</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-7 toggle-display-none space-between" style="display:none"></div>

            <div class="col-4 header-right toggle-display-none">
                <div class="menu-icon toggle-menu-nav-side-show" id="openNav">
                    <span class="toggle-menu-nav" id="toggle-menu">
                        <img src="images/menu.svg" alt="">
                    </span>
                </div>
                <div class="essai toggle-menu-nav-side-hide">
                    <a href="">
                        <span>Try & Buy</span>
                    </a>
                </div>
                <div class="search-area">
                    <span class="toggle-search-form" id="toggle-search">
                        <img src="images/search.svg" alt="">
                    </span>
                </div>
                <div class="login">
                    <span>
                        <img src="images/avatar.svg" alt="">
                    </span>
                </div>
                <div class="login">
                    <span>
                        <img src="images/login.svg" alt="">
                    </span>
                </div>
            </div>

            <div class="col-11 header-search toggle-display-flex" style="display:none">
                <div class="search-form">
                    <form action="">
                        <button type="submit"> 
                            <span>
                                <img src="images/search.svg" alt="">
                            </span>
                        </button>
                        <input type="text" name="" id="" placeholder="Search">
                    </form>
                </div>
                <div class="close-search-form">
                    <span>
                        <img src="images/close-button.svg" alt="">
                    </span>
                </div>
            </div>
                
        </div>
        
    </div> 

    <div class="wrap-side-bar">
        <div id="mySidebar" class="sidebar">
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a> -->
            <ul class="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <span class="menu-title">Accueil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="">
                        <span class="menu-title">Services</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <span class="menu-title">Pricing</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <span class="menu-title">Training</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <span class="menu-title">About</span>
                    </a>
                </li>
            </ul>
    </div>
    </div>

</div>

<script>

    //start js header
    $(document).load($(window).bind("resize", checkWidth));

    function checkWidth(){
        if($(".menu-icon").css("display") == "none") $(".wrap-side-bar").css("display","none");
        if (window.matchMedia('(max-width: 350px)').matches)
        {
            $(".header-right").removeClass("col-4");
            $(".header-right").addClass("col-7");
            $(".space-between").removeClass("col-7");
            $(".space-between").addClass("col-4");
        }
        // else{
        //     $(".header-right").addClass("col-4");
        //     $(".header-right").removeClass("col-7");
        //     $(".space-between").addClass("col-7");
        //     $(".space-between").removeClass("col-4");
        // }
    }

    //js control the sideNavBar
    $("#openNav").on("click", function() {
        $(".wrap-side-bar").css("display","block");
    });
    var mySidebar = $("#mySidebar");
    var openNav = $("#openNav");
    $(window).on("click",function(event) {
        if (mySidebar !== event.target && !(mySidebar.has(event.target).length) && openNav != event.target && !(openNav.has(event.target).length)) {
            if($(".wrap-side-bar").is(":visible")){
                $(".wrap-side-bar").css("display","none");
            }
        }
    });
    //end

    function openFormSearch(){
        var isShow = $(".menu-mobile-display-none").css("display");;
        $("#toggle-search").on("click", function(){
            $(".toggle-display-none").css("display", "none");
            $(".toggle-display-flex").css("display", "flex");
        })
        $(".close-search-form").on("click", function(){
            if(isShow != "none") $(".header-center").css("display", "block");
            $(".header-right").css("display", "flex");
            $(".toggle-display-flex").css("display", "none");
        })
    }

    openFormSearch()

    window.onscroll = function() {myFunction()};

        var wrapper_header= document.getElementById("wrapper_header");
        var sticky = 420;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            wrapper_header.classList.add("sticky");
        } else {
            wrapper_header.classList.remove("sticky");
        }
    }
    //end js header
</script>
