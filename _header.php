
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina;?></title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/<?php echo $tipoPagina;?>.css">
</head>

<?php
if( $tipoPagina == 'home'){
?>
<header>
    <h5 class="h5-header"><a href="cadastro.html">Login</a></h5> 
    <h1 class="h1-header">Título</h1>
</header>
<?php
}else{
?>
<header>
    <h1>Celula X</h1>

    <h4><a href="celula1.php">celula-1</a></h4>
    <h4><a href="celula2.php">celula-2</a></h4>
    <h4><a href="celula3.php">celula-2</a></h4>
</header>
<?php
}
?>