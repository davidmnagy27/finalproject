<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>exotic Car Rental</title>
</head>
<nav class ="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/fleet.html">Our Fleet</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>

        </li>
    </ul>
</nav>

<body>

<!--Pop-up for details-->
<!--first-->
    <!--detail-->
<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            Audi
        </div>
    </div>
</div>
    <!--reserve form-->
<div class="modal fade bd-example-modal-lg7" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
            <!--form1-->
        <div class="modal-content">
            <div class="form1">
                <form action="fleet.php" method="post">
                <h2>Reserve Your Dream Car</h2>
                <hr>
                <div class="row">
                    <div class="col">
                       <label>First name:</label>
                      <input type="text" class="form-control" placeholder="John"><br>
                    </div>
                    <div class="col">
                       <label>Last name:</label>
                      <input type="text" class="form-control" placeholder="Doe"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <label>Email:</label>
                      <input type="email" class="form-control" placeholder="john.doe@email.com"><br>
                    </div>
                    <div class="col">
                       <label>Phone:</label>
                      <input type="tel" class="form-control" placeholder="123-456-7890"
                      name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <label>Pick-up date:</label>
                      <input type="date" class="form-control" placeholder="01/01/2010"><br>
                    </div>
                    <div class="col">
                        <label>Drop-off date:</label>
                      <input type="date" class="form-control" placeholder="01/01/2010"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Age</label>
                      <input type="number" class="form-control" placeholder="25 years old and older" min="25"><br>
                    </div>
                    <div class="col">

                    </div>
                </div>

                <button type="submit" class="btn btn-primary" >Reserve</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

<!--second-->
     <!--detail-->
<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            BMW
        </div>
    </div>
</div>
    <!--reserve form-->
<div class="modal fade bd-example-modal-lg8" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!--form2-->
            <div class="form2">
                <form action="fleet.php" method="post">
                <h2>Reserve Your Dream Car</h2>
                 <hr>
                 <div class="row">
                     <div class="col">
                        <label>First name:</label>
                       <input type="text" class="form-control" placeholder="John"><br>
                     </div>
                     <div class="col">
                        <label>Last name:</label>
                       <input type="text" class="form-control" placeholder="Doe"><br>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                        <label>Email:</label>
                       <input type="email" class="form-control" placeholder="john.doe@email.com"><br>
                     </div>
                     <div class="col">
                        <label>Phone:</label>
                       <input type="tel" class="form-control" placeholder="123-456-7890"
                       name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                        <label>Pick-up date:</label>
                       <input type="date" class="form-control" placeholder="01/01/2010"><br>
                     </div>
                     <div class="col">
                         <label>Drop-off date:</label>
                       <input type="date" class="form-control" placeholder="01/01/2010"><br>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         <label>Age</label>
                       <input type="number" class="form-control" placeholder="25 years old and older" min="25"><br>
                     </div>
                     <div class="col">

                     </div>
                 </div>
                <button type="submit" class="btn btn-primary" >Reserve</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--third-->
     <!--detail-->
<div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            Ferrari
        </div>
    </div>
</div>
    <!--reserve form-->
<div class="modal fade bd-example-modal-lg9" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!--form3-->
        <div class="form3">
            <form action="fleet.php" method="post">
            <h2>Reserve Your Dream Car</h2>
            <hr>
            <div class="row">
                <div class="col">
                   <label>First name:</label>
                  <input type="text" class="form-control" placeholder="John"><br>
                </div>
                <div class="col">
                   <label>Last name:</label>
                  <input type="text" class="form-control" placeholder="Doe"><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Email:</label>
                  <input type="email" class="form-control" placeholder="john.doe@email.com"><br>
                </div>
                <div class="col">
                   <label>Phone:</label>
                  <input type="tel" class="form-control" placeholder="123-456-7890"
                  name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Pick-up date:</label>
                  <input type="date" class="form-control" placeholder="01/01/2010"><br>
                </div>
                <div class="col">
                    <label>Drop-off date:</label>
                  <input type="date" class="form-control" placeholder="01/01/2010"><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Age</label>
                  <input type="number" class="form-control" placeholder="25 years old and older" min="25"><br>
                </div>
                <div class="col">

                </div>
            </div>

            <button type="submit" class="btn btn-primary" >Reserve</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!--fourth-->
     <!--detail-->
<div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            Lamborghini
        </div>
    </div>
</div>
    <!--reserve form-->
<div class="modal fade bd-example-modal-lg10" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!--form4-->
            <div class="form4">
                <form action="fleet.php" method="post">
                <h2>Reserve Your Dream Car</h2>
                <hr>
                <div class="row">
                    <div class="col">
                       <label>First name:</label>
                      <input type="text" class="form-control" placeholder="John"><br>
                    </div>
                    <div class="col">
                       <label>Last name:</label>
                      <input type="text" class="form-control" placeholder="Doe"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <label>Email:</label>
                      <input type="email" class="form-control" placeholder="john.doe@email.com"><br>
                    </div>
                    <div class="col">
                       <label>Phone:</label>
                      <input type="tel" class="form-control" placeholder="123-456-7890"
                      name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <label>Pick-up date:</label>
                      <input type="date" class="form-control" placeholder="01/01/2010"><br>
                    </div>
                    <div class="col">
                        <label>Drop-off date:</label>
                      <input type="date" class="form-control" placeholder="01/01/2010"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Age</label>
                      <input type="number" class="form-control" placeholder="25 years old and older" min="25"><br>
                    </div>
                    <div class="col">

                    </div>
                </div>

                <button type="submit" class="btn btn-primary" >Reserve</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--fifth-->
     <!--detail-->
