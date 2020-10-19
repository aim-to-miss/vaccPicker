<?php
session_start();
if(!isset($_SESSION['uid'])){
  header('location: ../../index.php');
}

if($_SESSION['uid']!="9cdfb439c7876e703e307864c9167a15"){
  header('location: index.php');
}

?>

<html>
<header>
    <title>API</title>


    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</header>
<body>

    <br>
<div class="container">
    <div class="row">
    <div class="col-md-12 text-center">
        <form action="getVaccineName.php">
            <label>Get All Vaccine</label>
            <br>
            <input type="hidden" name="AppName" value="vaccPickerConsumer">
            <input class="btn btn-primary " type="submit" value="Get Them">

        </form>

    </div>
    </div>
    <hr>
<div class="row">
    <div class="text-center">
        <label>Get All Hospitals Nearby:</label>
             <div class="form-group  col-md-6">

        <form action="getHospitals.php" method="get" id="getHospitalsForm">
            
            <label> Select Vacine </label>
            <select class="form-control" id="vaccineSelector">
                <option value="" readonly disabled selected>--Select A Vaccine--</option>
            </select>
            <input type="hidden" name="clat" id="clat" value="">
            <input type="hidden" name="clong" id="clong" value="">

            <input type="hidden" name="vName" id="vName" value="">
        </div>

        </form>
    </div>
    <div class="col-md-6" style="margin: auto;">
        <button class="btn btn-primary " onclick="getAllHospitals();">Locate Me and Show Nearby hospitals for the selected vaccine</button>
    </div>
</div>
    
    <hr>


<div class="row">
    <div class="col-md-12 text-center">
    <!-- <button onclick="test()">test</button> -->

</div>
</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="application/javascript">
        getAllVaccineName();

        function getAllVaccineName() {


            $.ajax({
                    method: "get",
                    url: "getVaccineName.php",
                    data: {
                        AppName: "vaccPickerConsumer",

                    }
                })
                .done(function(response) {
                    if (response == '404 not found') {
                        alert("something went wrong " + response);
                    } else {
                        var vaccine = JSON.parse(response);
                        var options;
                        for (i in vaccine) {

                            $('#vaccineSelector').append("<option value='" + vaccine[i].vaccine_id + "'>" + vaccine[i].name + "</option>");

                        }
                        //                        $('#vaccineSelector').html(options);

                    }
                });
        }

        function getAllHospitals() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            var vName = $('#vaccineSelector option:selected').val();
            if (vName == "") {
                alert("Please Select A Vaccine");
                return false;
            }
            var clat = position.coords.latitude;
            var clong = position.coords.longitude;
            $('#clat').val(clat);
            $('#clong').val(clong);
            $('#vName').val(vName);

            $('#getHospitalsForm').submit();


        }



        function test() {
            var polygon = $('#polygon').val();
            var polygon = "[[89.86713409423828,23.550454567850483],[89.9234390258789,23.54982511251429],[89.9227523803711,23.50701508203614],[89.86713409423828,23.550454567850483]]";
            var inputDataJsonTrend = 'Input_Data={ "polygon":' + polygon + ', "variables": [ "gpw-v4-population-count-rev10_2020","gpw-v4-data-quality-indicators-rev10_mean-adminunitarea","gpw-v4-land-water-area-rev10_landareakm" ], "statistics": ["SUM","MEAN"] ,"requestID": "1600965230885T98rXdv9" }';
            $.ajax({
                url: "https://sedac.ciesin.columbia.edu/arcgis/rest/services/sedac/pesv3Broker/GPServer/pesv3Broker/execute?f=json",
                dataType: "json",
                type: "post",
                data: inputDataJsonTrend,
                complete: function(json) {
                    var json = json.responseText;
                    console.log(json);
                    var responseObj = JSON.parse(json);
                    var resultValues = responseObj.results[0].value;
                    var resultCode = resultValues.resultCode;
                    var estimates = responseObj.results[0].value.estimates;
                    console.log(estimates);
                }

            });

        }

    </script>


</body>

</html>
