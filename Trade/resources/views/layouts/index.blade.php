<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Bistup</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="./LayoutStyles/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="./../../LayoutStyles/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="./../LayoutStyles/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<div class="wrapper row2" style="background-color: black;">
  <nav id="mainav" class="hoc clear" > 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="{{url('index')}}">Home</a></li>
      <li><a href="{{url('index')}}" >About</a></li>
      <li><a class="drop">Beginners</a>
        <ul>
          <li><a href="{{url('index')}}">Introduction</a></li>
          <li><a href="{{url('index')}}">Price Action Strategy</a></li>
          <li><a href="{{url('index')}}">Fundamentals</a></li>
        </ul>
      </li>
      <li><a class="drop">Advanced Talks</a>
        <ul>
          <li><a href="{{url('index')}}">Forex Politics</a></li>
          <li><a href="{{url('Articles')}}">Articles</a></li>
        </ul>
      </li>
      <li><a class="drop">Trade Setups</a>
        <ul>
          <li><a href="{{url('Dailysetups')}}">Daily Setups</a></li>
          <li><a href="{{url('Weeklysetups')}}">Weekly Setups</a></li>
        </ul>
      </li>
      <li><a href="{{url('Faqs')}}">Forex Faqs</a></li>
      <li><a href="{{url('contact')}}" >Contact</a></li>
      <li><a href="{{url('login')}}" >Login</a></li>

    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

	 @yield('content')

    <!-- footer top -->
    <div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Contact</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fas fa-map-marker-alt"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fas fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="far fa-envelope"></i> info@domain.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Dignissim nibh ut</h6>
      <ul class="nospace linklist">
        <li><a href="#">Natoque penatibus et magnis</a></li>
        <li><a href="#">Dis parturient montes</a></li>
        <li><a href="#">Nascetur ridiculus mus</a></li>
        <li><a href="#">Vestibulum tincidunt nisi</a></li>
        <li><a href="#">Sed eleifend scelerisque</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Vestibulum cras placerat</h6>
      <ul class="nospace linklist">
        <li><a href="#">Maecenas vestibulum molestie</a></li>
        <li><a href="#">Arcu cras sed tincidunt</a></li>
        <li><a href="#">Enim maecenas sed mi dictum</a></li>
        <li><a href="#">Dolor laoreet fringilla</a></li>
        <li><a href="#">Augue curabitur lobortis</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Subscribe To Our Newsletter</h6>
      
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="www.forextrading.com">Forex Trading</a></p>
    <p class="fl_right">Website Designed by <a target="new" href="https://www.twitter.com/AllanKiptalam" title="Allan Kiptalam">KIPTALAM ALLAN</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="./LayoutStyles/scripts/jquery.min.js"></script>
<script src="./LayoutStyles/scripts/jquery.backtotop.js"></script>
<script src="./LayoutStyles/scripts/jquery.mobilemenu.js"></script>
</body>
</html>