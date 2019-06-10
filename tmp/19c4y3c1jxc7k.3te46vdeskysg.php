<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Exotic Car Rental</title>
</head>
<nav class ="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <center><a class="nav-link active" href="../finalproject">
            <h1><font color="gray">Exotic Car Rental</font></h1></a></center>
       </li>
        <li class="nav-item">
            <center><a class="nav-link active" href="../finalproject">
            <h3><font color="gray">Home</font></h3></a></center>
        </li>
        <li class="nav-item">
            <center><a class="nav-link" href="fleet">
            <h3><font color="gray">Our Fleet</font></h3></a></center>
        </li>
        <li class="nav-item">
            <center><a class="nav-link" href="contact">
            <h3><font color="gray">Contact</font></h3></a></center>
        </li>
        <li class="nav-item">
            <center><a class="nav-link " href="admin">
            <h3><font color="gray">Admin</font></h3></a></center>
        </li>
    </ul>
</nav>


<body>

<h1>Thank you for your order</h1>
<h1>Your dream car is on the way!!!</h1>


<div class="container-fluid">
<center><h2>Here is your confirmation</h2></center>
    <div class="row content">
        <div class="col-sm-6">
            <table id="myTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <tbody>
                <tr>
                <td>Name: <?= ($_SESSION['customer']->getFname()) ?> <?= ($_SESSION['customer']->getLname()) ?></td>
                </tr>
                <tr>
                <td>Email: <?= ($_SESSION['customer']->getEmail()) ?></td>
                </tr>
                <tr>
                <td>Phone: <?= ($_SESSION['customer']->getPhone()) ?></td>
                </tr>
                <tr>
                <td>Pick_up date: <?= ($_SESSION['customer']->getPick_up()) ?></td>
                </tr>
                <tr>
                <td>Drop_off date: <?= ($_SESSION['customer']->getDrop_off()) ?></td>
                </tr>
                <tr>

                <td>Car ID: <a href ="detail/<?= ($detail['car_id']) ?>"><?= ($_SESSION['customer']->getCar_id()) ?></a></td>
                </tr>

           </tbody>
           </table>
           <div class="col-sm-12 text-center">
               <br>
               <button class="btn btn-dark"> <a href="contact">Contact US!</a></button>
           </div>
        </div>

        <div class="col-sm-6">
                <img class="center" src="images/audi.png" width="100%" height="100%" alt="car picture">
        </div>
    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>