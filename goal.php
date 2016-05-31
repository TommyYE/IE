<?php
session_start();

?>
<!DOCTYPE html>
<?php
include('connectMySQL.php');
// $brandListQuery = mysqli_query($con, "SELECT Brand FROM Cigarette");

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>QUITMATE</title>
    <link rel="shortcut icon" href=""/>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lightwing-font/css/lw.css">
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
    <link href="assets/css/bootstrap-combobox.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/my-icons-collection 2/font/flaticon.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->


</head>

<body>
<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Menu"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>QUITMATE</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <?php
            if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
                echo "<ul class=\"nav top-menu\">";
            }else{
                echo "<ul class=\"nav top-menu\" style=\"display: none\">";
            }
            ?>
            <!-- Goal start -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                    <i class="fa fa-tasks"></i>
                    <span id="qtyOfGoal" class="badge bg-theme"></span>
                </a>
                <ul class="dropdown-menu extended tasks-bar" id="goalDropdown">

                </ul>
            </li>
            <!-- Goal end  -->
            <!-- Challenge start -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                    <i class="fa fa-envelope-o"></i>
                    <span id="qtyOfChallenge" class="badge bg-theme">0</span>
                </a>
                <ul class="dropdown-menu extended inbox" id="challengeDropdown">
                    <div class="notify-arrow notify-arrow-green"></div>
                    <li>
                        <p class="green">You have no challenge request.</p>
                    </li>
                </ul>
            </li>
            <!-- Challenge end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <?php
                if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
                    echo "<li><a id=\"logout\" class=\"logout\" href=\"javascript:;\">Logout";
                }else{
                    echo "<li><a id=\"login\" class=\"logout\" href=\"javascript:;\">Login";
                }
                ?></a></li>
            </ul>
        </div>
        <?php
        if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
            echo "<div class=\"top-menu\" style=\"display: none\">";
        }else{
            echo "<div class=\"top-menu\" style=\"display: block\">";
        }
        ?>
        <ul class="nav pull-right top-menu">
            <li><a id="signup" class="logout" href="javascript:;">SignUp</a></li>
        </ul>
        </div>
        <?php
        if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
            echo "<div class=\"top-menu\"  style=\"padding-top: 22px\">";
            echo "<ul class=\"nav pull-right top-menu\" style='margin-right:10px'>
                    <span class=\"label label-default\" style='font-size: larger'>Hello, ".$_SESSION["usrname"]."</span>
                </ul></div>";
        }
        ?>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="#"><img src="assets/img/QuitMateWebsite.png" class="img-circle" width="60"></a></p>
                <h5 class="centered">Quit Mate</h5>

                <li class="mt">
                    <a href="counter.php">
                        <i class="fa fa-clock-o"></i>
                        <span>Counter</span>
                    </a>
                </li>

                <li class="mt">
                    <a href="javascript:;" >
                        <i class="fa fa-sitemap"></i>
                        <span>Goals</span>
                    </a>
                    <ul class="sub">
                          <li><?php
                              if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
                                  echo "<a id=\"goal_in\" href=\"#\">Set Goal";
                              }else{
                                  echo "<a id=\"goal_out\" href=\"#\">Set Goal";
                              }
                              ?></a></li>
                          <li><?php
                              if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
                                  echo "<a  href=\"goal.php\">Display Goal";
                              }else{
                                  echo "<a id=\"displayGoal_out\" href=\"#\">Display Goal";
                              }
                              ?></a></li>
                      </ul>
                  </li>
                  <li class="mt">
                      <?php
                      if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
                          echo "<a href=\"challengeBuddy.php\" >";
                      }else{
                          echo "<a id=\"challenge_out\" href=\"#\">";
                      }
                      ?>
                          <i class="fa fa-users"></i>
                          <span>Challenge Buddy</span>
                      </a>
                  </li>
                <li class="mt">
                    <a href="javascript:;" >
                        <i class="fa fa-file-text"></i>
                        <span>Helpful Information</span>
                    </a>
                    <ul class="sub">
                        <li><a href="http://www.quitnow.gov.au/internet/quitnow/publishing.nsf/Content/damaging-your-body" target="_blank">Quit Line</a></li>
                        <li><a href="https://www.monash.edu/ohs/health-and-wellbeing/smoke-free-monash" target="_blank">Monash Quit Program</a></li>
                    </ul>
                </li>
                <li class="mt">
                    <a href="index.html#aboutUs" >
                        <i class="fa fa-users"></i>
                        <span>About Us</span>
                    </a>
                </li>


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">

            </div>
            <!-- GRAPH DISPLAY END -->
            <!-- GOAL DISPLAY END -->
            <div class="col-lg-12" >
                <div class="row" id="GoalDisplay">
                    <?php
                    $userName = $_SESSION["usrname"];
                    $sql = "select format(SUM(cost),2) AS Cost from Event where userName = '".$userName."'";
                    $result_sumCost = mysqli_query($con,$sql);
                    $cost_row = mysqli_fetch_array($result_sumCost);
                    if($cost_row){
                        $sumCost = $cost_row['Cost'];
                    }else{
                        echo "No result";
                    }
                    $sql = "select goal_id_m AS GoalID, goal_name_m AS GoalName, goal_price_m AS GoalPrice from UserGoalInMoney where userName = '".$userName."'";
                    $combo="";
                    if($result=$con->query($sql)){
                        if($result->num_rows){
                            $i=0;
                            while($row=$result->fetch_object()) {
                                $goalPrice=$row->GoalPrice;
                                $amount=(int)($sumCost/$goalPrice);
                                $percentage=(int)((($sumCost/$goalPrice)-$amount)*100);
                                $rest=100-$percentage;
                                $combo.="<div class=\"col-md-4 col-sm-4 mb\" id=\"goalBlock".$i."\">
                                                    <div class=\"grey-panel pn donut-chart\">
                                                        <div class=\"grey-header\">
                                                            <h5>".$row->GoalName."</h5>
                                                        </div>
                                                        <canvas id=\"chart".$i."\" height=\"120\" width=\"120\"></canvas>
                                                        
                                                        <script>
                                                            var doughnutData = [
                                                                {
                                                                    value: ".$percentage.",
                                                                    color:\"#FF6B6B\"
                                                                },
                                                                {
                                                                    value : ".$rest.",
                                                                    color : \"#ffffff\"
                                                                }
                                                            ];
                                                            var myDoughnut = new Chart(document.getElementById(\"chart".$i."\").getContext(\"2d\")).Doughnut(doughnutData);
                                                        </script>
                                                        <div class=\"row\">
                                                            <div class=\"col-sm-6 col-xs-6 goleft\">
                                                                <p>Currently funded for<br/>".$amount." ".$row->GoalName."<br/><button id=\"button".$i."\" onclick=\"goalGraphDelete(".$i.")\" value=\"".$row->GoalID."\">Close</button></p>
                                                            </div>
                                                            <div class=\"col-sm-6 col-xs-6\">
                                                                <h2>".$percentage."%</h2>
                                                            </div>
                                                        </div>
                                                    </div><! --/grey-panel -->
                                                </div>";
                                $i++;
                            }
                            $result->free();
                        }
                    }

                    echo $combo;
                    ?><!-- /col-md-4-->

                </div>
            </div>
            <!--/ col-lg-12 -->
            </div><!--/ row -->
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2016 - Quinate Interactive
            <a href="buttons.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/80x15.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery-1.8.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/jquery.sparkline.js"></script>

<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
<script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="http://www.amcharts.com/lib/3/serial.js"></script>
<script src="http://www.amcharts.com/lib/3/themes/chalk.js"></script>
<!--     <script src="assets/js/common-scripts.js"></script> -->

<!--script for this page-->
<script src="assets/js/morris-conf.js"></script>
<script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="assets/js/gritter-conf.js"></script>
<script type="text/javascript" src="assets/js/a.js"></script>
<script src="assets/js/sparkline-chart2.js"></script>
<script src="assets/js/getCostGoal.js"></script>
<script src="assets/js/displayCostGoal.js"></script>
<script src="assets/js/loadFact.js"></script>
<script src="assets/js/initialDisplay.js"></script>
<script src="assets/js/sparkline-chart.js"></script>
<script src="assets/js/bootstrap-combobox.js"></script>
<script src="assets/js/getChallenge.js"></script>


<!-- Initial Functions -->
<?php
if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
    echo "<script>initialDisplay()</script>";
}
?>

<script>
    initialChart();
    getCostGoal();
    loadFact();
    checkChallenge();
    //displayCostGoal();
    //displayGraphGoal()
    $(document).ready(function(){
        $('.combobox').combobox();
    });
</script>
<!-- Counter -->
<script>
    function modify_qty(val) {
        var qty = document.getElementById('qty').value;
        var new_qty = parseInt(qty,10) + val;
        if (new_qty > 50){
            new_qty = 50;
            $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Attention',
                // (string | mandatory) the text inside the notification
                text: 'Counter accepts a maximum 100 cigarettes only. (Did you really do that?! OMG)' ,
                //class_name: 'gritter-light',
                time:1500
            });
        }
        if (new_qty < 0) {
            new_qty = 0;
        }
        document.getElementById('qty').value = new_qty;
        return new_qty;
    }
