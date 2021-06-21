

<?php 
 $testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga?";
 $word = $_GET["word"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
</head>
<body>
    <h1>TITOLO</h1>
    <p><?php echo str_replace($word, "* * *", $testo) ?></p>
    <!-- str_replace(porzioneDaModificare, conCosa, stringa) - -->
    <span style="color:red">
        <?php
            Var_dump($testo);
        ?>
    </span>
</body>
</html>