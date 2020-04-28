<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector</title>
    <style>
        #biru{
            background-color:blue;
        }
        #merah{
            background-color:red;
        }

        h1.biru {
            background-color:blue;
        }

        p.biru {
            color: blue;
        }

        * {
            text-decoration: underline;
        }

        h1, p {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <!-- 1. ID Selector -->
    <!-- <h1>This is Heading</h1>
    <h1 id="biru">This is Heading</h1>
    <h1 id="merah">This is Heading</h1>
    <h1>This is Heading</h1> -->

    <!-- 2. Class Selector -->
    <h1 class="biru">This is Heading</h1>
    <h1>This is Heading</h1>
    <h1 class="biru">This is Heading</h1>
    <h1>This is Heading</h1>

    <h2>This is Heading 2</h2>
    <p class="biru">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, aspernatur, accusamus error rerum consectetur autem repellendus nam ex tenetur eveniet nulla? Laudantium omnis sit animi et nemo possimus architecto ipsa?</p>
</body>
</html>