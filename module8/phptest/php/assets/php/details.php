<?php
include '../includes/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Product Details</title>
  <link rel="stylesheet" href="../css/details.css"> <!-- Link naar extern CSS-bestand voor de stijlen van de pagina -->
</head>

<body>
<?php
     $sql = "SELECT * FROM producten";
     $result = $pdo->query($sql);
     if ($result->rowCount() > 0) {
        // output data of each row
        foreach ($result as $row) {
            if ($row["id"] == $_GET["id"]) {
                echo '<div class="product">';
                echo '<a href=""><img src="../img/' . $row["img"].'"></a>';
                echo '<div class="panel">';
                echo '<h5>' . $row["Merk"] . ' ' . $row["Type"] . '</h5>';
                echo '<h6 class="subheader">Prijs: €' . number_format($row["Prijs"], 0, ',', '.') . '</h6>'; // Formatteer de prijs
                echo '<h6 class="subheader">Bouwjaar: ' . $row["Bouwjaar"] . '</h6>';
                echo '</div>';
                echo '</div>';
            }
        }
    }   
?>
</body>

</html>
