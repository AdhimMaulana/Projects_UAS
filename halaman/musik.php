<?php
include '../Operasi/koneksi.php';

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music List</title>
    <link rel="stylesheet" href="style.css"> <!-- Make sure to link your CSS file here -->
</head>
<body>
<div class="musiklist-container">
    <?php
    include '../Operasi/koneksi.php';
    
    $sql = "SELECT * FROM musik";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="musiklist">';
            echo '<img src="' . $row["logo"] . '" alt="Music Cover" class="music-cover">';
            echo '<div class="music-info">';
            echo '<div>';
            echo '<div class="video">' . $row["video"] . '</div>';
            echo '<h4 class="music-title">' . $row["deskripsi"] . '</h4>';
            echo '<p class="artist">Deskripsi: ' . $row["deskripsi"] . '</p>';
            echo '</div>';
            echo '<button class="play-button" onclick="playMusic(\'' . $row["musik"] . '\')"><i class="bx bx-play"></i></button>';
            echo '</div>';
            echo '<audio id="audioPlayer-' . $row["id_musik"] . '">';
            echo '<source src="' . $row["musik"] . '" type="audio/mpeg">';
            echo 'Your browser does not support the audio element.';
            echo '</audio>';
            echo '</div>';
        }
    } else {
        echo "0 results";
    }

    $db->close();
    ?>
</div>

<script>
function playMusic(audioSrc) {
    var audio = new Audio(audioSrc);
    audio.play();
}
</script>
</body>
</html>
