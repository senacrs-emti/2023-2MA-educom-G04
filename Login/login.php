<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $con = mysqli_connect("localhost", "root", "", "usuario");

    $query = "SELECT * FROM usuario WHERE email = '$email'";
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
