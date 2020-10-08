<html>
<head>
    <link rel="stylesheet" href="main.css">
</head>
<?php include "connect.php"; ?>
<section class="bands-page">
    <h1>
        <?php
            if(isset($_GET['band-name'])){
                $sql = "select * from bands where name = '{$_GET['band-name']}'";
                $result = $conn->query($sql);
                if($result->num_rows == 1){
                    $row =  $result->fetch_assoc();
                    echo $row['name'];
                    $myfile = fopen("test.jpg","w") or die("Unable to create file!");
                    fwrite($myfile,$row["images"]);
                }else{
                    echo "<script type='text/javascript'>alert('SORRY! No such Bands in Database ')</script>";
                    echo "<script>location.href='SearchBands.php'</script>";
                }
            }else{
                echo "Radiohead";
            }
        ?>
    </h1>
    <div class="band-parent-container">
        <div class="band-img">
            <img src="test.jpg" alt="">
            <?php fclose($myfile); ?>
        </div>
        <div class="band-details">
            <?php echo $row["details"]; ?>
        </div>
    </div>
</section>
</html>