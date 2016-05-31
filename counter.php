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
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77162817-1', 'auto');
  ga('send', 'pageview');

</script>

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
      		<!-- INPUT BOARD -->
      			<div class="col-lg-6 col-md-6 col-sm-12">
      				<div class="showback">
<!--      					<h4><i class="fa fa-angle-right"></i> Did you smoke today?</h4>-->
						
						
						<!-- CIGARETTE BRAND -->
<!--						<div class="col-lg-12 col-md-12 col-sm-12">-->
<!--					    	<button id="brand" name="brand" value="aa" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">-->
<!--						    	Select your Cigarette-->
<!--						    	<span class="caret"></span>-->
<!--						    </button>-->
<!--						    <ul class="dropdown-menu" id="brand-dp" name="brand-dp" value="hello">-->
<!--                                --><?php
//
//        							$sql = "SELECT Brand FROM Cigarette";
//            						if($result=$con->query($sql)){
//            						//print_r($result);
//                						if($result->num_rows){
//                    						while($row=$result->fetch_object()) {
//                        						$combo.="<li><a href=\"#\">".$row->Brand."</a></li>";
//                    						}
//                    						$result->free();
//                						}
//            						}
//
//
//
//            						echo $combo;
//        						?>
<!--						    </ul>-->
<!--						</div>-->
                        <div class="col-lg-12">
                        <select class="combobox btn btn-default" id="combobox">
                            <?php
                            $sql = "SELECT Brand FROM Cigarette";
                            $combo="<option value=\"\">Choose a Cigarette Brand</option>";
                            if($result=$con->query($sql)){
                                //print_r($result);
                                if($result->num_rows){
                                    while($row=$result->fetch_object()) {
                                        $combo.="<option value=\"".$row->Brand."\">".$row->Brand."</option>";
                                    }
                                    $result->free();
                                }
                            }
                            echo $combo;
                            ?>
                        </select>
                        </div>
						<!-- SIZE -->
						<div id="size" class="col-lg-4 col-md-12 col-sm-12" style="margin-top:30px">
                            <input id="sizeInput" type="text" class="form-control" placeholder="Package size" maxlength="4" style="text-align:center; width:100%">
						</div>
						<!-- AUD SIGN -->
<!--						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="padding-top: 20px; margin-top:20px">-->
<!--									<span class="badge bg-info">$ </span>-->
<!--								</div>-->
						<!-- MONEY INPUT -->
						<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12" style="margin-top:30px">
									<input id="priceInput" type="text" class="form-control" placeholder="$AUD for pack of cigarette" style="text-align:center; width:100%">
								</div>       	
						
						<!-- COUNTER -->
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 10px">
                                <h4>Cigarette Smoked: </h4>
                            </div>
							<div class="col-lg-4 col-md-12 col-sm-12" >
								<div class="box1">
								<span onclick="modify_qty(+1)" class="flaticon-round"></span>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" align="center" style="">
								<h2><input id="qty" value="0" style="width: 30%; height: 40px; text-align:center; border:none"></h2>
							</div>
							<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
								<div class="box1">
									<span onclick="modify_qty(-1)" class="flaticon-circle"></span>
								</div>
							</div>	
						</div>					
						<p>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<button type="button" class="btn btn-theme03 btn-primary btn-lg btn-block" <?php  if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {echo "onclick=\"submitOnClick_in()\"";}else{echo "onclick=\"submitOnClick_out()\"";}?>><i class="fa fa-check"></i> Submit</button>
							</div>
						</p>				
      				</div><!-- /showback -->
      				<!-- /showback -->
      				
      			</div><! --/col-lg-6 -->
      			
      		<!-- DISPLAY BOARD -->
      			<div class="col-lg-6 col-md-6 col-sm-12" id="displayBoard">