</script>
<!-- Submit Button -->
<script>
    function checkRate(input)
    {
        var re = /^[0-9]+.?[0-9]*$/;
        var nubmer = input;
        if (!re.test(nubmer))
        {
            return false;
        }
        return true;
    }
    function submitOnClick_out() {
        var qty = document.getElementById('qty').value;
        //var brand = document.getElementById('brand').value;
        var size = document.getElementById('size').value;
        var price = document.getElementById('priceInput').value;
        var brand = $("#combobox option:selected").text();
        //alert(i);
        if (!checkRate(qty)){
            qty = 0;
            document.getElementById('qty').value=0;
        }
        if (!checkRate(price)){
            price = 0;
        }
        $.ajax ({
            url: "a.php",
            type: "POST",
            data: {name:brand },
            dataType: "json",
            success: function setContentData(data) {
                var tar = data[0]*qty;
                var nct = data[1]*qty;
                var co = data[2]*qty;
                var cost = price/size*qty;
                document.getElementById('costDisplay').innerText = cost.toFixed(2);
                document.getElementById('tarDisplay').innerText = tar.toFixed(2) + " mg";
                document.getElementById('nctDisplay').innerText = nct.toFixed(2) + " mg";
                document.getElementById('coDisplay').innerText = co.toFixed(2) + " mg";
                //showChart(tar, nct, co);
                //window.location.reload();
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Success!',
                    // (string | mandatory) the text inside the notification
                    text: 'Submit successful' ,
                    //class_name: 'gritter-light',
                    time:1500
                });
            },
            error: function(){
                alert("error happened.");
            }
        });
    }
    function submitOnClick_in() {
        var qty = document.getElementById('qty').value;
        //var brand = document.getElementById('brand').value;
        var size = document.getElementById('size').value;
        var price = document.getElementById('priceInput').value;
        var brand = $("#combobox option:selected").text();
        if (!checkRate(qty)){
            qty = 0;
            document.getElementById('qty').value=0;
        }
        if (!checkRate(price)){
            price = 0;
        }
        if (price < 100){
            var cost = price/size*qty;
            $.ajax ({
                url: "event.php",
                type: "POST",
                data: {brand:brand, qty:qty, cost:cost},
                dataType: "json",
                success: function setContentData(data) {
                    var tar = parseFloat(data[0]);
                    var nct = parseFloat(data[1]);
                    var co = parseFloat(data[2]);
                    var cost = parseFloat(data[3]);

                    document.getElementById('costDisplay').innerText = cost.toFixed(2);
                    document.getElementById('tarDisplay').innerText = tar.toFixed(2) + " mg";
                    document.getElementById('nctDisplay').innerText = nct.toFixed(2) + " mg";
                    document.getElementById('coDisplay').innerText = co.toFixed(2) + " mg";
                    getCostGoal();
                    lineChart();
                    loadFact();
                    //document.getElementById('GoalDisplay').innerHTML = "hahahaha" + document.getElementById('GoalDisplay').innerHTML;
                    //showChart(tar, nct, co);
                    //window.location.reload();

                }

            });
        }else{
            $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Attention',
                // (string | mandatory) the text inside the notification
                text: 'Price of one package accept a maximum of 100 dollars only.' ,
                //class_name: 'gritter-light',
                time:1500
            });
        }

    }
