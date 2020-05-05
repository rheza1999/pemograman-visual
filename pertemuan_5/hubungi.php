<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Portal Berita</title>
    <link rel="stylesheet" href="stylesaya.css">
</head>
<body>
    <div class="container">
        <div class="col-25">
            <a href="index.php"><img src="images/logo.png" alt=""></a>
        </div>
        <div class="col-75">
            <h1 class="ratatengah">Website Berita</h1>
            <p class="ratatengah">Selamat Datang di Website Berita Saya</p>
        </div>
    </div>

    <div class="menubar">
        <a href="berita.php">Berita</a>
        <a href="hubungi.php" style="float:right">Hubungi Kami</a>
    </div>
      
    <div class="container">
        <div class="row">
            <div class="col-25">
                <label for="">Nama</label>
            </div>
            <div class="col-75">
                <input type="text" class="control">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="">Email</label>
            </div>
            <div class="col-75">
                <input type="text" class="control">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="">Pesan</label>
            </div>
            <div class="col-75">
                <textarea name="" id="" cols="30" rows="10" class="control"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-25"></div>
            <div class="col-75">
                <input type="submit" class="btn">
            </div>
        </div>
    </div>
</body>
</html>