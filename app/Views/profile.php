<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Web Dasar</title>
    <link rel="stylesheet" href="/profile/CSS/style.css">
</head>

<body>
    <div class="header">
        <div class="navbar">
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./jadwal.html">Jadwal</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="main">
            <div class="img"></div><br>
            <h1> <?= $nama ?> </h1>
            <div class="style">
            <?= $kelas ?> | <?= $npm ?> <br>
            </div>
            <br />
            <div class="style">
                <a href="https://instagram.com/_xxycin?igshid=YmMyMTA2M2Y="><div class="ig"></div></a>
            </div>
        </div>
    </div>

</body>

</html>