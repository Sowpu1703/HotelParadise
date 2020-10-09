<?php 
include('connection.php');
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql="insert into room_booking_details(name,email,phone,address,city,state,zip,contry,room_type,Occupancy,check_in_date,check_in_time,check_out_date) 
  values('$name','$email','$phone','$address','$city','$state','$zip','$country',
  '$room_type','$Occupancy','$cdate','$ctime','$codate')";
   if(mysqli_query($con,$sql))
   {?>
    <style type="text/css">#success{
      display:block;
      padding: 20px;
      background-color: greenyellow;
      color: white;
      margin-bottom: 15px;
    }
    </style>
  <?php  
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hotel Paradise - Hotel Management System</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css"
    />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand cursive" href="index.html">Hotel Paradise</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarToggler01"
        aria-controls="navbarToggler01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler01">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.html"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.html#rooms">Rooms</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="about.html">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact us</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="image-header">
      <img src="assets/images/main-bg.jpg" alt="" srcset="" />
    </div>

    <div class="alert" id="success">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      You have Successfully booked this room!
    </div>

    <div class="site-section text-center">
      <div class="container">
        <h1 class="cursive" style="font-size: 3rem">Book now</h1>
        <br />
        <h5>BENEFITS OF BOOKING DIRECT WITH US</h5>
        <br />
        <p>
          No reservation fees / flexible cancellation. Welcome drink on your
          first night from the mini bar.
        </p>
        <br />
        <br />
        <br />
        <form class="form-horizontal" method="post">
          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4"><h4>Name :</h4></div>
                <div class="col-sm-8">
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    placeholder="Enter Your Frist Name"
                    required
                  />
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4"><h4>Email :</h4></div>
                <div class="col-sm-8">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="Enter Your Email-Id"
                    required
                  />
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4"><h4>Mobile :</h4></div>
                <div class="col-sm-8">
                  <input
                    type="number"
                    class="form-control"
                    name="phone"
                    placeholder="Type Your Phone Number"
                    required
                  />
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4"><h4>Address :</h4></div>
                <div class="col-sm-8">
                  <textarea
                    name="address"
                    class="form-control"
                    placeholder="Enter Your Address"
                  ></textarea
                  >
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4"><h4>Country</h4></div>
                <div class="col-sm-8">
                  <input
                    type="text"
                    class="form-control"
                    name="city"
                    placeholder="Enter Your City Name"
                    required
                  />
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4"><h4></h4></div>
                <div class="col-sm-8">
                  <input
                    type="hidden"
                    name="state"
                    class="form-control"
                    placeholder="Enter Your State Name"
                    required
                  />
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4"><h4></h4></div>
                <div class="col-sm-8">
                  <input
                    type="hidden"
                    name="zip"
                    class="form-control"
                    placeholder="Enter Your Zip Code"
                    required
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>Room Type:</h4></div>
                <div class="col-sm-7">
                  <select class="form-control" name="room_type" required>
                    <option>Deluxe Room</option>
                    <option>Luxury Room</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5">
                  <h4>Check-In Date :</h4>
                </div>
                <div class="col-sm-7">
                  <input
                    type="date"
                    name="cdate"
                    class="form-control"
                    required
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5">
                  <h4>Check-In Time:</h4>
                </div>
                <div class="col-sm-7">
                  <input
                    type="time"
                    name="ctime"
                    class="form-control"
                    required
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5">
                  <h4>Check-Out Date :</h4>
                </div>
                <div class="col-sm-7">
                  <input
                    type="date"
                    name="codate"
                    class="form-control"
                    required
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <label class="control-label col-sm-5"
                  ><h4 id="top">Members :</h4></label
                >
                <div class="col-sm-7">
                  <div class="radio-inline">
                    <input
                      type="radio"
                      value="single"
                      name="Occupancy"
                      required
                    />Single
                  </div>
                  <div class="radio-inline">
                    <input
                      type="radio"
                      value="twin"
                      name="Occupancy"
                      required
                    />Couple
                  </div>
                  <div class="radio-inline">
                    <input
                      type="radio"
                      value="dubble"
                      name="Occupancy"
                      required
                    />Family
                  </div>
                </div>
              </div>
            </div>
            <input
              type="submit"
              value="submit"
              name="savedata"
              class="btn btn-danger"
              required
            />
          </div>
        </form>
        <br />
      </div>
    </div>

    <footer>
      <main>
        Copyright &copy; 2020 All Rights Reserved | Made by
        <a
          href="https://www.linkedin.com/in/sowparnika-pradeep/"
          target="_blank"
        >
          Sowparnika Pradeep</a
        >
      </main>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="js/main.js"></script>
  </body>
</html>
