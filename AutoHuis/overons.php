<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/header.php'; ?>
  <link rel=”canonical” href=”http://www.autohuisdevries.nl/over”/>
</head>
  <body>
    <header>
      <div class="header_nav">
        <div class="header_nav-content">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="autos.php">AUTO'S</a></li>
        <img class="header_nav-logo" src="images/New_Logo.png" alt="LOGO">
        <li><a href="contact.php">CONTACT</a></li>
        <li><a class="active" href="overons.php">VERKOPEN</a></li>
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
    <img src="images/tiny/newbannertest.png" alt="banner">
  </div>
  <div class="container">
    <div class="verkopen">
      <h1>VERKOPEN</h1>
      <div class="verkopen-text">
        <h2>Uw auto verkopen?</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
          natoque penatibus et magnis dis parturient montes, nascetur
          ridiculus mus. Donec quam felis, ultricies nec, pellentesque</p>
      </div>
      <div class="verkopen-text">
        <h2>Zorgeloos en veilig</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
          natoque penatibus et magnis dis parturient montes, nascetur
          ridiculus mus. Donec quam felis, ultricies nec, pellentesque</p>
      </div>
    <div class="verkopen_form">
      <h1>Selecteer hieronder uw auto</h1>
      <div class="select">
      <select>
        <option style="display:none;" selected>Kies Merk</option>
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
        <option value="mazda">Mazda</option>
        <option value="nissan">Nissan</option>
        <option value="ford">Ford</option>
      </select>
      </div>
      <div class="select">
      <select>
        <option style="display:none;" selected>Kies Model</option>
        <option value="V40">V40</option>
        <option value="V50">V50</option>
        <option value="V60">V60</option>
        <option value="V70">V70</option>
        <option value="V50">V90</option>
        <option value="XC60">XC60</option>
        <option value="XC70">XC70</option>
        <option value="XV90">XV90</option>
      </select>
    </div>
      <div class="select">
      <select>
        <option style="display:none;" selected>Kies Bouwjaar</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2016">2017</option>
        <option value="2016">2018</option>
      </select>
      </div>
      <div class="verkopen_button"><p>Versturen</p></div>
    </div>
    <!--  <form>
        <input class="input" type="button" value="Inloggen" onClick="passWord()">
      </form> -->
  </div>
  </div>

  <?php include 'includes/footer.php'; ?>

  <script src="script.js"></script>
  </body>
</html>
