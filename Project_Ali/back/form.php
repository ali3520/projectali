<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../main/style.css">
    <title>contact us</title>
</head>
<body>
  <!-- This is nav-bar -->
    <nav  class="navbar navbar-expand-lg fixed-top bg-body-tertiary shadow">
    <div  class="container-fluid  navcol p-2  shadow-lg">
    
      <img class="mx-5" src="https://desertsafaridubaiuae.com/wp-content/uploads/2021/10/desert-safari-dubai-uae-logo.png" alt="" width="150" height="70">

     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
      <ul class="navbar-nav gap-3">
        <li class="nav-item">
          <a style="color: #573412;font-weight: 600;" class="nav-link active" aria-current="page" href="../main/index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a style="color: #573412;font-weight: 600;" class="nav-link" href="../main/index.php #even">EVENING DESERT SAFARI</a>
        </li>
        <li class="nav-item">
          <a style="color: #573412;font-weight: 600;" class="nav-link" href="../main/index.php #morn">MORNING DESERT SAFARI</a>
        </li>
        <li class="nav-item">
          <a style="color: #573412;font-weight: 600;" class="nav-link" href="../main/index.php #UAE">UAE CITY TOURS</a>
        </li>
        <li class="nav-item">
          <a  style="color: #573412;font-weight: 600;" class="nav-link" href="../back/form.php">CONTACT US</a>
        </li>
      </ul>
    </div>
    </nav>



<!-- This is Form -->
    <div class="container p-3 shadow border border-dark" style="margin-top: 6rem;border-radius: 10px;">
        <form class="form bg-dark p-4 shadow-lg" style="border-radius: 20px;" method="POST" action="insert.php">
        <h1 style="color: white;text-decoration: underline ;" class="text-center">FOR BOOKING</h1>
        <label class="mt-4" style="color: white; font-weight: 700;" for="">TOUR DATE <span style="color: red;">*</span></label>
        <input type="date" name="date" class="form-control  mt-4"   required>
        <label class="mt-4" style="color: white; font-weight: 700;" for="">FULL NAME <span style="color: red;">*</span></label>
        <input type="text" name="name" class="form-control  mt-4"  required>
        <label class="mt-4" style="color: white; font-weight: 700;" for="">YOUR EMAIL <span style="color: red;">*</span></label>
        <input type="text" name="email" class="form-control  mt-4"  required>
        <label class="mt-4" style="color: white; font-weight: 700;" for="">PHONE / WHATSAPP WITH COUTRY CODE <span style="color: red;">*</span></label>
        <input type="text" name="phone" class="form-control  mt-4"  required>
        <label class="mt-4" style="color: white; font-weight: 700;" for="">PICKUP LOCATION<span style="color: red;">*</span></label>
        <input type="text" name="picklocation" class="form-control  mt-4 " required>
        <label class="mt-4" style="color: white; font-weight: 700;" for="">ADULT <span style="color: red;">*</span></label>
        <input type="text" name="adult" class="form-control  mt-4 " required>
        <label class="mt-4" style="color: white; font-weight: 700;" for="">CHILD (3 TO 10 YEARS) <span style="color: red;">*</span></label>
        <input type="text" name="child" class="form-control  mt-4 " required>
        <label class="mt-4" style="color: white; font-weight: 700;" for="">SELECT TOUR <span style="color: red;">*</span></label>
        <input type="text" name="selecttour" class="form-control  mt-4"  required>
        <div class="text-center">
        <input id="sub"  class="btn btn-light mt-4 " type="submit" value="SUBMIT">
        </div>
        </form>
</div>
<hr class="col-lg-6 w-50 mx-auto my-5" style="border: 2px solid #573412; background-color: #573412;" >
    <!-- this is footer -->
    <footer  id="cont">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-lg-4 text-center p-5">
        <h1 style="text-decoration: underline;">ABOUT US</h1>
        <img  class="mt-2" height="40%" width="45%" src="https://desertsafaridubaiuae.com/wp-content/uploads/2021/10/desert-safari-dubai-uae-logo.png" alt="">
        <p class="mt-5 text-justify" style="color:grey;">Desert Safari Dubai – offer  safari in Dubai with Pick & Drop, BBQ and Camel Ride. Arabian Safari Package is the most distinguished Dubai City Tour and Desert Safari Company in Dubai, UAE. 100% Customer Satisfaction, 5-Star Rating Desert Safari Company in Dubai.</p>
      </div>
      <div class="col-lg-4 text-center p-5">
        <h1 style="text-decoration: underline;">CONTACT US</h1>
        <p class="mt-3"><i class="bi bi-telephone-fill"></i><span style="color: grey;">+971 56 641 0584</span> </p>
        <p><i class="bi bi-envelope-fill"></i><span style="color: grey;">  info@arabiansafaripackage.com </span></p>
        <h1 class="mt-5" style="text-decoration: underline;">WE ACCEPT</h1>
        <img   width="100%" src="https://arabiansafaripackage.com/wp-content/uploads/2021/09/48-480088_payment-method-credit-card-master-card-hd-png-removebg-preview-768x240.png" alt="">
        <p style="color: grey;">On Card Payment 5% Vat And 3% Bank Charges.</p>
      
      </div>
      <div class="col-lg-4 text-center p-5">
        <h1 style="text-decoration: underline;">COMMENT ON</h1>
        <img  class="mt-5" height="60%" width="60%" src="https://arabiansafaripackage.com/wp-content/uploads/2021/09/TC-BOTB-Winner_2021-1.gif" alt="">
      </div>
    </div>
  </div>
</footer>





<Script>
let sub = document.querySelector('#sub');
sub.addEventListener('click',()=>{
    alert('Thanks for your booking')
})

</Script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>