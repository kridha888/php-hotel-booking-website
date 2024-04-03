<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
*{
    font-family: 'Poppins', sans-serif;
}
.h-font{
    font-family: 'Merienda', cursive;
}

.avaibility-form{
    margin-top: -50px;
    z-index:2;
    position:relative;
}
@media screen and (max-width:575px) {
    .avaibility-form{
    margin-top: -200px;
    
}
}
</style>
</head>
<body>
  <?php include 'header.php';?>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" class="d-block w-100  " alt="..." style="height: 450px;">
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" class="d-block w-100  " alt="..." style="height: 450px;">
    </div>
    <div class="carousel-item">
      <img src="images/img4.jpg" class="d-block w-100 " alt="..."style="height: 450px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- font-family: 'Merienda', cursive;
font-family: 'Poppins', sans-serif; -->
<div class= "container avaibility-form">
    <div class="row">
        <div class=" col-lg-12 shadow p-4 rounded bg-white">
            <h5>Check Booking Availiblity</h5>
            <form>
                <div class="row">
                    <div class="col-lg-3">
                         <label  class="form-label" style="font-weight: 500;">Check-in</label>
                         <input type="date" class="form-control shadow-none" >
                    </div>

                    <div class="col-lg-3">
                         <label  class="form-label" style="font-weight: 500;">Check-out</label>
                         <input type="date" class="form-control shadow-none" >
                    </div>

                    <div class="col-lg-3">
                         <label  class="form-label" style="font-weight: 500;">Adult</label>
                         <select class="form-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                         <label  class="form-label" style="font-weight: 500;">children</label>
                         <select class="form-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-lg-1">
                        <button type="submit" class="btn text-white shadow-none custom-bg">submit</button>

                    </div>

                </div>
            </form>
        </div>
    </div>

</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
        <div class="card" style="max-width:350px;margin:auto">
  <img src="images/rooms1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Simple Room</h5>
    <h6 class="mb-4">₹ 2000</h6>
    <div class="feature mb-2">
        <h6 class="mb-1">features</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            2rooms
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            1bathroom
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            1balcony
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            3sofa
        </span>

    </div>

    <div class="facilities mb-2">
        <h6 class="mb-1">facilities</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Wifi
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Television
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Ac
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Room heater
        </span>
        
    </div>

    <div class="rating mb-2">
        <h6 class="mb-1">ratings</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        </span>
    </div>  
    
    <div class="d-flex-justify-content-evenly mb-2">
    <a href="#" class="btn btn-primary btn-sm text-white custom-bg shadow-none ">More Rooms</a>
    <a href="#" class="btn btn-primary btn-sm text-white custom-bg shadow-none">More Rooms</a>
  </div>
  </div>
</div>
            
        


        </div>



        <div class="col-lg-4 col-md-6 my-3">
        <div class="card" style="max-width:350px;margin:auto">
  <img src="images/rooms1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Simple Room</h5>
    <h6 class="mb-4">₹ 2000</h6>
    <div class="feature mb-2">
        <h6 class="mb-1">features</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            2rooms
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            1bathroom
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            1balcony
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            3sofa
        </span>

    </div>

    <div class="facilities mb-2">
        <h6 class="mb-1">facilities</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Wifi
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Television
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Ac
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Room heater
        </span>
        
    </div>

    <div class="rating mb-2">
        <h6 class="mb-1">ratings</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        </span>
    </div>  
    
    <div class="d-flex-justify-content-evenly mb-2">
    <a href="#" class="btn btn-primary btn-sm text-white custom-bg shadow-none ">More Rooms</a>
    <a href="#" class="btn btn-primary btn-sm text-white custom-bg shadow-none">More Rooms</a>
  </div>
  </div>
