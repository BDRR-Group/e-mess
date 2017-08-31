<!doctype html>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }
        
        img.avatar {
            width: 40%;
            border-radius: 50%;
        }
        
        .animate {
            -webkit-animation: animatezoom 0.5s;
            animation: animatezoom 0.5s;
        }
        
        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }
        
        @keyframes animatezoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }
        
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            padding-top: 60px;
        }

    </style>







    <body>


        <nav class="navbar navbar-inverse " role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" id="btn" onClick="hamberger()">
			<!--<span class="sr-only">Toggle navigation</span>-->
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
                <a class="navbar-brand " href="#">e-Mess</a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link1</a></li>
                    <li><a href="#">Link2</a></li>
                </ul>
 			
                <ul class="nav navbar-nav navbar-right ">
                    <li><a href="#" onclick="registration()"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"  onclick="login()"><span class="glyphicon glyphicon-log-in" ></span > Login</a></li>
                </ul>
                <script>
					var f;
                    function login() {
						if(document.getElementById('popup_login').style.display != 'block')
                        document.getElementById('popup_login').style.display = 'block';
						else
							document.getElementById('popup_login').style.display = 'none';
						
						if(f==1)
							document.getElementById('btn').click();

                        
                    }
					function registration() {
						if(document.getElementById('popup_login').style.display != 'block')
                        document.getElementById('popup_login').style.display = 'block';
						else
							document.getElementById('popup_login').style.display = 'none';
						
						if(f==1)
							document.getElementById('btn').click();

                        
                    }
					function hamberger() {
						f=1;
                        
                    }
                </script>


            </div>
            <!-- /.navbar-collapse -->
        </nav>


        <!--///////////////////////////////////////////////////////////////////-->

        <div class="container">
            <div class="row">


                <div class="col-xs-0 col-sm-4 col-md-4 col-lg-4">

                </div>



                <div id="popup_login" class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animate " style="display: none;   background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
      		 
      		   ">

                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-10">

                                <p class="h2" align="center"> Login</p>


                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-2">

                                <span onClick="document.getElementById('popup_login').style.display='none'" class="close" title="Close Modal" style="margin-top: 15px">&times;</span>

                            </div>

                        </div>

                    </div>



                    <div class="imgcontainer">

                        <img src="img/login/img_avatar2.png" alt="Avatar" class="avatar">

                    </div>


                    <form action="process_login.php" method="post">
                        <div class="form-group">
                            <label><b> Username</b></label>
                            <input type="text" class="form-control" placeholder="Enter User Name" name="UName"> </div>
                        <div class="form-group">
                            <label><b>Password</b></label>
                            <input type="password" class="form-control" placeholder="Password" name="pass"> </div>
                        <button type="submit" class="form-control btn-block " name="btn" style="background-color: #4CAF50; margin-bottom: 10px">Login</button>
                    </form>


                </div>

            </div>
        </div>



    </body>




</html>
