

<body>
    <div class="container">
        <h2>Cadastre-se</h2>
        <form action="cadastro.php" method="POST">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input class="button" type="submit" value="Cadastrar">
        </form>
    </div>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $con = mysqli_connect('localhost', 'root', '', 'cad_usuario');

    $query = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
    if (mysqli_query($con, $query)) {
        echo "Cadastro realizado.";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
<?php
$tituloPagina = 'Cadastro';
$tipoPagina = 'cadastro';

?>

