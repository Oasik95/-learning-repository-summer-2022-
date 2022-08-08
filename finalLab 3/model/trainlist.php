<?php 

   
 require_once('db.php');
function traintriplist( $target_page){
    $conn = getConnection();
	$sql = "select * from train limit $target_page,3 ";
	$result = mysqli_query($conn, $sql);
    mysqli_close($conn);
   return $result;
}
function row_count( ){
    $conn = getConnection();
	$sql = "select * from train ";
	$result = mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);
    mysqli_close($conn);
   return $count;
}
function addtrip($user){
    
    $conn = getConnection();
    
	$sql = "insert into train  ( leaving_from, going_to, time, date,cost,upload_location) values( '{$user['leaving_from']}', '{$user['going_to']}','{$user['time']}','{$user['date']}','{$user['cost']}','{$user['file_location']}')";

    if(mysqli_query($conn, $sql)){
        return ;
    }else{
        return false;
    }
}
function deletetrip($user){
    $conn = getConnection();
    
	$sql = "delete from train where serial={$user['serial']}";
    

    if(mysqli_query($conn, $sql)){
        return ;
    }else{
        return false;
    }
}
function updatetrip($user){
    $conn = getConnection();
    
	$sql = "update train SET  leaving_from='{$user['leaving_from']}',going_to='{$user['going_to']}',time='{$user['time']}',date='{$user['date']}',cost='{$user['cost']}' WHERE serial= {$user['serial']}";
    

    if(mysqli_query($conn, $sql)){
        return ;
    }else{
        return false;
    }
}
function searchtrip($user){
    
    $conn = getConnection();
    $sql = "select * from train where going_to like '%{$user['SEARCH']}%'";
    
    
 $result = mysqli_query($conn, $sql);
	
    mysqli_close($conn);
   return $result;
}
function Disatance($user){
    
    $conn = getConnection();
    $sql = "select distance from distance_info where leaving_from like '{$user['FROM']}' and  going_to like '{$user['TO']}'";
    
    
 $result = mysqli_query($conn, $sql);
	
    mysqli_close($conn);
   return $result;
}
