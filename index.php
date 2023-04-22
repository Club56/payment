<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipa na mpesa</title>
    <script>
      function validatePhoneNumber() {
        var phoneNumber=document.getElementsByName("phone_number")[0].value;
        if (phoneNumber.length !== 10 // isNaN(phoneNumber)) {alert("please insert registered mpesa number");
      return false;
    }
    return true;
      }
    </script>
<!-- Favicons -->
<link href="images/s1.webp" rel="icon">
<link href="images/s1.webp" rel="apple-touch-icon">

<link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="" rel="stylesheet" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" ">
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap");

      body {
        background-color:#8d9297;
        font-family: "Rubik", sans-serif;
      }

      .card {
        width: 310px;
        border: none;
        border-radius: 15px;
      }

      .justify-content-around div {
        border: none;
        border-radius: 20px;
        background: rgb(136, 16, 16);
        padding: 5px 20px 5px;
        color: #8d9297;
      }

      .justify-content-around span {
        font-size: 12px;
      }

      .justify-content-around div:hover {
        background: #cec111;
        color: #fff;
        cursor: pointer;
      }

      .justify-content-around div:nth-child(1) {
        background: #545ebd;
        color: #fff;
      }

      span.mt-0 {
        color: #8d9297;
        font-size: 12px;
      }

      h6 {
        font-size: 15px;
      }
      .mpesa {
        background-color: green !important;
      }

      img {
        border-radius: 15px;
      }
    </style>
  </head>
  <body oncontextmenu="return false" class="snippet-body">
    <div class="container d-flex justify-content-center">
      <div class="card mt-5 px-3 py-4">
        <div class="d-flex flex-row justify-content-around">
          <div class="mpesa"><span>M-pesa</span></div>         
          <div><span><a href="airtel.php">Airtel</a></span></div>
          <div><span><a href="https://www.paypal.com/signin">Paypal</a></span></div>
        </div>
        <div class="media mt-4 pl-2">
          <img src="./images/saf.png" class="mr-3" height="75" />
          <div class="media-body">
            <h6 class="mt-1">Select Amount & Enter Phone Number</h6>
          </div>
        </div>
        <div class="media mt-3 pl-2">
                          <!--bs5 input-->

            <form class="row g-3" action="./stk_initiate.php" method="POST">
            
                <div class="col-12">                  
                  <label for="inputAddress" class="form-label">Amount</label>
                  <select class="form-control" name="amount" placeholder="Enter Amount" required>
                    <option value="">--Select Amount--</option>
                    <option value="30">30 KES weekly</option>
                    <option value="100">100 KES weekly</option>
                    <option value="100">100 KES monthly</option>
                    <option value="300">300 KES monthly</option>     
                </div>
                <div class="col-12">                 
                  <label for="inputAddress2" class="form-label" >Phone Number</label>
                  <input type="number" class="form-control" name="phone"  placeholder="Enter Phone Number" required>
                </div>
             
                <div class="col-12">
                  <button type="submit" class="btn btn-success" name="submit" value="submit">Make payment</button>
                </div>
              </form>
              <!--bs5 input-->
          </div>
        </div>
      </div>
    </div>
    <script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    ></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/Javascript"></script>
  </body>
</html>