<!--      				<div class="showback">-->
<!--      					<h2><i class="fa fa-angle-right"></i> My Profile</h2>-->
<!--				    	<div class="col-lg-5 col-md-7 col-sm-7 col-xs-7 col-lg-offset-1" style="text-align:right; margin-top:50px">-->
<!--				    		<h2><i class="fa fa-money"></i>Money:</h2>-->
<!--				    	</div>-->
<!--				    	<div class="col-lg-6 col-md-5 col-sm-5 col-xs-5" style="margin-top:50px">-->
<!--				    		<h2 id="costDisplay"><i class="fa fa-dollar"></i>0.00</h2>-->
<!--				    	</div>-->
<!--				    	<div class="col-lg-4 col-md-4 col-sm-3 col-xs-7 col-lg-offset-2 col-md-offset-2 col-sm-offset-3" style="text-align:right; margin-top:30px">-->
<!--				    		<h2><i class="fa flaticon-bottle"></i>Tar:</h2>-->
<!--				    	</div>-->
<!--				    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-5" style="text-align:left; margin-top:30px">-->
<!--				    		<h2 id="tarDisplay">0 mg</h2>-->
<!--				    	</div>-->
<!--                        <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center">-->
<!--                            <h4 id="tar_word"></h4>-->
<!--                        </div>-->
<!--				    	<div class="col-lg-6 col-md-7 col-sm-5 col-xs-7" style="text-align:right; margin-top:30px">-->
<!--				    		<h2><i class="fa flaticon-bottle-1"></i>Nicotine:</h2>-->
<!--				    	</div>-->
<!--				    	<div class="col-lg-4 col-md-5 col-sm-5 col-xs-5" style="text-align:left; margin-top:30px">-->
<!--				    		<h2 id="nctDisplay">0 mg</h2>-->
<!--				    	</div>-->
<!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center">-->
<!--                            <h4 id="nct_word"></h4>-->
<!--                        </div>-->
<!--				    	<div class="col-lg-6 col-md-8 col-sm-5 col-xs-7" style="text-align:right; margin-top:30px">-->
<!--				    		<h2><i class="fa flaticon-drink"></i>Carbon Monoxide:</h2>-->
<!--				    	</div>-->
<!--				    	<div class="col-lg-6 col-md-4 col-sm-5 col-xs-5" style="text-align:left; margin-top:30px">-->
<!--				    		<h2 id="coDisplay">0 mg</h2>-->
<!--				    	</div>-->
<!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center; margin-bottom: 100px">-->
<!--                            <h4 id="co_word"></h4>-->
<!--                        </div>-->
<!--      				</div><!-- /showback-->
                    <div class="showback">
                    <div class="row mtbox">
                        <div class="col-md-6 col-sm-6  col-xs-6 box0">
                            <div class="box1">
                                <p><img src="assets/my-icons-collection3/png/money-bag.png" style="width:30%"></p>
                                <h3>Cost</h3>
                                <h4 id="costDisplay">$ 0</h4>
                            </div>
                            <p id=""></p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 box0">
                            <div class="box1">
                                <p><img src="assets/my-icons-collection3/png/flask.png" style="width:30%"></p>
                                <h3>Tar</h3>
                                <h4 id="tarDisplay">0 mg</h4>
                            </div>
                            <p id="tar_word"></p>
                        </div>
                        </div>
                        <div class="row mtbox">
                        <div class="col-md-6 col-sm-6 col-xs-6 box0">
                            <div class="box1">
                                <p><img src="assets/my-icons-collection3/png/flask.png" style="width:30%"></p>
                                <h3>Nicotine</h3>
                                <h4 id="nctDisplay">0 mg</h4>
                            </div>
                            <p id="nct_word"></p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 box0">
                            <div class="box1">
                                <p><img src="assets/my-icons-collection3/png/flask.png" style="width:30%"></p>
                                <h4>Carbon Monoxide</h4>
                                <h4 id="coDisplay">0 mg</h4>
                            </div>
                            <p id="co_word"></p>
                        </div>
                    </div>

      			</div>
      			</div><!-- /col-lg-6 -->
                <!-- GRAPH DISPLAY START -->
                <div class="col-lg-12 col-md-12 col-sm-12 mb">
