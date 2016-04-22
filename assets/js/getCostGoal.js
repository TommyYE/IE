function getCostGoal (){
    var names = "ha";
    $.ajax ({
        url: "getCostGoal.php",
        type: "POST",
        data: {name:names},
        dataType: "json",
        success: function(data) {
            var numOfGoal = data[3];
            var goalNameArray = data[0];
            var goalPriceArray = data[1];
            var sumCost = data[2];
            document.getElementById('qtyOfGoal').innerText=data[3];
            var goalHtml = "<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have " +data[3]+ " goals</p></li>";
            if(numOfGoal<4){
                for (var i=0; i<numOfGoal;i++){
                    var percentage = (sumCost/goalPriceArray[i])*100;
                    percentage = percentage.toFixed(2);
                    goalHtml = goalHtml + "<li> <a href=\"#\"> <div class=\"task-info\"> <div class=\"desc\">"+goalNameArray[i]+"</div> <div class=\"percent\">"+percentage+"%</div> </div> <div class=\"progress progress-striped\"> <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: "+percentage+"%\"> <span class=\"sr-only\">"+percentage+"% Complete (success)</span> </div> </div> </a> </li>";
                }
                goalHtml = goalHtml + "<li class=\"external\"> <a href=\"#\">See All Tasks</a> </li>";
                document.getElementById('goalDropdown').innerHTML = goalHtml;
            }else{
                for (var i=numOfGoal-4; i<numOfGoal;i++){
                    //var percentage = (goalPriceArray[i]/sumCost)*100;
                    var percentage = (sumCost/goalPriceArray[i])*100;
                    percentage = percentage.toFixed(2);
                    goalHtml = goalHtml + "<li> <a href=\"#\"> <div class=\"task-info\"> <div class=\"desc\">"+goalNameArray[i]+"</div> <div class=\"percent\">"+percentage+"%</div> </div> <div class=\"progress progress-striped\"> <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: "+percentage+"%\"> <span class=\"sr-only\">"+percentage+"% Complete (success)</span> </div> </div> </a> </li>";
                }
                goalHtml = goalHtml + "<li class=\"external\"> <a href=\"#\">See All Goals</a> </li>";
                document.getElementById('goalDropdown').innerHTML = goalHtml;
            }

            //document.getElementById('goalDropdown').innerHTML="<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have" +data[2]+ "pending tasks</p></li><li><a href=\"index.html#\"> <div class=\"task-info\"> <div class=\"desc\">DashGum Admin Panel</div> <div class=\"percent\">40%</div> </div> <div class=\"progress progress-striped\"> <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\"> <span class=\"sr-only\">40% Complete (success)</span> </div> </div> </a> </li>";
            //document.getElementById('goalDropdown').innerHTML="<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have 4 pending tasks</p> </li> <li>";
            //window.location.reload();

        }
    });
    $.gritter.removeAll();

}
