<?php
	require_once('inc/conn.php');
	session_start();
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Module A and B</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand brand-logo" href="#"><img src="http://www.yleisurheilu.fi/sites/default/files/logo_all_0.png" alt=""></a></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li class="active nav_rating"><a href="#">Rating <span class="sr-only">(current)</span></a> </li>
        <li class="nav_about"><a href="#">About us</a> </li>
        <li class="nav_guide"><a href="#">Guidelines</a> </li>
        <li class="nav_ath"><a href="#">Top Athletes</a> </li>
        <li class="nav_ach"><a href="#">Top Achievements</a> </li>
      </ul>
      
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      
      <ul class="nav navbar-nav navbar-right hidden-sm">

	<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
    <?php
	if(!isset($_SESSION['id'])){
		echo 'Login <span class="caret"></span>'; 
	} else {
		echo '<input type="hidden" id="userId" value="'.$_SESSION['id'].'">';
		echo '<li>Welcome '.$_SESSION['username'].'</li>';
	}       
?>   
    </a>
          <ul class="dropdown-menu login_ul">
            <li>
            	<div class="form-group">
                	<label for="username">Username: </label>
                  <input type="text" class="form-control" placeholder="Enter username" id="inputUser">
                </div>
            </li>
            <li>
            	<div class="form-group">
                <label for="password">Password: </label>
                  <input type="text" class="form-control" placeholder="Enter password" id="inputPass">
                </div>
            </li>
            <li role="separator" class="divider"></li>
            <li><button type="submit" class="btn btn-default" id="btnLogin">Login</button></li>
            <li role="separator" class="divider"></li>
            <li><button type="submit" class="btn btn-default">Register</button></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="carousel1" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel1" data-slide-to="1" class=""> </li>
            <li data-target="#carousel1" data-slide-to="2" class=""> </li>
          </ol>
          <div class="carousel-inner">
            <div class="item"> <img class="img-responsive" src="images/006x90.png" alt="thumb">
              <!--<div class="carousel-caption"> Carousel caption 1. Here goes slide description. Lorem ipsum dolor set amet. </div>-->
            </div>
            <div class="item active"> <img class="img-responsive" src="images/005x90.png" alt="thumb">
             <!-- <div class="carousel-caption"> Carousel caption 2. Here goes slide description. Lorem ipsum dolor set amet. </div>-->
            </div>
            <div class="item"> <img class="img-responsive" src="images/006x90.png" alt="thumb">
             <!-- <div class="carousel-caption"> Carousel caption 3. Here goes slide description. Lorem ipsum dolor set amet. </div>-->
            </div>
          </div>
          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
</div>
	<div class="container_category"></div>
    <hr>
  </div>
  
  <div class="container text-center"><img src="images/logo.png" class="img-responsive"></div>
    <hr>
