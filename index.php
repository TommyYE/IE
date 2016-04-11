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

    <title>QUITMATE - Quit Smoke Today</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lightwing-font/css/lw.css">
	<link rel="stylesheet" type="text/css" href="assets/lineicons/style.css"> 
	<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">  
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

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
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>QUITMATE</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <!-- 
<li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
 -->
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <!-- 
<li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
 -->
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a id="add-sticky" class="logout" href="javascript:;">Login</a></li>
					<input type = "text" id = "username" name = "username" size = "30"/>
            	</ul>
            </div>
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
              
              	  <p class="centered"><a href="#"></a></p> <!-- <img src="assets/img/ui-sam.jpg" class="img-circle" width="60"> -->
              	  <h5 class="centered">Quit Mate</h5>
              	  	
                  <li class="mt">
                      <a href="#">
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
                          <li><a  href="#">Rank</a></li>
                          <li><a  href="#">Achievement</a></li>
                      </ul>
                  </li>

                  <li class="mt">
                      <a href="javascript:;" >
                          <i class="fa fa-file-text"></i>
                          <span>Facts</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="javascript:;" >
                          <i class="fa fa-glass"></i>
                          <span>Craving</span>
                      </a>
                      <ul class="sub">
                      	  <li><a href="http://www.quitnow.gov.au/internet/quitnow/publishing.nsf/Content/damaging-your-body" target="_blank">Negatives</a></li>
                      	  <li><a href="https://www.monash.edu/ohs/health-and-wellbeing/smoke-free-monash" target="_blank">Monash Quit Program</a></li>
                      </ul>
                  </li>
                  <li class="mt">
                      <a href="javascript:;" >
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
      		<!-- INPUT BOARD START -->
      			<div class="col-lg-6 col-md-6 col-sm-12">
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Did you smoke today?</h4>
						<p>
						<!-- CIGARETTE BRAND -->
						<div class="col-lg-8 col-md-8 col-sm-8">
					    	<button id="brand" name="brand" value="aa" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						    	Cigarette Brand
						    	<span class="caret"></span>
						    </button>
						    <ul class="dropdown-menu" id="brand-dp" name="brand-dp" value="hello">
						      	<!-- 
								<li><a href="#">Brand 1</a></li>
						      	<li><a href="#">Brand 2</a></li>
 								-->							
 								<?php	
        							$sql = "SELECT Brand FROM Cigarette";
            						if($result=$con->query($sql)){
            						//print_r($result);
                						if($result->num_rows){
                    						while($row=$result->fetch_object()) {
                        						$combo.="<li><a href=\"#\">".$row->Brand."</a></li>";
                    						}
                    						$result->free();
                						}
            						}
            						echo $combo;
        						?>
						    </ul>
						</div>
						<!-- SIZE -->
						<div id="size" class="col-lg-4 col-md-4 col-sm-4">
							<button type="button" class="btn btn-theme03 dropdown-toggle" data-toggle="dropdown">Size
						  		<span class="caret"></span>
						  	</button>
						  		<ul class="dropdown-menu" role="menu" id="size-dp">
						    		<li><a href="#">20</a></li>
						    		<li><a href="#">25</a></li>
						    		<li><a href="#">50</a></li>
						  		</ul>
							</div>       	
						</p>
						<!-- COUNTER -->
						<p> 
						<div class="col-lg-4 col-md-4 col-sm-4" >
								<div class="box1">
								<span onclick="modify_qty(+1)" class="lw-chev-up"></span>
								</div>
							</div>
						<div class="col-lg-4 col-md-4 col-sm-4" align="center" style="padding: 5px">
								<h2><input id="qty" value="0" style="width: 30%; height: 40px; text-align:center; border:none"></input></h2>
							</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="box1">
								<span onclick="modify_qty(-1)" class="lw-chev-down"></span>
								</div>
							</div>
						</p>
						<!-- 
<p>
						<!~~ AUD SIGN ~~>
<!~~ 
								<div class="col-lg-1 col-md-1 col-sm-1" style="padding-top: 15px">
									<span class="badge bg-info">$ AUD </span>
								</div>
 ~~>
						<!~~ MONEY INPUT ~~>
						
<!~~ 
								<div class="col-lg-11 col-md-11 col-sm-11">
									<input id="priceInput" type="text" class="form-control" placeholder="Price of the box of Cigarette" style="text-align:center; width:90%; margin: 10px"autofocus>
								</div>
 ~~>
						</p>
 -->
						<!-- Submit Button -->	
						<p>
						<div class="col-lg-12 col-md-12 col-sm-12">
								<button type="button" class="btn btn-theme03 btn-primary btn-lg btn-block" onclick="clickButtom()"><i class="fa fa-check"></i> Submit</button>
							</div>
						</p>				
      				</div><!-- /showback -->
      				<!-- /showback -->	
      			</div><! --/col-lg-6 -->
			<!-- INPUT BOART END -->
      		<!-- DISPLAY BOARD START -->
      			<div class="col-lg-6 col-md-6 col-sm-12">      				
      				<div class="showback">
						  <div class="content-panel">
                              <h4><i class="fa fa-angle-right"></i> Content (mg)</h4>
                              <div class="panel-body">
                                  <div id="hero-bar" class="graph"></div>
                              </div>
                              <div class="col-lg-12 colmd-12 col-sm-12" style="padding-top: 20px">
									<span class="badge bg-info" id = "showMoney">$ AUD </span>
							  </div>
                          </div>
                    </div><!-- /showback -->
				</div><!-- /col-lg-6 -->
      		<!-- DISPLAY BOARD END -->
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
	<script src="assets/js/customSelect.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
<!--     <script src="assets/js/common-scripts.js"></script> -->

    <!--script for this page-->
    <script src="assets/js/morris-conf.js"></script>
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    <script type="text/javascript" src="assets/js/a.js"></script>
    
    <!-- Initial Bar Chart -->
  	<script>
  	initialChart();
  	</script>
  	<!-- Counter -->
  	<script>
      function modify_qty(val) {
    	var qty = document.getElementById('qty').value;
    	var new_qty = parseInt(qty,10) + val;
    
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
        		alert("Please input valid number.");
        		return false;
     		}
     		return true;
		}
		function clickButtom() {
		var qty = document.getElementById('qty').value;
		var brand = document.getElementById('brand').value;
		var size = document.getElementById('size').value;
		var username = document.getElementById().value;
		if (!checkRate(qty)){
			qty = 0;
			document.getElementById('qty').value=0;
			
		}
		document.getElementById('showMoney').innerHTML="$ AUD " + qty;
		.ajax ({
  			url: "a.php",
			type: "POST",
            data: {name:brand },
            dataType: "json",
            success: function setContentData(data) {
				var tar = data[0]*qty;
				var nct = data[1]*qty;
				var co = data[2]*qty;
				showChart(tar, nct, co);
				
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
    
      function a(){
      	alert("+");
      }
   	</script>
   	<!-- Brand Dropdown Menu Li -->
    <script>
	  $('#brand-dp li').click(function(){
  	  	var selText = $(this).text();
  		var num = $(this).index();
  		$(this).parents('.col-lg-8').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
  		document.getElementById('brand').value = selText;
  		// $.ajax ({
//   			url: "a.php",
// 			type: "POST",
//             data: {name:selText },
//             dataType: "json",
//             success: function setContentData(data) {
// 				var tar = data[0];
// 				var nct = data[1];
// 				var co = data[2]
// 				
// // 				showChart(tar, nct, co);
// 				
//             }
//         });
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



  </body>
</html>
