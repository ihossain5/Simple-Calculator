<?php
include_once "classes/Calc.php";
    $result = '';
    $operate = '';
    $num1 = '';
    $num2 = '';
    if (isset($_POST['submit'])){
        $operate = $_POST['operate'];
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $calc = new Calc($operate,$num1,$num2);
        $result = $calc->calculator();

    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"type="text/css" href="includes/style.css">
    <title>Calculator</title>
</head>
<body>
<div class="container calc">
    <h1 class="text-center">Simple Calculator</h1>
    <div class="row form">
                <form action="" method="post">
                  <div class="form-row">
                      <div class="col">
                          <input type="number" name="num1" placeholder="Enter First Number" class="form-control" required>
                      </div>
                      <div class="col">
                          <select name="operate" id="" class="form-control">
                              <option value="addition">Addition</option>
                              <option value="subtraction">Subtraction</option>
                              <option value="division">Division</option>
                              <option value="multiplication">Multiplication</option>
                          </select>
                      </div>
                      <div class="col">
                          <input type="number" name="num2" placeholder="Enter First Number" class="form-control" required>
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary">Calculate</button>
                  </div>
                </form>
    </div>
    <div class="row justify-content-center">
        <?php
        try{ ?>
        <p> <?php  if (isset($_POST['submit'])){
                $ucword = ucwords($operate);
                echo  "The {$ucword} of {$num1} & {$num2} is " . $result;
            }
        }catch (TypeError $e){
            echo "Error". $e->getMessage();
        }
        ?> </p>
    </div>
</div>













<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>