<div class="container">
	<div class="row">
    	<blockquote><strong><h4>Please choose your category:</h4></strong></blockquote>
    </div>
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
      <div class="row col_sprint">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3"><img class="img-circle" alt="Sprint" src="images/001x40.png"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-8">
          <h4>Sprint</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <div class="row col_run">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3"><img class="img-circle" alt="Long-distance running" src="images/002x40.png"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-8">
          <h4>Long-distance running</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <div class="row col_jump">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3"><img class="img-circle" alt="Jumps" src="images/003x40.png"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-8">
          <h4>Jumps</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <div class="row col_throw">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3"><img class="img-circle" alt="Throws" src="images/004x40.png"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-8">
          <h4>Throws</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="body_sprint" style="display:none;">
	<hr>
    <h2 class="text-center">SPRINT</h2>
    <hr>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center">
                <div class="caption">
                    <br>
                    <blockquote>
                        <strong><h4 class="text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id odio eget velit interdum fringilla eu at ante. Aliquam at sodales libero. Nulla velit lacus, lacinia at aliquet sit amet, porta a quam. Praesent malesuada condimentum arcu, eu auctor velit dignissim non. Integer vitae rhoncus leo. Praesent euismod, justo vitae laoreet faucibus, erat tellus feugiat turpis, et faucibus dolor justo a lectus. Mauris tincidunt tempor magna, id vehicula sem sagittis eget. Sed pulvinar, quam ac ornare condimentum, magna mi lobortis nibh, laoreet suscipit augue dui rhoncus libero. Aenean bibendum libero orci, vitae lacinia neque aliquam nec. Cras ultricies ut elit vulputate aliquam. Nunc tristique mi augue, pharetra ultricies libero porttitor vitae. Nulla faucibus, dui non cursus viverra, leo metus feugiat felis, ut maximus libero justo sed leo. 
                        </h4></strong>
                    </blockquote>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center">
                <div class="caption">
                	<br>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body_run" style="display:none;">
	<hr>
    <h2 class="text-center">LONG DISTANCE RUNNING</h2>
    <hr>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center">
                <div class="caption">
                    <br>
                    <blockquote>
                        <strong><h4 class="text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id odio eget velit interdum fringilla eu at ante. Aliquam at sodales libero. Nulla velit lacus, lacinia at aliquet sit amet, porta a quam. Praesent malesuada condimentum arcu, eu auctor velit dignissim non. Integer vitae rhoncus leo. Praesent euismod, justo vitae laoreet faucibus, erat tellus feugiat turpis, et faucibus dolor justo a lectus. Mauris tincidunt tempor magna, id vehicula sem sagittis eget. Sed pulvinar, quam ac ornare condimentum, magna mi lobortis nibh, laoreet suscipit augue dui rhoncus libero. Aenean bibendum libero orci, vitae lacinia neque aliquam nec. Cras ultricies ut elit vulputate aliquam. Nunc tristique mi augue, pharetra ultricies libero porttitor vitae. Nulla faucibus, dui non cursus viverra, leo metus feugiat felis, ut maximus libero justo sed leo. 
                        </h4></strong>
                    </blockquote>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center">
                <div class="caption">
                	<br>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body_jump" style="display:none;">
	<hr>
    <h2 class="text-center">JUMPS</h2>
    <hr>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center">
                <div class="caption">
                    <br>
                    <blockquote>
                        <strong><h4 class="text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id odio eget velit interdum fringilla eu at ante. Aliquam at sodales libero. Nulla velit lacus, lacinia at aliquet sit amet, porta a quam. Praesent malesuada condimentum arcu, eu auctor velit dignissim non. Integer vitae rhoncus leo. Praesent euismod, justo vitae laoreet faucibus, erat tellus feugiat turpis, et faucibus dolor justo a lectus. Mauris tincidunt tempor magna, id vehicula sem sagittis eget. Sed pulvinar, quam ac ornare condimentum, magna mi lobortis nibh, laoreet suscipit augue dui rhoncus libero. Aenean bibendum libero orci, vitae lacinia neque aliquam nec. Cras ultricies ut elit vulputate aliquam. Nunc tristique mi augue, pharetra ultricies libero porttitor vitae. Nulla faucibus, dui non cursus viverra, leo metus feugiat felis, ut maximus libero justo sed leo. 
                        </h4></strong>
                    </blockquote>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center">
                <div class="caption">
                	<br>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body_throw" style="display:none;">
	<hr>
    <h2 class="text-center">THROWS</h2>
    <hr>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center">
                <div class="caption">
                    <br>
                    <blockquote>
                        <strong><h4 class="text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id odio eget velit interdum fringilla eu at ante. Aliquam at sodales libero. Nulla velit lacus, lacinia at aliquet sit amet, porta a quam. Praesent malesuada condimentum arcu, eu auctor velit dignissim non. Integer vitae rhoncus leo. Praesent euismod, justo vitae laoreet faucibus, erat tellus feugiat turpis, et faucibus dolor justo a lectus. Mauris tincidunt tempor magna, id vehicula sem sagittis eget. Sed pulvinar, quam ac ornare condimentum, magna mi lobortis nibh, laoreet suscipit augue dui rhoncus libero. Aenean bibendum libero orci, vitae lacinia neque aliquam nec. Cras ultricies ut elit vulputate aliquam. Nunc tristique mi augue, pharetra ultricies libero porttitor vitae. Nulla faucibus, dui non cursus viverra, leo metus feugiat felis, ut maximus libero justo sed leo. 
                        </h4></strong>
                    </blockquote>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center">
                <div class="caption">
                	<br>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body_rating">
    <hr>
    <h2 class="text-center">CALCULATE RATING</h2>
    <hr>
    <div class="container">
      <div class="row text-center">
      	<div class="row">
        	<div class="col-sm-6 col-xs-12 inputSprint">
            	<blockquote class="text-center">
                	<strong><h3>Sprint</h3></strong>
                </blockquote>
            	<div class="caption">
                	<div class="col-xs-4">
                    	<label for=""><strong>40m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputSprint1" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>60m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputSprint2" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>80m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputSprint3" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>100m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputSprint4" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>150m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputSprint5" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>200m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputSprint6" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>300m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputSprint7" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>400m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputSprint8" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>60m hurdles: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputSprint9" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>80m hurdles: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputSprint10" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>100m hurdles: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputSprint11" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>200m hurdles: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputSprint12" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 inputRun">
            	<blockquote class="text-center">
                	<strong><h3>Long Distance</h3></strong>
                </blockquote>
            	<div class="caption">
                	<div class="col-xs-4">
                    	<label for=""><strong>600m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputRun1" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>800m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputRun2" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>1000m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputRun3" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>1500m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputRun4" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>2000m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputRun5" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>3000m: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputRun6" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In sec</strong></div>
                    <br>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-xs-12 inputJump">
            	<blockquote class="text-center">
                	<strong><h3>Jumps</h3></strong>
                </blockquote>
            	<div class="caption">
                	<div class="col-xs-4">
                    	<label for=""><strong>High Jump: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputJump1" placeholder="Enter result" step="0" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In CM</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>Pole Vault: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputJump2" placeholder="Enter result" step="0" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In CM</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>Long Jump: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputJump3" placeholder="Enter result" step="0" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In CM</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>Triple Jump: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputJump4" placeholder="Enter result" step="0" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In CM</strong></div>
                    <br>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 inputThrow">
            	<blockquote class="text-center">
                	<strong><h3>Throws</h3></strong>
                </blockquote>
            	<div class="caption">
                	<div class="col-xs-4">
                    	<label for=""><strong>Shot Put: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputThrow1" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In M</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>Discus: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputThrow2" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In M</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>Hammer: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control" id="inputThrow3" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In M</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>Javelin: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputThrow4" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In M</strong></div>
                    <br>
                    <div class="col-xs-4">
                    	<label for=""><strong>Ball: </strong></label>
                    </div>
                    <div class="form-group col-xs-6">
                      <input type="number" class="form-control col-xs-6" id="inputThrow5" placeholder="Enter result" step="0.01" min="0">
                    </div>
                    <div class="col-xs-2"><strong> In M</strong></div>
                    <br>
                </div>
            </div>
            </div>
           <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center">
            <button class="btn btn-primary resultBtn">Get Rating</button>
            <div class="caption ratingResult">
                <br>
                <blockquote>
                    <strong><h3><span class="rating">Please submit a result to see the rating.</span></h3></strong>
                </blockquote>
                <br>
                <blockquote>
                    <strong><h3 class="text-left">
                        How to do we calculate those ratings?
                    </h3></strong>
                    <strong><h4 class="text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id odio eget velit interdum fringilla eu at ante. Aliquam at sodales libero. Nulla velit lacus, lacinia at aliquet sit amet, porta a quam. Praesent malesuada condimentum arcu, eu auctor velit dignissim non. Integer vitae rhoncus leo. Praesent euismod, justo vitae laoreet faucibus, erat tellus feugiat turpis, et faucibus dolor justo a lectus. Mauris tincidunt tempor magna, id vehicula sem sagittis eget. Sed pulvinar, quam ac ornare condimentum, magna mi lobortis nibh, laoreet suscipit augue dui rhoncus libero. Aenean bibendum libero orci, vitae lacinia neque aliquam nec. Cras ultricies ut elit vulputate aliquam. Nunc tristique mi augue, pharetra ultricies libero porttitor vitae. Nulla faucibus, dui non cursus viverra, leo metus feugiat felis, ut maximus libero justo sed leo. 
                    </h4></strong>
                </blockquote>
            </div>
        </div>
        </div>
    </div>
