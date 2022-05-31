<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro - Devsbook</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css" />
</head>
<body>
    <header>
        <div class="container">
            <a href=""><img src="<?=$base;?>/assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="<?=$base;?>/cadastro">

            <?php if(!empty($flash)): ?>
                <div class="flash">
                    <?php echo $flash; ?>
                </div>
            <?php endif; ?>

            <div>
                <input placeholder="Digite seu Nome Completo" class="input" type="text" name="nome" />
            </div>
            
            <div>
                <input placeholder="Digite seu E-mail" class="input" type="email" name="email" />
            </div>
            
            <div>
                <input placeholder="Digite sua Senha" class="input" type="password" name="password" />
            </div>

            <div>
                <input placeholder="Digite sua Data de Nascimento" class="input" type="text" name="birth_date" id="birth_date" />
            </div>

            <div style="display:flex; justify-content: center;">
                <input class="button" type="submit" value="Cadastra-se"/>
            </div>

            <div style="display:flex; justify-content: center;">
                <a href="<?=$base;?>/login">Possui uma conta? Faça login aqui</a>
            </div>
        </form>
    </section>

    <script src="https://unpkg.com/imask"></script>
    <script>
        IMask(
            document.getElementById('birth_date'),
            {
                mask:'00/00/0000'
            }
        )
    </script>
</body>
</html>