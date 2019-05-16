<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exemple Method Post/Get</title>
    </head>

    <body>
        <form name="cadastro" action="cadastro.php" method="Post">
            <div>
                <label>Nome:</label>
                <input type="text" name="nome" id="nome" />
            </div>

            <div>
                <label>Email:</label>
                <input name="email" type="email" id="email" />
            </div>

            <div>
                <label>Senha:</label>
                <input name="senha" type="password" id="senha" />
            </div>

            <div>
                <label>Observação:</label>
                <textarea name="observacao" id="observacao"></textarea>
            </div>

            <div>
                <input id="btEnviar" type="submit" value="Cadastrar" />
            </div>

        </form>


    </body>


</html>