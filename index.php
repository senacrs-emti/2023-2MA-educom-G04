<?php
$tituloPagina = 'Página principal';
$tipoPagina = 'home';
include_once '_dados.php';
include_once '_header.php';

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
                    <h3 class="card-title"><a href="celula.php?id=<?php echo $kay; ?>">
                        <?php echo $value['nome'];  ?>
                    </a></h3>
                    </div>
                </div>
            <?php
        }

        ?>
                
                
            </div>

            <div class="texto-1">
                <h3>Título</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, esse! Enim cum praesentium est excepturi id tenetur doloribus deserunt aliquam itaque consequatur, quae maxime molestiae incidunt, ullam unde atque perferendis.</p>
            </div>
    </main>
<?php
include_once '_footer.php';
?>