<?php 
if(!isset($_REQUEST['lat1'])&&!isset($_REQUEST['lat2'])&&!isset($_REQUEST['lon1'])&&!isset($_REQUEST['lon2'])&&!isset($_REQUEST['unit'])){
    exit("404 not found");
}
if($_REQUEST['lat1']!="" && $_REQUEST['lat2']!="" && $_REQUEST['lon1']!="" && $_REQUEST['lon2']!="" && $_REQUEST['unit']!=""){
    distance();
}else exit("404 not found");
 



    
function distance() {
$lat1 = $_REQUEST['lat1'];
$lat2 = $_REQUEST['lat2'];
$lon1 = $_REQUEST['lon1'];
$lon2 = $_REQUEST['lon2'];
$unit = $_REQUEST['unit'];
    
  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
      echo "0";
    return 0;
  }
  else {
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
//      echo ($miles * 1.609344);
      return json_encode($miles * 1.609344);
    } else if ($unit == "N") {
      return json_encode($miles * 0.8684);
    } else {
      return json_encode($miles);
    }
  }
}

//http://localhost/vaccpicker/api/getDistance.php?lat1=32.9697&lat2=29.46786&lon1=-96.80322&lon2=-98.53506&unit=%22K%22

//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";

?>