</div>
<?php
	if(isset($_SESSION['id'])){
		echo '<hr>';
	}
?>
<div class="container showResults">
<?php
	if(isset($_SESSION['id'])){
		
		$sql = "SELECT * FROM results where user_id=".$_SESSION['id']."";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			echo '<div class="table-responsive"> 
		<table class="table table-bordered">
        <thead>
            <tr>
                <th>40m</th>
                <th>60m</th>
                <th>80m</th>
                <th>100m</th>
                <th>150m</th>
                <th>200m</th>
                <th>300m</th>
				<th>400m</th>
                <th>60m hurdles</th>
                <th>80m hurdles</th>
                <th>100m hurdles</th>
                <th>200m hurdles</th>
                <th>600m</th>
				<th>800m</th>
                <th>1000m</th>
                <th>1500m</th>
                <th>2000m</th>
                <th>3000m</th>
                <th>high jump</th>
				<th>pole vault</th>
                <th>long jump</th>
                <th>triple jump</th>
                <th>shot put</th>
                <th>discus</th>
                <th>hammer</th>
				<th>javelin</th>
                <th>ball</th>
            </tr>
        </thead>
        <tbody>';
			while($row = $result->fetch_assoc()) {
				echo '<tr>
                <td>'.$row["sprint1"].'</td>
                <td>'.$row["sprint2"].'</td>
                <td>'.$row["sprint3"].'</td>
                <td>'.$row["sprint4"].'</td>
                <td>'.$row["sprint5"].'</td>
                <td>'.$row["sprint6"].'</td>
                <td>'.$row["sprint7"].'</td>
                <td>'.$row["sprint8"].'</td>
				<td>'.$row["sprint9"].'</td>
                <td>'.$row["sprint10"].'</td>
                <td>'.$row["sprint11"].'</td>
                <td>'.$row["sprint12"].'</td>
                <td>'.$row["run1"].'</td>
                <td>'.$row["run2"].'</td>
                <td>'.$row["run3"].'</td>
				<td>'.$row["run4"].'</td>
                <td>'.$row["run5"].'</td>
                <td>'.$row["run6"].'</td>
                <td>'.$row["jump1"].'</td>
                <td>'.$row["jump2"].'</td>
                <td>'.$row["jump3"].'</td>
                <td>'.$row["jump4"].'</td>
                <td>'.$row["throw1"].'</td>
				<td>'.$row["throw2"].'</td>
                <td>'.$row["throw3"].'</td>
                <td>'.$row["throw4"].'</td>
				<td>'.$row["throw5"].'</td>
            </tr>';
			}
			echo '		</tbody>
				</table>
			</div>';
		} else {
			//echo "0 results";
		}
	}
