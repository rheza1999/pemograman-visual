<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Console</title>
</head>
<body>
    <p>Hasil 1 + 3 ?</p>
    <button id='btnHitung'>Hitung</button>

    <script>
        var btnHitung = document.getElementById('btnHitung');

        btnHitung.addEventListener('click',function(){
            console.log('Hasil 1 + 3 adalah ' + (1+3) );
        });
    </script>
</body>
</html>