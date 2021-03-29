<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegando Informaçoes do formulario</title>
</head>
<body>
    <form action="receber.php" method="post">
        <label>
            Nome: <br>
            <input type="text" name="nome">
        </label>
        <br><br>

        <label>
            E-mail: <br>
            <input type="email" name="email">
        </label>
        <br><br>

        <label>
            Idade: <br>
            <input type="text" name="idade">
        </label>
        <br><br>
        <button>Enviar</button>
    </form>
</body>
</html>