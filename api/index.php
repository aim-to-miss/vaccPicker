<html>

<body>

    <br>

    <div>
        <form action="getVaccineName.php">
            <label>Get All Vaccine</label>
            <input type="hidden" name="AppName" value="vaccPickerConsumer">
            <input type="submit" value="Get Them">

        </form>

    </div>
    <hr>

    <div>
        <label>Get All Hospitals Nearby:</label>

        <form action="getHospitals.php" method="get" id="getHospitalsForm">
            <br>
            <label> Select Vacine</label>
            <select id="vaccineSelector">
                <option value="" readonly disabled selected>--Select A Vaccine--</option>
            </select>
            <input type="hidden" name="clat" id="clat" value="">
            <input type="hidden" name="clong" id="clong" value="">

            <input type="hidden" name="vName" id="vName" value="">

        </form>
        <button onclick="getAllHospitals();">Locate Me and Show Nearby hospitals for the selected vaccine</button>
    </div>
    <hr>



    <button onclick="test()">test</button>
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