</div>
            
        


        </div>


        <div class="col-lg-4 col-md-6 my-3">
        <div class="card" style="max-width:350px;margin:auto">
  <img src="images/rooms1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Simple Room</h5>
    <h6 class="mb-4">₹ 2000</h6>
    <div class="feature mb-2">
        <h6 class="mb-1">features</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            2rooms
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            1bathroom
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            1balcony
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            3sofa
        </span>

    </div>

    <div class="facilities mb-2">
        <h6 class="mb-1">facilities</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Wifi
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Television
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Ac
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
            Room heater
        </span>
        
    </div>
    <div class="mb-4">
      <h6 class="mb-1">GUEST</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        5 adults 
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap" >
        4 childrens
      </span>

    </div>

    <div class="rating mb-2">
        <h6 class="mb-1">ratings</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        </span>
    </div>  
    
    <div class="d-flex-justify-content-evenly mb-2">
    <a href="#" class="btn btn-primary btn-sm text-white custom-bg shadow-none ">More Rooms</a>
    <a href="#" class="btn btn-primary btn-sm text-white custom-bg shadow-none">More Rooms</a>
  </div>
  </div>
</div>
            
        


        </div>


        <div class="col-lg-12 text-center mt-5">
            <a href="" class="btn btn-sm rounded-0 fw-bold shadow-none btn-outline-dark">More Rooms</a>

        </div>

    </div>

</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
  <div class="row  justify-content-evenly px-md-0 px-lg-0 px-0">
    <div  class="col-lg-2 col-md-2 bg-white rounded shadow py-4 my-3 text-center">
    <img src="images/wifi.jpeg " width="80px">
      <h5 class="mt-3 "> WiFi</h5>
    </div>

    <div  class="col-lg-2 col-md-2 bg-white rounded shadow py-4 my-3 text-center">
    <img src="images/wifi.jpeg " width="80px">
      <h5 class="mt-3 "> WiFi</h5>
    </div>

    <div  class="col-lg-2 col-md-2 bg-white rounded shadow py-4 my-3 text-center">
    <img src="images/wifi.jpeg " width="80px">
      <h5 class="mt-3 "> WiFi</h5>
    </div>

    <div  class="col-lg-2 col-md-2 bg-white rounded shadow py-4 my-3 text-center">
    <img src="images/wifi.jpeg " width="80px">
      <h5 class="mt-3 "> WiFi</h5>
    </div>

    <div  class="col-lg-2 col-md-2 bg-white rounded shadow py-4 my-3 text-center">
    <img src="images/wifi.jpeg " width="80px">
      <h5 class="mt-3 "> WiFi</h5>
    </div>

    <div  class="col-lg-12 col-md-2 mt-5 text-center">
    <a href="" class="btn btn-sm rounded-0 fw-bold shadow-none btn-outline-dark">More Rooms</a>
    </div>

  </div>
 
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-aos="flip-right">
      <img  src="images/testimonial1 (1).jpg" class="d-block " width="100%" height="450px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-aos="flip-right">
      <img src ="images/testimonial1 (2).jpg" class="d-block" width="100%"  height="450px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-aos="flip-right">
      <img src="images/testimonial1 (3).jpg" class="d-block " width="100%"  height="450px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded shadow"  >
    <iframe  class=w-100 height="450" src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.67292334253!2d72.71636992961622!3d19.082502008038475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1706862844712!5m2!1sen!2sin"    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4 shadow">
      <h5> Call Us</h5>
      <a href="tel:+917737568979" class="d-inline-block mb-2 text-decoration-none text-dark">+917737568979</a>
      </div>

      <div class="bg-white p-4 rounded mb-4 shadow">
      <h5> Follow Us</h5>
      <a href="#" class="d-inline-block mb-3 "></a>
      <span class="bagde bg-light text-dark fs-6">
        Twitter
      </span>
    </br>
      <span class="bagde bg-light text-dark fs-6">
        instagram
      </span>
    </br>
      <span class="bagde bg-light text-dark fs-6">
        facebook
      </span>
      </div>

      <div class="bg-white shadow p-4 rounded mb-4">
      <h5> ADDRESS</h5>
        <p>
        University of Mumbai,Vidya Nagari, Kalina, Santacruz East, Mumbai, Maharashtra 400098.
        </p>

      </div>



    </div>
  </div>
</div>

<?php include 'footer.php';?>




        






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

    
</body>
</html>