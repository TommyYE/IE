function checkChallenge (){
    $.ajax({
        url: "checkChallenge.php",
        type: "POST",
        dataType: "json",
        success: function(data){
            if(data[0] == "Qholding"){
                document.getElementById("selectChallenger").style= "display : none";
                document.getElementById("challengeSubmit").style.display = "none";
                document.getElementById("waitingChallenger").style.display = "block";
                document.getElementById("challengeCancle").style.display = "block";
                document.getElementById("waitingChallenger").innerText = "Your request has been sent to " + data[1];

            }else if(data[0] == "Qongoing"){
                document.getElementById("selectChallenger").style= "display : none";
                document.getElementById("challengeSubmit").style.display = "none";
                document.getElementById("ongoingChallenger").style.display = "block";
                document.getElementById("challengeCancle").style.display = "block";
                var responer = data[1];
                $.ajax ({
                    url: "challengeRequest.php",
                    type: "POST",
                    data: {name:responer },
                    dataType: "json",
                    success: function setContentData(data) {
                        var uNum = data[0];
                        var uSum = data[1];
                        var cNum = data[2];
                        var cSum = data[3];
                        var userName = data[4];
                        var uDaily = uSum/uNum;
                        uDaily = uDaily.toFixed(1);
                        var cDaily = cSum/cNum;
                        cDaily = cDaily.toFixed(1);
                        document.getElementById("challengeCostDisplay").style.display='block';
                        challengeCostGraph(uDaily, cDaily, responer, userName);
                    },
                    error: function(){
                        alert("error happened.");
                    }
                });
            }else if(data[0] == "Pholding"){

                document.getElementById('qtyOfChallenge').innerText='1';
                var challengeHtml = "<div class=\"notify-arrow notify-arrow-green\"></div> <li><p class=\"green\">You have one challenge request.</p> </li><li> <a href=\"challengeBuddy.php\"> <span class=\"photo\"><img alt=\"avatar\" src=\"assets/img/hourglass.png\"></span> <span class=\"subject\"> <span class=\"from\">"+data[1]+"</span> <span class=\"time\"></span> </span> <span class=\"message\">Hi mate, want a challenge? </span> </a> </li>"
                document.getElementById("challengeDropdown").innerHTML = challengeHtml;
                document.getElementById("selectChallenger").style= "display : none";
                document.getElementById("challengeSubmit").style.display = "none";
                document.getElementById("responeChallenger").style.display = "block";
                document.getElementById("challengeAccept").style.display = "block";
                document.getElementById("challengeDecline").style.display = "block";
                document.getElementById("responeChallenger").innerText = "You are requested for a challenge by " + data[1];
            }else if(data[0] == "Pongoing"){
                document.getElementById("selectChallenger").style= "display : none";
                document.getElementById("challengeSubmit").style.display = "none";
                document.getElementById("ongoingChallenger").style.display = "block";
                document.getElementById("challengeCancle").style.display = "block";
                var requester = data[1];
                $.ajax ({
                    url: "challengeRespone.php",
                    type: "POST",
                    data: {name:requester},
                    dataType: "json",
                    success: function setContentData(data) {
                        var uNum = data[0]; 
                        var uSum = data[1];
                        var cNum = data[2];
                        var cSum = data[3];
                        var userName = data[4];
                        var uDaily = uSum/uNum;
                        uDaily = uDaily.toFixed(1);
                        var cDaily = cSum/cNum;
                        cDaily = cDaily.toFixed(1);
                        document.getElementById("challengeCostDisplay").style.display='block';
                        challengeCostGraph(uDaily, cDaily, requester, userName);
                    },
                    error: function(){
                        alert("error happened.");
                    }
                });
            }else{
                document.getElementById("selectChallenger").style.display = "block";
                document.getElementById("challengeSubmit").style.display = "block";
            }
        }
    });
}

function challenge_cancle(){
    $.ajax({
        url: "removeChallenge.php",
        type: "POST",
        dataType: "text",
        success: function(data){
            //alert(data);
            window.location.reload();
        }
    });
}