</script>
<!-- Challenge Buddy -->
<script>
    function challenge_submit() {
        var competitor = $("#competitorList option:selected").text();
        $.ajax ({
            url: "challenge.php",
            type: "POST",
            data: {name:competitor },
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
                challengeCostGraph(uDaily, cDaily, competitor, userName);
                alert("uN:"+uNum+" uS:"+uSum+" cN:"+cNum+" cS:"+cSum);
            },
            error: function(){
                alert("error happened.");
            }
        });
    }
</script>
<!-- Default -->
<script>
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });
</script>
<!-- Brand Dropdown Menu Li -->
<script>
    $('#brand-dp li').click(function(){
        var selText = $(this).text();
        var num = $(this).index();
        $(this).parents('.col-lg-12').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
        document.getElementById('brand').value = selText;
    });

</script>
<!-- Size Dropdown Menu Li -->
<script>
    $('#size-dp li').click(function(){
        var selText = $(this).text();
        var num = $(this).index();
        $(this).parents('.col-lg-4').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
        document.getElementById('size').value = selText;
    });
</script>
<!-- Login Function -->
<script>
    $('#loginOK').live("click", function(){
        var loginput = document.getElementById('login_input').value;
        var loginPwd = document.getElementById('loginPassword').value;
        $.ajax ({
            url: "login.php",
            type: "POST",
            data: {name:loginput, pwd:loginPwd},
            dataType: "text",
            success: function(data) {
                if(data=="succeed") {
                    window.location.reload();
                }else if(data=="exist"){
                    $.gritter.add({
                        // (string | mandatory) the heading of the notification
                        title: 'Attention',
                        // (string | mandatory) the text inside the notification
                        text: 'Sorry, the user does not exist.' ,
                        //class_name: 'gritter-light',
                        time:1500
                    });
                }else if(data=="invalidPwd"){
                    $.gritter.add({
                        // (string | mandatory) the heading of the notification
                        title: 'Attention',
                        // (string | mandatory) the text inside the notification
                        text: 'Please enter the valid password.' ,
                        //class_name: 'gritter-light',
                        time:1500
                    });
                }
            }
        });
    })

