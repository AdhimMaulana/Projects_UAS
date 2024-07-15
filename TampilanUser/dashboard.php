<?php
    include "../Operasi/koneksi.php";
    session_start();
    if(isset($_SESSION['sesi_login'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="menu-section">
                <div class="menu-item"><h3>Home</h3></div>
                <div class="menu-item"><h3>Playlist</h3></div>
            </div>
            <div class="auth-section">
                <div class="menu-item"><h3>Sign in</h3></div>
                <div class="menu-item"><h3>Sign up</h3></div>
            </div>
        </aside>
        <main class="main-content">
            <header class="search-bar">
                <input type="text" placeholder="Search">
            </header>
            <div class="filters">
                <button>all</button>
                <button>music</button>
                <button>video</button>
            </div>
            <div class="content">
<<<<<<< HEAD
                <!--- Main content goes here -->
=======
                <!-- Main content goes heres -->
>>>>>>> f650a122101c326314a4dbfb9f6e6701c7ecd803
            </div>
            <footer class="footer">
                <p>@rhythm</p>
            </footer>
        </main>
    </div>
    <div></div>
</body>
</html>
<?php
    }else{
        echo "<script>alert('Maaf, Anda harus login dulu');</script>";
        header('location: login.php');
    }
?>