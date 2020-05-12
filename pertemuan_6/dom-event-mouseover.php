<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM Element Mouse Over</title>
</head>
<body>
    <h1>Hello World</h1>

    <script>
        var h1 = document.getElementsByTagName('h1')[0];

        h1.addEventListener('mouseover',function(){
            this.innerHTML = 'Hello Javascript';
            this.style.backgroundColor = "blue";
        });

        h1.addEventListener('mouseout',function(){
            this.innerHTML = 'Hello World';
            this.style.backgroundColor = "white";
        });
    </script>
</body>
</html>