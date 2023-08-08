<?php

$num1 = 0 ;
$calcular = 'be';
$resultado = 0;
$simbolo1 = 'S';
$simbolo2 = 'Min';

if(isset($_GET['num1'],$_GET['calcular'])){
    $num1 = $_GET['num1'];
    $calcular = $_GET['calcular'];
}
    switch($calcular){
        case 'sm':
            $resultado = number_format(($num1/60),3);
            $simbolo1 = 'Segundos';
            $simbolo2 = 'Minutos';
                break;
        case 'sh':
            $resultado = number_format(($num1/3600),6);
            $simbolo1 = 'Segundos';
            $simbolo2 = 'Horas';
                break;
        case 'sd':
            $resultado = number_format(($num1/86400),2);
            $simbolo1 = 'Segundos';
            $simbolo2 = 'Dias';
                break;
        case 'mh':
            $resultado = number_format(($num1/60),2);
            $simbolo1 = 'Minutos';
            $simbolo2 = 'Kilos';
            break;
        case 'ms':
            $resultado = number_format(($num1*60),2);
            $simbolo1 = 'Minutos';
            $simbolo2 = 'Segundos';
                break;
        case 'md':
            $resultado = number_format(($num1/86400),2);
            $simbolo1 = 'Minutos';
            $simbolo2 = 'Dias';
                break;
        case 'hm':
            $resultado = number_format(($num1*60),2);
            $simbolo1 = 'Horas';
            $simbolo2 = 'Minutos';
                break;
        case 'hs':
            $resultado = number_format(($num1*3600),2);
            $simbolo1 = 'Horas';
            $simbolo2 = 'Segundos';
                break;
        case 'hd':
            $resultado = number_format(($num1/24),2);
            $simbolo1 = 'Horas';
            $simbolo2 = 'Dias';
                break;
        case 'dh':
            $resultado = number_format(($num1*24),2);
            $simbolo1 = 'Dias';
            $simbolo2 = 'Horas';
                break;
        case 'dm':
            $resultado = number_format(($num1*3600),2);
            $simbolo1 = 'Dias';
            $simbolo2 = 'Minutos';
                break;
        case 'ds':
            $resultado = number_format(($num1*86400),2);
            $simbolo1 = 'Dias';
            $simbolo2 = 'Segundos';
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
        <?php $calcular ?>
   
        <nav class="navbar navbar-expand-md navbar-dark bg-info">
            <a href="../Projeto/Index.php" class="navbar-brand">
                <img src="../../img/calculator/564429.png" style="width: 50px;">
            <p class="navbar-brand pt-4">CALCULATOR</p>
            </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target1">
            <span class="navbar-toggler-icon"></span>
        </button>
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
                    <div class="row">
                        <div class="col-4">
                            <div class="row justify-content-md-center">
                                <div></div>
                                <div class="col-12 mt-5">
                                    <h1> <?php echo $num1.' '. $simbolo1?> </h1>
                                    <h1 class="display-4"> <?php echo $resultado.' '. $simbolo2 ?> </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 mt-4">
                            <div class="row">
                            <div class="col-6">
                                    <label for="num" class="form-label">Insira o valor para ser convertido</label>
                                    <input name="num1" required type="number" step="0.1" class="form-control col-10" id="num">
                                </div>
                                <div class="col-6">
                                    <label >Conversor de massa</label>
                                    <select class="form-control col-10" name="calcular" required>
                                        <option value="sm">S(Segundos) -> Min(Minutos)</option>
                                        <option value="sh">S(Segundos) -> Hrs(Horas)</option>
                                        <option value="sd">S(Segundos) -> D(dias)</option>
                                        <option value="mh">Min(Minutos) -> Hrs(Horas)</option>
                                        <option value="ms">Min(Minutos) -> S(Segundos)</option>
                                        <option value="md">Min(Minutos) -> D(dias))</option>
                                        <option value="hm">Hrs(Horas) -> Min(Minutos)</option>
                                        <option value="hs">Hrs(Horas) -> S(Segundos)</option>
                                        <option value="hd">Hrs(Horas) -> D(dias)</option>
                                        <option value="dh">D(dias) -> Hrs(Horas) </option>
                                        <option value="dm">D(dias) -> Min(Minutos) </option>
                                        <option value="ds">D(dias) -> S(Segundos) </option>



                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4">
                                        <div>
                                            <button type="submit" class="col-10 mt-2 mb-4 btn btn-primary">Calcular</button>
                                        </div>
                                        <div name="resultado" class="form-control col-10"><?php echo $resultado ?></div>

                                </div>

                            </div>
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
