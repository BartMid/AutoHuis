<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/header.php'; ?>
  <link rel=”canonical” href=”http://www.autohuisdevries.nl/autos”/>
</head>
  <body>
    <header>
      <div class="header_nav">
        <div class="header_nav-content">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a class="active" href="autos.php">AUTO'S</a></li>
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
  <div class="occasions">
      <div class="car_title">
      <h1>OCCASIONS</h1>
      </div>
      <div class="sorteren">
      <form method="post" action="autos.php">
        <div class="sorteer">
          <div class="select">
        <select name="sorteermenu">
        <option value="date_desc">Nieuwste Eerst</option>
        <option value="date_asc">Oudste Eerst</option>
        <option value="date_asc">Prijs Oplopend</option>
        <option value="date_asc">Prijs Afdalend</option>
        <option value="date_asc">Bouwjaar Oplopend</option>
        <option value="date_asc">Bouwjaar Afdalend</option>
      </select>
    </div>
    <!--  <input type="submit" name="submit_sort" value="Sorteren"> -->
        </div>
    </form>
    <div class="filter">
      <h2>Merk</h2>
      <input type="radio" name="merk" value="Audi"> Audi<br>
      <input type="radio" name="merk" value="BMW"> BMW<br>
      <input type="radio" name="merk" value="Volkswagen"> Volkswagen<br>
      <input type="radio" name="merk" value="Tesla"> Tesla<br>
      <input type="radio" name="merk" value="Volvo"> Volvo<br>
    </div>
    <div class="filter">
      <h2>Brandstof</h2>
      <input type="radio" name="brandstof" value="Benzine"> Benzine<br>
      <input type="radio" name="brandstof" value="Diesel"> Diesel<br>
      <input type="radio" name="brandstof" value="Gas"> Gas<br>
      <input type="radio" name="brandstof" value="Hybride"> Hybride<br>
      <input type="radio" name="brandstof" value="Overig"> Overig<br>
    </div>
    <div class="filter">
      <h2>Carrosserie</h2>
      <input type="radio" name="carrosserie" value="."> Hatchback<br>
      <input type="radio" name="carrosserie" value="."> Cabriolet<br>
      <input type="radio" name="carrosserie" value="."> Sedan<br>
      <input type="radio" name="carrosserie" value="."> Stationwagon<br>
      <input type="radio" name="carrosserie" value="."> Coupé<br>
      <input type="radio" name="carrosserie" value="."> SUV<br>
    </div>
    <div class="filter">
      <h2>Vermogen</h2>
      <input type="radio" name="vermogen" value="."> &lt 75pk<br>
      <input type="radio" name="vermogen" value="."> 75-150pk<br>
      <input type="radio" name="vermogen" value="."> 150-250pk<br>
      <input type="radio" name="vermogen" value="."> 250-350pk<br>
      <input type="radio" name="vermogen" value="."> &gt 350pk<br>
    </div>
    <div class="filter">
      <h2>Deuren</h2>
      <input type="radio" name="deuren" value="."> 2 t/m 3<br>
      <input type="radio" name="deuren" value="."> 4 t/m 5<br>
      <input type="radio" name="deuren" value="."> 6 of meer<br>
    </div>
    <div class="filter">
      <h2>Transmissie</h2>
      <input type="radio" name="transmissie" value="Handgeschakeld"> Handgeschakeld<br>
      <input type="radio" name="transmissie" value="Automaat"> Automaat<br>
    </div>
    </div>
    <div class="post_field">


      <?php
$column = 'id';
$order = 'DESC';

if(isset($_POST['submit_sort'])){
    switch ($_POST['sorteermenu']){
        case 'date_asc': $column = 'id';
        $order = 'ASC';
        break;
        case 'date_desc': $column = 'id';
        $order = 'DESC';
        break;
    }
}


$dbc = mysqli_connect('localhost', 'devries', 'devries', 'autohuisdevries') or die ('Error!');
if (isset($_POST['submit_search'])) {
    $searchterm = mysqli_real_escape_string($dbc,trim($_POST['searchterm']));
    $searchterm = '%' . $searchterm . '%';
} else {
    $searchterm = '%';
}
$query = "SELECT * FROM autos
WHERE description LIKE '$searchterm'
ORDER BY $column $order";
$result = mysqli_query($dbc, $query);
while ($row = mysqli_fetch_array($result)) {
    $target = $row['target'];
    $date = $row['date'];
    $title = $row['title'];
    $brandstof = $row['brandstof'];
    $bouwjaar = $row['bouwjaar'];
    $prijs = $row['prijs'];
    $vermogen = $row['vermogen'];
      echo '<div class="auto">';
      echo '<div class="auto_post">';
      echo '<img src="' . $target . '" />';
      echo '<h1>' . $title . '</h1>';
      echo '<p>' . $prijs . '<p>';
      echo ' </div>';
      echo ' </div>';
}
mysqli_close($dbc);
?>
</div>
  </div>
    </div>
      <?php include 'includes/footer.php'; ?>
  </body>
</html>
