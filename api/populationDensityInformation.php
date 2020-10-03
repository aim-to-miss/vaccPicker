<html>
<header>

</header>

<body>

    <div>
        <label>Polygon</label>
        <textarea id="polygon" rows="9" cols="9" value=""></textarea>
    </div>


    <button onclick="test()">test</button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="application/javascript">
        function test() {
            var polygon = $('#polygon').val();

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
