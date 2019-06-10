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

<!--Pop-up for details-->
<!--first-->
    <!--detail-->
<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <h1>Audi R8</h1>
            Now’s your chance to drive a super car. New to the fleet, the Audi R8 V10 is absolutely stunning, sure to
            make everyone incredibly jealous as you cruise downtown. This car is loud, fast, and such a thrill to drive.
            With the sport option enabled, you can feel 540 horsepower being used at full force. How could you regret
            driving this thriller?
        </div>
    </div>
</div>
    <!--reserve form-->
<div id="modal" class="modal fade bd-example-modal-lg7" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
            <!--form1-->
        <div class="modal-content">
            <div class="form1">
                <form action="#" method="post">
                <h2>Reserve Your Dream Car</h2>
                <hr>
                <div class="row">
                    <div class="col">
                       <label>First name:</label>
                      <input type="text" class="form-control" name="fname" placeholder="John" value="<?= ($fname) ?>"><br>
                      <?php if ($errors['fname']): ?>
                      <span class="text-danger"><?= ($errors['fname']) ?></span>
                      <?php endif; ?>
                    </div>
                    <div class="col">
                       <label>Last name:</label>
                      <input type="text" class="form-control"  name="lname" placeholder="Doe" value="<?= ($lname) ?>"><br>
                      <?php if ($errors['lname']): ?>
                      <span class="text-danger"><?= ($errors['lname']) ?></span>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <label>Email:</label>
                      <input type="email" class="form-control"  name="email" placeholder="john.doe@email.com" value="<?= ($email) ?>"><br>
                      <?php if ($errors['email']): ?>
                        <span class="text-danger"><?= ($errors['email']) ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col">
                       <label>Phone:</label>
                      <input type="tel" class="form-control"  name="phone" placeholder="1234567890"
                      name="phone" value="<?= ($phone) ?>"><br>
                      <?php if ($errors['phone']): ?>
                        <span class="text-danger"><?= ($errors['phone']) ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <label>Pick-up date:</label>
                      <input type="date" class="form-control" name="pick_up" placeholder="01/01/2010" value="<?= ($pick_up) ?>"><br>
                    </div>
                    <div class="col">
                        <label>Drop-off date:</label>
                      <input type="date" class="form-control" name="drop_off" placeholder="01/01/2010" value="<?= ($drop_off) ?>"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Age</label>
                      <input type="number" class="form-control"  name="age" placeholder="25 years old and older" min="25" ><br>
                      <?php if ($errors['age']): ?>
                        <span class="text-danger"><?= ($errors['age']) ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col">
                        <label>CAR ID</label>
                      <input type="text" class="form-control" name="car_id"  value="1"value="<?= ($car_id) ?>">
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
        <h1>Ferrari 458 Italia</h1>
          The Ferrari 458 is just plain special. It marks the end of an era for Ferrari’s naturally aspirated mid engine
          V8’s. When it was launched to the world it marked a new day for Ferrari. It’s a truly modern machine, with
          comfort to match. All the controls you’d ever need are found on the steering wheel, just like Schumacher’s
          old Formula 1 cars. At full chat with your foot on the loud pedal this car sings like nothing else.
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
                <form action="confirmation" method="post">
                <h2>Reserve Your Dream Car</h2>
                <hr>
                <div class="row">
                    <div class="col">
                       <label>First name:</label>
                      <input type="text" class="form-control" name="fname" placeholder="John" value="<?= ($fname) ?>"><br>
                      <?php if ($errors['fname']): ?>
                      <span class="text-danger"><?= ($errors['fname']) ?></span>
                      <?php endif; ?>
                    </div>
                    <div class="col">
                       <label>Last name:</label>
                      <input type="text" class="form-control"  name="lname" placeholder="Doe" value="<?= ($lname) ?>" ><br>
                      <?php if ($errors['lname']): ?>
                      <span class="text-danger"><?= ($errors['lname']) ?></span>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <label>Email:</label>
                      <input type="email" class="form-control"  name="email" placeholder="john.doe@email.com" value="<?= ($email) ?>"><br>
                      <?php if ($errors['email']): ?>
                        <span class="text-danger"><?= ($errors['email']) ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col">
                       <label>Phone:</label>
                      <input type="tel" class="form-control"  name="phone" placeholder="1234567890"
                      name="phone" value="<?= ($phone) ?>"><br>
                      <?php if ($errors['phone']): ?>
                        <span class="text-danger"><?= ($errors['phone']) ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <label>Pick-up date:</label>
                      <input type="date" class="form-control"  name="pick_up" placeholder="01/01/2010" value="<?= ($pick_up) ?>"><br>
                    </div>
                    <div class="col">
                        <label>Drop-off date:</label>
                      <input type="date" class="form-control"  name="drop_off" placeholder="01/01/2010" value="<?= ($drop_off) ?>"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Age</label>
                      <input type="number" class="form-control"  name="age" placeholder="25 years old and older" min="25"><br>
                      <?php if ($errors['age']): ?>
                        <span class="text-danger"><?= ($errors['age']) ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col">
                        <label>CAR ID</label>
                      <input type="text" class="form-control" name="car_id"  value="2" value="<?= ($car_id) ?>">
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
        <h1>Bmw I8 Coupe</h1>
           Heads turn when you pull up in this spaceship. The i8 offers a perfect combination of the performance expected
           from a powerful BMW and incredible futuristic styling. This fully-loaded i8 features elegant butterfly doors,
           carbon fiber construction, with an out-of-this-world driving experience.
           With 9 international awards, including Top Gear's Car of the Year Award, you can't go wrong with this
           stunning piece of modern art and technology.
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
            <form action="confirmation" method="post">
            <h2>Reserve Your Dream Car</h2>
            <hr>
            <div class="row">
                <div class="col">
                   <label>First name:</label>
                  <input type="text" class="form-control" name="fname" placeholder="John" value="<?= ($fname) ?>"><br>
                  <?php if ($errors['fname']): ?>
                  <span class="text-danger"><?= ($errors['fname']) ?></span>
                  <?php endif; ?>
                </div>
                <div class="col">
                   <label>Last name:</label>
                  <input type="text" class="form-control" name="lname" placeholder="Doe" value="<?= ($lname) ?>"><br>
                  <?php if ($errors['lname']): ?>
                  <span class="text-danger"><?= ($errors['lname']) ?></span>
                  <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Email:</label>
                  <input type="email" class="form-control"  name="email" placeholder="john.doe@email.com" value="<?= ($email) ?>"><br>
                  <?php if ($errors['email']): ?>
                    <span class="text-danger"><?= ($errors['email']) ?></span>
                    <?php endif; ?>
                </div>
                <div class="col">
                   <label>Phone:</label>
                  <input type="tel" class="form-control"  name="phone" placeholder="1234567890"
                  name="phone" value="<?= ($phone) ?>"><br>
                  <?php if ($errors['phone']): ?>
                    <span class="text-danger"><?= ($errors['phone']) ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Pick-up date:</label>
                  <input type="date" class="form-control"  name="pick_up" placeholder="01/01/2010" value="<?= ($pick_up) ?>"><br>
                </div>
                <div class="col">
                    <label>Drop-off date:</label>
                  <input type="date" class="form-control"  name="drop_off" placeholder="01/01/2010" value="<?= ($drop_up) ?>"><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Age</label>
                  <input type="number" class="form-control"  name="age" placeholder="25 years old and older" min="25"><br>
                  <?php if ($errors['age']): ?>
                    <span class="text-danger"><?= ($errors['age']) ?></span>
                    <?php endif; ?>
                </div>
                <div class="col">
                   <label>CAR ID</label>
                 <input type="text" class="form-control" name="car_id"  value="3" value="<?= ($car_id) ?>" >
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
        <h1>Lamborghini Aventador</h1>
           The Lamborghini Aventador is the epitome of arriving in style and leaving an impression. Supercars like these
            are rare for most people to even see in person, but now you have the opportunity to be the seen on the road
            behind the wheel of this naturally aspirated V12 bull pushing out 700 HP.

           To make things just a bit better we have added a Capristo test pipe so that you can hear every bit the 6.7L
           V12 burbling and screaming in full force. Luckily, the Aventador is equipped with a highly advanced 4-wheel
           drive system to help you keep all that power on the road and allow you to enjoy the car no matter the
           weather. Since adding the Aventador to our fleet it has quickly become our most popular car, simply to the
           fact no other option can give you an experience like it.
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
            <form action="confirmation" method="post">
            <h2>Reserve Your Dream Car</h2>
            <hr>
            <div class="row">
                <div class="col">
                   <label>First name:</label>
                  <input type="text" class="form-control"  name="fname" placeholder="John" value="<?= ($fname) ?>"><br>
                  <?php if ($errors['fname']): ?>
                  <span class="text-danger"><?= ($errors['fname']) ?></span>
                  <?php endif; ?>
                </div>
                <div class="col">
                   <label>Last name:</label>
                  <input type="text" class="form-control"  name="lname" placeholder="Doe" value="<?= ($lname) ?>"><br>
                  <?php if ($errors['lname']): ?>
                  <span class="text-danger"><?= ($errors['lname']) ?></span>
                  <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Email:</label>
                  <input type="email" class="form-control"  name="email" placeholder="john.doe@email.com" value="<?= ($email) ?>"><br>
                  <?php if ($errors['email']): ?>
                    <span class="text-danger"><?= ($errors['email']) ?></span>
                    <?php endif; ?>
                </div>
                <div class="col">
                   <label>Phone:</label>
                  <input type="tel" class="form-control"  name="phone" placeholder="1234567890"
                  name="phone" value="<?= ($phone) ?>"><br>
                  <?php if ($errors['phone']): ?>
                    <span class="text-danger"><?= ($errors['phone']) ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Pick-up date:</label>
                  <input type="date" class="form-control"  name="pick_up" placeholder="01/01/2010" value="<?= ($pick_up) ?>"><br>
                </div>
                <div class="col">
                    <label>Drop-off date:</label>
                  <input type="date" class="form-control"  name="drop_off" placeholder="01/01/2010" value="<?= ($drop_off) ?>"><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Age</label>
                  <input type="number" class="form-control"  name="age" placeholder="25 years old and older" min="25"><br>
                  <?php if ($errors['age']): ?>
                    <span class="text-danger"><?= ($errors['age']) ?></span>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <label>CAR ID</label>
                  <input type="text" class="form-control" name="car_id"  value="4" value="<?= ($car_id) ?>">
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
        <h1> Lamborghini Huracan</h1>
           It’s like a time machine. Only faster. There is nothing from the past that rivals the technology of the
           new Huracan, which comes together in a perfect car that seems straight out of the future.
            From the large 12.3″ TFT screen to the insane 0-60 time of 2.5 seconds this car is an absolute beast.
             The engine bay features state of the art forged carbon and in sport mode, people will hear you for miles.
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
            <form action="confirmation" method="post">
            <h2>Reserve Your Dream Car</h2>
            <hr>
            <div class="row">
                <div class="col">
                   <label>First name:</label>
                  <input type="text" class="form-control"  name="fname" placeholder="John" value="<?= ($fname) ?>"><br>
                  <?php if ($errors['fname']): ?>
                  <span class="text-danger"><?= ($errors['fname']) ?></span>
                  <?php endif; ?>
                </div>
                <div class="col">
                   <label>Last name:</label>
                  <input type="text" class="form-control"  name="lname" placeholder="Doe" value="<?= ($lname) ?>"><br>
                  <?php if ($errors['lname']): ?>
                  <span class="text-danger"><?= ($errors['lname']) ?></span>
                  <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Email:</label>
                  <input type="email" class="form-control"  name="email" placeholder="john.doe@email.com" value="<?= ($email) ?>"><br>
                  <?php if ($errors['email']): ?>
                    <span class="text-danger"><?= ($errors['email']) ?></span>
                    <?php endif; ?>
                </div>
                <div class="col">
                   <label>Phone:</label>
                  <input type="tel" class="form-control"  name="phone" placeholder="1234567890"
                  name="phone" value="<?= ($phone) ?>"><br>
                  <?php if ($errors['phone']): ?>
                    <span class="text-danger"><?= ($errors['phone']) ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Pick-up date:</label>
                  <input type="date" class="form-control"  name="pick_up" placeholder="01/01/2010" value="<?= ($pick_up) ?>"><br>
                </div>
                <div class="col">
                    <label>Drop-off date:</label>
                  <input type="date" class="form-control"  name="drop_off" placeholder="01/01/2010" value="<?= ($drop_off) ?>"><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Age</label>
                  <input type="number" class="form-control"  name="age" placeholder="25 years old and older" min="25"><br>
                  <?php if ($errors['age']): ?>
                    <span class="text-danger"><?= ($errors['age']) ?></span>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <label>CAR ID</label>
                  <input type="text" class="form-control" name="car_id"  value="5" value="<?= ($car_id) ?>">
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
        <h1>Mclaren 650s</h1>
            The pinnacle of technology, when you get into the car it feels like stepping into a spaceship. Our 650s
            coupe is fully optioned with carbon fiber everywhere on the exterior.  This supercar really is the best
            of both worlds, with McLaren’s carbon fiber MonoCell this truly is top down driving at it’s best.

            There is no other way to describe this car but as an out-of-this-world experience.
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
            <form action="confirmation" method="post">
            <h2>Reserve Your Dream Car</h2>
            <hr>
            <div class="row">
                <div class="col">
                   <label>First name:</label>
                  <input type="text" class="form-control"  name="fname" placeholder="John" value="<?= ($fname) ?>"><br>
                  <?php if ($errors['fname']): ?>
                  <span class="text-danger"><?= ($errors['fname']) ?></span>
                  <?php endif; ?>
                </div>
                <div class="col">
                   <label>Last name:</label>
                  <input type="text" class="form-control"  name="lname" placeholder="Doe" value="<?= ($lname) ?>"><br>
                  <?php if ($errors['lname']): ?>
                  <span class="text-danger"><?= ($errors['lname']) ?></span>
                  <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Email:</label>
                  <input type="email" class="form-control"  name="email" placeholder="john.doe@email.com" value="<?= ($email) ?>"><br>
                  <?php if ($errors['email']): ?>
                    <span class="text-danger"><?= ($errors['email']) ?></span>
                    <?php endif; ?>
                </div>
                <div class="col">
                   <label>Phone:</label>
                  <input type="tel" class="form-control"  name="phone" placeholder="1234567890"
                  name="phone" value="<?= ($phone) ?>"><br>
                  <?php if ($errors['phone']): ?>
                    <span class="text-danger"><?= ($errors['phone']) ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <label>Pick-up date:</label>
                  <input type="date" class="form-control"  name="pick_up" placeholder="01/01/2010" value="<?= ($pick_up) ?>"><br>
                </div>
                <div class="col">
                    <label>Drop-off date:</label>
                  <input type="date" class="form-control"  name="drop_off" placeholder="01/01/2010" value="<?= ($drop_off) ?>"><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Age</label>
                  <input type="number" class="form-control"  name="age" placeholder="25 years old and older" min="25" ><br>
                  <?php if ($errors['age']): ?>
                    <span class="text-danger"><?= ($errors['age']) ?></span>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <label>CAR ID</label>
                  <input type="text" class="form-control" name="car_id"  value="6" value="<?= ($car_id) ?>">
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
            <h5>$799.00 Per-Day</h5>
            <h3>Audi R8</h3>
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
            <h5>$1099.00 Per-Day</h5>
            <h3>Ferrari 458 Italia</h3>
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
            <h5>$599.00 Per-Day</h5>
            <h3>Bmw I8 Coupe</h3>
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
            <h5>$1699.00 Per-Day</h5>
            <h3>Lamborghini Aventador</h3>
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
                  <h5>$1299.00 Per-Day</h5>
                  <h3>Lamborghini Huracan</h3>
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
            <h5>$1199.00 Per-Day</h5>
            <h3>Mclaren 650s</h3>
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

<?php if (isset($errors)): ?>
    <script>
           // $('#modal').modal('show');
    </script>

<?php endif; ?>

</body>
</html>