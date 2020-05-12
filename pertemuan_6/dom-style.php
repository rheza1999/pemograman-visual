<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM Style</title>
</head>
<body>
    <h1>Hello World</h1>
    <button>Rubah Warna Tulisan</button>

    <script>
        var btn = document.getElementsByTagName('button')[0];

        btn.addEventListener('click',function(){
            var h1 = document.getElementsByTagName('h1')[0];

            h1.style.color = 'blue';
            h1.style.backgroundColor = "red"; // background-color
        });
    </script>
</body>
</html>