?>


    
</div>

<div class="container_about"></div>

	<h2 class="text-center text-capitalize ">What is the Finnish Athletics Federation?</h2>
<hr>
<div class="container">
	<p>
    	The Finnish Athletics Federation, an independent federation since 1932, is the Finnish association for athletics, providing services for 21 district organisations, more than 600 athletics clubs and approximately 70,000 people involved in athletics all over Finland.
	</p><p>
The goal of the federation and its operation is to inspire and help its members to produce internationally successful athletes and athletics activities that are excellent quality, regarded valuable and permeate the whole society, fulfilling the needs of child, youth, competitive and top athletes as well as recreational athletes and athletics fans.  The Finnish Athletics Federation is a member of the IAAF, the International Association of Athletics Federations.
	</p><p>
On the regional level, the member clubs are divided into 21 district organisations, three of which operate in the Swedish language and consequently make up the member districts of the Svenska Finlands Idrottsförbund (SFI). The district organisations include: Helsinki, Uusimaa, Häme, Lahti, Central Finland, Southwest Finland, Satakunta, Southern Ostrobothnia, Northern Ostrobothnia, Kymenlaakso, South Karelia, North Karelia, Southern Savonia, Northern Savonia, Kainuu, Länsi-Pohja and Lapland and the Swedish-speaking Nyland-Åboland, Åland islands and Österbotten (Ostrobothnia).
	</p><p>
