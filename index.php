<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design</title>
    <link rel="stylesheet" href="CSS/dashboard.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <ul class="menu-section">
                <li class="menu-item"><a href="index.php?p=musik"><i class="bx bx-home"></i><h3>Home</h3></a></li>
                <hr>
                <li class="menu-item"><a href=""><i class="bx bx-library"></i><h3>Playlist</h3></a></li>
                <hr>
                <li class="menu-item"><a href=""><i class="bx bx-music"></i><h3>Musik</h3></a></li>
                <hr>
            </ul>
            <div class="middle-section">
                <div class="musiklist">
                <img src="https://i1.sndcdn.com/artworks-000384501861-5tufqu-t500x500.jpg" alt="Music Cover" class="music-cover">
                <div class="music-info">
                    <div>
                        <h4 class="music-title">Yorushika</h4>
                        <p class="artist">Artist: N-buna</p>
                    </div>
                    <button class="play-button" id="playButton"><i class="bx bx-play"></i></button>
                </div>
                <audio id="audioPlayer">
                    <source src="audio/yorushika.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                </div>
                <div class="musiklist">
                <img src="https://i1.sndcdn.com/artworks-000384501861-5tufqu-t500x500.jpg" alt="Music Cover" class="music-cover">
                <div class="music-info">
                    <div>
                        <h4 class="music-title">Yorushika</h4>
                        <p class="artist">Artist: N-buna</p>
                    </div>
                    <button class="play-button" id="playButton"><i class="bx bx-play"></i></button>
                </div>
                <audio id="audioPlayer">
                    <source src="audio/yorushika.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                </div>
            </div>
        </aside>
        <main class="main-content">
            <header class="search-bar">
                <div class="search-container">
                    <input type="text" placeholder="Search">
                    <i class="bx bx-search search-icon"></i>
                </div>
                <ul class="auth-menu">
                    <li><a href="#"><i class="bx bx-log-in"></i> Sign in</a></li>
                    <li><a href="#"><i class="bx bx-user-plus"></i> Sign up</a></li>
                    <li><a href="#"><i class="bx bx-user"></i> Profile</a></li>
                </ul>
            </header>
            <div class="filters">
                <button><i class="bx bx-library"></i>all</button>
                <button><i class="bx bx-music"></i>music</button>
                <button><i class="bx bx-video"></i>video</button>
            </div>
            <div class="content">
                <?php
                $halaman_dir='halaman';
                if(!empty($_GET['p'])){
                    $halaman = scandir($halaman_dir,0);
                    unset($halaman[0], $halaman[1]);
                    $p=$_GET['p'];
                    if(in_array($p.'.php', $halaman)){
                        include($halaman_dir . '/' . $p . '.php');
                    }else{
                        echo 'Halaman Tidak Ditemukan';
                    }
                }else{
                    include($halaman_dir.'/musik.php');
                }
                ?>
            </div>
            <footer class="footer">
                <p>@StreamTunes</p>
            </footer>
        </main>
    </div>
    <script>
        const playButton = document.getElementById('playButton');
        const audioPlayer = document.getElementById('audioPlayer');

        playButton.addEventListener('click', function() {
            if (audioPlayer.paused) {
                audioPlayer.play();
                playButton.innerHTML = '<i class="bx bx-pause"></i>';
            } else {
                audioPlayer.pause();
                playButton.innerHTML = '<i class="bx bx-play"></i>';
            }
        });
    </script>
</body>
</html>