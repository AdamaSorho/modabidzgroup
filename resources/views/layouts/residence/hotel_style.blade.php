<style>
    /*
/*------------------------------------------------------------------
* Project:        Modabidz Residence
* Author:         AdamaSorho
* URL:            https://www.linkedin.com/in/adama-sorho-a55055146/
* Created:        06/23/2022
-------------------------------------------------------------------

- // TABLE OF CONTENTS // -

========================================================================


 1.* Default
 2.* Navbar
 3.* Header
 4.* Slider/Banner
 5.* Popular
 6.* countdown
 7.* deal
 8.* bucket List
 9.* Top Destination
 10.* Testimonial
 11.* Blog
 12.* Partners
 13.* Footer
 14.* On sale
 15.* Destination innerpage
 16.* Detail page
 17.* Detail Tab page
 18.* Destination fullwidth
 19.* Destination 2 cols
 20.* Trekking page
 21.* Blog Innerpage,
 22.* Error page
 23.* Pricing Page
 24.* About us
 25.* Shop Page
 26.* Home style 1
 27.* Home style 2
 28.* Responsive

 */


    @import url('https://fonts.googleapis.com/css?family=Poppins');
    @import url('https://fonts.googleapis.com/css?family=Poppins:700&display=swap');

    * {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        background: transparent;
        box-sizing: border-box;
    }

    ol, ul {
        list-style: none;
    }

    :focus {
        outline: 0;
    }

    .clear {
        clear: both;
        line-height: 0;
        font-size: 0;
    }

    .clearfix:after {
        clear: both;
        content: '.';
        display: block;
        visibility: hidden;
        height: 0;
    }
    .clearfix:after .test {
        color: red;
    }

    .clearfix {
        display: inline-block;
    }

    * html .clearfix {
        height: 1%;
    }

    .clearfix {
        display: block;
    }

    header,
    nav,
    section,
    article,
    aside,
    footer {
        display: block;
    }

    * {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 0;
        padding: 0;
        font-size: 15px;
        background:#fff;
        font-family: 'Poppins', sans-serif;
        line-height: 1.5;
        color: #6e8292;
        font-weight: 300;
    }

    h1,h2,h3,h4,h5,h6 {
        font-weight: 700;
        margin-bottom: 15px;
        color: #636363;
        margin-top: 0;
        line-height: 1.5;
        font-family: 'Poppins', sans-serif;
    }
    h1 span,h2 span,h3 span,h4 span,h5 span,h6 span{
        color: #1690c0;
    }
    h1{
        font-size: 36px;
    }
    h2 {
        font-size: 28px;
    }

    h3 {
        font-size: 24px;
    }

    h4 {
        font-size: 18px;
    }

    h5 {
        font-size: 16px;
    }

    h6 {
        font-size: 14px;
    }

    hr {
        border: 0.5px solid #444444;
    }

    p {
        margin-bottom: 15px;
        color: #6e8292;
        line-height: 1.5;
    }

    ul {
        margin: 0;
        padding: 0;
    }
    ul li {
        margin-bottom: 15px;
        color: #777;
        position: relative;
    }
    a {
        color: #002147;
        transition: all ease-in-out 0.3s;
    }
    a:hover {
        text-decoration: none;
        color: #0D74BA;
    }

    body  [class^="flaticon-"]:before, [class*=" flaticon-"]:before, [class^="flaticon-"]:after, [class*=" flaticon-"]:after{
        margin-left: 0;
        font-size: 16px;
    }

    input[type=text],
    input[type=email],
    input[type=number],
    input[type=search],
    input[type=password],
    input[type=tel],
    input[type=date],
    textarea,
    select,
    .form-control {
        font-size: 14px;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        background-color: #fff;
        border: 1px solid #eceaea;
        border-radius:0px;
        padding: 10px 25px;
        width: 100%;
        color: #444444;
        height: auto;
        margin-bottom: 0px;
        box-shadow: none;
    }
    select{
        padding: 10px 20px;
    }
    input[type=text]:focus,
    input[type=email]:focus,
    input[type=number]:focus,
    input[type=search]:focus,
    input[type=password]:focus,
    input[type=tel]:focus,
    input[type=date]:focus,
    textarea:focus,
    select:focus {
        border-color: #66afe9;
        transition: all 0.5s ease;
    }
    textarea {
        resize: vertical;
        height: 200px;
    }

    img {
        width: 100%;
    }

    section{
        padding: 80px 0 0px;
        position: relative;
    }

    label{
        font-weight: 500;
        margin-bottom: 5px;
    }

    a.btn-red{
        border: 1px solid #D60D45;
        padding: 9px 24px;
        display: inline-block;
        background: #D60D45;
        color: #fff;
        transition: all ease-in-out 0.3s;
        cursor: pointer;
    }
    button.btn-red{
        border: 1px solid #D60D45;
        padding: 9px 24px;
        display: inline-block;
        background: #D60D45;
        color: #fff;
        transition: all ease-in-out 0.3s;
        cursor: pointer;
    }

    a.btn-red:hover{
        background: #a50a35;
        color: #fff;
        border-color: #D60D45;
    }

    button.btn-red:hover{
        background: #a50a35;
        color: #fff;
        border-color: #D60D45;
    }
    a.btn-white{
        background: transparent;
        border-color: #fff;
        color: #fff;
    }

    .text-uppercase{text-transform: uppercase;}

    /*color*/
    .white{color: #fff!important;}

    /*margin none*/

    .mar-0{margin:0 }

    /*margin top*/

    .mar-top-0{margin-top:0px}

    .mar-top-10{margin-top:10px}

    .mar-top-15{margin-top:15px}

    .mar-top-20{margin-top:20px}

    .mar-top-25{margin-top:25px}

    .mar-top-30{margin-top:30px}

    .mar-top-40{margin-top:40px}

    .mar-top-50{margin-top:50px}

    .mar-top-60{margin-top:60px}

    .mar-top-70{margin-top:70px}

    /*margin bottom*/

    .mar-bottom-0{margin-bottom:0px}

    .mar-bottom-10{margin-bottom:10px}

    .mar-bottom-15{margin-bottom:15px}

    .mar-bottom-20{margin-bottom:20px}

    .mar-bottom-25{margin-bottom:25px}

    .mar-bottom-30{margin-bottom:30px}

    .mar-bottom-35{margin-bottom:35px}

    .mar-bottom-40{margin-bottom:40px}

    .mar-bottom-50{margin-bottom:50px}

    .mar-bottom-60{margin-bottom:60px}


    /*padding*/

    .pad-0{padding: 0!important;}

    .pad-top-0{padding-top:0px}

    .pad-top-10{padding-top:10px}

    .pad-top-15{padding-top:15px}

    .pad-top-20{padding-top:20px}

    .pad-top-25{padding-top:25px}

    .pad-top-30{padding-top:30px}

    .pad-top-40{padding-top:40px}

    .pad-top-50{padding-top:50px}

    .pad-top-60{padding-top:60px}

    .pad-top-70{padding-top:70px}

    .pad-top-80{padding-top:80px}


    .pad-bottom-10{padding-bottom:10px}

    .pad-bottom-15{padding-bottom:15px}

    .pad-bottom-20{padding-bottom:20px}

    .pad-bottom-25{padding-bottom:25px}

    .pad-bottom-30{padding-bottom:30px}

    .pad-bottom-40{padding-bottom:40px}

    .pad-bottom-50{padding-bottom:50px}

    .pad-bottom-60{padding-bottom:60px}

    .pad-bottom-70{padding-bottom:70px}

    .pad-bottom-80{padding-bottom:80px}

    #preloader{
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #fff;
        z-index: 999999;
    }
    #status{
        position: fixed;
        content: '';
        display: block;
        top: 28%;
        left: 0;
        right: 0;
        width: 300px;
        height: 300px;
        margin: 0 auto;
        background: url(../images/loader.gif);
        background-size: cover;
        background-position: center;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        z-index: 9999999999;
    }


    /* Section Head */
    .section-title{
        position: relative;
        width: 50%;
        margin-bottom: 35px;
        z-index: 1;
    }
    .section-title h2{
        position: relative;
        padding-left: 20px;
        text-transform: uppercase;
        border-left: 3px solid #1690c0;
    }
    .section-title p{
        margin-bottom: 0;
    }

    @media(max-width: 991px){
        .section-title{width: 100%;}
    }

    .row.slick-slider{margin: 0 -15px;}

    /*
    breadcrumb*/
    section.breadcrumb-outer{
        background: url(../images/breadcrumb.jpg) no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        position: relative;
        padding: 50px 0 0px;
    }
    .section-overlay{
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0,0,0,0.5);
    }
    .breadcrumb-outer h2 {
        color: #fff;
        margin: 0;
        font-size: 36px;
        padding: 10px 0 35px;
    }
    .breadcrumb-content{
        position: relative;
        z-index: 1;
        margin: 0 auto;
    }
    .breadcrumb-content:before {
        position: absolute;
        content: '';
        height: 2px;
        background: #fff;
        width: 50px;
        top: 0px;
        left: 0;
        right: 0;
        margin: 0 auto;
    }
    .breadcrumb-content nav{
        display: inline-block;
    }
    .breadcrumb-content ul {
        margin-bottom: 0;
        background-color:#fff;
        padding: 12px 30px;
        box-shadow: 0 0 10px #ccc;
        position: absolute;
        left: 0;
        right: 0;
        width: 40%;
        margin: 0 auto;
        bottom: -23px;
        border-radius: 0;
    }
    .breadcrumb-content li{
        margin-bottom: 0;
    }
    .breadcrumb-content li a{
        transition: all ease-in-out 0.3s;
        color: #666;
    }
    .breadcrumb-content li a:hover{
        color: #ffb606;
    }
    .breadcrumb-content .breadcrumb>.active{
        color: #ffb606;
    }
    .breadcrumb>li+li:before{
        padding: 0 10px 0 5px;
        content: '|'
    }

    @media(max-width: 991px){
        .breadcrumb-content ul {
            width: 80%;
        }
    }

    /*pagination*/
    ul.pagination{
        margin: 0;
    }
    .pagination-content{
        margin-top: 50px;
        text-align: center;
    }
    .pagination>li>a, .pagination>li>span{
        height: 36px;
        width: 36px;
        line-height: 2;
        font-size: 18px;
        padding: 0;
        border-color:#f1f1f1;
        margin: 0 5px;
        border-radius: 50%;
        background: #fbfbfb;
        color: #999;
    }
    .pagination>li>a:focus, .pagination>li>a:hover, .pagination>li>span:focus, .pagination>li>span:hover,.pagination>li.active>a{
        background: #005294;
        color: #fff;
        border-color: #005294;
    }

    .pagination>li:first-child>a, .pagination>li:first-child>span,
    .pagination>li:last-child>a, .pagination>li:last-child>span{border-radius: 50%;}


    /* ====================== */
    /*         Header         */
    /* ====================== */


    .navbar {
        border-bottom: 0;
        padding: 0;
        -webkit-transition: all 0.1s ease-in-out 0s;
        -moz-transition: all 0.1s ease-in-out 0s;
        -ms-transition: all 0.1s ease-in-out 0s;
        -o-transition: all 0.1s ease-in-out 0s;
        transition: all 0.1s ease-in-out 0s;
        min-height: 30px;
    }

    .navbar.navbar-default {
        margin:0;
        padding: 0;
        height: auto;
        background: transparent;
        border:none;
    }

    .logo {
        padding:8px 0;
    }

    .logo a{font-size: 28px; text-transform: uppercase; font-weight: bold;}

    .bg-color-header .navbar-default {
        background: #FE8800;
    }


    /* Main Menu Dropdown */

    .logo-wrapper,
    .navbar-nav-wrapper,
    .nav-mini-wrapper {
        float: left;
    }

    .logo-wrapper {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }

    ul.nav-mini{
        padding-top: 3px;
        padding-right: 13px;
    }

    ul.nav-mini li {
        display: inline-block;
        margin-right: 10px;
        font-size: 13px;
        background: #00bcd4;
        border-radius: 5px;
        padding: 2px 10px;
    }

    ul.nav-mini li:last-child{margin-right: 0px;}

    ul.nav-mini li i{color: #fff; padding-right: 5px;}
    .nav.navbar-nav {
        float: left;
        transition: all ease-in-out 0.3s;
    }

    .nav.navbar-nav>li {
        position: relative;
        float: left;
        display: inline-block;
        margin: 10px 13px;
    }
    .nav.navbar-nav li:last-child{
        margin-right: 0;
    }

    .nav.navbar-nav li a {
        color: #FFF;
    }
    .nav.navbar-nav li.has-child i{
        display: inline-block;
    }

    .nav.navbar-nav > li > a {
        line-height: 3.5;
        font-size: 14px;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        -ms-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        padding:0;
        color: #333;
        position: relative;
        font-weight: 600;
    }

    .nav.navbar-nav > li > a:hover, .nav.navbar-nav > li.active > a,.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
        color: #D60D45;
        background: none;
        text-decoration: none;
    }

    .nav.navbar-nav > li:last-child > a:after {
        display: none;
    }

    .nav.navbar-nav li ul {
        z-index: 99999;
        padding: 0;
        margin: 0;
        position: absolute;
        top: 59px;
        left: 0;
        width: 200px;
        display: none;
        background-color: #fff;
        border: 1px solid #EEE;
        border-top: 2px solid #D60D45;
        -webkit-box-shadow: 0px 0px 12px -3px rgba(0, 0, 0, 0.4);
        -moz-box-shadow: 0px 0px 12px -3px rgba(0, 0, 0, 0.4);
        box-shadow: 0px 0px 12px -3px rgba(0, 0, 0, 0.4);
    }

    /*.nav.navbar-nav li:last-child ul, .nav.navbar-nav li:nth-last-child(2) ul  { left: auto; right:0; } */

    .nav.navbar-nav li ul li a {
        border-bottom: 1px solid #E6E6E6;
        display: block;
        padding: 14px 20px;
        font-size: 13px;
        -webkit-transition: all 0.2s ease-in-out 0s;
        -moz-transition: all 0.2s ease-in-out 0s;
        -ms-transition: all 0.2s ease-in-out 0s;
        -o-transition: all 0.2s ease-in-out 0s;
        transition: all 0.2s ease-in-out 0s;
        color: #333;
        font-weight: 400;
        letter-spacing: 0.5px;
        line-height: 1.25;
    }

    .nav.navbar-nav li > ul > li:last-child > a,
    .navbar-nav li > ul > li > ul > li:last-child > a {
        border-bottom: 0;
    }

    .nav.navbar-nav li ul li:hover a {
        padding-left: 25px;
        padding-right: 15px;
    }
    .nav.navbar-nav li ul li a:hover{
        color: #D60D45;
    }

    .nav.navbar-nav li ul li ul {
        position: absolute;
        left: 199px;
        top: -2px;
    }

    .nav.navbar-nav li ul li:hover ul li a {
        padding-left: 15px;
        padding-right: 15px;
    }

    .nav.navbar-nav li ul li ul li:hover a {
        padding-left: 20px;
        padding-right: 10px;
    }

    .nav.navbar-nav li ul li {
        display: block;
        text-align: left;
        margin: 0;
    }


    /* Mega Menu */

    .navbar-nav > li.mega-menu {
        position: inherit;
        left: 0;
    }

    .navbar-nav > li.mega-menu ul {
        left: 0%;
        width: 100%;
        top: 36px;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .navbar-nav > li.mega-menu:hover > a,
    .navbar-nav > li.mega-menu > a:hover,
    .navbar-nav > li.dropdown:hover > a,
    .navbar-nav > li.dropdown > a:hover,
    .navbar-nav > li.dropdown.active > a,
    .navbar-nav > li.dropdown.active > a:hover,
    .navbar-nav > li:hover > a,
    .navbar-nav > li.active > a {
        color: #D60D45;
        background: transparent;
    }

    .mega-menu-inner {
        padding: 0 20px;
    }

    .bg-color-header .navbar-nav > li.dropdown:hover > a,
    .bg-color-header .navbar-nav > li.dropdown > a:hover,
    .bg-color-header .navbar-nav > li.dropdown.active > a,
    .bg-color-header .navbar-nav > li.dropdown.active > a:hover,
    .bg-color-header .navbar-nav > li:hover > a,
    .bg-color-header .navbar-nav > li.active > a {
        color: #FFF;
    }
    .nav.navbar-nav > li > a:hover {
        color: #D60D45;
    }

    .navbar-arrow > ul > li .arrow-indicator {
        margin-left: 7px;
        color: #333;
    }

    .navbar-arrow ul ul > li .arrow-indicator {
        position: absolute;
        top: 50%;
        right: 15px;
        margin-top: -8px;
        font-size: 16px;
        color: #333;
    }
    .nav.navbar-nav li ul li a:hover .navbar-arrow ul ul > li .arrow-indicator{
        color: #D60D45;
    }

    .megamenu-container .arrow-indicator {
        display: none;
    }


    @media only screen and (max-width: 1100px) {
        .nav.navbar-nav>li{padding: 10px 4px;}
    }

    @media only screen and (max-width: 991px) {
        .logo-wrapper {
            width: 50%;
        }
        .navbar-nav-wrapper {
            width: 0%;
        }
        .navbar {
            margin: 0;
            padding: 0;
            -webkit-transition: none;
            -moz-transition: none;
            -ms-transition: none;
            -o-transition: none;
            transition: none;
        }
        .navbar-brand {
            line-height: 30px;
            -webkit-transition: none;
            -moz-transition: none;
            -ms-transition: none;
            -o-transition: none;
            transition: none;
        }
        .navbar-arrow > ul > li .arrow-indicator,
        .navbar-arrow ul ul > li .arrow-indicator {
            display: none;
        }

        ul.nav-mini{padding-right: 0;}

        ul.nav-mini li{margin-right: 5px; padding: 2px 6px;}
    }

    @media (max-width: 767px) {
        .navbar-nav .open .dropdown-menu > li > a {
            line-height: 23px;
        }
        .navbar.navbar-default {
            padding: 0;
        }

        #sp-top-bar{top: 95px;}

        #sp-top-bar, #sp-top2{text-align: center;}

        #sp-top1 .nav-mini-wrapper{display: inline-block; float: none!important; margin:10px 0;}

        #sp-top-bar .sp-contact-info{display: inline-block;}

    }

    @media (min-width: 768px) {
        .navbar-nav {
            margin: 0;
        }

    }

    /**
     * Sticky Header
     */

    .navbar-sticky {
        background: #fff;
        z-index: 99999;
        box-shadow: 0px 0px 5px #ccc;
        position: fixed !important;
        left: 0;
        top: 0;
        width: 100%;
    }

    .navbar-sticky.navbar-default {
        padding: 10px 0 8px;
    }

    .navbar-sticky .navbar-nav > li > ul {
        top: 59px;
    }

    .navbar-sticky .navbar-nav > li.mega-menu ul {
        top: 60px;
    }


    .transparent-header .navbar-sticky {
        padding:0;
        background-color: rgba(0, 0, 0, 0.9);
        margin: 0px;
        border: none;
    }

    .navbar.navbar-sticky .logo {padding: 5px 0 5px;}

    .navbar.navbar-sticky .logo img{width: 85%;}

    .navbar.navbar-sticky .nav.navbar-nav > li > a{line-height: 1.5;}


    @media only screen and (max-width: 1199px) {}

    @media only screen and (max-width: 991px) {

        #sp-top2.col-sm-9{padding-right: 0;}

        .sp-contact-info li{font-size: 12px; padding: 6px 4px;}

        .navbar-fixed-top {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            clear: both;
        }

        .transparent-header .navbar-sticky{padding: 10px 0; background: transparent; border: 1px solid rgba(255, 255, 255, 0.2);}

        .slicknav_btn{top: 22px!important;}

        .slicknav_nav{top: 60px!important;}

        .slicknav_btn.slicknav_open:before, .slicknav_btn.slicknav_collapsed:before{font-size: 21px;}


    }

    @media (max-width: 767px) {}

    @media (max-width: 479px) {}


    /* Header */
    .logo img{
        width: 80%;
    }
    .logo h1{
        margin-bottom: 0;
        color: #005294;
        font-size: 40px;
    }
    .upper-head{
        background: {{ $setting->footer_color ?? '#005294' }};
        padding: 10px 0;
    }
    .header-menu{
        padding: 10px 0;
        background: #fff;
    }
    .contact-info{
        display: inline-block;
    }
    .upper-head p{
        margin-bottom: 0;
        display: inline-block;
        font-size: 14px;
        color: #fff;
        margin-right: 15px;
        font-weight: 400;
    }
    .upper-head i{
        padding-right: 5px;
    }
    .upper-head [class^="flaticon-"]:before, [class*=" flaticon-"]:before, [class^="flaticon-"]:after, [class*=" flaticon-"]:after{
        font-size: 15px;
        margin-left: 0;
        font-weight: 600;
    }
    .login-btn a{
        color: #fff;
        font-size: 14px;
        margin-left: 15px;
        font-weight: 400;
    }

    @media(max-width: 1100px){
        .upper-head{display: none;}
    }

    /* ====================== */
    /*         Banner         */
    /* ====================== */

    #home_banner{
        position: relative;
        padding: 0;
        z-index: 3;
    }

    #home_banner .kenburns_061_slide{width: 50%;}

    .slide-inner {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background-size: cover;
        background-position: center; }

    .slide-inner:after{
        position: absolute;
        content: '';
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0,0,0,0.2);
    }

    .home_banner_text{
        position: absolute;
        z-index: 1;
        top: 40%;
        left: 12%;
    }
    .home_banner_text p{
        font-size: 20px;
        color: #fff;
    }
    .home_banner_text h2, .home_banner_text span, .home_banner_text a{
        color: #fff;
        background: #005294;
        padding: 5px 15px;
        font-size: 33px;
    }
    .home_banner_text h2{
        margin-bottom: 3px;
    }
    .home_banner_text span{
        background: #017ebb;
    }
    .home_banner_text a{
        background: #036d9f;
        margin-left: -5px;
        transition: all ease-in-out 0.3s;
    }
    .home_banner_text a:hover{
        color: #036d9f;
        background: #fff;
    }
    @media(max-width: 639px){
        #home_banner .kenburns_061_slide {
            width: 90%;
            text-align: center;
            margin: 0 auto;
        }
    }


    /*swiper banner*/

    section.swiper-banner{
        padding: 0;
    }

    .slider{
        height: 600px;
        overflow: hidden;
        position: relative;
    }
    .slider .swiper-slide:after{
        content: '';
        position: absolute;
        height: 100%;
        width: 100%;
        background: rgba(0,0,0,0.5);
        top: 0;
        left: 0;
    }
    .slider .swiper-container {
        width: 100%;
        height: 100%;
        margin: 0;
    }
    .slider .swiper-slide {
        text-align: left;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        background-size: 100%;
        background-position: top center;
    }

    .slider .swiper-container-horizontal>.swiper-pagination-bullets,
    .slider .swiper-pagination-custom, .swiper-pagination-fraction{bottom: 40px;}

    .slider .swiper-pagination-bullet{
        width: 10px;
        height: 10px;
        background: #fff;
        opacity: 1;
    }
    .slider .swiper-pagination-bullet-active{
        background: #fe4e37;
    }
    .slider .swiper-container-vertical>.swiper-pagination-bullets{
        right: 50px;
    }

    .slider .swiper-button-next, .slider .swiper-button-prev{
        background: #005294;
        padding: 14px 25px;
        border-radius: 10px 0px 0px 10px;
    }

    .slider .swiper-button-next{right: 0;}

    .slider .swiper-button-prev{left: 0; border-radius: 0 10px 10px 0;}

    .slider .swiper-button-next:after, .slider .swiper-button-prev:after{
        font-size: 14px;
        color: #fff;
    }

    .slider  .swiper-content {
        z-index: 1;
        left: 8%;
        position: absolute;
        width: 55%;
    }

    .slider .swiper-content h3{
        color: #fff;
        margin: 16px 0 12px;
        font-size: 15px;
        position: relative;
        padding: 0;
        line-height: normal;
        font-weight: normal;
        display: inline-block;
    }

    .slider .swiper-content > h2 {
        margin: 0;
        color: #a3d8f1;
        font-size: 28px;
        font-weight: 400;
        text-shadow: none;
        letter-spacing: 1px;
        text-transform: capitalize;
        -webkit-font-smoothing: antialiased;
        position: relative;
    }

    .slider .swiper-content > h1{
        color: #fff;
        margin: 10px 0;
        font-size: 48px;
        font-weight: 700;
        text-shadow: none;
        letter-spacing: 1px;
        text-transform: uppercase;
        -webkit-font-smoothing: antialiased;
    }

    .slider .swiper-content p{
        color: #fff;
        width: 70%;
        margin: 0 auto;
    }
    .slider .slider-text{
        padding-top: 100px;
    }

    .slider a.btn-blue {
        padding: 10px 25px;
        background: transparent;
        border-width: 2px;
        border-color: #fff;
        transition: all 0.3s;
    }

    .slider a.btn-blue:hover {
        background: #D60D45;
        border-color: #D60D45;
        color: #fff;
        transition: all 0.3s;
    }

    @media(max-width: 1100px){
        .slider .swiper-slide{background-size: cover;}
    }

    @media (max-width: 991px) and (min-width: 768px){
        .slider .swiper-content > h1 {
            font-size: 36px;
        }

        .slider .swiper-content > h2 {
            font-size: 24px;
        }
    }

    @media(max-width: 767px){
        .slider .swiper-content {
            left: 5%;
            width: 90%;
        }

        .slider .swiper-slide{text-align: center;}
    }

    @media(max-width: 735px){
        .slider .swiper-button-next, .slider .swiper-button-prev{display: none;}
    }

    @media (max-width: 767px) and (min-width: 601px){
        .slider .swiper-content > h1 {
            font-size: 30px;
        }

        .slider .swiper-content > h2 {
            font-size: 20px;
        }
    }

    @media(max-width: 480px){
        .slider{
            height: 400px;
        }

        .slider .swiper-content > h1 {
            font-size: 20px;
            margin: 10px 0;
        }

        .slider .swiper-content > h2 {
            font-size: 16px;
        }
    }

    /*search box*/
    .search-box {
        right: 10%;
        padding: 30px;
        position: absolute;
        width: 28%;
        bottom: -47px;
        background: #fff;
        box-shadow: 0 0 20px #ccc;
        z-index: 2;
    }
    .search-box h3{
        background: #045394;
        padding: 10px;
        color: #fff;
    }

    .table_item .form-group{
        position: relative;
        margin-right: 0px;
    }

    .table_item .form-group i{
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 9;
    }
    .table_item .input-group-addon i{
        position: relative;
        top: 1px;
        display: inline-block;
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        text-align: center;
        left: 0;
    }

    .search-ad{  background: #005294;
        position: relative;
        padding: 26px 20px;
    }
    .search-ad p{
        font-size: 20px;
        color: #fff;
        margin-bottom: 0;
    }
    .search-ad p span{
        display: block;
        font-size: 50px;
        font-weight: 600;
    }
    .search-ad [class^="flaticon-"]:before, [class*=" flaticon-"]:before, [class^="flaticon-"]:after, [class*=" flaticon-"]:after{
        font-size: 50px;
        color: #fff;
    }
    .search-ad i{
        position: absolute;
        top: 10px;
        right: 30px;
    }
    .search-form{
        padding: 20px;
    }

    .search-content.table_item a.btn-red {
        width: 100%;
        text-align: center;
    }

    .search-content.table_item button.btn-red {
        width: 100%;
        text-align: center;
    }

    .table_item .bootstrap-select>.dropdown-toggle{
        padding: 11px 40px;
        border-radius: 0px;
        border: 1px solid #eceaea;
        background: #fff;
        font-size: 14px;
        font-weight: 300;
        color: #444;
    }

    .table_item .bootstrap-select .dropdown-menu{border-radius: 0px;}

    .table_item .bootstrap-select .dropdown-menu li{margin-bottom: 5px;}

    .table-item-slider{
        padding-right: 30px;
    }
    .table_item input[type=text],
    .table_item input[type=email],
    .table_item input[type=number],
    .table_item input[type=search],
    .table_item input[type=password],
    .table_item input[type=tel],
    .table_item input[type=date],
    .table_item textarea,
    .table_item select,
    .table_item .form-control{
        padding: 11px 40px;
    }
    input[type=date].form-control,
    input[type=time].form-control,
    input[type=datetime-local].form-control,
    input[type=month].form-control{
        line-height: 1.42857143;
        padding: 9px 25px;
    }
    .date .form-control{
        padding: 10px 40px !important;
    }
    .table_item a.btn-blue{
        width: 100%;
        text-align: center;
        padding: 9px 25px 8px;
        font-weight: 600;
    }
    .table_item .input-group-addon{
        border-radius: 0;
        border-left: 1px solid #ccc;
    }
    td.day{
        cursor: default;
    }

    @media(max-width: 991px){
        .search-box{padding: 20px; width: 32%;}
    }

    @media(max-width:811px){
        .search-box{width: 36%; right: 5%;}
    }

    @media(max-width: 767px){
        .search-box{width: 96%; position: inherit; bottom: inherit; right: inherit; margin: 30px auto 0;}
    }

    /*====================== */
    /*         About          */
    /* ====================== */

    #mt_about{padding-top: 100px;}

    #mt_about .about_services{padding:35px 0 0 30px;}

    #mt_about .about_services p{line-height: 2;}

    #mt_about .about_services h4 {
        font-weight: 300;
        text-transform: uppercase;
    }
    #mt_about .about_services h2{font-size:3.4rem; }


    .image-rev{
        padding: 20px;
        position: relative;
        overflow: hidden;
        box-shadow: 0px 5px 10px 0px rgba(113, 62, 90, 0.1);
        z-index: 1;
    }

    .image-rev img {
        display: block;
        position: relative;
        background: 50% no-repeat;
        background-size: cover;
        z-index: 1;
    }

    .image-rev .blur-img {
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        background: 50% no-repeat;
        background-size: cover;
        opacity: .5;
        -webkit-filter: blur(1.5px);
        -moz-filter: blur(1.5px);
        -ms-filter: blur(1.5px);
        -o-filter: blur(1.5px);
        filter: blur(1.5px);
    }

    #mt_about a{margin-top: 10px;}


    @media(max-width: 991px){
        #mt_about .about_services{margin-top: 30px;}
    }


    /* ====================== */
    /*    Popular Package     */
    /* ====================== */

    .popular-packages .package-item{
        background: #fff;
        transition: all ease-in-out 0.3s;
        box-shadow: 0 0 10px #ccccccb0;
        margin: 20px 0;
    }

    .popular-packages .section-title{margin-bottom: 15px;}

    .popular-packages .package-content{
        padding:30px 20px;
        text-align: center;
    }
    .popular-packages .package-content h3 a{
        display: inline-block;
        color: #dc355a;
    }

    .popular-packages .package-content p{margin-bottom: 0;}

    .popular-packages .package-image{
        width: 100%;
        height: 100%;
        float: left;
        overflow: hidden;
        position: relative;
        cursor: default;
        background: linear-gradient(45deg, #d60d45 0%,#046b8c 100%) ;
        margin-bottom: 22px;
    }
    .popular-packages .package-image img{
        display: block;
        position: relative;
        max-width: none;
        width: calc(100% + 60px) !important;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
        transition: opacity 0.35s, transform 0.45s;
        -webkit-transform: translate3d(-40px,0,0);
        transform: translate3d(-40px,0,0);
    }
    .popular-packages .package-item:hover{
        transition: all ease-in-out 0.3s;
        transform: translateY(-5px);
    }
    .popular-packages .package-item:hover img{
        opacity: 0.6;
        filter: alpha(opacity=60);
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }

    section.popular-packages .slick-prev, section.popular-packages .slick-next{
        left: 15px;
        background: #fff;
        height: 50px;
        width: 50px;
        margin-top: 0;
    }
    section.popular-packages .slick-next{
        right: 15px;
        left: inherit;
    }

    section.popular-packages .slick-prev:before, section.popular-packages .slick-next:before{
        color: #dc355a;
    }

    /*innerpage*/

    .popular-packages.package-inner .section-title{margin-bottom: 35px;}

    section.popular-packages .room-item {
        border: 1px solid #f1f1f1;
        padding: 20px;
        transition: all ease-in-out 0.3s;
        box-shadow: 0px 0px 10px #cccccc67;
    }

    section.popular-packages .fw-price span.bold {
        display: block;
        font-size: 30px;
        color: #D60D45;
    }

    section.popular-packages .fw-btns{
        background: #fbfbfb;
        border: 1px solid #f1f1f1;
        padding: 20px 0;
    }

    @media(max-width: 991px){
        .room-content{padding: 20px 0}
    }

    /* ====================== */
    /*    Services     */
    /* ====================== */

    .services{padding-bottom: 80px;}

    .services .package-item{
        background: #fff;
        transition: all ease-in-out 0.3s;
        box-shadow: 0 0 10px #ccccccb0;
    }

    .services .package-content{
        padding: 20px;
        width: 90%;
        position: relative;
        z-index: 1;
        margin: 0 auto;
        text-align: center;
        background: #fff;
    }

    .services .package-content p{margin-bottom: 0;}

    .services .package-item img{
        margin-top: -30px;
    }

    .services .sml-services .package-item img{
        margin-top: 0px;
    }
    .services .package-item:hover{
        transition: all ease-in-out 0.3s;
        transform: translateY(-5px);
    }
    .services .package-item:hover img{
        opacity: 0.6;
        filter: alpha(opacity=60);
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }

    .services .package-item.package-item1 .package-content{margin-top: -30px;}

    .services .package-item.package-item1 img{margin: 0;}

    section.services .col-sm-4, section.services .col-sm-6{padding: 0 10px;}

    .services .package-position{
        position: absolute;
        top: 30%;
        left: 20%;
        right: 20%;
        margin: 0 auto;
        text-align: center;
        background: #ffffff;
        padding: 5px 0;
    }

    @media(max-width: 767px){
        section.services .col-sm-4, section.services .col-sm-6{padding: 0 15px; margin-bottom: 15px;}
    }

    /*===================================== */
    /*           Call TO Action           */
    /* ===================================== */

    section.cta{
        padding: 80px 0;
        background-repeat: no-repeat;
        background-image: url(../images/hotel/cta.jpg);
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 100%;
    }

    section.cta:before{
        position: absolute;
        content: '';
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        background: rgba(0,0,0,0.5);
    }

    section.cta .cta-content{
        width: 60%;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    section.cta .cta-content h2{font-size: 36px;}

    @media(max-width: 767px){
        section.cta .cta-content{width: 80%;}
    }

    @media(max-width: 567px){
        section.cta .cta-content{width:100%;}
    }

    /*===================================== */
    /*           Countdown Section           */
    /* ===================================== */

    section.countdown-section{
        background: #141a29 url(../images/hotel/slider2.jpg) no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        padding-bottom: 80px;
    }

    section.countdown-section:before {
        background: #252c41;
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        width: 50%;
        height: 100%;
        z-index: 1;
    }

    section.countdown-section:after {
        background: #0000008c;
        content: '';
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        right: 0;
    }

    .countdown-title{
        position: relative;
        z-index: 1;
        padding: 0 20px;
    }
    .countdown-title h2{
        font-size: 45px;
    }
    .countdown-title h2 span{
        color: #e6b500;
    }
    .countdown-title p{
        color: #fff;
        font-size: 20px;
        text-align: center;
        margin: 30px 0;
    }
    .countdown-container {
        position: relative;
        z-index: 1;
        padding: 0 0 0 40px;
    }
    p#demo{
        color: #fff;
        font-size: 62px;
        font-weight: 700;
        margin-bottom: 0;
    }
    p#demo span{
        font-size: 40px;
        color: #e6b500;
        margin-left: 10px;
    }

    @media(max-width: 767px){

        section.countdown-section{background-size: cover;}

        section.countdown-section:before{height: 52%; width: 100%;}

        .countdown-container {
            padding: 82px 0 0 40px;
        }
    }

    @media(max-width: 640px){
        p#demo{font-size: 60px;}

        .countdown-title h2{font-size: 36px;}
    }

    @media(max-width: 567px){
        section.countdown-section:before{display: none; }

        .countdown-container{padding-left: 0; text-align: center;}

        .countdown-title{padding: 0; text-align: center;}
    }


    /*===================================== */
    /*           Deal Section           */
    /* ===================================== */

    section.deals-on-sale{

        padding-bottom: 80px;
    }

    .sale-item{position: relative; overflow: hidden;}

    .sale-overlay{
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: linear-gradient(to right, #040404a1 1%, #ffad0000 100%);
    }

    .sale-content{
        padding: 20px 30px;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 1;
        text-align: center;
    }

    .sale-item .sale-image{
        transition: all ease-in-out 0.5s;
        overflow:hidden;
    }

    .sale-item:hover .sale-image{
        transition: all ease-in-out 0.5s;
        transform: scale(1.1);
    }

    .deals-on-sale .slick-prev, .deals-on-sale  .slick-next{background: #fff;}

    .deals-on-sale  .slick-prev:before, .deals-on-sale .slick-next:before{color:#D60D45; }

    .deals-on-sale  .slick-prev{left: 0px;}

    .deals-on-sale .slick-next{right: 0px;}

    .deals-on-sale .slick-prev:hover, .deals-on-sale .slick-prev:focus,
    .deals-on-sale .slick-next:hover, .deals-on-sale .slick-next:focus{
        background: #D60D45;
    }

    .deals-on-sale .slick-prev:hover:before, .deals-on-sale .slick-prev:focus:before,
    .deals-on-sale .slick-next:hover:before, .deals-on-sale .slick-next:focus:before{color: #fff;}

    /* ====================== */
    /*         Testimonial         */
    /* ====================== */

    section.testimonials{
        background-position: center;
        background-size: cover;
        position: relative;
        padding-bottom: 80px;
        background: #fbfbfb;
    }

    section.testimonials .testimonial-image{
        height: 120px;
        width: 120px;
        margin: 0 auto;
        border-radius: 50%;
        margin-bottom: 15px;
        overflow: hidden;
    }

    section.testimonials #testimonial_095 > .carousel-inner{width: 60%;}

    section.testimonials .testimonial_095_slide{
        width: 100%;
        background: #fff;
        padding: 40px 30px;
    }

    section.testimonials .testimonial_095_slide > p{
        color: #6e8292;
        font-size: 16px;
        margin-top: 0;
    }

    section.testimonials .testimonial_095_slide > p:before{
        content: '\f10d';
        font-size: 40px;
        padding-right: 15px;
        font-family: 'fontawesome';
        color: #6e829260;
    }

    section.testimonials .testimonial_095_slide h5{font-weight: 300; }

    section.testimonials .testimonial_095_slide h5 a{color: #1690c0;}

    section.testimonials .testimonial_095_control_button .carousel-control{
        border: none;
        background: #252c41;
        width: 40px;
        height: 80px;
        border-radius: 10px;
        line-height: 8.5;
    }

    section.testimonials .testimonial_095_control_button .carousel-control span {
        font-size: 16px;
        line-height: 2.6;
    }

    section.testimonials .testimonial_095_control_button .carousel-control.left{left: 18.4%;}

    section.testimonials .testimonial_095_control_button .carousel-control.right{right: 18.4%;}

    section.testimonials .testimonial_095_control_button .carousel-control.left:hover,
    section.testimonials .testimonial_095_control_button .carousel-control.right:hover{
        border: none;
    }

    .deal-rating span{
        color: #ffc63f;
        font-size: 16px;
    }
    @media(max-width: 767px){
        section.testimonials #testimonial_095 > .carousel-inner{width: 80%;}
    }

    @media(max-width: 567px){
        section.testimonials #testimonial_095 > .carousel-inner{width: 100%;}
    }

    /* ====================== */
    /*         Blog         */
    /* ====================== */

    section.blog{padding-bottom: 80px;}

    .blog-image {
        border: 15px solid #fff;
        background: #fff;
        margin: 0;
        box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.1);
        margin: 0 0 -45px 0;
        overflow:hidden;
    }

    .blog-image img{
        transition: all ease-in-out 0.3s;
    }

    .blog-content{
        background: #fff;
        position: relative;
        box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.1);
        padding: 20px 30px;
        width: 92%;
        margin: 0 auto;
    }
    .blog-content h3{
        text-transform: capitalize;
        margin-bottom: 10px;
    }
    .blog-item:hover img{
        transform: rotate(5deg) scale(1.2);
        transition: all ease-in-out 0.3s;
    }
    .blog-content i{
        padding-right: 5px;
    }

    .blog-date p {
        color: #4aa9cf;
    }

    .blog-date-icon p{
        padding-left: 10px;
        margin-bottom: 0;
        display: inline-block;
    }
    .blog-author{
        display: inline-block;
        width: 100%;
        border-top: 1px dashed #ccc;
        padding-top: 15px;
    }
    .blog-author p{
        margin-bottom: 0px;
    }
    .blog-wrapper .blog-item{
        margin-bottom: 30px;
    }

    @media(max-width: 991px){
        section.blog .col-md-4.col-sm-12{margin-bottom: 30px;}
    }

    @media(max-width: 767px){
        section.blog .col-md-4.col-sm-6.col-xs-12{margin-bottom: 30px;}
    }


    /* ====================== */
    /*         Partners         */
    /* ====================== */

    section.trusted-partners{
        background: #222935;
        text-align: center;
        padding: 0;
        overflow: hidden;
        position: relative;
    }
    .trusted-partners:before{
        position: absolute;
        content: '';
        left: -5%;
        top: 0;
        height: 100%;
        width: 35%;
        background: #191e27;
        z-index: 1;
    }
    .partners-logo li{
        padding: 0 30px;
        margin-bottom: 0;
        transition: all ease-in-out 0.3s;
    }
    .partners-logo li:hover{
        opacity: 0.7;
    }
    .partners-title h3{
        color: #fff;
        margin-bottom: 0;
        text-transform: uppercase;
        text-align: right;
    }
    .partners-title span{
        display: block;
        font-size: 32px;
    }
    .partners-title{
        padding: 30px 30px 25px;
        position: relative;
        z-index: 2;
    }
    .partners-logo{
        padding: 37px 0 0;
    }

    @media(max-width: 991px){
        .trusted-partners:before{
            width: 40%;
        }

        .partners-title h3 {
            text-align: left;
        }

        .partners-title span {
            font-size: 21px;
        }
    }

    @media(max-width: 567px){

        section.trusted-partners{padding-bottom: 30px;}

        .trusted-partners:before{display: none;}

        .partners-title span{display: inline-block;}

        .partners-title h3{text-align: center;}

        .trusted-partners .col-md-3.col-xs-4, .trusted-partners .col-md-9.col-xs-8{width: 100%;}
    }

    /* ====================== */
    /*         Footer         */
    /* ====================== */

    footer{
        background: #060c17;
        position: relative;
    }

    footer .section-title-white h2,
    footer .section-title-white p{color: #fff;}

    footer .section-title [class^="flaticon-"]:before, footer [class*=" flaticon-"]:before {
        font-size: 36px;
        color: #fff;
    }

    footer .section-title {
        position: relative;
        padding: 0 20%;
        margin-bottom: 40px;
        z-index: 1;
        width: auto;
    }


    footer  .section-title h2{
        border: none;
        padding: 0;
    }

    footer .section-icon {
        display: inline-block;
        background: transparent;
        z-index: 1;
        position: relative;
        padding: 0 20px;
        margin-bottom: 15px;
    }


    footer .section-icon:before {
        position: absolute;
        width: 100px;
        height: 1px;
        background: #fff;
        content: '';
        left: -100px;
        top: 50%;
    }

    footer .section-icon:after {
        position: absolute;
        width: 100px;
        height: 1px;
        background: #fff;
        content: '';
        right: -100px;
        top: 50%;
    }

    .newsletter{
        padding: 55px 0 35px;
        position: relative;
        z-index: 1;
    }

    .newsletter form {
        position: relative;
        width: 45%;
        margin: 0 auto;
    }

    .newsletter a{
        position: absolute;
        right: 0;
        top: 0;
        padding: 10px;
        background: #D60D45;
        color: #fff;
    }
    .newsletter input[type=text]{
        padding-right: 115px;
        margin-bottom: 0;
    }
    .footer-links{
        padding: 45px 0 41px;
        border-top: 1px dashed #cccccc3b;
        position: relative;
        z-index: 1;
    }
    .footer-links h3{
        color: #fff;
        margin-bottom: 50px;
    }
    .footer-links li{
        padding: 0 0 10px 0px;
        position: relative;
        margin-bottom: 10px
    }
    .footer-links li a{
        color: #fff;
        opacity: 0.8;
    }
    .footer-links li a:hover{
        opacity: 1;
    }
    .footer-links li a i{
        padding-left: 5px;
        transition: all ease-in-out 0.3s;
    }
    .footer-links-list li a:hover i{
        padding-left: 10px;
    }
    .footer-links li:last-child{
        padding-bottom: 0;
        margin-bottom: 0;
    }
    .copyright{
        position: relative;
        z-index: 1;
        padding: 0px 0 30px;
    }

    .copyright-content p{
        margin-bottom: 0;
        display: inline-block;
        color: #fff;
    }
    .copyright-content a{
        color: #ffc63f;
    }
    .footer-recent-post li{
        padding: 0;
        margin-bottom: 15px;
    }
    .footer-recent-post li:last-child{
        margin-bottom: 0;
    }
    .footer-recent-post li:before,
    .footer-social-links li:before{
        display: none;
    }
    .recent-post-item{
        display: flex;
    }
    .recent-post-image{
        width: 27%;
    }
    .recent-post-content{
        flex: 1 auto;
        padding-left: 15px;
    }
    .recent-post-content h4{
        color: #fff;
        margin-bottom: 5px;
        font-weight: 300;
    }
    .recent-post-content p{
        color: #ffc63f;
        margin-bottom: 0;
        font-size: 13px;
    }
    .footer-social-links li{
        padding: 0;
        display: inline-block;
        margin: 0px 20px 0 0;
    }
    .footer-instagram li{
        padding: 0;
        display: inline-block;
        width: 32.33%;
        margin: 0 0 4px 0;
    }
    li.social-icon{
        margin-right: 15px;
        font-size: 20px;
    }
    li.social-icon a i{
        padding: 0;
    }
    .footer-about p{
        color: #fff;
        margin: 20px 0;
    }
    .about-logo img{
        width: auto;
    }
    .about-location li{
        color: #fff;
    }
    .about-location li i{
        color: #ffc63f;
        padding-right: 10px;
    }
    .footer-social-links{
        margin-top: 20px;
    }
    .payment-content{
        text-align: right;
    }
    .payment-content li{
        display: inline-block;
        margin: 0 0px 0 10px;
        color: #fff;
    }
    .payment-content li img{
        width: 30px;
    }

    @media(max-width: 991px){

        .newsletter form{width: 60%;}

        .footer-margin {margin-bottom: 30px;}

        .footer-instagram li {
            width: 31.33%;
        }

        .recent-post-content{padding-left: 6px;}
    }

    @media(max-width: 640px){
        footer .section-title{padding: 0;}

        .newsletter form{width: 100%;}
    }

    @media(max-width: 479px){
        .copyright .col-xs-6{width: 100%; text-align: center;}

        .footer-links{text-align: center;}

        .payment-content{text-align: center;}

        .payment-content li{margin: 0;}

        .copyright-content {margin-bottom: 10px;}
    }

    #back-to-top {
        position: fixed;
        z-index: 1000;
        bottom: 20px;
        right: 20px;
        display: none;
    }
    #back-to-top a {
        display: block;
        width: 40px;
        height: 40px;
        border:1px solid #ccc;
        background: #fff;
        position: relative;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        -webkit-transition: 0.2s all linear;
        -moz-transition: 0.2s all linear;
        -o-transition: 0.2s all linear;
        transition: 0.2s all linear;
    }
    #back-to-top a:after{
        position: absolute;
        content: '\f176';
        font-family: 'fontawesome';
        font-size: 20px;
        color: #005294;
        top: 5px;
        left: 15px;
        z-index: 1;
        font-weight: 500;
    }


    /* ====================== */
    /*  Detail page */
    /* ====================== */
    .detail-info-content{
        margin-bottom: 20px;
    }

    .detail-content .in_th_brdr_img_030 > .carousel-indicators li img{height: 100%;}

    .detail-info span.bold{
        font-size: 40px;
        color: #D60D45;
    }
    .detail-info-content .deal-rating{
        margin: 0px
    }
    .detail-info-content p.detail-info-price{
        display: inline-block;
        float: right;
        margin: 0;
    }
    .detail-info-content h2{
        margin-bottom: 0px;
        display: inline-block;
        text-transform: uppercase;
    }
    .detail-info-content table{
        margin-bottom: 21px;
    }
    .detail-title{
        position: relative;
        overflow: hidden;
        margin-bottom: 30px;
    }
    .detail-title h3,
    .detail-title h4{
        display: inline-block;
        margin: 0;
        padding-right: 20px;
        border: 1px solid #f1f1f1;
        padding: 8px 16px;
        background: #fbfbfb;
    }
    .sidebar-item .detail-title h3{
        padding: 5px 15px;
    }
    .sidebar-item-dark .detail-title h3{
        background: #005294;
        color: #fff;
        border: none;
    }
    .detail-title:after{
        position: absolute;
        top: 51%;
        content: '';
        background: #f1f1f1;
        height: 1px;
        width: 100%;
    }
    .detail-box{
        margin-bottom: 30px;
    }
    .detail-box:last-child{
        margin: 0;
    }
    .description-content {
        border: 1px solid #f1f1f1;
        padding: 15px;
    }
    .description-content p:last-child{
        margin-bottom: 0;
    }
    .detail table{
        width: 100%;
        margin-top: 10px;
    }
    .detail table td{
        padding: 10px;
    }
    td.title{
        font-weight: 500;
    }
    .detail table tr{
        margin-bottom: 10px;
        border: 1px solid #f1f1f1;
    }
    .detail table tr:last-child{
        margin-bottom: 0;
    }
    .detail table td ul li{
        margin-bottom: 5px;
        width: 49%;
        display: inline-block;
    }
    .detail table td ul li:last-child{
        margin-bottom: 0;
    }
    .detail table td i{
        width: 20px;
        color: #005294;
    }
    .detail table tr:nth-child(even){
        background: #fbfbfb;
    }
    td.excludes ul li i{
        color: #D60D45;
    }

    .flag-wrapper {
        margin-bottom: 10px;
        margin-top: 15px;
    }
    .flag{
        font-size: 18px;
        color: #333;
        font-weight: 600;
        transition : all ease-in-out 0.3s;
    }
    .day-wrapper {
        position: absolute;
        height: 100%;
        width: 60px;
        background: #f1f1f1;
        left: 0;
        z-index: 1;
        text-align: center;
        transition: all ease-in-out 0.3s;
        top: 0;
    }
    .timeline li:hover .day-wrapper{
        background: #D60D45;
    }
    .timeline li:hover .flag{
        color: #D60D45;
    }
    .day-wrapper span {
        color: #005294;
        font-weight: 600;
        font-size: 32px;
        line-height: 2;
        background: #fff;
        width: 100%;
        display: inline-block;
    }
    .desc p:last-child{
        margin-bottom: 0;
    }
    .map-frame{
        background: #ffff;
        padding: 15px 15px 10px;
        border: 1px solid #f1f1f1;
    }
    .map-frame iframe{
        height: 350px;
        width: 100%;
        frameborder: 0;
    }
    /*
    sidebar*/
    #sidebar-sticky{
        margin-bottom: 70px;
    }
    .detail-tabs #sidebar-sticky{
        margin-bottom: 0;
    }
    .sidebar-item{
        border: 1px solid #f1f1f1;
        box-shadow: 0px 0px 20px #cccccc57;
        margin-bottom: 30px;
        padding: 15px;
    }
    .sidebar-item-dark{
        background: #333;
    }
    .sidebar-item-dark .detail-title h4{
        color: #fff;
        background: #333;
    }
    .sidebar-content li:last-child{
        margin-bottom: 0;
    }
    .sidebar-item .detail-title{
        margin-bottom: 15px;
    }
    .tour-details ul li span{
        color: #D60D45;
        font-weight: 600;
    }
    .sidebar-socialicon{
        padding-bottom: 5px;
    }
    .share-links li{
        display: inline-block;
        margin-bottom: 0;
        float: left;
        width: 50%;
        margin: 0 0 10px 0;
    }
    .share-links li span{
        font-size: 15px;
    }
    .share-links li.social-icon a i{
        font-size: 15px;
        height: 30px;
        width: 30px;
        border-radius: 50%;
        border: 1px solid #ccc;
        line-height: 2;
        margin-right: 5px;
        text-align: center;
        color: #fff;
        background: #38A1F3;
    }
    .share-links li.social-icon a i.fa-facebook{
        background: #3C5A99;
    }
    .share-links li.social-icon a i.fa-instagram{
        background: #F77737;
    }
    .share-links li.social-icon a i.fa-youtube{
        background: #FF0000;
    }
    .support-content h4{
        margin-bottom: 0px;
    }
    .support-content p{
        margin: 0;
        color: #D60D45;
    }
    .sidebar-package-content{
        background: inherit;
        padding: 15px 0 0 0;
        text-align: center;
    }

    .sidebar-package-content p{
        display: block;
        margin:8px 0px 15px;
    }

    .sidebar-item input,
    .sidebar-item textarea,
    .sidebar-item input .form-control{
        padding: 10px !important;
        font-size: 13px;
    }
    .sidebar-item textarea{
        height: 100px;
    }
    .sidebar-item .comment-btn .btn-blue{
        display: block;
        width: 100%;
        text-align: center;
        color: #fff;
    }
    .sidebar-helpline{
        background: url(../images/adbg.jpg) no-repeat;
        background-size: cover;
        position: relative;
        padding: 30px;
    }
    .sidebar-helpline:after{
        position: absolute;
        content: '';
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        background: rgba(0,0,0,0.5);
    }
    .sidebar-helpline-content{
        position: relative;
        z-index: 1;
    }
    .sidebar-helpline-content h3,
    .sidebar-helpline-content p{
        color: #fff;
    }
    .sidebar-helpline-content p:last-child{
        margin-bottom: 0;
    }
    .sidebar-helpline-content i{
        margin-right: 5px;
    }
    .sidebar-content .range-slider{
        margin: 20px 0 0;
    }
    .range-slider .ui-slider-range.ui-widget-header.ui-corner-all.whole{
        background: #ccc;
    }
    .comment-item{
        display: flex;
        border: 1px solid #f1f1f1;
        padding: 20px;
        margin-bottom: 30px;
    }
    .comment-image {
        flex: 0 1 75px;
        padding: 0 20px 0 0;
    }
    .detail-content .comment-image{
        padding: 0;
    }
    .comment-item:last-child{
        margin-bottom: 0;
    }
    .comment-image{
        text-align: center;
    }
    .comment-image img{
        overflow: hidden;
        border-radius: 50%;
        width: 75px;
        height: 75px;
    }
    .comment-reply .comment-image img{
        height: 50px;
        width: 50px;
    }
    .comment-image h4{
        margin: 10px 0 0 0;
    }
    .comment-desc{
        margin-bottom: 20px;
    }
    .comment-reply .comment-desc{
        margin-bottom: 0;
    }
    .comment-desc h4{
        display: inline-block;
    }
    .comment-desc p{
        margin: 0;
    }
    span.comment-date{
        display: block;
        font-size: 12px;
        margin-bottom: 7px;
    }
    .comment-image a.btn-blue{
        font-size: 12px;
        padding: 5px 15px;
    }
    .comment-desc .deal-rating{
        display: inline-block;
        margin: 0 0 15px 0;
    }
    span.travel-date{
        float: right;
        font-size: 12px;
    }
    span.bold{
        font-weight: 500;
    }
    .comment-btn{
        margin-top: 10px;
    }
    .comments-form textarea,
    .comments-form input{
        background: #fff;
    }
    .sidebar-slider .slick-prev{
        left: 0;
    }
    .sidebar-slider .slick-next{
        right: 0;
    }
    .event-list li{
        border-bottom: 1px dashed #eee;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }
    .event-list li:last-child{
        border-bottom: none;
        padding-bottom: 0;
        margin-bottom: 0;
    }
    .event-list li a{
        color: #555;
    }
    .event-list li a:hover{
        color: #0D74BA;
    }
    .comment-reply{
        background: #fff;
        margin-bottom: 10px;
    }

    @media(max-width: 991px){
        #sidebar-sticky{margin: 30px 0 0;}
    }

    @media (max-width: 567px){

        .comment-image {
            margin-bottom: 10px;
        }

        .comment-item {
            display: block;
            text-align: center;
        }

        span.travel-date, .comment-desc .deal-rating {
            float: none;
            display: block;
            text-align: center;
        }
    }

</style>
