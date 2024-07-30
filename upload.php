HTML

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h2>Carica un file</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Seleziona file da caricare:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Carica File" name="submit">
    </form>
</body>
</html>

PHP
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "doc/"; // Directory dove verrà salvato il file caricato
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Controllo se il file è un'immagine effettiva o un fake
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "Il file è un'immagine - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Il file non è un'immagine.";
            $uploadOk = 0;
        }
    }

    // Controllo se il file esiste già
    if (file_exists($target_file)) {
        echo "Il file esiste già.";
        $uploadOk = 0;
    }

    // Controllo la dimensione del file
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Il file è troppo grande.";
        $uploadOk = 0;
    }

    // Permetto solo certi formati di file
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sono permessi solo file JPG, JPEG, PNG e GIF.";
        $uploadOk = 0;
    }

    // Controllo se $uploadOk è impostato a 0 da un errore
    if ($uploadOk == 0) {
        echo "Spiacente, il tuo file non è stato caricato.";
    // se tutto è ok, provo a caricare il file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Il file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " è stato caricato.";
        } else {
            echo "C'è stato un errore nel caricamento del tuo file.";
        }
    }
}
?>