<!--                    --><?php
//                    if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
//                        echo "<div class=\"showback-all\" id=\"CostChart\">";
//                    }else{
//                        echo "<div class=\"showback-all\" id=\"CostChart\" style=\"display: none\">";
//                    }
//                    ?>
<!--                        <div class="darkblue-panel pn">-->
<!--                            <div class="darkblue-header">-->
<!--                                <h5 style="font-size:25px">COST</h5>-->
<!--                            </div>-->
<!--                            <div class="chart mt">-->
<!--                                <span id="sparklineMoney"></span>-->
<!--                            </div>-->
<!--                            <h5 class="mt"><b id="graph_sumCost"></b><br/>Weekly Spent</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-12 col-md-12 col-sm-12 mb">-->
<!--                    --><?php
//                    if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
//                        echo "<div class=\"showback-all\" id=\"CostChart\">";
//                    }else{
//                        echo "<div class=\"showback-all\" id=\"CostChart\" style=\"display: none\">";
//                    }
//                    ?>
<!--                    <div class="darkblue-panel pn">-->
<!--                        <div class="darkblue-header">-->
<!--                            <h5 style="font-size:25px">Amount</h5>-->
<!--                        </div>-->
<!--                        <div class="chart mt">-->
<!--                            <span id="sparklineAmount">&nbsp;</span>-->
<!--                        </div>-->
<!--                        <h5 class="mt"><b  id="graph_sumQty"></b><br/>Weekly Amount</h5>-->
<!--                    </div>-->
<!--                </div>-->
                <?php
                if(isset($_SESSION["usrname"]) && !empty($_SESSION["usrname"])) {
                    echo "<div class=\"col-lg-12 col-md-12 col-sm-12 mb showback-quarter\" id=\"chartdiv2\"></div>";
                }
                ?>

                </div>
                <!-- GRAPH DISPLAY END -->
              <!-- GOAL DISPLAY END -->

