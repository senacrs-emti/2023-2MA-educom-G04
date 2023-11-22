<?php
$tituloPagina = 'Página principal';
$tipoPagina = 'home';
include_once '_dados.php';
include_once '_header.php';

$colecaoCelulas = array(
    1=> array('nome'=>"Célula Animal",'arquivo'=>'celula1.php','img'>'Url de imagem'),
    2=> array('nome'=>"Célula Vegetal",'arquivo'=>'celula2.php','img'>'Url da imagem'),
    3=> array('nome'=>"Célula Bacteriana",'arquivo'=>'celula3.php','img'>'Url da imagem')
);


?>
    <main>
        <div class="card-group">
                
        
        <?php
        foreach ($colecaoCelulas as $key => $value) {
            //echo '<pre>';
            //print_r($value);
            ?>
                <div class="card bg-dark text-white" style="max-width: 18rem;  margin-left: 3%; margin-top: 5%;">
                    <img src="https://static.todamateria.com.br/upload/ce/lu/celulaanimal-0.jpg?auto_optimize=low" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    <h3 class="card-title"><a href="<?php echo $value['arquivo']; ?>">
                        <?php echo $value['nome'];  ?>
                    </a></h3>
                    </div>
                </div>
            <?php
        }

        ?>
                
                
            </div>

            <div class="texto-1">
                <h4>Organelas celulares </h4>
                <p>As organelas celulares são as estruturas responsáveis pelo funcionamento da célula. Cada organela desempenha uma função.  </p>
            </div>
    </main>
<?php
include_once '_footer.php';
?>