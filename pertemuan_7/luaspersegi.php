<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Persegi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("navbar.php") ?>

    <div class="container">
        <form action="">
            <label for="sisi">Sisi</label>
            <input type="number" id="sisi">

            <input type="submit" value="Hitung" id="btnhitung">
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
            
            document.getElementById("btnhitung")
                .addEventListener("click",function(e){
                e.preventDefault();

                var luas;
                var sisi = document.getElementById("sisi").value;

                luas = sisi * sisi;

                document.getElementById("hasil").value = luas;
            });
        });
    </script>
</body>
</html>