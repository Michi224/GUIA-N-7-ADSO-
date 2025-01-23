<?php include("cabecera.php"); ?>

    <?php
    if ($_POST){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $sum = $n1 + $n2;
    }
    echo "<h1> Hola mundo ADSO 2758253 </h1>";
    echo "<h3> Tecnologo en Analisis y Desarrollo de Software (ADSO) </h3>";
    ?>
    <form action="" method="post">
        <label for="">Digite Primer Numero</label>
        <input type="number" name="n1" id="n1"> <br> <br>
        <label for="">Digite Segundo Numero</label>
        <input type="number" name="n2" id="n2"> <br> <br>
        <input type="submit" value="sumar"> 
    </form>

    <input type="text" name="" id="" value="<?php echo $sum; ?>">

<?php include("pie_pagina.php"); ?>