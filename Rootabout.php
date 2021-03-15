<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="root.css"/>
</head>

<body>
    <h1 class="welcome"></h1>
    <div class="underline"></div>
    <?php //include "navbar.php"; ?>
    <?php include "scripts.php"; ?>
    <section class="section">
        <div class="test">
            <?php echo $_GET["band-name"] ?>
        </div>
    </section>
</body>
<script src="data.js"></script>

</html>