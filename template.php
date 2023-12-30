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
        <form action="saida.php" method="post">
            <label for="" class="form-label">1° Número</label>
            <input type="number" name="numeroA" class="form-control">
            <label for="" class="form-label">2° Número</label>
            <input type="number" name="numeroB" class="form-control">
            <button class="btn btn-success mt-2">Enviar</button>
        </form>
    </div>
</body>
</html>