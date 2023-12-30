<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>    
</head>
<body>
    <div class="container">
        <?php
            $num1 = filter_input(INPUT_POST, "numeroA", FILTER_SANITIZE_NUMBER_INT);
            $num2 = filter_input(INPUT_POST, "numeroB", FILTER_SANITIZE_NUMBER_INT);


          //IF COMPOSTO


            if ($num1 > $num2){
                $alertColor = "danger"; 
                $resposta = "Primeiro número é maior que o segundo";
            }
             //SE NUM1 NÃO FOR MAIOR QUE NUM2 
            else{
                //ANINHAMENTO
                if ($num1 == $num2){
                    $alertColor = "success";
                    $resposta = "Primeiro número é igual o segundo";
              
                }
                else {  $alertColor = "warning";
                    $resposta = "Segundo número é maior que o primeiro";

                }
            }
        ?>
        <div class="alert alert-<?=$alertColor?> fw-bold text-center">
                <?=$resposta?>
        </div>       
    </div>
</body>
</html>