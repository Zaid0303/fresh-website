<?php 
include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
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

          <div class="col-lg-8 col-12">
            <!-- card -->
            <div class="card mb-6 card-lg">
              <!-- card body -->
              <div class="card-body p-6 ">

                <!-- alert msg -->
              <div class="alert alert-primary" role="alert" id="pro_add_msg"></div>
                <!-- alert msg -->

                <h4 class="mb-4 h5">Product Information</h4>
                <div class="row">
                  <!-- input -->
                  <div class="mb-3 col-lg-6">
                    <label class="form-label">Title</label>
                    <input type="text" id="pro_name" class="form-control" placeholder="Product Name" required>
                  </div>
                  <!-- input -->
                  <div class="mb-3 col-lg-6">
                    <label class="form-label">Product Category</label>
                    <select class="form-select" id="pro_status">
                      <option selected>Product Category</option>
                      <option value="1">Dairy, Bread & Eggs</option>
                      <option value="2">Snacks & Munchies</option>
                      <option value="3">Fruits & Vegetables</option>
                    </select>
                  </div>
                  <!-- input -->
                  <!-- <div class="mb-3 col-lg-6">
                    <label class="form-label">Weight</label>
                    <input type="text" class="form-control" placeholder="Weight" required>
                  </div> -->
                  <!-- input -->
                  <!-- <div class="mb-3 col-lg-6">
                    <label class="form-label">Units</label>
                    <select class="form-select">
                      <option selected>Select Units</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div> -->
                  <div>
                    <div class="mb-3 col-lg-12 mt-5">
                      <!-- heading -->
                      <h4 class="mb-3 h5">Product Images</h4>

                      <!-- input -->
                      <form action="#" class="d-block dropzone border-dashed rounded-2 ">
                        <div class="fallback">
                          <input name="file" id="pro_image" type="file" multiple>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- input -->
                  <div class="mb-3 col-lg-12 mt-5">
                    <h4 class="mb-3 h5">Product Descriptions</h4>
                  <textarea id="pro_des" class="form-control" rows="3" placeholder="Product Description"></textarea>
                    <!-- <div class="py-8" id="editor"></div> -->
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-12">
            <!-- card -->
            <div class="card mb-6 card-lg">
              <!-- card body -->
              <div class="card-body p-6">
                <!-- input -->
                <!-- <div class="form-check form-switch mb-4">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchStock" checked>
                  <label class="form-check-label" for="flexSwitchStock">In Stock</label>
                </div> -->
                <!-- input -->
                <div>
                  <!-- <div class="mb-3">
                    <label class="form-label">Product Code</label>
                    <input type="text" class="form-control" placeholder="Enter Product Title">
                  </div> -->
                  <!-- input -->
                  <!-- <div class="mb-3">
                    <label class="form-label">Product SKU</label>
                    <input type="text" class="form-control" placeholder="Enter Product Title">
                  </div> -->
                  <!-- input -->
                  <div class="mb-3">
                    <label class="form-label">Status</label><br>
                    <div class="form-check form-check-inline" id="pro_status">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="1" checked>
                      <label class="form-check-label" for="inlineRadio1">Active</label>
                    </div>
                    <!-- input -->
                    <div class="form-check form-check-inline" id="pro_status">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="2">
                      <label class="form-check-label" for="inlineRadio2">Disabled</label>
                    </div>
                    <!-- input -->

                  </div>

                </div>
              </div>
            </div>
            <!-- card -->
            <div class="card mb-6 card-lg">
              <!-- card body -->
              <div class="card-body p-6">
                <h4 class="mb-4 h5">Product Price</h4>
                <!-- input -->
                <div class="mb-3">
                  <label class="form-label">Regular Price</label>
                  <input type="text" id="pro_price" class="form-control" placeholder="$0.00">
                </div>
                <!-- input -->
                <!-- <div class="mb-3">
                  <label class="form-label">Sale Price</label>
                  <input type="text" class="form-control" placeholder="$0.00">
                </div> -->

              </div>
            </div>
            <!-- card -->
            <!-- <div class="card mb-6 card-lg"> -->
              <!-- card body -->
              <!-- <div class="card-body p-6">
                <h4 class="mb-4 h5">Meta Data</h4> -->
                <!-- input -->
                <!-- <div class="mb-3">
                  <label class="form-label">Meta Title</label>
                  <input type="text" class="form-control" placeholder="Title">
                </div> -->

                <!-- input -->
                <!-- <div class="mb-3">
                  <label class="form-label">Meta Description</label>
                  <textarea class="form-control" rows="3" placeholder="Meta Description"></textarea>
                </div> -->
              <!-- </div>
            </div> -->
            <!-- button -->
            <div class="d-grid">
              <button href="#" id="addPro" class="btn btn-primary">
                Create Product
              </button>
            </div>
          </div>

        </div>
      </div>
    </main>

  </div>

  <script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>
<script src="../assets/libs/quill/dist/quill.min.js"></script>
<script src="../assets/js/vendors/editor.js"></script>
<script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<!-- jquery Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</body>

<script src="ajax/pro.js"></script>





<!-- Mirrored from freshcart.codescandy.com/dashboard/add-category.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:28 GMT -->

</html>