</script>
<!-- Logout Function -->
<script>
    $('#logout').click(function(){
        $.ajax({
            url: "logout.php",
            type: "POST",
            success: function(data){
                alert("Logout Succeeded.");
                window.location.href="counter.php";
            }
        });

    });
</script>
<!-- Sign Up Function -->
<script>
    $('#signupOK').live("click", function(){
        var signupinput = document.getElementById('signup_input').value;
        var signupPw = document.getElementById('signUpPassword1').value;
        var confirmPw = document.getElementById('signUpPassword2').value;
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        if(signupPw == confirmPw){

            if (true == enoughRegex.test(signupPw)){
                $.ajax ({
                    url: "signup.php",
                    type: "POST",
                    data: {name:signupinput, pwd:signupPw},
                    dataType: "text",
                    success: function(data) {
                        if(data == "existed"){
                            $.gritter.add({
                                // (string | mandatory) the heading of the notification
                                title: 'Attention',
                                // (string | mandatory) the text inside the notification
                                text: 'Sorry, the user name is existed.',
                                //class_name: 'gritter-light',
                                time:1500
                            });
                        }else if(data == "invalid"){
                            $.gritter.add({
                                // (string | mandatory) the heading of the notification
                                title: 'Attention',
                                // (string | mandatory) the text inside the notification
                                text: 'Please enter a valid e-mail address.',
                                //class_name: 'gritter-light',
                                time:1500
                            });
                        }else{
                            window.location.reload();
                        }

                    }
                });
            }else{
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Attention',
                    // (string | mandatory) the text inside the notification
                    text: 'The password is too weak.',
                    //class_name: 'gritter-light',
                    time:1500
                });
            }
        }else{
            $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Attention',
                // (string | mandatory) the text inside the notification
                text: 'Please enter the same password.',
                //class_name: 'gritter-light',
                time:1500
            });
        }

    })
