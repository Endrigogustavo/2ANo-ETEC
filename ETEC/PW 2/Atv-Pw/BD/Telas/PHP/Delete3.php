
<html>
<!--https://github.com/AsmrProg-YT/Modern-Login-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../Css/css.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

<script src="../js/MaskNun.js">
</script>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Deletar</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Digite o Id que deseja deletar</span>
                
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="" method="post" name="cliente">
                <h1>Deletar</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                
                <input type="text" placeholder="Id" onkeypress="return blokletras(window.event.keyCode)"  name="id">
                <input type="submit" value="Deletar" name="btnenviar" class="sub" id="button">
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Deletar</h1>
                    <p>Atividade de CRUD</p>
                    <button class="hidden" id="login">Testar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Atv-Pw</h1>
                    <p>Atividade de CRUD</p>
                    <button class="hidden" id="register">Testar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../Css/script.js"></script>
    <?php
    extract($_POST, EXTR_OVERWRITE);
    if (isset($btnenviar)) {
        include_once 'Livro.php';
        $pro = new Produto();
        $pro->setCod_livro($id);
        $pro->exclusao();
    }
    ?>
</body>

</html>