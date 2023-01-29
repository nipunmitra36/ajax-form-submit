
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Domain-Name - page-name</title>

    <!-- favicon  -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- google-fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap" rel="stylesheet"> 
    

    <!--fontawsome-->
    <link rel="stylesheet" href="./assets/lib/fontawesome/css/all.css">

    <!--css libaray-->
    <link rel="stylesheet" href="./assets/lib/owlcarousel/css/owl.carousel.css">
    <link rel="stylesheet" href="./assets/lib/owlcarousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="./assets/lib/wow/css/animate.css">
    <link rel="stylesheet" href="./assets/lib/bootstrap/css/bootstrap.css">

    <!-- main-css  -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">



</head>

<body>
   
<!DOCTYPE html>
<html>
  <head>
    <title>jQuery Form Example</title>
    <link
      rel="stylesheet"
      href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
    />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
  <body>
    <div class="col-sm-6 col-sm-offset-3">
      <h1>Processing an AJAX Form</h1>

      <h1 style="display:none" id="success">Data insert succefull </h1>

      <form id="form_submit">
        <div id="name-group" class="form-group">
          <label for="name">Name</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="Full Name"
          />
        </div>

        <div id="email-group" class="form-group">
          <label for="email">Email</label>
          <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            placeholder="email@example.com"
          />
        </div>

        <div id="superhero-group" class="form-group">
          <label for="superheroAlias">Superhero Alias</label>
          <input
            type="text"
            class="form-control"
            id="superheroAlias"
            name="superheroAlias"
            placeholder="Ant Man, Wonder Woman, Black Panther, Superman, Black Widow"
          />
        </div>

        <button type="submit" class="btn btn-success">
          Submit
        </button>
      </form>
    </div>
  </body>
</html>
 
    <!-- back-to-top  -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>


    <!-- js-library  -->
    <script src="./assets/jquery/jquery.js"></script>
    <script src="./assets/lib/wow/js/wow.js"></script>
    <script src="./assets/lib/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="./assets/lib/owlcarousel/js/owl.carousel.js"></script>


  
    
   

    <script>
$(document).ready(function () {
  $("form").submit(function (event) {
    event.preventDefault();
    
    var formData = {
      name: $("#name").val(),
      email: $("#email").val(),
      superheroAlias: $("#superheroAlias").val(),
    };
    


    $.ajax({
      type: "POST",
      url: "contact.php",
      data: formData,
      success: function (response) {
       if(response == 'success'){
        //alert('lkjlk jlkj');
        $("#success").show();
        $("#name").val('');
       }
        
      }
    });

    
  });
});
    </script>


</body>

</html>