<?php

header ("Content-Type:text/css");

$color = "#f0f"; // Change your Color Here



function checkhexcolor($color) {
    return preg_match('/^#[a-f0-9]{6}$/i', $color);
}



if( isset( $_GET[ 'color' ] ) AND $_GET[ 'color' ] != '' ) {
    $color = "#" . $_GET[ 'color' ];
}



if( !$color OR !checkhexcolor( $color ) ) {
    $color = "#f0f";
}



?>


body {
    font-size: 16px;
    font-weight: 400;
    line-height: 24px;
    letter-spacing: 1px;
    height: 100%;
    font-family: 'Lato', sans-serif;
}

html,
body {
    height: 100%
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Montserrat', sans-serif;
}

a {
    text-decoration: none;
    -webkit-transition: all 0.4s;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    color: <?php echo $color; ?>;
    font-family: 'Montserrat', sans-serif;
}

img {
    width: 100%;
}

a:hover {
    color: #fff;
    text-decoration: none;
}

a:focus {
    outline: none;
    text-decoration: none;
}

p {
    line-height: 32px;
}

ul,
li {
    margin: 0;
    padding: 0;
}

fieldset {
    border: 0 none;
    margin: 0 auto;
    padding: 0;
}

.no-padding {
    padding: 0
}

.section-padding {
    padding: 70px 0px;
}

.section-title {
    text-align: center;
    margin-bottom: 60px;
}

.section-title h2 {
    margin-top: 0;
    font-weight: 900;
    text-transform: capitalize;
}

.section-title p {
    font-weight: 300;
}


/*
* ----------------------------------------------------------------------------------------
* 02.PRELOADER & BOUNCE CCS STYLE
* ----------------------------------------------------------------------------------------
*/

.preloader-area {
    background: #fff;
    bottom: 0;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 9999;
}

.double-bounce1,
.double-bounce2 {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: <?php echo $color; ?>;
    opacity: 0.6;
    position: absolute;
    top: 50%;
    left: 50%;
    height: 30px;
    width: 30px;
    margin-left: -15px;
    margin-top: -15px;
    -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
    animation: sk-bounce 2.0s infinite ease-in-out;
}

.double-bounce2 {
    -webkit-animation-delay: -1.0s;
    animation-delay: -1.0s;
}

@-webkit-keyframes sk-bounce {
    0%,
    100% {
        -webkit-transform: scale(0.0)
    }
    50% {
        -webkit-transform: scale(1.0)
    }
}

@keyframes sk-bounce {
    0%,
    100% {
        transform: scale(0.0);
        -webkit-transform: scale(0.0);
    }
    50% {
        transform: scale(1.0);
        -webkit-transform: scale(1.0);
    }
}


/*
* ----------------------------------------------------------------------------------------
* 03.HOMEPAGE CSS STYLE
* ----------------------------------------------------------------------------------------
*/

.welcome-area {
    height: 100%;
}

.welcome-image-area {
    position: relative;
    height: 100%;
    background: url(../images/bg/bg.jpg);
    background-size: cover;
    z-index: 1;
}

.parallax-bg {
    background: url(../images/bg/bg1.png);
    background-size: cover;
}

.welcome-image-area:after {
    position: absolute;
    background: rgba(0, 0, 0, .7);
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    content: "";
    z-index: -1;
}

.display-table {
    display: table;
    width: 100%;
    height: 100%;
}

.display-table-cell {
    display: table-cell;
    vertical-align: middle;
}

.header-text {}

.header-text h2 {
    color: #fff;
    font-size: 50px;
    letter-spacing: 5px;
    margin: 0;
    font-weight: 900;
}

.header-text p {
    color: <?php echo $color; ?>;
    text-transform: uppercase;
    letter-spacing: 6px;
    font-size: 12px;
    background: #fff;
    display: inline-block;
    padding: 4px 10px;
    font-weight: 900;
    margin-bottom: 30px;
    margin-left: 25px;
}

.header-top-area {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    z-index: 9999;
    -webkit-transition: all 0.4s ease-out;
    transition: all 0.4s ease-out;
}

