<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../config.php');

?>

<!-- main -->
<main class="main-content-wrapper">
  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row mb-8">
      <div class="col-md-12">
        <div class="d-md-flex justify-content-between align-items-center">
          <!-- page header -->
          <div>
            <h2>Add New Product</h2>
            <!-- breacrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-inherit">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
              </ol>
            </nav>
          </div>
          <!-- button -->
          <div>
            <a href="products.php" class="btn btn-light">Back to Product</a>
          </div>
        </div>

      </div>
    </div>
    <!-- row -->
    <div class="row">

      <div class="col-lg-12 col-12">
        <!-- card -->
        <div class="card mb-6 card-lg">
          <!-- card body -->
          <form id="pdt_form">
            <div class="card-body p-6 ">
              <h4 class="mb-4 h5">Product Information</h4>
              <div class="row">
                <!-- input -->
                <div class="mb-3 col-lg-6">
                  <label class="form-label">Title</label>
                  <input type="text" name="ptitle" class="form-control" placeholder="Product Name" required>
                </div>
                <!-- input -->
                <div class="mb-3 col-lg-6">
                  <label class="form-label">Product Category</label>
                  <!-- Category fetching using -->
                  <select name="pcat" class="form-select">
                    <?php
                    $fetch_category = "SELECT * from category";
                    $result = mysqli_query($connection, $fetch_category);
                    if (mysqli_num_rows($result) > 0) {
                      while ($data = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $data['catid'] . '">' . $data['catname'] . '</option>';
                      }
                    }
                    ?>
                  </select>
                </div>
                <!-- input -->
                <div class="mb-3 col-lg-6">
                  <label class="form-label">Weight</label>
                  <input name="pweight" type="text" class="form-control" placeholder="Weight" required>
                </div>
                <!-- input -->
                <div class="mb-3 col-lg-6">
                  <label class="form-label">Units</label>
                  <select name="punits" class="form-select">
                    <option selected>Select Units</option>
                    <?php
                    for ($j = 1; $j <= 10; $j++) {
                      echo '<option value="' . $j . '">' . $j . '</option>';
                    }
                    ?>

                  </select>
                </div>
                <div class="mb-3 col-lg-6">
                  <label class="form-label">Price</label>
                  <input name="pprice" type="text" class="form-control" placeholder="price" required>
                </div>
                <div class="mb-3 col-lg-6">
                  <label class="form-label">Select Status</label>

                  <select name="pstatus" class="form-select">
                    <option selected>Select Status</option>
                    <option value="1">Active</option>
                    <option value="2">Disable</option>
                  </select>
                </div>
                <div>
                  <div class="mb-3 col-lg-12 mt-5">
                    <!-- heading -->
                    <h4 class="mb-3 h5">Product Images</h4>
                    <input name="pimage" type="file" multiple>
                  </div>
                </div>
                <!-- input -->
                <div class="mb-3 col-lg-12 mt-5">
                  <div class="form-floating">
                    <textarea name="pdes" class="form-control" placeholder="Leave a comment here"
                      id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Product Description</label>
                  </div>
                  <input type="submit" class="btn btn-primary mt-5" value="Add Product">

                </div>
              </div>
            </div>
          </form>
        </div>

      </div>


    </div>
  </div>
</main>

</div>


<?php

include('includes/footer.php');
?>
<!-- jquery Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="ajax/Ajax.js"></script>