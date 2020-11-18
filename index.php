<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<!doctype html>
<!-- saved from url=(0014)about:internet -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <link rel="stylesheet" href="index.css">
  <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/home.css" />
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
  <link href="https://allfont.net/allfont.css?fonts=montserrat-light" rel="stylesheet" type="text/css" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Lato:400,100,300,700,900|Raleway:400,100,200,300,500,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery-2.2.3.min.js"></script>
  <script>
    //scroll to top on refresh//
window.onbeforeunload = function() {
  window.scrollTo(0, 0);
}

jQuery(document).ready(function($) {

  $(window).load(function() {
    $('.loading').delay(2000).fadeOut('slow', function() {
      $(this).remove();
    });
    setTimeout(function() {
      $('.landing').addClass('loaded');
    }, 2000);
    setTimeout(function() {
      $('body').addClass('loaded');
    }, 2000);

  });

  window.addEventListener('load', function() {
  
    var one = document.querySelector('.one');
    var two = document.querySelector('.two');
    delay = 1000;

    setTimeout(function() {
      $('.content-1').addClass('loaded');
    }, 2000);

    var animation = function() {
      setTimeout(function() {
        one.style.top = '50%';
      }, delay);
      setTimeout(function() {
        one.style.top = '100%';
      }, delay * 5);

      setTimeout(function() {
        two.style.top = '50%';
      }, delay * 6);
      setTimeout(function() {
        two.style.top = '100%';
      }, delay * 11);

      setTimeout(function() {
        three.style.top = '50%';
      }, delay * 12);
      setTimeout(function() {
        three.style.top = '100%';
      }, delay * 17);
    };
    animation();
    setInterval(animation, delay * 18);
  });

  window.onscroll = function() {
    if ($(this).scrollTop() > 1) {
      $('header').addClass("resize");
    } else {
      $('header').removeClass("resize");
    }
  };

  $(window).scroll(function() {
    $('.hideme').each(function(i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window > bottom_of_object) {
        $(this).animate({
          'opacity': '1'
        }, 1250);
      }
    });
  });

  $(".mouseScroll").click(function() {
    $('html, body').animate({
      scrollTop: $(".about").offset().top - 150
    }, 800);
  });

  window.onload = function() {
    $('.button_container').click(function() {
      $('.button_container').toggleClass('active');
      $('.overlay').toggleClass('open');
      $('body').toggleClass('active');
    });
  }

});
  </script>
</head>


<body>

  <!--Desktop Navigation-->
  <span class="desktop">
    <header>
      <span id="logo">SafeTrade</span>
      <nav>
        <a href="#">Home</a>
        <a href="#abt">About</a>
        <a href="#del">Deliverables</a>
        <a href="#team">Team</a>
      </nav>
    </header>
  </span>
  
  <!--Homepage-->
  <div class="wrapper">
    <div class="landing"></div>
  </div>

  <!--Intro text scroll-->
  <div class="content-1">
    <span class="one">SafeTrade.</span>
    <span class="two">Risk-Free Trading.</span>
    
  </div>

  <!--Mouse scroller-->
  <span class="mouseScroll"></span>

  <!--About section-->
  <section class="about" id="abt">
    <div class="hideme">
      <h1>About</h1>
      <div id="mission">
        <p>Many traders invest in stock trading in hopes of gaining wealth only to lose all the money without having prior knowledge about the stock market. SafeTrade is an intuitive user platform that aids amateur investors trade stocks. SafeTrade limits the amount of money that a user can invest and by using risk-free trade the user can get some return on investment if there is a negative result so the user doesn't lose all the money.</p>
      </div>
    </div>
</section>
<section class="about" id="del">
    <div class="hideme">
      <h1>Deliverables</h1>
      <div class="deliverables">
        <a href="https://drive.google.com/file/d/1Ckxi8ME8e5k7RgbsCeM_8Ir_CVCx_daT/view?usp=sharing">NEEDFINDING </a><br><br>
        <a href="https://www.figma.com/file/Ea3Fp5BOvkqVPLnDKPLWer/Low-Fidelity-Prototype">LOW-FIDELITY PROTOTYPE </a><br><br>
        <a href="https://www.figma.com/file/GH3KgD53UhHNJPWIw7dJcW/High-Fidelity-Prototype">HIGH-FIDELITY PROTOTYPE </a><br><br>
        <a href="https://youtu.be/DGR_J4dwM2E">CONCEPT VIDEO</a>
      </div>
    </div>
</section>


<section class="about" id="team">

    <div class="hideme">
      <h1>Team</h1>
      <div id="mission">
        <h3>1. Kethan M V - PES1201701085</h3>
        <h3>2. Kaustubh Raghavan- PES1201700916</h3>
        <h3>3. Priyadith T P - PES1201701324</h3>
        <h3>4. Vihan Murthy - PES1201701603</h3>
      </div>
    </div>
</section>
  

  <script src="js/home.js"></script>

</body>

</html>