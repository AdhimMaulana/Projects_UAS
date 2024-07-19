<?php
include '../Operasi/koneksi.php';

// Ambil semua data dari tabel musik
$sql = "SELECT * FROM musik";
$result = $db->query($sql);

// Define the base URL for your uploads directory
$base_url = "../Operasi/uploads.php"; // Adjust this path according to your project structure
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Music</title>
    <link rel="stylesheet" href="../CSS/forms.css">
    <style>
        img { max-width: 100px; max-height: 100px; }
        video, audio { width: 100px; }
    </style>
</head>
<body>
    <div class="containers">
        <h2>Manage Music Data</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>ID MV</th>
                    <th>Logo</th>
                    <th>Video</th>
                    <th>Musik</th>
                    <th>Deskripsi</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id_mv']; ?></td>
                    <td>
                        <?php
                        $logo_path = $base_url . basename($row['logo']);
                        if (strtolower(pathinfo($logo_path, PATHINFO_EXTENSION)) === 'jpg') {
                            echo "<img src='$logo_path' alt='Logo'>";
                        } else {
                            echo "Invalid logo format";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $video_path = $base_url . basename($row['video']);
                        if (strtolower(pathinfo($video_path, PATHINFO_EXTENSION)) === 'mp4') {
                            echo "<video controls><source src='$video_path' type='video/mp4'>Your browser does not support the video tag.</video>";
                        } else {
                            echo "Invalid video format";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $audio_path = $base_url . basename($row['musik']);
                        if (strtolower(pathinfo($audio_path, PATHINFO_EXTENSION)) === 'mp3') {
                            echo "<audio controls><source src='$audio_path' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
                        } else {
                            echo "Invalid audio format";
                        }
                        ?>
                    </td>
                    <td><?php echo $row['deskripsi']; ?></td>
                    <td>
                        <a href="edit_music.php?id_mv=<?php echo $row['id_mv']; ?>">Edit</a> |
                        <a href="delete_music.php?id_mv=<?php echo $row['id_mv']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$db->close();
?>