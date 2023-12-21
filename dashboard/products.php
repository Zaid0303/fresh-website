<?php
include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
include('../config.php');
?>
<!-- main -->
<main class="main-content-wrapper">
  <div class="container">
    <div class="row mb-8">
      <div class="col-md-12">
        <!-- page header -->
        <div class="d-md-flex justify-content-between align-items-center">
          <div>
            <h2>Products</h2>
            <!-- breacrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
              </ol>
            </nav>
          </div>
          <!-- button -->
          <div>
            <a href="add-product.php" class="btn btn-primary">Add Product</a>
          </div>
        </div>
      </div>
    </div>
    <!-- row -->
    <div class="row ">
      <div class="col-xl-12 col-12 mb-5">
        <!-- card -->
        <div class="card h-100 card-lg">
          <div class="px-6 py-6 ">
            <div class="row justify-content-between">
              <!-- form -->
              <!-- <div class="col-lg-4 col-md-6 col-12 mb-2 mb-lg-0">
                <form class="d-flex" role="search">
                  <input class="form-control" type="search" placeholder="Search Products" aria-label="Search">
                </form>
              </div> -->
              <!-- select option -->
              <div class="col-lg-2 col-md-4 col-12">
                <select class="form-select">
                  <option selected>Status</option>
                  <option value="1">Active</option>
                  <option value="2">Deactive</option>
                  <option value="3">Draft</option>
                </select>
              </div>
            </div>
          </div>
          <!-- card body -->
          <div class="card-body p-0">
            <!-- table -->
            <div class="table-responsive">
              <table id="tab" class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                <thead class="bg-light">
                  <tr>
                    <th>Image</th>
                    <th>Proudct Name</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Units</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $fetch_product = "select * from addproduct";
                  $result = mysqli_query($connection, $fetch_product);
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                      <tr>


                        <td>
                          <a href="#!"> <img src="<?php echo 'uploads/'.$row['pimage'] ?>"></a>
                        </td>
                        <td><a href="#" class="text-reset"><?php echo $row['pname'] ?></a></td>
                        <td><?php echo $row['pcategory'] ?></td>

                        <td>
                          <?php
                          if ($row['pstatus'] == 1) {
                            echo '<span class="badge bg-light-primary text-dark-primary">Active</span>';
                          } else {
                            echo '<span class="badge bg-light-danger text-dark-danger">Disable</span>';
                          }
                          ?>
                        </td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['punits'] ?></td>
                        <td>
                          <div class="dropdown">
                            <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="feather-icon icon-more-vertical fs-5"></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                              <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                        <?php

                    }
                  }
                  ?>




                </tbody>
              </table>

            </div>
          </div>
          <!-- <div class=" border-top d-md-flex justify-content-between align-items-center px-6 py-6">
            <span>Showing 1 to 8 of 12 entries</span>
            <nav class="mt-2 mt-md-0">
              <ul class="pagination mb-0 ">
                <li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>
                <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
              </ul>
            </nav>
          </div> -->
        </div>

      </div>

    </div>
  </div>
</main>

</div>


<?php
include("includes/footer.php");
?>