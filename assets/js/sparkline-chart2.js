function lineChart (){
    var names = new Object();
    $.ajax ({
        url: "costGraph.php",
        type: "POST",
        data: {name:names },
        dataType: "json",
        success: function setContentData(data) {
            var values = data[0];
            var names = data[1];
            var sumCost = data[2];
            document.getElementById('graph_sumCost').innerText = "$ "+sumCost;
            $('#sparklineMoney').sparkline(values, {
                type: 'line',
                width:'90%',
                height: '75',
                fillColor: '',
                lineColor: '#fff',
                lineWidth: 1,
                resize: 'true',
                spotColor: '#f22',
                valueSpots: {'0:': '#fff'},
                minSpotColor: '#FFA54F',
                maxSpotColor: '#FFA54F',
                highlightSpotColor: '#87CEEB',
                highlightLineColor: '#ffffff',
                spotRadius: 5,
                tooltipFormat: '{{offset:names}} - Money: ${{y}}',
                tooltipValueLookups: {
                    'names':names
                }

            });

        }
    });
    $.ajax ({
        url: "amountGraph.php",
        type: "POST",
        data: {name:names },
        dataType: "json",
        success: function setContentData(data) {
            var values = data[0];
            var names = data[1];
            var sumQty = data[2];
            document.getElementById('graph_sumQty').innerText = sumQty;
            $('#sparklineAmount').sparkline(values, {
                type: 'line',
                width:'90%',
                height: '75',
                fillColor: '',
                lineColor: '#fff',
                lineWidth: 1,
                resize: 'true',
                spotColor: '#f22',
                valueSpots: {'0:': '#fff'},
                minSpotColor: '#FFA54F',
                maxSpotColor: '#FFA54F',
                highlightSpotColor: '#87CEEB',
                highlightLineColor: '#ffffff',
                spotRadius: 5,
                tooltipFormat: '{{offset:names}} - Quantity: {{y}}',
                tooltipValueLookups: {
                    'names':names
                }
            });

        }
    });

}