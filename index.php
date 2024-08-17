<?php include("components/header.php")?>
<?php include("Model/model.php")?>
<?php include("config/config.php")?>
<

   <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include("components/sidbar.php")?>
  <main id="main" class="main">
    <div class="d-flex justify-content-between">
        <h3>Product</h3>
        <button  class="btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#add">Create product</button>
    </div>
   <!-- Top Selling -->
   <div class="col-12">
              <div class="card top-selling overflow-auto mt-3">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0 mt-2">
                  <h5 class="card-title">Top Selling <span>| Today</span></h5>

                  <table class="table table-borderless align-middle mt-2">
                    <thead>
                      <tr>
                      <th scope="col">Product ID</th>
                        <th scope="col">Preview image</th>
                        <th scope="col">Product Title </th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Prodcut Qty</th>
                        <th scope="col">Action </th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                           $sql="SELECT * FROM `prodct_admin`";
                           $result=$con->query($sql);
                           while($row=$result->fetch_array()){
                                ?>
                                   <tr>
                                    <td><?php echo $row[0]?></td>
                                    <td scope="row"><a href="#"><img src="./public/image/<?php echo $row[2]?>"  class="rounded-2" height="70px" alt=""></a></td>
                                    <td><a href="#" class="text-primary fw-bold"><?php echo $row[1]?> </a></td>
                                    <td><?php echo $row[3]?> $</td>
                                    <td class="fw-bold"><?php echo $row[4]?> </td>

                                    <td>
                                        <button class="btn btn-warning rounded-0 text-light">Edit</button>
                                        <button class="btn btn-danger rounded-0">Delete</button>
                                    </td>
                                </tr>
                                <?php
                           }
                        ?>
                     
                    
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->


  </main>

  <!-- ======= Footer ======= -->

<?php include("components/footer.php")?>
</html>