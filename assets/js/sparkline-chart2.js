function lineChart (){
    var names = new Object();
    $.ajax ({
        url: "costGraph.php",
        type: "POST",
        data: {name:names },
        dataType: "json",
        success: function setContentData(data) {
            var values = data[0];
            var eventDate = data[1];
            var sumCost = data[2];
            var amount = data[3];
            var i = 0;
            var dataArray = new Array();
            //dataArray.push({});
            //dataArray['date'] = eventDate;
            while(values[i]){
                dataArray[i]= {"date": eventDate[i], "column-1": values[i], "column-2": amount[i]};
                i++;
            }

            // dataArray["date"] = "2014-03-07";
            // dataArray["column-1"] = 23;
            //dataArray['column-2'] = values;
            //alert(dataArray);
            AmCharts.makeChart("chartdiv2",
                {
                    "type": "serial",
                    "categoryField": "date",
                    "dataDateFormat": "YYYY-MM-DD",
                    "categoryAxis": {
                        "parseDates": true
                    },
                    "chartCursor": {
                        "enabled": true
                    },
                    "chartScrollbar": {
                        "enabled": true
                    },
                    "trendLines": [],
                    "graphs": [
                        {
                            "balloonText": "Money Spent: $[[value]]",
                            "bullet": "round",
                            "id": "AmGraph-1",
                            "title": "Cost",
                            "type": "smoothedLine",
                            "valueAxis": "Cost",
                            "valueField": "column-1"
                        },
                        {
                            "balloonText": "Quantity: [[value]]",
                            "bullet": "square",
                            "id": "AmGraph-2",
                            "title": "Amount",
                            "type": "smoothedLine",
                            "valueAxis": "Amount",
                            "valueField": "column-2"
                        }
                    ],
                    "guides": [],
                    "valueAxes": [
                        {
                            "axisTitleOffset": 7,
                            "id": "Cost",
                            "title": "Cost"
                        },
                        {
                            "id": "Amount",
                            "position": "right",
                            "title": "Amount"
                        }
                    ],
                    "allLabels": [],
                    "balloon": {
                        "borderThickness": 5
                    },
                    "legend": {
                        "enabled": true,
                        "useGraphSettings": true
                    },
                    "titles": [
                        {
                            "id": "Title-1",
                            "size": 15,
                            "text": "User Status"
                        }
                    ],
                    "dataProvider": dataArray
                    // "dataProvider":[
                    //
                    //
                    //
                    //
                    //
                    //     {
                    //         "date": "2014-03-01",
                    //         "column-1": 8,
                    //         "column-2": "0.5"
                    //     },
                    //     {
                    //         "date": "2014-03-02",
                    //         "column-1": 6,
                    //         "column-2": "0.7"
                    //     },
                    //     {
                    //         "date": "2014-03-03",
                    //         "column-1": 2,
                    //         "column-2": "0.3"
                    //     },
                    //     {
                    //         "date": "2014-03-04",
                    //         "column-1": 1,
                    //         "column-2": "0.3"
                    //     },
                    //     {
                    //         "date": "2014-03-05",
                    //         "column-1": 2,
                    //         "column-2": "0.1"
                    //     },
                    //     {
                    //         "date": "2014-03-06",
                    //         "column-1": 3,
                    //         "column-2": "0.2"
                    //     },
                    //     {
                    //         "date": "2014-03-07",
                    //         "column-1": 6,
                    //         "column-2": "0.8"
                    //     }
                    //
                    // ]
                }
            );
        }
    });
    // $.ajax ({
    //     url: "costGraph.php",
    //     type: "POST",
    //     data: {name:names },
    //     dataType: "json",
    //     success: function setContentData(data) {
    //         var values = data[0];
    //         var names = data[1];
    //         var sumCost = data[2];
    //
    //         document.getElementById('graph_sumCost').innerText = "$ "+sumCost;
    //         $('#sparklineMoney').sparkline(values, {
    //             type: 'line',
    //             width:'90%',
    //             height: '75',
    //             fillColor: '',
    //             lineColor: '#fff',
    //             lineWidth: 1,
    //             resize: 'true',
    //             spotColor: '#f22',
    //             valueSpots: {'0:': '#fff'},
    //             minSpotColor: '#FFA54F',
    //             maxSpotColor: '#FFA54F',
    //             highlightSpotColor: '#87CEEB',
    //             highlightLineColor: '#ffffff',
    //             spotRadius: 5,
    //             tooltipFormat: '{{offset:names}} - ${{y}}',
    //             tooltipValueLookups: {
    //                 'names':names
    //             }
    //
    //         });
    //
    //     }
    // });
    // $.ajax ({
    //     url: "amountGraph.php",
    //     type: "POST",
    //     data: {name:names },
    //     dataType: "json",
    //     success: function setContentData(data) {
    //         var values = data[0];
    //         var names = data[1];
    //         var sumQty = data[2];
    //         document.getElementById('graph_sumQty').innerText = sumQty;
    //         $('#sparklineAmount').sparkline(values, {
    //             type: 'line',
    //             width:'90%',
    //             height: '75',
    //             fillColor: '',
    //             lineColor: '#fff',
    //             lineWidth: 1,
    //             resize: 'true',
    //             spotColor: '#f22',
    //             valueSpots: {'0:': '#fff'},
    //             minSpotColor: '#FFA54F',
    //             maxSpotColor: '#FFA54F',
    //             highlightSpotColor: '#87CEEB',
    //             highlightLineColor: '#ffffff',
    //             spotRadius: 5,
    //             tooltipFormat: '{{offset:names}} - Quantity: {{y}}',
    //             tooltipValueLookups: {
    //                 'names':names
    //             }
    //         });
    //
    //     }
    // });

}