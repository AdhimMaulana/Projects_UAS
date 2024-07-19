<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form Musik</title>
    <link rel="stylesheet" href="../CSS/forms.css">
</head>
<body>
    <div class="containers">
        <div class="text">
            Masukkan Data
        </div>
        <form action="../Operasi/data.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="input-data">
                    <label for="logo">Logo</label>
                    <input type="file" id="logo" name="logo" required>
                    <div class="underline"></div>
                </div>
                <div class="input-data">
                    <label for="video">Video</label>
                    <input type="file" id="video" name="video" required>
                    <div class="underline"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <label for="musik">Musik</label>
                    <input type="file" id="musik" name="musik" required>
                    <div class="underline"></div>
                </div>
                <div class="input-data">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" id="deskripsi" name="deskripsi" required>
                    <div class="underline"></div>
                </div>
            </div>
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="submit" value="submit" name="submit">
                </div>
            </div>
        </form>
    </div>
</body>
</html>