<div class="modal fade bd-example-modal-lg5" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            Lamborghini
        </div>
    </div>
</div>
    <!--reserve form-->
<div class="modal fade bd-example-modal-lg11" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!--form 5-->
            <div class="form5">
            <form action="fleet.php" method="post">
            <h2>Reserve Your Dream Car</h2>
            <hr>
            <div class="row">
                <div class="col">
                   <label>First name:</label>
                  <input type="text" class="form-control" placeholder="John"><br>
                </div>
                <div class="col">
                   <label>Last name:</label>
                  <input type="text" class="form-control" placeholder="Doe"><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Email:</label>
                  <input type="email" class="form-control" placeholder="john.doe@email.com"><br>
                </div>
                <div class="col">
                   <label>Phone:</label>
                  <input type="tel" class="form-control" placeholder="123-456-7890"
                  name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Pick-up date:</label>
                  <input type="date" class="form-control" placeholder="01/01/2010"><br>
                </div>
                <div class="col">
                    <label>Drop-off date:</label>
                  <input type="date" class="form-control" placeholder="01/01/2010"><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Age</label>
                  <input type="number" class="form-control" placeholder="25 years old and older" min="25"><br>
                </div>
                <div class="col">

                </div>
            </div>

            <button type="submit" class="btn btn-primary" >Reserve</button>
            </form>
        </div>
        </div>
    </div>
</div>

<!--sixth-->
     <!--detail-->
<div class="modal fade bd-example-modal-lg6" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            MCLarren
        </div>
    </div>
</div>
    <!--reserve form-->
<div class="modal fade bd-example-modal-lg12" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!--form 6-->
            <div class="form6">
            <form action="fleet.php" method="post">
            <h2>Reserve Your Dream Car</h2>
            <hr>
            <div class="row">
                <div class="col">
                   <label>First name:</label>
                  <input type="text" class="form-control" placeholder="John"><br>
                </div>
                <div class="col">
                   <label>Last name:</label>
                  <input type="text" class="form-control" placeholder="Doe"><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Email:</label>
                  <input type="email" class="form-control" placeholder="john.doe@email.com"><br>
                </div>
                <div class="col">
                   <label>Phone:</label>
                  <input type="tel" class="form-control" placeholder="123-456-7890"
                  name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Pick-up date:</label>
                  <input type="date" class="form-control" placeholder="01/01/2010"><br>
                </div>
                <div class="col">
                    <label>Drop-off date:</label>
                  <input type="date" class="form-control" placeholder="01/01/2010"><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Age</label>
                  <input type="number" class="form-control" placeholder="25 years old and older" min="25"><br>
                </div>
                <div class="col">

                </div>
            </div>

            <button type="submit" class="btn btn-primary" >Reserve</button>
            </form>
        </div>
        </div>
    </div>
</div>


<!--Pop-up for reserve-->

<!--Image-->
<!--first-->
<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
        <a href="#"><img class="card-img-top" src="images/audi.png" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <button type="button" class="btn btn-secondary" data-toggle="modal"
                data-target=".bd-example-modal-lg1">More Info</button>

                <button type="button" class="btn btn-secondary" data-toggle="modal"
                data-target=".bd-example-modal-lg7">Reserve</button>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
</div>

<!--second-->
<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
        <a href="#"><img class="card-img-top" src="images/ferrari1.png" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <button type="button" class="btn btn-secondary" data-toggle="modal"
                data-target=".bd-example-modal-lg2">More Info</button>

                <button type="button" class="btn btn-secondary" data-toggle="modal"
                data-target=".bd-example-modal-lg8">Reserve</button>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
</div>

<!--third-->
<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
        <a href="#"><img class="card-img-top" src="images/bmw.png" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <button type="button" class="btn btn-secondary" data-toggle="modal"
                data-target=".bd-example-modal-lg3">More Info</button>

                <button type="button" class="btn btn-secondary" data-toggle="modal"
                data-target=".bd-example-modal-lg9">Reserve</button>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
</div>

<!--fourth-->
<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
        <a href="#"><img class="card-img-top" src="images/lambo1.png" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <button type="button" class="btn btn-secondary" data-toggle="modal"
                data-target=".bd-example-modal-lg4">More Info</button>

                <button type="button" class="btn btn-secondary" data-toggle="modal"
                               data-target=".bd-example-modal-lg10">Reserve</button>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
</div>

<!--fifth-->
<div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/lambo2.png" alt=""></a>
              <div class="card-body">
                  <h4 class="card-title">
                      <button type="button" class="btn btn-secondary" data-toggle="modal"
                      data-target=".bd-example-modal-lg5">More Info</button>

                      <button type="button" class="btn btn-secondary" data-toggle="modal"
                                 data-target=".bd-example-modal-lg11">Reserve</button>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
          </div>
      </div>

<!--sixth-->
<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
        <a href="#"><img class="card-img-top" src="images/mclaren.png" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <button type="button" class="btn btn-secondary" data-toggle="modal"
                data-target=".bd-example-modal-lg6">More Info</button>

                <button type="button" class="btn btn-secondary" data-toggle="modal"
                             data-target=".bd-example-modal-lg12">Reserve</button>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

</body>
</html>