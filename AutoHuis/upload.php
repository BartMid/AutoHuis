<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/header.php'; ?>
  <link rel=”canonical” href=”http://www.autohuisdevries.nl/verkopen”/>
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
    <img src="images/tiny/newbannertest.png" alt="banner">
  </div>
  <div class="container">
  <form enctype="multipart/form-data" method="post" action="upload.php">
  <div class="upload_form">
    <h1>Upload</h1>
    <div class="row_left">
    <label for="title_label">Titel</label>
    <input type="text" id="title_label" name="title">
    <label for="descr_label">Beschijving</label>
    <input type="text" id="descr_label" name="description">
    <label for="bouwjr_label">Bouwjaar</label>
    <input type="text" id="bouwjr_label" name="bouwjaar">
    <label for="kilomtr_label">Kilometerstand</label>
    <input type="text" id="kilomtr_label" name="kilometerstand">
    <label for="brandstof_label">Brandstof</label>
    <input type="text" id="brandstof_label" name="brandstof">
    </div>
    <div class="row_right">
    <label for="prijs_label">Prijs</label>
    <input type="text" id="prijs_label" name="prijs">
    <label for="vermogen_label">Vermogen</label>
    <input type="text" id="vermogen_label" name="vermogen">
    <label for="carroserrie_label">Carrosserie</label>
    <input type="text" id="carroserrie_label" name="carroserrie">
    <label for="motorinhoud_label">Motorinhoud</label>
    <input type="text" id="motorinhoud_label" name="motorinhoud">
    <input type="file" class="image_upload" name="image" accept="image/*">
    </div>
    <input type="submit" class="submit" name="submit" value="Plaatsen"/>
  </div>
    </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $dbc = mysqli_connect('localhost', 'devries', 'devries', 'autohuisdevries') or die ('Error!');
        $description = mysqli_real_escape_string($dbc,trim($_POST['description']));
        $title = mysqli_real_escape_string($dbc,trim($_POST['title']));
        $bouwjaar = mysqli_real_escape_string($dbc,trim($_POST['bouwjaar']));
        $brandstof = mysqli_real_escape_string($dbc,trim($_POST['brandstof']));
        $kilometerstand = mysqli_real_escape_string($dbc,trim($_POST['kilometerstand']));
        $prijs = mysqli_real_escape_string($dbc,trim($_POST['prijs']));
        $vermogen = mysqli_real_escape_string($dbc,trim($_POST['vermogen']));
        $carroserrie = mysqli_real_escape_string($dbc,trim($_POST['carroserrie']));
        $motorinhoud = mysqli_real_escape_string($dbc,trim($_POST['motorinhoud']));
        $target = 'uploaded_images/' . time() . $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];
        if (!empty($description)){
            if(move_uploaded_file($temp,$target)){
                $query = "INSERT INTO autos VALUES (0,NOW(),'$description','$target','$title','$bouwjaar','$brandstof','$kilometerstand','$prijs','$vermogen','$carroserrie','$motorinhoud')";
                $result = mysqli_query($dbc,$query) or die ('Error querying.');
                echo '<br>Bestand geüpload';
            }
        }
    }

    ?>

</body>
</html>