A Board with 11 members of trusted positions is the top operative body of the Federation, elected by the Federation Council for a two-year term at a time.
</p>
<div class="p_hide_desc" style="display:none;">
    <p>
    The Council comprises representatives of the district organisations and special groups that are members of the Finnish Athletics Federation.
    </p><p>
    The Finnish Championships are the annual highlight
    </p><p>
    The Federation employs 25 full-time employees. The Managing Director represents the top level of management. The organisation of the Federation is divided into member services and top athletics operations and the respective competition, information and marketing activities and the financial and administrative tasks.
    </p><p>
    The operative management of the Federation is composed of the Managing Director, Director of Coaching, Director of Member Services, Financial Director and Director of Communication.
    </p><p>
    The emphasis of the operations lies in achieving international success in the top level of athletics and developing pluralistic athletics activities for children, young people and adults.
    </p><p>
    Offering services for recreational athletes is a part of the Federation’s operations.
    </p><p>
    Competition and coaching is offered to people of all ages, either directly by the Federation or through the member clubs. Training is also offered for those interested in instructing and coaching and in the various tasks in the clubs.
    </p><p>
    The highlight for the national competition activities of the Federation are the annual Finnish Athletics Championships, also known as the Kaleva Games, where the Finnish Championship titles are competed for in the Olympic events in men’s and women’s series. The most successful club of the Finnish Championships is awarded with the challenge cup Kaleva Trophy, donated by the mutual insurance company Kaleva’s staff; and the best athlete of the games is presented the new Sampo Trophy.
    </p><p>
    In addition to the Kaleva Games, separate Finnish Championships are arranged in cross country running, road running, marathon running, racewalking and combined events with men’s and women’s series.
    </p><p>
    There is nearly a comprehensive list of events in the Finnish Championships at the youth level, in the following series: under 23, under 20, under 18 and under 16. Competitions for athletes younger than this take place at the regional level. An approximately equal number of athletes from both sexes take part in the youth categories in particular.
    </p><p>
    In addition to the Finnish Championships in Athletics, the most noteworthy competition events of the Federation include the televised Eliittikisa competition series that takes place annually and features international athletics stars alongside the best of the Finnish athletes and the Finland-Sweden Athletics International that takes place at the Olympic Stadium every other year and continues to attract one of the biggest crowds in terms of attendance in Finland. The Finland-Sweden Athletics International is a classic and it is the oldest athletics international event,  dating as far back as 1925.
    </p><p>
    The Finnish Athletics Federation also organizes the Naisten Kymppi women’s running event that brings together around 20,000 women every year. The largest marathon event in the country, the Helsinki City Marathon as well as the half-marathon event Helsinki City Run that takes place in the spring and brought together nearly 11,000 runners in the centre of Helsinki last year, are also among the most popular events for runners.
    </p><p>
    At the regional level, each district organizes district championship competitions that influence, in addition to the Finnish Championships, the points a club is awarded in the club categorisation system.
        </p>
