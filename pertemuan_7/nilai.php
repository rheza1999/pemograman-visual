<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Nilai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("navbar.php") ?>

    <div class="container">
        <form action="">
            <label for="kehadiran">Kehadiran</label>
            <input type="number" id="kehadiran">

            <label for="tugas">Tugas</label>
            <input type="number" id="tugas">

            <label for="mid">MID</label>
            <input type="number" id="mid">

            <label for="uas">UAS</label>
            <input type="number" id="uas">

            <input type="submit" value="Hitung" id="btnHitung">
        </form>
    </div>    

    <div class="container">
        <form action="">
            <label for="nilai">Nilai</label>
            <input type="number" id="nilai">

            <label for="angka">Angka</label>
            <input type="text" id="angka">
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded",function(){

            document.getElementById("btnHitung")
                .addEventListener("click",function(e){
                e.preventDefault();
                
                var nilai;
                var kehadiran = document.getElementById("kehadiran").value;
                var tugas = document.getElementById("tugas").value;
                var mid = document.getElementById("mid").value;
                var uas = document.getElementById("uas").value;
                
                nilai = (0.1 * kehadiran) + (0.2 * tugas) + (0.3 * mid) + (0.4 * uas);


                document.getElementById("nilai").value = nilai;
                document.getElementById("angka").value = cariAngka(nilai);
            })
        });

        function cariAngka(nilai){
            var hasil = "" ;
            if(nilai <= 50){
                hasil = "E";
            }else if(nilai <=60){
                hasil = "D";
            }else if(nilai <= 76){
                hasil = "C";
            }else if(nilai <= 86){
                hasil = "B";
            }else if(nilai <= 100){
                hasil = "A";
            }else{
                hasil = "NA";
            }

            return hasil;
        }
    </script>
</body>
</html>