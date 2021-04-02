<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivo</title>
</head>
<body>
    <form action="receber.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <br><br>
        <button>Enviar</button>
    </form>
</body>
</html>