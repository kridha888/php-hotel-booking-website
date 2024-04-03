<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .pop:hover {
            border-top-color: blue !important;
        }
    </style>


</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-12 mb-4 mb-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h5 class='mt-2'>Filter</h5>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column " id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font: size 18px;">Facilities</h5>
                                <label class="form-label">check in</label>
                                <input type="date" class="form-control shadow-none">

                                <label class="form-label">check out</label>
                                <input type="date" class="form-control shadow-none">

                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font: size 18px;">Facility</h5>
                                <div mb-2>
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none">
                                    <label class="form-check-label" for="f1">facility one</label>
                                </div>


                                <div mb-2>
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none">
                                    <label class="form-check-label" for="f2">facility one</label>
                                </div>

                                <div mb-2>
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none">
                                    <label class="form-check-label" for="f3">facility one</label>
                                </div>
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font: size 18px;">GUEST</h5>
                                <div class="d-flex">
                                    <div>
                                        <label class="form-check-label" for="f2">ADULT</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>

                                    <div class="me-2">
                                        <label class="form-check-label" for="f2">CHILDREN</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>


                            </div>

                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-3 border-0 shadow">
                    <div class="row g-0 p-3 align-item-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-4">
                            <img src="images/rooms1.jpg" class="img-fluid rounded" alt="...">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 mb-3> SIMPLE ROOM NAME</h5>
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
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    4 childrens
                                </span>

                            </div>
                        </div>

                        <div class="col-md-2 text-align-center">
                        <h6 class="mb-4">Rs 200 per night</h6>
                        <a href="#" class="btn btn-primary btn-sm text-white w-100 custom-bg shadow-none mb-2 ">Book Now</a>
                        <a href="#" class="btn btn-primary btn-sm text-white w-100 custom-bg shadow-none">More details</a>
                        </div>
                        
                    </div>
                </div>

                <div class="card mb-3 border-0 shadow">
                    <div class="row g-0 p-3 align-item-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-4">
                            <img src="images/rooms1.jpg" class="img-fluid rounded" alt="...">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 mb-3> SIMPLE ROOM NAME</h5>
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
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    4 childrens
                                </span>

                            </div>
                        </div>

                        <div class="col-md-2 text-align-center">
                        <h6 class="mb-4">Rs 200 per night</h6>
                        <a href="#" class="btn btn-primary btn-sm text-white w-100 custom-bg shadow-none mb-2 ">Book Now</a>
                        <a href="#" class="btn btn-primary btn-sm text-white w-100 custom-bg shadow-none">More details</a>
                        </div>
                        
                    </div>
                </div>

                <div class="card mb-3 border-0 shadow">
                    <div class="row g-0 p-3 align-item-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-4">
                            <img src="images/rooms1.jpg" class="img-fluid rounded" alt="...">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 mb-3> SIMPLE ROOM NAME</h5>
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
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    4 childrens
                                </span>

                            </div>
                        </div>

                        <div class="col-md-2 text-align-center">
                        <h6 class="mb-4">Rs 200 per night</h6>
                        <a href="#" class="btn btn-primary btn-sm text-white w-100 custom-bg shadow-none mb-2 ">Book Now</a>
                        <a href="#" class="btn btn-primary btn-sm text-white w-100 custom-bg shadow-none">More details</a>
                        </div>
                        
                    </div>
                </div>

                <div class="card mb-3 border-0 shadow">
                    <div class="row g-0 p-3 align-item-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-4">
                            <img src="images/rooms1.jpg" class="img-fluid rounded" alt="...">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 mb-3> SIMPLE ROOM NAME</h5>
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
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    4 childrens
                                </span>

                            </div>
                        </div>

                        <div class="col-md-2 text-align-center">
                        <h6 class="mb-4">Rs 200 per night</h6>
                        <a href="#" class="btn btn-primary btn-sm text-white w-100 custom-bg shadow-none mb-2 ">Book Now</a>
                        <a href="#" class="btn btn-primary btn-sm text-white w-100 custom-bg shadow-none">More details</a>
                        </div>
                        
                    </div>
                </div>
            </div>




        </div>
    </div>




    <?php include 'footer.php'; ?>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>