<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Output Console</title>
    </head>
    <body>
        <p>Hasil 1 + 3 ?</p>
        <button class="btnHitung">Hitung</button>
        <button class="btnHitung">Hitung</button>
        <button class="btnHitung">Hitung</button>
        <button>Keluar</button>
        <button>Hapus</button>

        <script>
            var btnHitung = document.getElementsByClassName('btnHitung')[0];

            btnHitung.addEventListener('click',function(){
                document.write('Hasilnya 1 + 3 adalah ' + (1+3));
            });
        </script>
    </body>
</html>