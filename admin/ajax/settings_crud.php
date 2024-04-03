<?php
require('../db_config.php');
if(isset($_POST['get_data'])){
    $q="SELECT * FROM settingss WHERE 'sr_no'=?";
    $values=[1];
    $res=select($q,$values,"i");
    $data=mysqli_fetch_assoc($res);
    $json_data= json_encode($data);
    echo $json_data;
    
}
?>