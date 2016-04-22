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
	<style type="text/css">                            
		a {color: inherit;}
	</style>
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
<!--              <div class="sidebar-toggle-box">-->
<!--                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>-->
<!--              </div>-->
            <!--logo start-->
            <a href="index.php" class="logo"><b>QUITMATE</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown" style="visibility:hidden"> <!-- HIDE Command: style="visibility:hidden" -->
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
                    <!-- settings end                    inbox dropdown start -->                    
                    <li id="header_inbox_bar" class="dropdown" style="visibility:hidden">
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

                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
        </header>
      <!--header end-->

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <!-- <section id="main-content"> --> <!-- IN STYLE.CSS -->
          <section class="wrapper">
      		<div class="row mt">
      		<div class="col-lg-12 col-md-12 col-sm-12">
      			<div class="showback-all" style="text-align:center">
      				<div style="margin-bottom:20px" style="text-align:center">
      				<button type="button" class="btn btn-theme03 btn-primary btn-lg btn-block" ><a href="counter.php"><i class="fa fa-bar-chart-o"></i>&nbsp;&nbsp;Track my Cigarette</a></button>
      				</div>
      				<div style="margin-bottom: 30px">
      				<img id="a" src="assets/img/quitting-smoking.png" alt="Quit Smoke" style="width:100%">
      				</div>
      				
      			</div>
      		</div>
      		</div><!--/ row -->
          </section><! --/wrapper -->
<!--       </section><!~~ /MAIN CONTENT ~~> -->
	  
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - Quinate Interactive
              <a href="#a" class="go-top">
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
		function clickButtom() {
		var qty = document.getElementById('qty').value;
		var brand = document.getElementById('brand').value;
		var size = document.getElementById('size').value;
// 		alert("Brand =" + brand + " and the size is " + size);
		$.ajax ({
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
   <script>
   		$('#testA').live("click", function(){
   			var input = document.getElementById('abc').value;
   			alert(input);
   		});
   		
   		// $('#cancle').live("click", function(){
//    			var input = document.getElementById('abc').value;
//    			alert(input);
//    		});
   </script>



  </body>
</html>
