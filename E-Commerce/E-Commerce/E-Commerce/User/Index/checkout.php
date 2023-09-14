<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Order Now!!!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: Arial;
      font-size: 17px;
      padding: 8px;
    }

    * {
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
    }

    .col-25 {
      -ms-flex: 25%;
      /* IE10 */
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%;
      /* IE10 */
      flex: 50%;
    }

    .col-75 {
      -ms-flex: 75%;
      /* IE10 */
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn {
      background-color: #04AA6D;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }

      .col-25 {
        margin-bottom: 20px;
      }
    }
  </style>
</head>

<body>

  <h1 class="btn btn-primary"> Order Now!!!</h1>

      <div class="row mt-1 mb-1" style="margin-left:165px;">

        <div class="col-md-12 col-sm-12">
          <h5 class="pt-2"><a href="/E-Commerce/User/Index/index.php"
              style="text-decoration: none; font-weight: bold;">Return Home</a>
          </h5>
        </div>

      </div>

  <div class="row p-3">

    <div class="col-md-12 col-sm-12 mt-3 mb-5">

      
      <div class="container">


        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>

        <div class="card">


          <div class="card-header">
            <h4 class="text-center">View Orders</h4>

          </div>



          <div class="card-body">
            <table id="dtBasicExample"
              class="table table-responsive table-striped table-bordered  w-100 d-block d-md-table" cellspacing="0"
              width="100%">
              <thead>
                <th class="th-sm">ID
                </th>

                <th class="th-sm">Product Name
                </th>
                <th class="th-sm">Product Price
                </th>
                <th class="th-sm">Product Image
                </th>
                <th class="th-sm">Product Description
                </th>


              </thead>
              <tbody>
                <?php

    include 'Sql/config.php';
    ?>
                <?php

    $sql = "SELECT * FROM cart";

    $table = mysqli_query($conn, $sql);
    $i = 1;
    if(mysqli_num_rows($table)>0){
        while ($row = mysqli_fetch_array($table)) {
         ?>


                <tr>

                  <td>
                    <?php echo $row['ID'];?>
                  </td>

                  <td>
                    <?php echo $row['product_name'];?>
                  </td>
                  <td>
                    Rs.
                    <?php echo $row['product_price'];?>
                  </td>
                  <td style="text-align:center;"><img src="img/uploads/<?php echo $row['product_image'];?>"
                      class="img-thumbnail" height="50px" width="50px" id="pimg"></td>

                  <td>
                    <?php echo $row['product_desc'];?>
                  </td>


                </tr>

                <?php
                 $i++;

                    }
                  }

                  // Close connection
                    mysqli_close($conn);
                  ?>


              </tbody>

            </table>

          </div>
        </div>
        <hr>
        <p>Total <span class="price" style="color:black"><b>Rs.
              <?php
include 'Sql/config.php';

$fetch = " SELECT SUM(product_price) AS `count_price` FROM cart";

$results = mysqli_query($conn, $fetch) or die(mysql_error());

while($row = mysqli_fetch_array($results)){
     echo $row['count_price'];
}

?>
            </b></span></p>
      </div>
    </div>

    <div class="container">
      <form action="Sql/order.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="">
        <div class="row p-4">
          <div class="col-md-6 col-sm-12">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Enter Name" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Enter Email" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Enter Address" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Enter City">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State">
              </div>
              <div class="col-50">
                <label for="zip">Pin Code</label>
                <input type="text" id="zip" name="zip" placeholder="Pin Code">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Enter Name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Enter Card Number">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Exp Year">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <button type="submit" name="add_order" value="add_order" class="btn btn-primary">Proceed to checkout</button>
      </form>
    </div>
  </div>



  </div>

  <?php

include 'include/footer.php';

?>

</body>

</html>