<?php
$tituloPagina = 'Login';
$tipoPagina = 'login';
?>

<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input class="button" type="submit" value="Entrar">
        </form>
    </div>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $con = mysqli_connect("localhost", "root", "", "cad_usuario");

    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($senha, $row['senha'])) {
            echo "Login Concluído.";
        } else {
            echo "Senha está incorreta.";
        }
    } else {
        echo "E-mail não encontrado.";
    }

    mysqli_close($con);
}
?>