<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include "connect.php"; ?>
    <?php include "navbar.php"; ?>
    <?php include "scripts.php"; ?>
    <section class="main-sec">
        <div class="search-div">
            <form action="about.php" method="get">
                <div class="band-input-container">
                    <input type="text" name="band-name" placeholder="Band Name">
                    <input type="submit" class="btn-search-bands" value="submit">
                </div>
            </form>
        </div>
        <div class="search-btn-container">
            <i class="fas fa-search"></i>
            <!-- <i class="fas fa-times"></i> -->
        </div>
        <div class="wrap-part">
            <div class="img-container" style = "width: 50%;">
                <?php
                    if(isset($_GET['band-name'])){
                        $sql = "select from bands where name = ".$_GET['band-name'];
                    }else{
                        $sql = "select images from bands where id = 1";
                    }
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $myfile = fopen("test.jpg","w") or die("Unable to create file!");
                    fwrite($myfile,$row["images"]);
                ?>
                <img src="test.jpg" style="width: 100%;" alt="">
                <?php
                    fclose($myfile);
                ?>
            </div>
            <div class="details">
            <?php
                    $sql = "select details from bands";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    echo $row["details"];
                ?>
            </div>
        </div>
    </section>
    <script>
        const searchDiv = document.querySelector('.search-div');
        const searchBtn = document.querySelector('.search-btn-container .fa-search');
        searchBtn.addEventListener('click',()=>{
            searchDiv.classList.toggle('open');
        });
        const searchbutton = document.querySelector('.btn-search-bands');
        searchbutton.addEventListener('click',()=>{
            window.location.reload();
        })
    </script>
</body>
</html>