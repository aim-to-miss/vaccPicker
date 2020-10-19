<?php
require "warmhole.php";
if ( !isset( $_REQUEST['clong'] ) && !isset( $_REQUEST['clat'] ) && !isset( $_REQUEST['vName'] ) ) {
    exit( "404 not found" );
}
if ( $_REQUEST['clong'] != "" && $_REQUEST['clat'] != "" && $_REQUEST['vName'] != "" ) {
    getHospitalName();
} else exit( "404 not found" );

function getHospitalName() {
    global $con;

    $lat1 = $_REQUEST['clat'];
    $lon1 = $_REQUEST['clong'];
    $vName = $_REQUEST['vName'];
    
    $sql = "select * from hospital_info where vacc_id = '$vName'";
    $query = $con->query( $sql );
    
    $count = mysqli_num_rows($query);
    if($count==0){
        exit("No Hospitals Found Nearby For the selected Vaccine");
    }
    
    $result = array();
    $hospitals = array();
    $data = array();

    while( $row = mysqli_fetch_assoc( $query ) ) {
        $lat2 = $row['latitude'];
        $lon2 = $row['longitude'];
        $distanceThreshold = 195;
       

        $theta = $lon1 - $lon2;
        $dist = sin( deg2rad( $lat1 ) ) * sin( deg2rad( $lat2 ) ) +  cos( deg2rad( $lat1 ) ) * cos( deg2rad( $lat2 ) ) * cos( deg2rad( $theta ) );
        $dist = acos( $dist );
        $dist = rad2deg( $dist );
        $miles = $dist * 60 * 1.1515;
        
        $distance = $miles * 1.609344;
        if($distance<=$distanceThreshold){
            $data = array(
                "Hospital Name"=> $row['name'],
                "Hospital Type"=>$row['hospital_type'],
                "Distance"=>round($distance, 2)
            );
            
            array_push( $hospitals, $data );
            unset($data);
            $data = array();
//            echo $distance."<br>";
        }
        
    }
    
    print_r( json_encode( $hospitals ) );

}

?>
