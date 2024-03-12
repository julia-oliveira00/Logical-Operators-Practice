<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Atividade 1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <!--Você deve adaptar o último código mencionado acima, para que o usuário informe o número que deve ser testado e identificado se Par ou Impar.-->

    <h1>Verificaçaõ de número - Par ou Impar</h1>

    <form action="" method="GET">
        Digite um número: <input type="number" name="num"><br><br>
        <input type="submit">
    </form>

    <?php

        $num = $_GET['num'];

        if ($num % 2 == 0){
            echo "O numero informado é PAR";
        } else {
            echo "O numero informado é IMPAR";
        }
    ?>

</body>
</html>