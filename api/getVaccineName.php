<?php 
require "warmhole.php";
if(!isset($_REQUEST['AppName'])){
    exit("404 not found");
}
if($_REQUEST['AppName']=="vaccPickerConsumer" ){
    getVaccineName();
}else exit("404 not found");
 



    
function getVaccineName() {
    global $con;
    
    $sql = "select DISTINCT name, vaccine_id from vaccine";
    $query = $con->query($sql);
    $result = array();
    if(!$query){
        exit('404 not found');
    }
    
    while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
        
        array_push($result,$row);
    }
    $encoded = json_encode($result);
    echo $encoded;
    return $encoded;
    
}

?>
