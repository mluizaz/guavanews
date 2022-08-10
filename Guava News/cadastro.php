<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Cadastro</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="left">
                <h1>Realize seu cadastro</h1>
		        <p>Seja bem-vindo, ao fazer seu cadastro poderemos lhe oferecer notícias atualizadas diariamente e personalizadas de acordo com seus interesse.</p>
                </div>
                <div class="right">
                    <form action="/verificaCad.php" method="POST">
                        <h2>Cadastre-se</h2>
                        <input type="text" name="Nome" placeholder="Usuário">
                        <input type="email" name="E-mailCad" placeholder="E-mail">
                        <input type="password" name="SenhaCad" placeholder="Senha">
                        <button class="botao">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>