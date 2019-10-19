<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
    <head>
    <link rel="stylesheet" type="text/css" href="css/contact_us.css">
    <style type="text/css" >
    @import url("https://fonts.googleapis.com/css?family=Open+Sans");
    .userProfile, .team {
    display: flex;
    }

    :root {
    --userthumb: 75px;
    --arrowSize: 15px;
    }

    body {
    font-family: "Open Sans", sans-serif;
    height: 861px;
    background: linear-gradient(135deg, #d7d9da 2.38%, #ffffff 2.38%, #ffffff 50%, #d7d9da 50%, #d7d9da 52.38%, #ffffff 52.38%, #ffffff 50%);
    background-image: url(../img/header-bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    padding: 0px;
    margin: 0px;
    }
    @media (min-width: 768px){
      body {
      font-family: "Open Sans", sans-serif;
      height:850px;
      background: linear-gradient(135deg, #d7d9da 2.38%, #ffffff 2.38%, #ffffff 50%, #d7d9da 50%, #d7d9da 52.38%, #ffffff 52.38%, #ffffff 50%);
      background-image: url(../img/header-bg.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      padding: 0px;
      margin: 0px;
    }
    }
    .vcenter {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 104vh;
    }
    @media (min-width: 768px){
      .vcenter{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 82vh;
      }
    }
    @media (min-width: 768px) {
    .container {
      max-width: 768px;
      margin: 0 auto;
    }
    }

    .section {

    height: 100%;

    position: relative;
    }
    .section-header {
    padding: 15px 0;
    text-align: center;
    }
    .section-header * {
    color: white;
    text-align: center;
    }
    .section-title {
    margin: 0px;
    text-align: center;
    color: white;
    font-size: 35px;
    position: relative;
    padding-bottom: 10px;
    display: inline-block;
    margin: 0 auto;
    }
    .section-title:after {
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 2px;
    background-color: #fff;
    margin: 0 auto;
    left: 0;
    right: 0;
    }

    .userProfile {
    flex-wrap: wrap;
    align-items: center;
    }
    .userProfile__thumbnail {
    width: var(--userthumb, 75px);
    height: var(--userthumb, 75px);
    flex: 0 0 auto;
    background-color: #f1f1f1;
    margin: 0px;
    padding: 0px;
    }
    .userProfile__image {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    overflow: hidden;
    background-color: #f1f1f1;
    }

    .team {
    padding: 0px;
    list-style: none;
    flex-wrap: wrap;
    }
    @media (max-width: 480px) {
    .team {
      justify-content: center;
    }
    }
    .team__members {
    position: relative;
    padding: 1rem;
    display: none;
    margin-bottom: calc(var(--userthumb) + var(--arrowSize)*2 );
    box-sizing: border-box;
    flex: 0 0 100%;
    filter: grayscale(1);
    }
    @media (min-width: 480px) {
    .team__members {
      padding: 1rem;
      display: inline-block;
      flex: 0 0 20%;
      margin: 0px;
    }
    }
    .team__members:nth-child(9n + 6), .team__members:nth-child(9n + 7), .team__members:nth-child(9n + 8), .team__members:nth-child(9n + 9) {
    left: auto;
    }
    @media (min-width: 480px) {
    .team__members:nth-child(9n + 6), .team__members:nth-child(9n + 7), .team__members:nth-child(9n + 8), .team__members:nth-child(9n + 9) {
      left: 10%;
    }
    }
    .team__members:nth-child(9n + 9) {
    margin: 0px;
    }
    @media (min-width: 480px) {
    .team__members:nth-child(9n + 9) {
      margin-right: 10%;
    }
    }
    .team__members .userProfile {
    justify-content: center;
    position: absolute;
    top: calc(100% + var(--arrowSize));
    margin: 0 auto;
    left: 0;
    right: 0;
    }
    @media (min-width: 480px) {
    .team__members .userProfile {
      position: static;
    }
    }
    .team__members .userProfile__thumbnail {
    position: relative;
    }
    .team__members .userProfile__thumbnail:after {
    content: " ";
    position: absolute;
    left: 50%;
    top: 50%;
    width: var(--userthumb, 50px);
    height: var(--userthumb, 50px);
    transform: translate(-50%, -50%) scale(0);
    background: linear-gradient(90deg, #fff, #f19066);
    background-size: 400% 400%;
    border-radius: 50%;
    z-index: -1;
    transition: all 0.3s linear;
    }
    .team__members:hover, .team__members.team__members--show {
    filter: grayscale(0);
    display: inline-block;
    }
    @media (min-width: 480px) {
    .team__members:hover .team__details, .team__members.team__members--show .team__details {
      transform: translateX(-50%) scale(1, 1);
    }
    }
    .team__members:hover .userProfile__thumbnail:after, .team__members.team__members--show .userProfile__thumbnail:after {
    transform: translate(-50%, -50%) scale(1.2);
    animation: rainbow-border 1.5s linear infinite;
    }
    @media (max-width: 480px) {
    .team__members:hover:not(.team__members--show) {
      display: none !important;
    }
    }
    .team__details {
    margin: 0 auto;
    position: relative;
    transform: translateX(0%) scale(1, 1);
    background: white;
    border: 1px solid #ccc;
    padding: 20px;
    width: 300px;
    text-align: center;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    border-radius: 4px;
    transform-origin: center bottom;
    transition: transform 0.3s cubic-bezier(0.45, 0.05, 0.55, 0.95);
    }
    @media (min-width: 480px) {
    .team__details {
      position: absolute;
      bottom: calc(100% + 15px);
      left: 50%;
      transform: translateX(-50%) scale(0, 0);
    }
    }
    .team__details:after {
    width: var(--arrowSize);
    height: var(--arrowSize);
    position: absolute;
    top: calc(100% - var(--arrowSize)/2);
    background-color: #fff;
    content: " ";
    transform: rotate(45deg);
    left: calc(50% - var(--arrowSize)/2);
    border-bottom: 1px solid #ccc;
    border-right: 1px solid #ccc;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);
    }
    .team__details__summery {
    border-top: 1px dashed #ccc;
    padding-top: 15px;
    font-size: 15px;
    color: #aeaeae;
    }
    .team__meta {
    padding-bottom: 15px;
    }
    .team__meta__title {
    margin: 0px;
    }
    .team__meta__designation {
    margin-top: 10px;
    }

    @keyframes rainbow-border {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
    }
     .myclass{
          color: #fff;
          font-size: 27px;
      }

      @media screen and (max-width: 600px) {
          .myclass{
              font-size: 6vw;
          }
          
      }
    </style>
    </head>
    
    <body>
       <!--  <?php include 'php/components/navigation2.php'; ?> -->
        <div class="vcenter">
  <section class="section">
    <div class="container">
    <header class="section-header">

  <br>
  <br>
  <br>
  
    <h1 class="section-title">Our Team</h1>
    <p>For queries regarding the Event Management contact us:</p>
  </header>
  <ul class="team">
    <li class="team__members">
       <div class="userProfile" >
        <figure class="userProfile__thumbnail">
          <img src="/img/aditya.jpeg" alt="photo" class="userProfile__image">
        </figure>
      

      </div>
      <div class="team__details">
          <header class="team__meta">
            <h3 class="team__meta__title">KUNJAL SHAH</h3>
            <div class="team__meta__designation"> Adminstrator</div>
        </header>
        <div class="team__details__summery">
          <a href="tel:+91 81043 30059">+91 81043 30059</a>
        </div>
      </div>
    </li>
    <li class="team__members">
       <div class="userProfile"  >
        <figure class="userProfile__thumbnail">
         <img src="/img/gunjan.jpeg" alt="photo" class="userProfile__image">
        </figure>
      

      </div>
      <div class="team__details">
          <header class="team__meta">
            <h3 class="team__meta__title">HUZAIFA SHAIKH</h3>
            <div class="team__meta__designation">Chief design head</div>
        </header>
        <div class="team__details__summery">
          <a href="tel:8767291575">8850502791</a>
        </div>
      </div>
      </div>
<?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    
<script type="text/javascript">(function($) {
let members = $(".team__members");
let isHover = false;

setInterval(() => {
  if (!isHover) {
    let min = 1;
    let max = $(members).length;
    let random = Math.floor(Math.random() * (max - min + 1) + min);
    $(".team__members:nth-child(" + random + ")")
      .addClass("team__members--show")
      .siblings()
      .removeClass("team__members--show");
  }
}, 3000);
function mediaSize() { 
    
$(members).hover(

  () => {
    if (window.matchMedia('(min-width: 480px)').matches) {
    $(members).removeClass("team__members--show");
    isHover = true;
      console.log('hover');
    }
  },
  () => {
     if (window.matchMedia('(min-width: 480px)').matches) {
    isHover = false;
     }
  }
);
    
}

  /* Call the function */
  mediaSize();
  /* Attach the function to the resize event listener */
  window.addEventListener('resize', mediaSize, false);  
  })(jQuery);</script>
 <center><p class="myclass"><b><u>Follow us on</u></b></p></center>
 <div class="page-section_contact_us" id="services">
  <div class="stage_contact_us">
    <div class="spinner_contact_us ">
      <a href="https://www.facebook.com/technovanza/">
        <img id="img_contact_us" class="spinner_contact_us_img1" src="images/social_media/3.png" alt="">
      </a>
      <a href="https://www.instagram.com/technovanza/">
        <img id="img_contact_us" class="spinner_contact_us_img2" src="images/social_media/4.png" alt="">
      </a>
      <a href="https://www.twitter.com/Technovanza?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
        <img id="img_contact_us" class="spinner_contact_us_img3" src="images/social_media/5.png" alt="">
      </a>
      <a href="https://www.youtube.com/user/technovanzaVJTI">
        <img id="img_contact_us" class="spinner_contact_us_img4" src="images/social_media/1.png" alt="">
      </a>
    </div>
  </div>
</div>
</lo>
      <!-- <a href="https://www.facebook.com/technovanza/"><i class="fa fa-facebook-official fa-3x" style="color: #3B5998; size: 10;"></i></a>&emsp;&emsp;
      
      <a href="https://www.instagram.com/technovanza/"><i class="fa fa-instagram fa-3x" style="color: #000; size: 10;"></i></a>&emsp;&emsp;
      
      <a href="https://www.twitter.com/Technovanza?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter fa-3x" style="color: #00aced; size: 10;"></i></a>&emsp;&emsp;
      <a href="https://www.youtube.com/user/technovanzaVJTI"><i class="fa fa-youtube-play fa-3x" style="color: red; size: 10;"></i></a> -->

  <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>