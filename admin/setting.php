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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @media screen and (max-width:992px) {
            #dashboard-menu {
                height: auto;
                width: 100%;
            }
        }

        #dashboard-menu {
            height: 100%;
            position: fixed;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 calss="mb-0 mt-4 text-light">HB WEBSITE</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LogOut</a>
    </div>

    <div class="col-lg-2 bg-dark border-top border-3 border-secondary " id="dashboard-menu">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h5 class='mt-2 text-light'>Admin panel</h5>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column " id="adminDropdown">
                    <ul class="nav nav-pills flex-column">

                        <li class="nav-item">
                            <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="#">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="#">user</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  text-white" href="setting.php">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>



                </div>
            </div>
        </nav>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 ms-auto overflow-none p-4">
                <h3 class="mb-4">Settings</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Setting</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square">EDIT</i>
                            </button>

                            <!-- Modal -->

                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text"id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text"id="site_about"></p>
                    </div>
                </div>



                <!-- Modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">General Setting</h1>
                                </div>
                                <div class="modal-body">
                                    <div class=" ps-0 mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input name="site_title" type="text" class="form-control shadow-none">
                                    </div>

                                    <div class=" p-0 mb-3">
                                        <label class="form-label">About Us</label>
                                        <textarea  name="site_about"class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn custom-bg text-dark shadow none">Submit</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            </form>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        let get_data;
        function get_general(){
            let site_title=document.getElementById('site_title');
            let site_about=document.getElementById('site_about');

            let xhr= new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            xhr.onload=function(){
                general_data=JSON.parse(this.responseText);

                site_title.innerText=general_data.site_title;
                site_about.innerText=general_data.site_about;

                
            }

            xhr.send('get_general');
        }
        window.onload=function(){
            get_general();

        }
    </script>
</body>

</html>