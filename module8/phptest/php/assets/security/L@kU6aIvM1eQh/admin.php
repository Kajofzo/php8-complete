<?php
session_start();
include "../../../assets/includes/connection.php"; 

if (!isset($_SESSION['username'])) {
    header("Location: ../security\L@kU6aIvM1eQh\login.php");
    exit;
}

if ($data->setFetchMode(PDO::FETCH_ASSOC) > 0) {
    // output data of each row
    foreach ($data as $row) {
        echo $row['id'] . " " . $row['Merk'] . $row['Type'] . "<br>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>

    <div>
        <h2>Add product</h2>
        <form action="admin.php" method="post">
            <input type="text" name="Merk" placeholder="Merk" required><br>
            <input type="text" name="Type" placeholder="Type" required><br>
            <input type="text" name="Bouwjaar" placeholder="Bouwjaar" required><br>
            <input type="text" name="Prijs" placeholder="Prijs" required><br>
            <input type="text" name="Kleur" placeholder="kleur" required><br>
            <input type="text" name="img" placeholder="img" required><br>
            

            <input type="submit" name="submit" value="submit" required><br>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $Merk = $_POST['Merk'];
                $Type = $_POST['Type'];
                $Bouwjaar = $_POST['Bouwjaar'];
                $Prijs= $_POST['Prijs'];
                $Kleur = $_POST['Kleur'];
                $img = $_POST['img'];
                $sql = "INSERT INTO producten (Merk, Type, Bouwjaar, Prijs, Kleur, img) VALUES ('$Merk', '$Type', '$Bouwjaar','$Prijs', '$Kleur', '$img')";
                $pdo->exec($sql);
                
                header('Location: redirect.php'); 
                exit();
            }
        ?>
        <h2>Delete product</h2>
        
        <form action="admin.php" method="post">
            <input type="text" name="id" placeholder="id" required><br>
            <input type="submit" name="delete" value="delete"><br>
        </form>
        <?php
            if(isset($_POST['delete'])){
                $id = $_POST['id'];
                $sql = "DELETE FROM producten WHERE id = '$id'";
                $pdo->exec($sql);

                header('Location: redirect.php'); 
                exit();
            }
        ?>
        <h2>Edit product</h2>
        <form action="admin.php" method="post">
            <input type="text" name="id" placeholder="id" required><br><br>
            <input type="text" name="Merk" placeholder="Merk" required><br>
            <input type="text" name="Type" placeholder="Type" required><br>
            <input type="text" name="Bouwjaar" placeholder="Bouwjaar" required><br>
            <input type="text" name="Prijs" placeholder="Prijs" required><br>
            <input type="text" name="Kleur" placeholder="kleur" required><br>
            <input type="text" name="img" placeholder="img" required><br>
            

            <input type="submit" name="edit" value="edit" required><br>
        </form>
        <?php
           

            if(isset($_POST['edit'])){
                $id = $_POST['id'];
                $Merk = $_POST['Merk'];
                $Type = $_POST['Type'];
                $Bouwjaar = $_POST['Bouwjaar'];
                $Prijs= $_POST['Prijs'];
                $Kleur = $_POST['Kleur'];
                $img = $_POST['img'];
                $sql = "UPDATE producten SET Merk = '$Merk', Type = '$Type', Bouwjaar = '$Bouwjaar', Prijs = '$Prijs', Kleur = '$Kleur', img = '$img' WHERE id = '$id'";
                $pdo->exec($sql);
                
                header('Location: redirect.php'); 
                exit();
            }
        ?>

        <div class="return"><a href="../../../index.php">return</a></div>
        <style>
        .return {
            font-size: 16px;
            font-weight: bold;
            color: inherit;
            text-decoration: none;
            cursor: pointer;
            background-color: gray;
            padding: 6px 12px;
            display: inline-block;
            border: none;
            margin-top: 10px;
        }

        .return a {
            color: inherit;
            text-decoration: none;
        }
    </style>

        </div>
</body>
</html>