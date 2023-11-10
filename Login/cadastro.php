<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $con = mysqli_connect('localhost', 'root', '', 'usuario');

    $query = "INSERT INTO usuario (email, senha) VALUES ('$email', '$senha')";
    if (mysqli_query($con, $query)) {
        echo "Cadastro realizado.";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
