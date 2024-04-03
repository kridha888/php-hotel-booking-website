<?php
include "db_config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
div.login-form{
    position: absolute;
    transform:translate(-50%,-50%);
    top:50%;
    left: 50%;

}
    </style>
</head>

<body class="bg-light">
    <div class="login-form shadow p-4 bg-white overflow-hidden">
        <form method="POST">
            <h4>ADMIN LOGIN PANEL</h4>
            <div  class="">
                <div class="mb-3">
                    <input required name="admin_name" type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-3">
                    <input required  name="admin_pass"type="password" class="form-control shadow-none" placeholder="paasword">
                </div>
                <button name="login" type="submit" class="btn btn-primary  ">LOGIN</button>
            </div>
            
        </form>

    </div>
    <?php
    if(isset($_POST['login']))
    {
        $frm_data=filteration($_POST);

       $query="SELECT * FROM crud WHERE 'admin_name'=? AND 'admin_pass'=?";
       $values=[$frm_data['admin_name'],$frm_data['admin_pass']];
       
       $result=select($query,$values,"ss");
       print_r($result);
   
  

        // print_r($frm_data);
    }
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>