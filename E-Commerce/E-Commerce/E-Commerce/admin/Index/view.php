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
          <h4 class="text-center">View Products</h4>

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
              <th class="th-sm">Product Quantity
              </th>
              <th class="th-sm">Product Description
              </th>
              <th class="th-sm">Action
              </th>

            </thead>
            <tbody>
              <?php

            include 'Sql/config.php';
            ?>
              <?php

            $sql = "SELECT * FROM add_product";

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
                  <?php echo $row['pname'];?>
                </td>
                <td>
                  Rs.<?php echo $row['pprice'];?>
                </td>
                <td><img src="img/uploads/<?php echo $row['pimg'];?>" class="img-thumbnail" height="50px" width="50px"
                    id="pimg"></td>
                <td>
                  <?php echo $row['pquantity'];?>
                </td>
                <td>
                  <?php echo $row['pdesc'];?>
                </td>
                <td><a href="edit_product.php?id=<?php echo $row['ID'];?>"
                    class="badge badge-primary">Edit</a>

                  <a href="Sql/p_delete.php?id=<?php echo $row['ID'];?>" class="badge badge-danger">Delete</a>
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