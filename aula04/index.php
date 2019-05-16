<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Example Method Post/Get</title>
    </head>
    <body>
    <form name="cadastro" action="cadastro.php" method="post">
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" id="nome"/>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" id="nome"/>
        </div>
        <div>
            <label>Senha:</label>
            <input type="password" name="senha" id="nome"/>
        </div>
        <div>
            <label>Observação:</label>
            <textarea name="observacao" id="observacao"></textarea>
        </div>
        <div>
           <input id="btenviar" type="submit" value="adastrar"/>
        </div>
        

    </form>

    </body>



</html>