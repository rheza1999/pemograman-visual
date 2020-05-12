<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal Javascript</title>    
    <!-- <script>
        document.addEventListener('DOMContentLoaded',function(){
            document.getElementById("hello").addEventListener('click',function(){
                // document.getElementById("hello").innerHTML = 'Hello Javascript';
                this.innerHTML = 'Hello Javascript';
            });
        });        
    </script> -->
</head>
<body>
    <h1 id="hello">Hello World</h1>

    <script>
        document.getElementById("hello").addEventListener('click',function(){
            // document.getElementById("hello").innerHTML = 'Hello Javascript';
            this.innerHTML = 'Hello Javascript';
        });
    </script>
</body>
</html>