function challenge_accept(){
    $.ajax({
        url: "acceptChallenge.php",
        type: "POST",
        dataType: "text",
        success: function(data){
            //alert(data);
            window.location.reload();
        }
    });
}



function setChallenge (responer){
    var responerName = responer;
    $.ajax ({
        url: "setChallenge.php",
        type: "POST",
        data: {responer: responerName},
        dataType: "text",
        success: function(data){
            if(data == "succeeded"){

                window.location.reload();
            }else{
                //alert ("NO");
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Failed!',
                    // (string | mandatory) the text inside the notification
                    text: 'Sorry, you fail to make a challenge request.' ,
                    //class_name: 'gritter-light',
                    time:1500
                });
            }
        }
    });






    // var names = "ha";
    // $.ajax ({
    //     url: "getCostGoal.php",
    //     type: "POST",
    //     data: {name:names},
    //     dataType: "json",
    //     success: function(data) {
    //         var numOfGoal = data[3];
    //         var goalNameArray = data[0];
    //         var goalPriceArray = data[1];
    //         var sumCost = data[2];
    //         var goalId = data[4];
    //
    //         document.getElementById('qtyOfGoal').innerText=data[3];
    //         var goalHtml = "<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have " +data[3]+ " goals</p></li>";
    //         if(numOfGoal<4){
    //             for (var i=0; i<numOfGoal;i++){
    //                 var amount = parseInt(sumCost/goalPriceArray[i]);
    //
    //                 var percentage = ((sumCost/goalPriceArray[i])-amount)*100;
    //                 percentage = percentage.toFixed(2);
    //                 goalHtml = goalHtml + "<li> <a href=\"#\"> <div class=\"task-info\"> <div class=\"desc\" value=\""+goalId+"\">"+goalNameArray[i]+"</div> <div class=\"percent\">"+percentage+"%</div> </div> <div class=\"progress progress-striped\"> <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: "+percentage+"%\"> <span class=\"sr-only\">"+percentage+"% Complete (success)</span> </div> </div> </a> </li>";
    //             }
    //             goalHtml = goalHtml + "<li class=\"external\"> <a  href=\"goal.php\">See All Goals</a> </li>";
    //             document.getElementById('goalDropdown').innerHTML = goalHtml;
    //         }else{
    //             for (var i=numOfGoal-1; i>numOfGoal-5;i--){
    //                 //var percentage = (goalPriceArray[i]/sumCost)*100;
    //                 var amount = parseInt(sumCost/goalPriceArray[i]);
    //                 var percentage = ((sumCost/goalPriceArray[i])-amount)*100;
    //                 percentage = percentage.toFixed(2);
    //                 goalHtml = goalHtml + "<li> <a href=\"#\"> <div class=\"task-info\"> <div class=\"desc\" value=\""+goalId+"\">"+goalNameArray[i]+"</div> <div class=\"percent\">"+percentage+"%</div> </div> <div class=\"progress progress-striped\"> <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: "+percentage+"%\"> <span class=\"sr-only\">"+percentage+"% Complete (success)</span> </div> </div> </a> </li>";
    //             }
    //             goalHtml = goalHtml + "<li class=\"external\"> <a  href=\"goal.php\">See All Goals</a> </li>";
    //             document.getElementById('goalDropdown').innerHTML = goalHtml;
    //         }
    //
    //         //document.getElementById('goalDropdown').innerHTML="<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have" +data[2]+ "pending tasks</p></li><li><a href=\"index.html#\"> <div class=\"task-info\"> <div class=\"desc\">DashGum Admin Panel</div> <div class=\"percent\">40%</div> </div> <div class=\"progress progress-striped\"> <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\"> <span class=\"sr-only\">40% Complete (success)</span> </div> </div> </a> </li>";
    //         //document.getElementById('goalDropdown').innerHTML="<div class=\"notify-arrow notify-arrow-green\"></div> <li> <p class=\"green\">You have 4 pending tasks</p> </li> <li>";
    //         //window.location.reload();
    //
    //     }
    // });
    // $.gritter.removeAll();

}
