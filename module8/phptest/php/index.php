<?php
include 'assets/includes/connection.php';
?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>Autos Webshop</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <header>
      <h1>Autos Webshop</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="/module8/phptest/php/assets/php/login.php">login</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>  
      <div class="producten">
        <?php 
          $sql = "SELECT * FROM producten";
          $result = $pdo->query($sql);

          if ($result->rowCount() > 0) {
            // Output data of each row
            while($row = $result->fetch()) {
                echo '<div class="product">';
                echo '<a href=""><img src="assets/img/' . $row["img"].'"></a>';
                echo '<div class="panel">';
                echo '<h5>' . $row["Merk"] . ' ' . $row["Type"] . '</h5>';
                echo '<h6 class="subheader">Prijs: €' . number_format($row["Prijs"], 0, ',', '.') . '</h6>'; // Formatteer de prijs
                echo '<h6 class="subheader">Bouwjaar: ' . $row["Bouwjaar"] . '</h6>';
                echo '<a href="assets/php/details.php?id=' . $row["id"] .  '"><button>' . 'Details</button></a>'; 
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }
                  
        ?>
      </div>
    </main>
  </body>
  </html>
