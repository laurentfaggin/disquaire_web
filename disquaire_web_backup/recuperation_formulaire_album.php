<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/album.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="js/pageAlbum.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Page Album</title>
</head>

<body>
    <?php
        $servername = "localhost";
        $username = "root":
        $password = "";
        $dbName = "tp1";

        try{
            $conn = new PDO("mysql:host=$servername; dbname = $dbName", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected succesfully";

            function Valider_Donnees($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $titrePresent = isset($_POST["titre"]);
            $codePresent = isset($_POST["code"]);
            $datePresent = isset($_POST["publication"])
            $genrePresent = isset($_POST["genre"]);

            if ($titrePresent && $codePresent && $datePresent && $genrePresent){
                $titre = Valider_Donnees($_POST["titre"]);
                $code = Valider_Donnees($_POST["code"]);
                $date = Valider_Donnees($_POST["publication"]);
                $genre = $_POST["genre"];
                $photo = $_POST["photo"];

                $sqlRequest = $conn->prepare("INSERT INTO album VALUES ($titre, $code, $date, $genre, $photo)");
                $sqlRequest -> execute();
            }else{
                header('location:pageAlbum.php');
            }
        }catch (PDOException $e){
            echo "error: ".$e->getMessage();
        }
        $conn = null;
    ?> 
</body>
</html>