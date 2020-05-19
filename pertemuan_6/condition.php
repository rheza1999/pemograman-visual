<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>
<body>
    
    <script>
        var hari = "jumat";

        /* if(hari == "rabu"){
            console.log('Perkuliahan Pemograman Visual');
        }else if(hari == "kamis") {
            console.log('Perkuliahan Lain');
        }else {
            console.log('Libur Perkuliahan');
        } */

        switch (hari) {
            case 'rabu':
                console.log('Perkuliahan Pemograman Visual');
                break;
            case 'kamis':
                console.log('Perkuliahan lain');
                break;    
            default:
                console.log('Libur Perkuliahan');
                break;
        }
    </script>
</body>
</html>