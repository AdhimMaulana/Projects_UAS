<?php
include 'koneksi.php';

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    
    // Create directory if it doesn't exist
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    // Function to handle file upload
    function uploadFile($file, $target_dir) {
        $target_file = $target_dir . uniqid() . '_' . basename($file["name"]);
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
            return false;
        }
    }
    
    // Upload files
    $logo = uploadFile($_FILES["logo"], $target_dir);
    $video = uploadFile($_FILES["video"], $target_dir);
    $musik = uploadFile($_FILES["musik"], $target_dir);
    
    if ($logo && $video && $musik) {
        $deskripsi = $_POST['deskripsi'];
        
        // Insert data into musik table
        $sql = "INSERT INTO musik (logo, video, musik, deskripsi) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ssss", $logo, $video, $musik, $deskripsi);
        
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    $db->close();
}
?>