<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Lingkaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("navbar.php") ?>

    <div class="container">
        <form action="">
            <label for="jarijari">Jari Jari</label>
            <input type="number" id="jarijari">

            <input type="submit" value="Hitung" id="btnHitung">
        </form>
    </div>

    <div class="container">
        <form action="">
            <label for="hasil">Hasil</label>
            <input type="number" id="hasil">
        </form>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded",function(){

            document.getElementById("btnHitung")
                .addEventListener("click",function(e){
                e.preventDefault();
                
                var luas;
                var jarijari = document.getElementById("jarijari").value;

                luas = 3.14 * jarijari * jarijari;

                document.getElementById("hasil").value = luas;
            });
        });
    </script>
</body>
</html>