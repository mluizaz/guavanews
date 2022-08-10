<?php

if (empty($_POST['E-mailLog'])||empty($_POST['SenhaLog'])){
    
    include __DIR__.'/erro.php';
    exit();
}
?>
<head>
   <link rel="stylesheet" href="style.css">
</head>

<body id="veriflog">
        <div>
            <h1>Login efetuado com sucesso!</h1>
            <a href="#">Clique aqui para ser encaminhado para a sua página personalizada de notícias</a>
        </div>
</body>