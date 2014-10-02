
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ICT ERA</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
	    html,body{
	    	height: 100%;
	    }
    	.head{
    		height: 100px;
    		background: linear-gradient(#9C2432 5%,#721620 100%);
    	}
    	.h1{
    		font-size: 50px;
			color:#fff;
    	}
    	.h1 img{
			width: 45px;
			height: 45px;
			margin-right: 10px;
			margin-top: -7px;
    	}
    	.menu-warp,.page-warp{
    		min-height: 100%;
    	}
    	.menu-warp{
    		background-color: #3f3f3f;
    		color: #fff;
    	}
    	.panel-group{
    		margin-top:20px;
    	}
    	.panel-default a{
    		color: #931E2B;
    	}
    	.panel-default>.panel-heading{
    		background-color: #CECECE;
    	}
    	.nav-stacked li a{
    		color:#000;
    	}
    	.menu-warp{
    		height: 520px;
    	}
    	footer{
    		background-color: #dfdfdf;
			height: 63px;
    	}
    </style>
  </head>
  <body>
    <div class="container-fluid">
  		<div class="row head">
			<h1 class="text-center h1">
				<img src="logo.gif">ICT ERA
			</h1>
		</div>
		<div class="row">
			<div class="well well-lg">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Input Your Interests</h3>
					</div>
					<div class="panel-body">
						<form method="get" id="searchform" action="home.html">
							<div class="col-xs-8">
	    						<input type="text" class="form-control" placeholder="Search">
	  						</div>
	  						<button type="button" class="btn btn-default active">Search</button>
	  					</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class=" col-xs-12 col-sm-6 col-md-4  menu-warp">
				<div class="panel-group" id="accordion">
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									Who are you?
								</a>
							</h4>
				    	</div>
				    	<div id="collapseOne" class="panel-collapse collapse in">
				      		<div class="panel-body">
				        		<ul class="nav nav-pills nav-stacked">
									<li>
										<a href="parent.html" title="View all posts filed under Development">parents</a>
									</li>
									<li>
										<a href="teacher.html" title="View all posts filed under Market research">teachers</a>
									</li>
									<li>
										<a href="student.html" title="View all posts filed under Security">students</a>
									</li>
									<li>
										<a href="careeradvisors.html" title="View all posts filed under Software licensing">career advisors</a>
									</li>
								</ul>
				      		</div>
				    	</div>
				  	</div>
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
					     	<h4 class="panel-title">
					        	<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
					          		Archives
					        	</a>
					      	</h4>
				    	</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav nav-pills nav-stacked">
	  								<li>
										<a href='home.html' title='October 2007'>SUCCESSFULL STORIES</a>
									</li>
								</ul>
							</div>
						</div>
				  </div>
				  <div class="panel panel-default">
				    	<div class="panel-heading">
					      	<h4 class="panel-title">
					        	<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
					          		About Us
					        	</a>
					      	</h4>
				    	</div>
					    <div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav nav-pills nav-stacked">
	  	
								</ul>
							</div>
					    </div>
				  	</div>
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
					      	<h4 class="panel-title">
					        	<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
					          		Our Clients
					        	</a>
					      	</h4>
				    	</div>
					    <div id="collapseFour" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav nav-pills nav-stacked">
	  								<li>
										<a href="http://www.ibm.com.au/">IBM</a>
									</li>
									<li>
										<a href="http://www.cisco.com/web/ANZ">CISCO</a>
									</li>
									<li>
										<a href="http://www.colescareers.com.au/">COLES</a>
									</li>
									<li>
										<a href="http://www.wowcareers.com.au/">WOOLWORTHS</a>
									</li>
								</ul>
							</div>
					    </div>
				  	</div>
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
					      	<h4 class="panel-title">
					        	<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
					          		Opportunities For Women
					        	</a>
					      	</h4>
				    	</div>
					    <div id="collapseFive" class="panel-collapse collapse">
							<div class="panel-body">
								<li>
										<a href="http://www.vicictforwomen.com.au/programs/">ICT courses</a>
									</li>
									<li>
										<a href="https://www.google.com.au/?gfe_rd=cr&ei=NFAtVJfWOMqN8Qfbn4GwCA#q=women+ict+programs+providers+in+victoria">PROVIDERS</a>
									</li>
									<li>
										<a href="https://www.google.com.au/?gfe_rd=cr&ei=NFAtVJfWOMqN8Qfbn4GwCA#q=women+ict+programs+scholarships+in+victoria">SCHOLARSHIPS</a>
									</li>
									<li>
										<a href="https://www.google.com.au/?gfe_rd=cr&ei=NFAtVJfWOMqN8Qfbn4GwCA#q=women+ict+programs+internships+in+victoria">INTERNSHIPS</a>
									</li>
									<li>
										<a href="https://www.acs.org.au/communities/sigs/acs-women3">JOBS</a>
									</li>
								</ul>
							</div>
					    </div>
				  	</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-8 page-warp">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<a href="http://osc3.template-help.com/wordpress_16693/?p=4" rel="bookmark" title="Permanent Link to Apache guru praises Vista">WHY ICT?</a>
						</h3>
					</div>
					<div class="panel-body">
						<p>
							Information and Communications Technologies (ICT) education is basically our society’s efforts to teach its current and emerging citizens valuable knowledge and skills around computing and communications devices, software that operates them, applications that run on them and systems that are built with them.<br>
							ICT is complex and quickly changing, and it is confusing for many people. It is so pervasive in the modern world that everyone has some understanding of it, but those understandings are often wildly divergent.
						</p>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<a href="http://osc3.template-help.com/wordpress_16693/?p=3" rel="bookmark">Suggestions</a>
						</h3>
					</div>
					<div class="panel-body">
						<ul class="list-group col-xs-4">
							<li class="list-group-item">
								<a href="ict courses.html">ICT courses </a>
							</li>
							<li class="list-group-item">
								<a href="coursesondemand.html">Courses on demand</a>
							</li>
							<li class="list-group-item">
								<a href="instcourses.html">Institutions offering ICT courses</a>
							</li>
						</ul>
						<ul class="list-group col-xs-4">
							<li class="list-group-item"><a href="https://www.youtube.com/watch?v=raj_W47SZoc 
">what Parent say ?
</a></li>
							<li class="list-group-item"><a href="https://www.youtube.com/watch?v=NqXdBX0jF9U
">what Career advisor say? ?</a></li>
							<li class="list-group-item"><a href="https://www.youtube.com/watch?v=2gvthKd7O-0">Why Computer Science & ICT?</a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<footer class="row">
			<h3 class="text-center">
			
			<a href='http://www.facebook.com' ><img src='fb.jpeg'/></a> 
			<a href='http://www.twitter.com' ><img src='twitter.png'/></a> 
			<a href='http://www.linkedin.com' ><img src='Linkedin.png'/></a> 
			
				 </h3>
		</footer>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>