</script>
<!-- Set Goal Function -->
<script>
    $('#setGoalOK').live("click", function(){
        var goalInput = document.getElementById('goal_input').value;
        var moneyInput = document.getElementById('money_input').value;
        if (goalInput.replace(/(^s*)|(s*$)/g, "").length ==0)
        {
            $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Attention',
                // (string | mandatory) the text inside the notification
                text: 'Sorry, the goal name cannot be empty.',
                //class_name: 'gritter-light',
                time:1500
            });
        }else{
            if (moneyInput.replace(/(^s*)|(s*$)/g, "").length ==0){
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Attention',
                    // (string | mandatory) the text inside the notification
                    text: 'Sorry, the goal price cannot be empty.',
                    //class_name: 'gritter-light',
                    time:1500
                });
            }else{
                if(!checkRate(moneyInput)){
                    $.gritter.add({
                        // (string | mandatory) the heading of the notification
                        title: 'Attention',
                        // (string | mandatory) the text inside the notification
                        text: 'Sorry, the goal price must be numeric.',
                        //class_name: 'gritter-light',
                        time:1500
                    });
                }else{
                    $.ajax ({
                        url: "setCostGoal.php",
                        type: "POST",
                        data: {goal:goalInput, price:moneyInput},
                        dataType: "text",
                        success: function(data) {
                            getCostGoal();
                            window.location.reload();
                        }
                    });
                }
            }
        }

    })
</script>
<!-- Delete Goal Function -->
<script>
    function goalGraphDelete(i){
        var goalId = document.getElementById("button"+i).value;
        $.ajax ({
            url: "removeCostGoal.php",
            type: "POST",
            data: {goalId:goalId},
            dataType: "text",
            success: function(data) {
                if(data == "Succeeded"){
                    document.getElementById("goalBlock"+i).style.display = "none";
                    getCostGoal();
                    $.gritter.add({
                        // (string | mandatory) the heading of the notification
                        title: 'Succeeded',
                        // (string | mandatory) the text inside the notification
                        text: 'The goal has been removed successfully.',
                        //class_name: 'gritter-light',
                        time:1500
                    });
                }

            }
        });
    }
</script>
<!-- Password Strength -->
<script>
    function pwdStrength(){
        //document.getElementById("strength").innerText = "bababa";
        var strength = document.getElementById("strength");
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        var pwd = document.getElementById("signUpPassword1");
        if (false == enoughRegex.test(pwd.value)) {
            strength.innerText = "More Characters";
            strength.style.color = "white";
        } else if (strongRegex.test(pwd.value)) {
            strength.innerText = "Medium!";
            strength.style.color = "orange";
        } else if (mediumRegex.test(pwd.value)) {
            strength.innerText = "Strong!";
            strength.style.color = "green";
        }  else {
            strength.innerText = "Weak!";
            strength.style.color = "red";
        }
    }
</script>
<?php
if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
    echo "<script>lineChart()</script>";
}
?>





</body>
</html>
