function displayCostGoal (){
    var names = "ha";
    $.ajax ({
        url: "getCostGoal.php",
        type: "POST",
        data: {name:names},
        dataType: "json",
        success: function(data) {
            alert(data[2]);
            var numOfGoal = data[3];
            var goalNameArray = data[0];
            var goalPriceArray = data[1];
            var sumCost = data[2];
            //var goalHtml = "<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have " +data[3]+ " goals</p></li>";
            var goalHtml = "";
                for (var i=0; i<numOfGoal;i++){
                    //var percentage = (goalPriceArray[i]/sumCost)*100;
                    var percentage = (sumCost/goalPriceArray[i])*100;
                    percentage = percentage.toFixed(2);
                    var theRest = 100 - percentage;
                    var idName = "chart";
                    var idName2 = "chart" + i-1;
                    // var doughnutData = [
                    //     {
                    //         value: percentage,
                    //         color:"#FF6B6B"
                    //     },
                    //     {
                    //         value : theRest,
                    //         color : "#ffffff"
                    //     }
                    // ];
                    //var myDoughnut = new Chart(document.getElementById(idName).getContext("2d")).Doughnut(doughnutData);
                    //goalHtml = goalHtml + "<div class=\"col-md-4 col-sm-4 mb\"><div class=\"darkblue-panel pn donut-chart\"><div class=\"darkblue-header\"><h5>"+goalNameArray[i]+"</h5></div><canvas id=\"chart\" height=\"120\" width=\"120\"></canvas><script>var doughnutData = [{value: 50,color:\"#FF6B6B\"},{value : 50,color : \"#fdfdfd\"}]var myDoughnut = new Chart(document.getElementById(\""+idName+"\").getContext(\"2d\")).Doughnut(doughnutData); </script><div class=\"row\"><div class=\"col-sm-3 col-xs-3 col-sm-offset-1 col-xs-offset-1\"><h4><i class=\"fa fa-dollar\"></i>"+goalPriceArray[i]+"</h4></div><div class=\"col-sm-5 col-xs-5 col-sm-offset-3 col-xs-offset-3\"><h1>"+percentage+"%</h1></div></div></div></div>";

                }
                document.getElementById('GoalDisplay').innerHTML = goalHtml;
                

            //document.getElementById('goalDropdown').innerHTML="<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have" +data[2]+ "pending tasks</p></li><li><a href=\"index.html#\"> <div class=\"task-info\"> <div class=\"desc\">DashGum Admin Panel</div> <div class=\"percent\">40%</div> </div> <div class=\"progress progress-striped\"> <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\"> <span class=\"sr-only\">40% Complete (success)</span> </div> </div> </a> </li>";
            //document.getElementById('goalDropdown').innerHTML="<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have 4 pending tasks</p> </li> <li>";
            //window.location.reload();

        }
    });
    $.gritter.removeAll();

}

function displayGraphGoal (){
    var names = "ha";
    $.ajax ({
        url: "getCostGoal.php",
        type: "POST",
        data: {name:names},
        dataType: "json",
        success: function(data) {
            //alert(data[2]);
            var numOfGoal = data[3];
            var goalNameArray = data[0];
            var goalPriceArray = data[1];
            var sumCost = data[2];
            //var goalHtml = "<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have " +data[3]+ " goals</p></li>";
            var goalHtml = "";

            for (var i=0; i<numOfGoal;i++){
                var percentage2 = (sumCost/goalPriceArray[i])*100;
                percentage2 = percentage2.toFixed(2);
                var theRest2 = 100 - percentage2;
                var idName2 = "chart"+i ;
                var doughnutData2 = [
                    {
                        value: percentage2,
                        color:"#FF6B6B"
                    },
                    {
                        value : theRest2,
                        color : "#ffffff"
                    }
                ];
                var myDoughnut = new Chart(document.getElementById(idName2).getContext("2d")).Doughnut(doughnutData2);
            }

            //document.getElementById('goalDropdown').innerHTML="<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have" +data[2]+ "pending tasks</p></li><li><a href=\"index.html#\"> <div class=\"task-info\"> <div class=\"desc\">DashGum Admin Panel</div> <div class=\"percent\">40%</div> </div> <div class=\"progress progress-striped\"> <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\"> <span class=\"sr-only\">40% Complete (success)</span> </div> </div> </a> </li>";
            //document.getElementById('goalDropdown').innerHTML="<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have 4 pending tasks</p> </li> <li>";
            //window.location.reload();

        }
    });
    $.gritter.removeAll();

}

