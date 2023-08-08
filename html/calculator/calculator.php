<?php

$num1 = 0;
$num2 = 0;
$resultado = '';
$calcular = '+';

if(isset($_GET['num1'],$_GET['num2'],$_GET['calcular'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calcular = $_GET['calcular'];
}


    switch($calcular){
        case '+':
        $resultado = $num1 + $num2;
            break;
        case '-':
        $resultado = $num1 - $num2;
            break;
        case '/':
        $resultado = $num1 / $num2;
            break;
        case 'x':
        $resultado = $num1 * $num2;
            break;
        case '%':
            $resultado = ($num1 * $num2)/100;
                break;
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Calculator</title>
    <body>
        <!-- Logo -->
        <nav class="navbar navbar-expand-md navbar-dark bg-info">
            <a href="../Projeto/Index.php" class="navbar-brand">
                <img src="../../img/calculator/564429.png" style="width: 50px;">
                

            <p class="navbar-brand pt-4">CALCULATOR</p>
            </a>
        <!-- Hamburguer -->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Nav -->
            <div class="collapse navbar-collapse mr-5" id="nav-target1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="Index.html" class="nav-link text-light">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="calculator.php" class="nav-link text-light">Calculadora</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Conversor</a>
                            <div class="dropdown-menu navbar-dark bg-info ">
                                <a href="moeda.php" class="dropdown-item bg-info text-light">Moeda</a>
                                <a href="time.php" class="dropdown-item bg-info text-light">Massa</a>
                                <a href="weather.php" class="dropdown-item bg-info text-light">Temperatura</a>
                                <a href="weight.php" class="dropdown-item bg-info text-light">Tempo</a>
                            </div>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="mt-5">
            <form>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-4">
                            <label for="num" class="form-label">Insira o primeiro valor</label>
                            <input name="num1" required type="number" class="form-control" id="num">
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-4">
                            <label for="numb"  class="form-label">Insira o segundo valor</label>
                            <input name="num2" required type="number" class="form-control" id="numb">
                        </div>
                    </div>
                </div>

            <div class="container mt-4">
                <div class="row justify-content-md-center">
                    <button name="calcular" class="col-1 mr-4 mb-1 ml-1 btn btn-primary" type="submit" value="+">+</button>
                    <button name="calcular" class="col-1 mr-4 mb-1 btn btn-primary" type="submit" value="-">-</button>
                    <button name="calcular" class="col-1 btn mb-1 btn-primary" type="submit" value="x">x</button>
                </div>
                <div class="row justify-content-md-center mt-2">
                    <button name="calcular" class="col-1 mr-4 ml-4 btn btn-primary" type="submit" value="/">/</button>
                    <button name="calcular" class="col-1 mr-4 btn btn-primary" type="submit" value="%">%</button>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-3">
                        <label style="margin-left:95px;" for="resultado" class="mt-4 form-label">Resultado</label>
                            <p name="resultado" class="form-control" id="resultado"><?php echo $resultado; ?></p>
                    </div>

                </div>
            </div>
            </form>
        </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
