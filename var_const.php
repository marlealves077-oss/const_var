<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>const_var</title>
</head>
<body>
    <?php 
    
    /*int = numero,
    string = caractere,
    boleano = true/ false,
    float = 0.0 */
    
    $aluno = "arnold";
    $idade = "40";

   /*const inicia com a palavra "define"
   entre aspas duplas
   1º constante
   2º valor */

   define("instituicao", "cetam, cetro de educacao tec. do mazonas");

    echo "oi amigo, $aluno, $idade, bem vindo ao ". instituicao

    ?>

</body>
</html>