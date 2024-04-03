<?php
$db_conn=mysqli_connect("localhost","root","","hbwebsite","3307");
if(!$db_conn){
    die("not connected".mysqli_connect_error());
}
function filteration($data){
    foreach($data as $key=>$value){
        $data[$key]= trim($value);
        $data[$key]= stripslashes($value);
        $data[$key]= htmlspecialchars($value);
        $data[$key]= strip_tags($value);

        return $data;


    }



}

function select($sql,$values,$datatypes){
    $con=$GLOBALS['db_conn'];
    if($stmt=mysqli_prepare($con,$sql)){
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res=  mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
      
          }else{
            mysqli_stmt_close($stmt);
            die("query cannot be prepared-select");

          }
    }
    else{
        die("query cannot be prepared-select");
    }
    
}

?>