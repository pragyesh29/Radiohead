<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Bands</title>
    <style>
        html,body{
            margin: 0;
        }
        h3{
            letter-spacing: 5px;
            font-weight: bold;
            color: white;
        }
        section{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url("images/Pink_Floyd.jpg") center no-repeat;
            background-size: cover;
        }
        .search-bar{
            padding: 10px;
            width: 100%;
        }
        .submit{
            padding: 5px 0px;
            width: 100%;
            background-color: #888;
            color: black;
            margin-top:10px;
            border: 2px solid #888;
            font-size: 20px;
            transition: 600ms ease;
            text-transform: uppercase;
        }
        .submit:hover{
            background-color: transparent;
            color: #fff;
            transition: 600ms ease;
        }
    </style>
</head>
<body>
    <?php include"navbar.php"; ?>
    <section>   
        <!-- <img src="images/radiohead-bear.png" alt="bear"> -->
        <h3>RADIOHEAD</h3>
        <form action="bands.php" method="get">
            <input class="search-bar" type="text" name="band-name" placeholder="Enter Band Name...">
            <input class="submit" type="submit" value="search">
        </form>
    </section>
</body>
</html>