<!--                <div class="col-lg-12">-->
<!--                    <div class="showback-half">-->
<!--                    <h3><i class="fa fa-angle-right"></i> Challenge Buddy</h3>-->
<!--                    <div class="col-lg-7">-->
<!--                        <select class="combobox btn btn-default col-lg-7" id="competitorList">-->
<!--                            --><?php
//                            $userName = $_SESSION["usrname"];
//                            $sql = "SELECT userName FROM Users WHERE userName <> '".$userName."'";
//                            $combo="<option value=\"\">Choose a Competitor</option>";
//                            if($result=$con->query($sql)){
//                                //print_r($result);
//                                if($result->num_rows){
//                                    while($row=$result->fetch_object()) {
//                                        $combo.="<option value=\"".$row->userName."\">".$row->userName."</option>";
//                                    }
//                                    $result->free();
//                                }
//                            }
//                            echo $combo;
//                            ?>
<!--                        </select>-->
<!--                    </div>-->
<!--                    <div class="col-lg-5">-->
<!--                            <button class="btn btn-theme03 btn-primary btn-round" onclick="challenge_submit()">Challenge</button>-->
<!--                    </div>-->
<!--                    </div><!--/ showback-half -->-->
<!--                    <div id="challengeCostDisplay" style="width: 50%; height: 400px; background-color: #FFFFFF; display:none" ></div>-->
<!--                </div><!--/ col-lg-12 -->
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
      echo "<script>lineChart()</script>";
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
            var size = document.getElementById('sizeInput').value;
            var price = document.getElementById('priceInput').value;
            var brand = $("#combobox option:selected").text();
            //alert(size);
            if (!checkRate(qty)){
                qty = 0;
                document.getElementById('qty').value=0;
            }
            if (!checkRate(price)){
                price = 0;
            }
            if (!checkRate(size)){
                size = 0;
            }
            if(price == 0){
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Attention',
                    // (string | mandatory) the text inside the notification
                    text: 'Please enter the price.' ,
                    //class_name: 'gritter-light',
                    time:1500
                });
            }else if(size == 0){
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Attention',
                    // (string | mandatory) the text inside the notification
                    text: 'Please enter the package size of cigarette.' ,
                    //class_name: 'gritter-light',
                    time:1500
                });
            }else if(price > 100){
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Attention',
                    // (string | mandatory) the text inside the notification
                    text: 'Price of one package accept a maximum of 100 dollars only.' ,
                    //class_name: 'gritter-light',
                    time:1500
                });
            }else if(qty == 0){
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Attention',
                    // (string | mandatory) the text inside the notification
                    text: 'Please enter the amount of cigarette you smoked.' ,
                    //class_name: 'gritter-light',
                    time:1500
                });
            }else {
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
                        document.getElementById('costDisplay').innerText = "$ " + cost.toFixed(0);
                        document.getElementById('tarDisplay').innerText = tar.toFixed(0) + " mg";
                        document.getElementById('nctDisplay').innerText = nct.toFixed(0) + " mg";
                        document.getElementById('coDisplay').innerText = co.toFixed(0) + " mg";
                        //showChart(tar, nct, co);
                        //window.location.reload();
                        loadFact();
                        $.gritter.add({
                            // (string | mandatory) the heading of the notification
                            title: 'Success!',
                            // (string | mandatory) the text inside the notification
                            text: 'Submit successfully!!' ,
                            //class_name: 'gritter-light',
                            time:1500
                        });
                    },
                    error: function(){
                        $.gritter.add({
                            // (string | mandatory) the heading of the notification
                            title: 'Attention',
                            // (string | mandatory) the text inside the notification
                            text: 'Cannot find this cigarette brand.' ,
                            //class_name: 'gritter-light',
                            time:1500
                        });
                    }
                });
            }
        }
        function submitOnClick_in() {
            var qty = document.getElementById('qty').value;
            //var brand = document.getElementById('brand').value;
            var size = document.getElementById('sizeInput').value;
            var price = document.getElementById('priceInput').value;
            var brand = $("#combobox option:selected").text();
            var cost = price/size*qty;
            if (!checkRate(qty)){
                qty = 0;
                document.getElementById('qty').value=0;
            }
            if (!checkRate(price)){
                price = 0;
            }
            if (!checkRate(size)){
                size = 0;
            }
            if(price == 0){
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Attention',
                    // (string | mandatory) the text inside the notification
                    text: 'Please enter the price.' ,
                    //class_name: 'gritter-light',
                    time:1500
                });
            }else if(size == 0){
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Attention',
                    // (string | mandatory) the text inside the notification
                    text: 'Please selet the package size of cigarette.' ,
                    //class_name: 'gritter-light',
                    time:1500
                });
            }else if(price > 100){
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Attention',
                    // (string | mandatory) the text inside the notification
                    text: 'Price of one package accept a maximum of 100 dollars only.' ,
                    //class_name: 'gritter-light',
                    time:1500
                });
            }else if(qty == 0){
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Attention',
                    // (string | mandatory) the text inside the notification
                    text: 'Please enter the amount of cigarette you smoked.' ,
                    //class_name: 'gritter-light',
                    time:1500
                });
            }else {

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

                        document.getElementById('costDisplay').innerText = "$ " + cost.toFixed(0);
                        document.getElementById('tarDisplay').innerText = tar.toFixed(0) + " mg";
                        document.getElementById('nctDisplay').innerText = nct.toFixed(0) + " mg";
                        document.getElementById('coDisplay').innerText = co.toFixed(0) + " mg";
//                        getCostGoal();
                        lineChart();
                        loadFact();
                        window.location.href="counter.php#displayBoard";
                        $.gritter.add({
                            // (string | mandatory) the heading of the notification
                            title: 'Success!',
                            // (string | mandatory) the text inside the notification
                            text: 'Submit successfully!!' ,
                            //class_name: 'gritter-light',
                            time:1500
                        });
                        //document.getElementById('GoalDisplay').innerHTML = "hahahaha" + document.getElementById('GoalDisplay').innerHTML;
                        //showChart(tar, nct, co);
                        //window.location.reload();

                    },
                    error: function(){
                        $.gritter.add({
                            // (string | mandatory) the heading of the notification
                            title: 'Attention',
                            // (string | mandatory) the text inside the notification
                            text: 'Cannot find this cigarette brand.' ,
                            //class_name: 'gritter-light',
                            time:1500
                        });
                    }

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
   					window.location.reload();
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
                              window.location.href="goal.php";
                          }
                      });
                  }
              }
          }

      })
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
  <script type="text/javascript">
