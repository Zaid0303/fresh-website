$(document).ready(function () {
    let pro_name = $("#pro_name");
    let pro_des = $("#pro_des");
    let pro_cat = $("#pro_cat");
    let pro_price = $("#pro_price");
    let pro_image = $("#pro_image");
    let addPro = $("#addPro");
    let pro_add_msg = $('#pro_add_msg');
    $("#pro_status").change(function () {
      // Get the selected value
      let pstatus = $(this).val();
  
      // console.log(cat_des, cat_name, selectedValue, addCat);
  
      addPro.on("click", function () {
        $.ajax({
          url: "insertPro.php",
          method: "POST",
          data: {
            pro_name: pro_name.val(),
            pro_des: pro_des.val(),
            pro_cat: pro_cat.val(),
            pro_image: pro_image.val(),
            pro_price: pro_price.val(),
            pro_status: pstatus,
          },
          success: function (data) {
            console.log(data);
            pro_add_msg.html(data);
            
          },
        });
      });
    });
  });