</div>
<button class="btn btn-primary btn_hide_desc">Continue Reading...</button>
</div>
<div class="guidelines">
	<hr>
	<h2 class="text-center text-capitalize ">Guidelines</h2>
    <hr>
    <div class="container">
    	<p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, vitae doloremque voluptatum doloribus neque assumenda velit sapiente quas aliquam ratione. Sed possimus corporis dolorum optio eaque in asperiores soluta expedita!
        </p>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, vitae doloremque voluptatum doloribus neque assumenda velit sapiente quas aliquam ratione. Sed possimus corporis dolorum optio eaque in asperiores soluta expedita!
        </p>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, vitae doloremque voluptatum doloribus neque assumenda velit sapiente quas aliquam ratione. Sed possimus corporis dolorum optio eaque in asperiores soluta expedita!
        </p>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, vitae doloremque voluptatum doloribus neque assumenda velit sapiente quas aliquam ratione. Sed possimus corporis dolorum optio eaque in asperiores soluta expedita!
        </p>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, vitae doloremque voluptatum doloribus neque assumenda velit sapiente quas aliquam ratione. Sed possimus corporis dolorum optio eaque in asperiores soluta expedita!
        </p>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, vitae doloremque voluptatum doloribus neque assumenda velit sapiente quas aliquam ratione. Sed possimus corporis dolorum optio eaque in asperiores soluta expedita!
        </p>
    </div>
</div>
<div class="container_ath"></div>
<hr>
<h2 class="text-center">TOP ATHLETES</h2>
<hr>
<div class="container">
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <img src="images/001x20.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Don</h3>
          <strong><h4><span class="greyColor">Rating: </span><span class="ratingValue">S</span></h4></strong><br>
          <p><a href="#" class="btn btn-primary" role="button">More info..</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <img src="images/004x20.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Roselyn</h3>
          <strong><h4><span class="greyColor">Rating: </span><span class="ratingValue">A</span></h4></strong><br>
          <p><a href="#" class="btn btn-primary" role="button">More info..</a> </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <img src="images/002x20_2.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Reiko</h3>
          <strong><h4><span class="greyColor">Rating: </span><span class="ratingValue">A</span></h4></strong><br>
          <p><a href="#" class="btn btn-primary" role="button">More info..</a> </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 hidden-lg hidden-md hidden-sm">
      <div class="thumbnail"> <img src="images/003x20.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Claretha</h3>
          <strong><h4><span class="greyColor">Rating: </span><span class="ratingValue">A</span></h4></strong><br>
          <p><a href="#" class="btn btn-primary" role="button">More info..</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row text-center hidden-xs">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <img src="images/002x20.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Issac</h3>
          <strong><h4><span class="greyColor">Rating: </span><span class="ratingValue">A</span></h4></strong><br>
          <p><a href="#" class="btn btn-primary" role="button">More info..</a> </p>
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <img src="images/003x20_2.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Lynsey</h3>
          <strong><h4><span class="greyColor">Rating: </span><span class="ratingValue">A</span></h4></strong><br>
          <p><a href="#" class="btn btn-primary" role="button">More info..</a> </p>
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <img src="images/003x20.png" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Shayna</h3>
          <strong><h4><span class="greyColor">Rating: </span><span class="ratingValue">B</span></h4></strong><br>
          <p><a href="#" class="btn btn-primary" role="button">More info..</a> </p>
        </div>
      </div>
    </div>
  </div>
  <nav class="text-center">
    <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
    <ul class="pagination">
      <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
      <li class="active"><a href="#">1</a></li>
      <li class="disabled"><a href="#">2</a></li>
      <li class="disabled"><a href="#">3</a></li>
      <li class="disabled"><a href="#">4</a></li>
      <li class="disabled"><a href="#">5</a></li>
      <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
    </ul>
  </nav>
