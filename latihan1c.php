<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid Layout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, 50px); /* 3 kolom dengan lebar 50px */
            grid-template-rows: repeat(3, 50px);    /* 3 baris dengan tinggi 50px */
            gap: 10px; /* jarak antara kotak */
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid black;
            font-size: 24px;
            font-weight: bold;
        }

        .empty {
            /* Membuat kotak yang tidak terlihat */
            visibility: hidden;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">A</div>
        <div class="empty"></div>
        <div class="empty"></div>
        
        <div class="box">A</div>
        <div class="box">B</div>
        <div class="empty"></div>

        <div class="box">A</div>
        <div class="box">B</div>
        <div class="box">C</div>
    </div>
</body>
</html>