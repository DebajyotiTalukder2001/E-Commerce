<?php

include 'include/header.php';
include 'include/sidebar.php';
include 'include/top-header.php';


?>





<div class="container-fluid body-area mt-5">

  <div class="row mt-2">

    <div class="col-md-12 col-sm-12">
      <h5 class="pt-4"><a href="/E-Commerce/admin/Index/index.php" style="text-decoration: none; font-weight: bold;">Home</a>
      </h5>
    </div>
  </div>

  <div class="row">

    <div class="col-md-12 col-sm-12 view-area mt-2 p-1">



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

              <th class="th-sm">Customer Name
              </th>

              <th class="th-sm">Customer Address
              </th>

              <th class="th-sm">Product Name
              </th>

              
              <th class="th-sm">Product Price
              </th>
              <th class="th-sm">Product Image
              </th>

              <th class="th-sm">Delivery Date
              </th>
              
            
              <th class="th-sm">status
              </th>

            </thead>
            <tbody>
              <?php

            include 'Sql/config.php';
            ?>
              <?php

            $sql = "SELECT * FROM ordered";

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
                  <?php echo $row['customer_name'];?>
                </td>

                <td>
                  <?php echo $row['customer_address'];?>
                </td>

                <td>
                  <?php echo $row['product_name'];?>
                </td>
                <td>
                  Rs.<?php echo $row['product_price'];?>
                </td>
                <td><img src="img/uploads/<?php echo $row['product_image'];?>" class="img-thumbnail" height="50px" width="50px"
                    id="pimg"></td>
                
                </td>

                <td>
                  <?php echo $row['Delivery_Date'];?>
                </td>
                <td>
                <p class ="badge badge-success m-1"><?php echo $row['status'];?></p>
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








    </div>



  </div>




</div>


</div>


<?php


include 'include/footer.php';

?>

<!-- View End -->