.logo {
    padding-top: 28px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

.logo a {
    display: block;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 6px;
    font-weight: 900;
    font-size: 18px;
}

.mainmenu .navbar-nav li a {
    color: #fff;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 1px;
    padding: 30px 15px;
    -webkit-transition: .3s;
    transition: .3s;
    font-weight: 600;
}

.mainmenu .navbar-nav li a:hover {
    background: none;
    color: #fff;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

.nav li a:focus,
.nav li a:hover {
    background: none;
    color: #fff;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

.navbar {
    margin: 0;
}

.menu-bg {
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    background: <?php echo $color; ?>;
}

.menu-bg .logo {
    padding-top: 18px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

.menu-bg .mainmenu .navbar-nav li a {
    color: #fff;
    padding: 20px 15px;
    -webkit-transition: .3s;
    transition: .3s;
}

.menu-bg .mainmenu .navbar-nav li a:hover {
    color: #fff;
}

a.home-btn {
    margin-top: 40px;
    display: inline-block;
    color: #fff;
    padding: 10px 25px;
    text-transform: uppercase;
    font-size: 12px;
    border: 1px solid #fff;
    border-radius: 20px 0;
    margin-right: 10px;
    background: transparent;
}

a.home-btn:hover {
    border: 1px solid #fff;
    background: transparent;
    color: <?php echo $color; ?>;
    background: #fff;
}

a.hire-btn {
    margin-top: 40px;
    display: inline-block;
    color: #fff;
    padding: 10px 25px;
    text-transform: uppercase;
    font-size: 12px;
    border: 1px solid #fff;
    border-radius: 0 20px;
    margin-right: 10px;
    background: transparent;
}

a.hire-btn:hover {
    border: 1px solid #fff;
    background: transparent;
    color: <?php echo $color; ?>;
    background: #fff;
}


/*
* ----------------------------------------------------------------------------------------
* 04.VIDEO BACKGROUND CSS STYLE
* ----------------------------------------------------------------------------------------
*/

.welcome-video-area {
    position: relative;
    height: 100%;
    background-size: cover;
    z-index: 1;
    background-position: center center;
}

.welcome-video-area:after {
    position: absolute;
    background: rgba(0, 0, 0, .5);
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    content: "";
    z-index: -1;
}

.display-table {
    display: table;
    width: 100%;
    height: 100%;
}

.display-table-cell {
    display: table-cell;
    vertical-align: middle;
}


/*
* ----------------------------------------------------------------------------------------
* 05.ABOUT CSS STYLE
* ----------------------------------------------------------------------------------------
*/

.about-text h2 {
    margin-top: 0;
    margin-bottom: 30px;
    font-weight: 900;
}

.about-text p {
    margin-bottom: 20px;
}

.about-text p a {
    display: inline-block;
    background: <?php echo $color; ?>;
    color: #fff;
    padding: 2px 6px;
    text-transform: uppercase;
    font-size: 12px;
    border: 1px solid <?php echo $color; ?>;
    letter-spacing: 5px;
    margin: 0px 5px;
}

.about-text p a:hover {
    background: transparent;
    border: 1px solid <?php echo $color; ?>;
    color: <?php echo $color; ?>;
}
.social-links {
    margin-top: 20px;
}
.social-links ul {
    padding: 0;
    margin: 0;
    list-style: none;
}
.social-links ul li {
    display: inline-block;
    margin: 0px 5px;
}
.social-links ul li a {
    display: block;
    color: <?php echo $color; ?>;
    border: 1px solid #333;
    border-radius: 50%;
    height: 40px;
    width: 40px;
    line-height: 40px;
}
.social-links ul li a:hover {
    color: #333;
    box-shadow: 0 8px 40px 0 rgba(0, 0, 0, 0.08);
}

/*
* ----------------------------------------------------------------------------------------
* 06.SERVICE CSS STYLE
* ----------------------------------------------------------------------------------------
*/
.my-skill-area {
    background: #F9F9F9;
}
.progress-bar-text span {
    float: right
}
.progress-bar-text {
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 3px;
    font-family: 'Dosis', sans-serif;
}
.progress-bar {
    background: #ccc none repeat scroll 0 0;
    box-shadow: 0 0 0;
    height: 2px;
    margin: 0 0 20px;
    position: relative;
    width: 100%;
}
.progress-bar > span {
    background: #<?php echo $color; ?> none repeat scroll 0 0;
    display: block;
    height: 100%;
    width: 0;
}

/*
* ----------------------------------------------------------------------------------------
* 07.WORK PROCESS CSS STYLE
* ----------------------------------------------------------------------------------------
*/
.work-process-area {}
.single-process i {
    font-size: 40px;
    margin-bottom: 10px;
}
.single-process h2 {
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 900;
    margin: 20px 0px;
    color: <?php echo $color; ?>;
}
.single-process p {
    margin-bottom: 0;
}
.single-process-box-left, .single-process-box-right, .single-process-box-middle{
    padding: 25px;
}
.single-process-box-left:hover {
    box-shadow: 0 8px 40px 0 rgba(0, 0, 0, 0.08);
}
.single-process-box-right:hover {
    box-shadow: 0 8px 40px 0 rgba(0, 0, 0, 0.08);
}
.single-process-box-middle:hover {
    box-shadow: 0 8px 40px 0 rgba(0, 0, 0, 0.08);
}
/*
* ----------------------------------------------------------------------------------------
* 08.WORK CSS STYLE
* ----------------------------------------------------------------------------------------
*/
.work {
    background: #F9F9F9;
}
.work-inner .mix {
    display: none;
}
ul.work {
    padding: 0;
    list-style: none;
    margin-left: 8px;
    text-align: center;
}
ul.work li {
    display: inline-block;
    padding: 8px 12px;
    margin: 0 8px;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 400;
    color: <?php echo $color; ?>;
    border: none;
    cursor: pointer;
    font-size: 12px;
}
ul.work li:hover {
    color: <?php echo $color; ?>;
    border: none;
}
ul.work li.active {
    border: none;
    color: <?php echo $color; ?>;
}
.work .item {
    margin-top: 30px;
    position: relative;
}
.work .item img {
    width: 100%;
}
.work .item {
    position: relative;
    overflow: hidden;
}
.work .item .portfolio-overlay {
    background: #2B2D35;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}
.work .item:hover .portfolio-overlay {
    opacity: 0.9;
    transform: scale(0.9);
}
.work .item .portfolio-overlay .portfolio-item {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
.work .item .portfolio-overlay .portfolio-item i {
    background: <?php echo $color; ?>;
    height: 60px;
    width: 60px;
    border-radius: 100%;
    text-align: center;
    font-size: 30px;
    line-height: 60px;
}

/*
* ----------------------------------------------------------------------------------------
* 09.TESTIMONIAL CSS STYLE
* ----------------------------------------------------------------------------------------
*/
.testimonial-area {
    background: #fff;
}
.testimonial-list {}
.single-testimonial {
    padding: 40px 20px;
    background: #FFF;
    border-radius: 10px;
    margin: 0px 20px;
}
.single-testimonial:hover {
    background: #F9F9F9;
    box-shadow: 0 8px 40px 0 rgba(0, 0, 0, 0.08);
}
.single-testimonial h2 {
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 900;
    margin: 20px 0px;
    color: <?php echo $color; ?>;
}
.single-testimonial p {
    line-height: 25px;
}
.single-testimonial img {
    width: 50px;
    margin-top: 20px;
}
.owl-theme .owl-controls {
    margin-top: 30px;
}
.owl-theme .owl-controls .owl-page span {
    display: block;
    width: 10px;
    height: 10px;
    margin: 5px 7px;
    filter: Alpha(Opacity=50);
    opacity: .5;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
    background: <?php echo $color; ?>;
}

/*
* ----------------------------------------------------------------------------------------
* 10.PRICING CSS STYLE
* ----------------------------------------------------------------------------------------
*/
.pricing-area {
    background: #F9F9F9;
}
.pricing-box {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 30px;
    text-align: center;
    border: 1px solid #ccc;
    margin-top: 20px;
}
.pricing-box:hover {
    border: 1px solid rgba(0, 0, 0, 0.6);
    box-shadow: 0 8px 40px 0 rgba(0, 0, 0, 0.08);
}

.pricing-header .plan-title h4 {
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 900;
    margin: 20px 0px;
    color: <?php echo $color; ?>;
}
.pricing-header .plan-price {
    font-size: 20px;
    font-family: "Montserrat", sans-serif;
    margin-bottom: 10px;
    color: #fff;
    background: <?php echo $color; ?>;
    display: inline-block;
    height: 60px;
    width: 100%;
    line-height: 60px;
}
.plan-features {
    margin-top: 40px;
    border-top: 1px dotted #ccc;
}
.plan-features li {
    margin: 10px 0;
    border-bottom: 1px dotted #ccc;
    padding-bottom: 15px;
}
a.learn-more {
    display: inline-block;
    background: <?php echo $color; ?>;
    color: #fff;
    padding: 4px 6px;
    text-transform: uppercase;
    font-size: 12px;
    border: 1px solid <?php echo $color; ?>;
    margin-top: 20px;
}
a.learn-more:hover {
    background: transparent;
    border: 1px solid <?php echo $color; ?>;
    color: <?php echo $color; ?>;
}

/*
* ----------------------------------------------------------------------------------------
* 11.BLOG CSS STYLE
* ----------------------------------------------------------------------------------------
*/
.blog-area {}
.single-blog {
    margin-top: 20px;
    padding-bottom: 25px;
}
.single-blog:hover {
    box-shadow: 0 8px 40px 0 rgba(0, 0, 0, 0.08);
}
.blog-description h4 {
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 900;
    margin: 20px 0px;
    color: <?php echo $color; ?>;
}
.blog-description h6 {
    font-size: 14px;
    font-style: italic;
    color: #333;
}
.blog-description a {
    display: inline-block;
    background: <?php echo $color; ?>;
    color: #fff;
    padding: 4px 6px;
    text-transform: uppercase;
    font-size: 12px;
    border: 1px solid <?php echo $color; ?>;
    margin-top: 20px;
}
.blog-description a:hover {
    background: transparent;
    border: 1px solid <?php echo $color; ?>;
    color: <?php echo $color; ?>;
}

/*
* ----------------------------------------------------------------------------------------
* 12.CONTACT CSS STYLE
* ----------------------------------------------------------------------------------------
*/
.contact-me-area {
    background-color: #F9F9F9;
}
.single-contact-details {
    margin: 5px 0;
    border: 1px solid rgba(204, 204, 204, .5);
    padding: 5px 0;
}
.single-contact-details:hover {
    box-shadow: 0 8px 40px 0 rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(51, 51, 51, .5);
    color: #333;
    -webkit-transition: .3s;
    transition: .3s;
}

.single-contact-details h4 {
    margin-top: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 12px;
}

.single-contact-details span {
    font-size: 30px;
}

.contact-form {
    border-radius: 3px;
    margin-top: 30px;
}
.form-control {
    display: block;
    border: 0px;
    width: 100%;
    height: 45px;
    padding: 5px 0px;
    font-size: 16px;
    line-height: 1.42857143;
    color: #333;
    background-color: transparent;
    background-image: none;
    border-radius: 0px;
    box-shadow: none;
    border-bottom: 1px solid rgba(0, 0, 0, .5);
    margin-bottom: 25px;
}
.form-control:focus {
    border-color: <?php echo $color; ?>;
    outline: 0;
    box-shadow: none;
}
.contact-form input[type='submit'] {
    display: inline-block;
    color: #fff;
    background: <?php echo $color; ?>;
    padding: 10px 25px;
    border: 2px solid rgba(0, 0, 0, .5);
    text-transform: uppercase;
    font-size: 14px;
    border: 1px solid <?php echo $color; ?>;
    border-radius: 0px;
    font-weight: 700;
}
.contact-form input[type='submit']:hover {
    background: transparent;
    border: 1px solid <?php echo $color; ?>;
    color: <?php echo $color; ?>;
    -webkit-transition: all 0.4s;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
}
.btn.active.focus,
.btn.active:focus,
.btn.focus,
.btn.focus:active,
.btn:active:focus,
.btn:focus {
    outline: none;
}
.success {
    background: #50B948 none repeat scroll 0 0;
    color: #fff;
    font-weight: 700;
    padding: 20px;
    text-align: center;
}

.actions{
    margin: 0 0 35px;
}

/*
* ----------------------------------------------------------------------------------------
* 13.FOOTER CSS STYLE
* ----------------------------------------------------------------------------------------
*/
.footer-area {
    background: <?php echo $color; ?>;
    padding: 30px 0px;
    color: #f8f8f8;
}
.footer-area p {
    margin-bottom: 0;
    font-size: 14px;
}

/*
* ----------------------------------------------------------------------------------------
* 14.SINGLE BLOG PAGE CSS STYLE
* ----------------------------------------------------------------------------------------
*/
.single-blog-area {
    background: <?php echo $color; ?>;
    padding: 100px 0px;
}
.single-blog-heading h2 {
    color: #fff;
    text-transform: uppercase;
    font-size: 24px;
}
.single-blog-heading-text h4 a {
    color: #f8f8f8;
}
.comment-section {
    margin-top: 30px;
}
.single-blog-details,
.single-sidebar {
    border-radius: 3px;
    padding-top: 30px;
}
.search input {
    border: 1px solid #e3e8f0;
    box-shadow: none;
    color: #333;
    height: 50px;
    border-radius: 0px;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 10px;
}
.single-sidebar h4 {
    background: <?php echo $color; ?>;
    padding: 10px;
    color: #fff;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 700;
}
a.re-button {
    text-transform: uppercase;
    color: <?php echo $color; ?>;
    font-size: 14px;
    margin-top: 10px;
}
.single-sidebar,
.recent-single {
    margin-bottom: 30px;
}
.single-blog-details h4,
.comment-section h4,
.contact-form h4 {
    margin: 20px 0px;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 900;
    color: <?php echo $color; ?>;
    border-bottom: 1px solid #333;
    padding-bottom: 10px;
}
.single-comment {
    margin-bottom: 20px;
}
.single-comment h5 {
    font-size: 16px;
    font-style: italic;
    color: #777;
}
.single-comment img {
    width: 120px;
}
.recent-single h4 {
    color: #333333;
}
.categories {}
.categories ul {
    padding: 0;
    margin: 0;
    list-style: none;
}
.categories ul li {
    margin-bottom: 10px;
    color: #333333;
}
.categories ul li a {
    color: #333333;
}