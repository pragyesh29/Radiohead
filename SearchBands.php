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
            background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url("https://www.rollingstone.com/wp-content/uploads/2018/06/pink-floyd-1973-32d763d9-8deb-4cd8-a287-92ae0de7df3a.jpg") center no-repeat;
            background-size: cover;
        }
        .search-bar{
            padding: 10px;
            width: 100%;
        }
        .submit{
            padding: 0.7rem;
            background-color: #FFC0CB;
            font-family: 'Courier New', Courier, monospace;
            border: none;
            font-weight: bold;
            width: 100%;
            margin-top: 1rem;
            text-transform: uppercase;
            border-radius: 10px;
            transition: 600ms ease;
        }
        .submit:hover{
            background-color: transparent;
            border: 0.5px solid #FFC0CB;
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
        <form action="Rootabout.php" method="get">
            <input class="search-bar" type="text" name="band-name" placeholder="Enter Band Name...">
            <input class="submit" type="submit" value="search">
        </form>
    </section>
</body>
</html>