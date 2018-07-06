<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/header.php'; ?>
  <link rel=”canonical” href=”http://22045.hosts.ma-cloud.nl/AutoHuis/”/>
</head>
  <body>
    <header>
      <div class="header_nav">
        <div class="header_nav-content">
      <ul>
        <li><a class="active" href="index.php">HOME</a></li>
        <li><a href="autos.php">AUTO'S</a></li>
        <img class="header_nav-logo" src="images/New_Logo.png" alt="LOGO">
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="overons.php">VERKOPEN</a></li>
      </ul>
      </div>
    </div>
    <div class="hamburger-nav">
    <label for="menu-toggle">☰</label>
    <input id="menu-toggle" type="checkbox">
    <nav>
	     <ul>
         <li><a href="index.php">HOME</a></li>
         <li><a href="autos.php">OCCASIONS</a></li>
         <li><a href="contact.php">CONTACT</a></li>
         <li><a href="overons.php">VERKOPEN</a></li>
	    </ul>
    </nav>
    </div>
    </header>
    <div class="banner">
    <img src="images/tiny/newbannertest_opt.png" alt="banner">
  </div>
  <div class="homecontainer">
    <div class="content"></div>
    <div class="content1">
      <div id="slideshow">
   <div>
     <img src="images/tiny/slide1.jpg" alt="slide1">
   </div>
   <div>
     <img src="images/tiny/slide2.jpg" alt="slide2">
   </div>
   <div>
     <img src="images/tiny/slide3.jpg" alt="slide3">
   </div>
    </div>
    <div class="content-text">
      <h1>OCCASIONS</h1>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
        natoque penatibus et magnis dis parturient montes, nascetur
        ridiculus mus. Donec quam felis, ultricies nec, pellentesque
        eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
        pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
        In enim justo, rhoncus ut, imperdiet.</p>
        <form action="autos.php">
            <button class="auto_button">ALLE AUTO'S</button>
        </form>
      </div>
    </div>

    <div class="content2">
     <img src="images/tiny/huis.png" alt="huis">
    <div class="content-text">
      <h2>OVER MIJ</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
        natoque penatibus et magnis dis parturient montes, nascetur
        ridiculus mus. Donec quam felis, ultricies nec, pellentesque
        eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
        pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
        In enim justo, rhoncus ut, imperdiet.</p>
        <form action="overons.php">
            <button class="auto_button">LEES MEER</button>
        </form>
      </div>
    </div>

    <div class="content3">
      <img src="images/tiny/slide3.jpg" alt="default">
      <div class="content-text">
        <h3>VERKOPEN</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
          natoque penatibus et magnis dis parturient montes, nascetur
          ridiculus mus. Donec quam felis, ultricies nec, pellentesque
          eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
          pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          In enim justo, rhoncus ut, imperdiet.</p>
          <form action="autos.php">
              <button class="auto_button">LEES MEER</button>
          </form>
        </div>
    </div>
      </div>
        <?php include 'includes/footer.php'; ?>

      <script src="script.js">

      </script>
  </body>
</html>
