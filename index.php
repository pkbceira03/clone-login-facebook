<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Facebook</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div><!--logo-->

            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou Telefone</p>
                    <input type="email"/>
                </div><!--form-element-->

                <div class="form-element">
                    <p>Senha</p>
                    <input type="password"/>
                </div><!--form-element-->

                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar"/>
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="imagem">
                <img src="./images/conexão.png"/>
            </div><!--imagem-->

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>Égratuito e sempre será!</h3>

                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text"/>
                    </div><!--w50-->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text"/>
                    </div><!--w50-->

                    <div class="w100">
                        <input placeholder="E-mail" type="email"/>
                    </div><!--w100-->

                    <div class="w100">
                        <input placeholder="Senha" type="password"/>
                    </div><!--w100-->

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar!"/>
                    </div><!--w100-->

                    <div class="clear"></div>
                </form><!--criar-conta-->

            </div><!--abrir-conta-->

            <div class="clear"></div>
        </div><!---center->
    </section>
    
</body>
</html>