</div>
<div class="container_ach"></div>
<hr>
<h2 class="text-center">TOP ACHIEVEMENTS</h2>
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="media-object-default">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/010x10.png" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading">Achievment</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, vitae doloremque voluptatum doloribus neque assumenda velit sapiente quas aliquam ratione. Sed possimus corporis dolorum optio eaque in asperiores soluta expedita! </div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/011x10.png" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading">Achievment</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, quasi doloribus non repellendus quae aperiam. Quos, eligendi itaque soluta ut dignissimos reprehenderit commodi laboriosam quis atque minus enim magnam delectus.</div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/012x10.png" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Achievment</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, repellendus, ad, adipisci neque earum culpa magnam veritatis ipsum dolores odio laboriosam sed veniam accusamus! Architecto, provident nulla recusandae repellendus illo!</div>
        </div>
      </div>
    </div>
    <hr class="hidden-md hidden-lg">
    <div class="col-lg-4 col-md-6">
      <div class="media-object-default">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/013x10.png" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Achievment</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, eos, et in quam laboriosam ipsum laudantium laborum provident nihil modi reprehenderit tempora voluptatum quasi non libero quaerat vel. Assumenda, officiis?</div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/014x10.png" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Achievment</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, minus, praesentium dignissimos non provident et consectetur illo expedita aliquam laboriosam esse incidunt deleniti accusantium debitis voluptas. Non vitae quos dolorem.</div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/015x10.png" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Achievment</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, ducimus quidem aliquam voluptate quas impedit modi neque quasi deleniti dicta. Dolore, provident, unde voluptas dicta fugit odit maxime eius minus!</div>
        </div>
      </div>
    </div>
    <hr class="hidden-lg">
    <div class="col-lg-4 col-md-12 hidden-md">
      <div class="media-object-default">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/016x10.png" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Media heading 1</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro dolorum reprehenderit vitae omnis. Quidem, recusandae, magni ut perspiciatis nobis consequuntur ullam molestias molestiae obcaecati ea labore aspernatur modi. Impedit, fugit!</div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/017x10.png" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Media heading 2</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, libero, ea itaque atque vero quidem esse optio minus tenetur dolorem delectus nemo fugit deserunt quibusdam veritatis assumenda obcaecati praesentium omnis!</div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/013x10.png" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Media heading 3</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, cumque, ad voluptatibus vel perspiciatis reprehenderit magni in recusandae voluptatum iusto commodi laudantium veritatis esse labore nisi error tempora debitis impedit.</div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
  <div class="container well">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7">
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
            <div>
              <ul class="list-unstyled">
                <li> <a>Guidelines for athletics.</a> </li>
                <li> <a>Materials for athletics.</a> </li>
                <li> <a>Guidelines for athletics.</a> </li>
                <li> <a>Materials for athletics.</a> </li>
                <li> <a>Guidelines for athletics.</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4  col-xs-6">
            <div>
              <ul class="list-unstyled">
                <li> <a>Materials for athletics.</a> </li>
                <li> <a>Guidelines for athletics.</a> </li>
                <li> <a>Materials for athletics.</a> </li>
                <li> <a>Guidelines for athletics.</a> </li>
                <li> <a>Materials for athletics.</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
          <address>
                <strong>Invoicing addresses:</strong><br>
                Finnish Athletics Federation, 0202318-5 1.<br>
             </address>
             <address>
             	<strong>Electronic invoicing address:</strong><br>
                FI5480001300882215, operator: Danske Bank (DABAFIHH) Format: Finvoice
             </address>
             <address>
             	<strong>Paper invoices:</strong><br> 
                Finnish Athletics Federation, Ostolaskut 8878H, P.O. Box 72, 00521 Helsinki, Finland
             </address>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5"> 
            <address>
            <img src="http://www.yleisurheilu.fi/sites/default/files/styles/thumbnail/public/sul_logo_eng_rgb_sininen.jpg?itok=S19-8DQf" alt=""><br>
            <strong>Suomen Urheiluliitto ry (SUL)</strong><br>
            <strong>Finlands Friidrottsförbund</strong><br>
            <strong>Finnish Athletics Federation</strong><br>
            Radiokatu 20, 00240 Helsinki (8th floor)<br>
            Office hours: weekdays from 8 am to 4 pm.<br>
            <abbr title="Phone">P:</abbr> +358 (0)9 348 121
         </address>
        </div>
    </div>
  </div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyWebsite. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-2.2.4.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
</body>
</html>