//      AmCharts.makeChart("chartdiv2",
//          {
//              "type": "serial",
//              "categoryField": "date",
//              "dataDateFormat": "YYYY-MM-DD",
//              "categoryAxis": {
//                  "parseDates": true
//              },
//              "chartCursor": {
//                  "enabled": true
//              },
//              "chartScrollbar": {
//                  "enabled": true
//              },
//              "trendLines": [],
//              "graphs": [
//                  {
//                      "balloonText": "Money Spent: $[[value]]",
//                      "bullet": "round",
//                      "id": "AmGraph-1",
//                      "title": "Cost",
//                      "type": "smoothedLine",
//                      "valueAxis": "Cost",
//                      "valueField": "column-1"
//                  },
//                  {
//                      "balloonText": "Quantity: [[value]]",
//                      "bullet": "square",
//                      "id": "AmGraph-2",
//                      "title": "Amount",
//                      "type": "smoothedLine",
//                      "valueAxis": "Amount",
//                      "valueField": "column-2"
//                  }
//              ],
//              "guides": [],
//              "valueAxes": [
//                  {
//                      "axisTitleOffset": 7,
//                      "id": "Cost",
//                      "title": "Cost"
//                  },
//                  {
//                      "id": "Amount",
//                      "position": "right",
//                      "title": "Amount"
//                  }
//              ],
//              "allLabels": [],
//              "balloon": {
//                  "borderThickness": 5
//              },
//              "legend": {
//                  "enabled": true,
//                  "useGraphSettings": true
//              },
//              "titles": [
//                  {
//                      "id": "Title-1",
//                      "size": 15,
//                      "text": "User Status"
//                  }
//              ],
//              "dataProvider": [
//                  {
//                      "date": "2014-03-01",
//                      "column-1": 8,
//                      "column-2": "0.5"
//                  },
//                  {
//                      "date": "2014-03-02",
//                      "column-1": 6,
//                      "column-2": "0.7"
//                  },
//                  {
//                      "date": "2014-03-03",
//                      "column-1": 2,
//                      "column-2": "0.3"
//                  },
//                  {
//                      "date": "2014-03-04",
//                      "column-1": 1,
//                      "column-2": "0.3"
//                  },
//                  {
//                      "date": "2014-03-05",
//                      "column-1": 2,
//                      "column-2": "0.1"
//                  },
//                  {
//                      "date": "2014-03-06",
//                      "column-1": 3,
//                      "column-2": "0.2"
//                  },
//                  {
//                      "date": "2014-03-07",
//                      "column-1": 6,
//                      "column-2": "0.8"
//                  }
//              ]
//          }
//      );

  </script>
  <script>
      function challengeCostGraph(uDaily, cDaily, competitor, userName){
          //alert("isOK");
          AmCharts.makeChart("challengeCostDisplay",
              {
                  "type": "serial",
                  "categoryField": "category",
                  "startDuration": 1,
                  "categoryAxis": {
                      "gridPosition": "start"
                  },
                  "trendLines": [],
                  "graphs": [
                      {
                          "balloonText": "[[title]] of [[category]]:[[value]]",
                          "fillAlphas": 1,
                          "id": "AmGraph-1",
                          "title": userName,
                          "type": "column",
                          "valueField": "column-1"
                      },
                      {
                          "balloonText": "[[title]] of [[category]]:[[value]]",
                          "fillAlphas": 1,
                          "id": "AmGraph-2",
                          "title": competitor,
                          "type": "column",
                          "valueField": "column-2"
                      }
                  ],
                  "guides": [],
                  "valueAxes": [
                      {
                          "id": "ValueAxis-1",
                          "title": "Amount"
                      }
                  ],
                  "allLabels": [],
                  "balloon": {},
                  "legend": {
                      "enabled": true,
                      "useGraphSettings": true,
                      "align": "center"
                  },
                  "titles": [
                      {
                          "id": "Title-1",
                          "size": 15,
                          "text": userName+" VS "+competitor
                      }
                  ],
                  "dataProvider": [
                      {
                          "category": "Daily Cigarette Cost",
                          "column-1": uDaily,
                          "column-2": cDaily
                      }
                  ]
              }
          );
      }
  </script>




  </body>
</html>
