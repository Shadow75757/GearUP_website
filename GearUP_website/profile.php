<?php
session_start();
$loggedIn = isset($_SESSION['login']); // Verifica se o usuário está logado

include_once "header.php";

// verificar se existe um POST (que é quando o botão editar/guardar é carregado)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // incluímos o arquivo db.php
    include_once("connection.inc.php");

    // verificamos se os campos estão preenchidos e definimos as variáveis
    $id = (!empty($_POST["id"])) ? $_POST["id"] : "";
    $name = (!empty($_POST["name"])) ? $_POST["name"] : "";
    $uid = (!empty($_POST["uid"])) ? $_POST["uid"] : "";
    $email = (!empty($_POST["email"])) ? $_POST["email"] : "";
    $password = (!empty($_POST["password"])) ? $_POST["password"] : "";
    $pfp = (!empty($_POST["pfp"])) ? $_POST["pfp"] : "";

    // query para editar um usuário existente
    $query = "UPDATE usertable SET name='$name', uid='$uid', email='$email', password='$password', pfp='$pfp' WHERE id=$id";

    // executamos a consulta
    $resultado = mysqli_query($conexao, $query);

    // se o resultado retornar true, redirecionamos para a página de usuários com msg=2
    if ($resultado) {
        header("location: profile.php");
    }
}
?>
<div class="carb">
    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h1>Profile</h1>
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-7">
                            <input type="text" name="name" id="name" class="form-control" value="<?= $name ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uid" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-7">
                            <input type="text" name="uid" id="uid" class="form-control" value="<?= $uid ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-7">
                            <input type="email" name="email" id="email" class="form-control"
                                value="<?= $email ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-7">
                            <input type="password" name="password" id="password" class="form-control" 
                                value="<?= $password ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pfp" class="col-sm-3 col-form-label">Profile Picture</label>
                        <div class="col-sm-7">
                            <input type="file" name="pfp" id="pfp" class="form-control-file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <button type="submit" name="enviar" class="btn btn-dark">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</div>