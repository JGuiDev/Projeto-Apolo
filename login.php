<?php

    if(isset($_POST['buttonLogin'])){

        $user = $_POST['user'];
        $senha = $_POST['password'];

        if(empty($user) || empty($senha)){
            echo '<div class="msg" style="background-color: red; opacity: 1">Campos Vazios</div>';
            }
        else{
            if($user == "Admin" && $senha == "1234"){
                header('Location: dashboard.php');
            }
            else{

                echo '<div class="msg" style="background-color: red; opacity: 1">Usuário e/ou Senha incorreto(s)</div>';
            }

        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="./css/login.css">
    <title>Tela de Login</title>
</head>
<body>
    <div class="msg">

    </div>

    <div class="boxContainer">
        <div class="title"><span>Login</span></div>
        <form action="#" class="form" method="post">
            <div class="datesInputs">
                <div class="campInput">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name='user' id="user">
                </div>

                <div class="campInput">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name='password' id="password">
                </div>
            </div>
            <div class="showPass">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label>Mostrar Senha</label>
            </div>
            <div class="buttonCamp">
                <button class="btnSubmit" name='buttonLogin' type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
    <script>
        const inputPassword = document.getElementById('password');
        const inputCheckbox = document.getElementById('checkbox');

        inputCheckbox.addEventListener("click", () => {
            if(inputPassword.getAttribute("type") == "password"){
                inputPassword.type = "text"
            }
            else{
                inputPassword.type = "password"
            }
        })

    </script>
</html>

