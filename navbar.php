<!-- nav height is 10vh -->
<!-- i.e. body's height will be 90vh -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: sans-serif;
        }
        nav{
            height: 10vh;
            background-color: #101D2C;
            position: fixed;
            width: 100vw;
        }
        .nav-links{
            display: flex;
            list-style: none;
            width: 50%;
            height: 100%;
            /* background-color: red; */
            justify-content: space-around;
            align-items: center;
            margin-left: auto;
        }
        .nav-links li a{
            color: white;
            text-decoration: none;
            font-size: 16px;
        }
        @media screen and (max-width: 768px){
            .line{
                width: 30px;
                height: 3px;
                background-color: #fff;
                margin: 5px;
            }
            .nav-links{
                position: fixed;
                background-color: #101D2C;
                height: 100vh;
                width: 100%;
                flex-direction: column;
                /* display: none; */
                clip-path: circle(100px at 90% -15%);
                -webkit-clip-path: circle(100px at 90% -15%);
                transition: all 1s ease-out;
                pointer-events: none;
            }
            .nav-links.open{
                clip-path: circle(1100px at 90% -15%);
                -webkit-clip-path: circle(1100px at 90% -15%);
                pointer-events: all;
            }
            nav{
                position: relative;
            }
            .hamburger{
                position: absolute;
                top: 50%;
                right: 5%;
                transform: translate(-5%,-50%);
                cursor: pointer;
                z-index: 2;
            }
            .nav-links li{
                opacity: 0;
            }
            .nav-links li a{
                font-size: 25px;
            }
            .nav-links li:nth-child(1){
                transition: all 0.7s ease 0.2s;
            }
            .nav-links li:nth-child(2){
                transition: all 0.7s ease 0.4s;
            }
            .nav-links li:nth-child(3){
                transition: all 0.7s ease 0.6s;
            }
            .nav-links li:nth-child(4){
                transition: all 0.7s ease 0.8s;
            }
            li.fade{
                opacity: 1;
            }
        }
    </style>
</head>
    <nav>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="cart.php">Store</a></li>
            <li><a href="SearchBands.php">About</a></li>
            <li><a href="albums.php">Be RadioHead</a></li>
            </ul>
    </nav>
<body>
<script>
    const linksContainer = document.querySelector('.nav-links');
    const burgerbtn = document.querySelector('.hamburger');
    const links = document.querySelectorAll('.nav-links li')
    burgerbtn.addEventListener('click',function(){
        linksContainer.classList.toggle("open");
        links.forEach(item => {
            item.classList.toggle('fade');
        });
    });
</script>
</body>
</html>