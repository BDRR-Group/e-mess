
<!doctype html>


<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	

		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

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
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
	   .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
  
    padding-top: 60px;
}

	</style>
<body>
 
 	<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
  <span class="caret"></span></button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
    <li role="presentation"><a role="menuitem" href="#">HTML</a></li>
    <li role="presentation"><a role="menuitem" href="#">CSS</a></li>
    <li role="presentation"><a role="menuitem" href="#">JavaScript</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" href="#">About Us</a></li>
  </ul>
</div>
 	
<nav class="navbar navbar-inverse" >
  <div class="container-fluid" >
  
         <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#" onClick="document.getElementById('popup_login').style.display='block'"><span class="glyphicon glyphicon-log-in"></span > Login</a></li>

        
          
    </ul>
    
  

  </div>
</nav>
  
 
  <div class="py-5 ">
    <div class="container">
      <div class="row">
       <div class="col-lg-4 col-md-2 col-sm-2 col-xs-0" ></div>
       	
       
    
    
      <!--///////////////////////////////////////////////////////////////////-->
       
        <div id="popup_login"  class="col-lg-4 col-md-8 col-sm-8 col-xs-12 animate " style="display: none;   background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
      		 
      		   " >
       
      		 		 <div class="container-fluid">
      		 		 	
      		 		 	<div class="row">
      		 		 	
      		 		 		<div class="col-lg-9 col-md-9 col-sm-8 col-xs-10" >
      		 		 			
      		 		 					 <p class="h2" align="center" > Login</p>

      		 		 			
      		 		 		</div>
      		 		 		
     		 		 		      
      		 		 		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-2">
      		 		 			
      		 		 			      <span  onClick="document.getElementById('popup_login').style.display='none'" class="close" title="Close Modal" style="margin-top: 15px"  >&times;</span> 
      		 		 			
      		 		 		</div>
      		 		 		
      		 		 		
      		 		 	</div>
      		 		 	
      		 		 </div>
       		 		 
       		  <div class="imgcontainer">
      
      <img src="img/login/img_avatar2.png" alt="Avatar" class="avatar">
      
    </div>	

       		 
        		 <form action="process_login.php" method="post">
            <div class="form-group"> 
             <label ><b> Username</b></label>
              <input type="text" class="form-control" placeholder="Enter User Name" name="UName"> </div>
            <div class="form-group"> 
             <label ><b>Password</b></label>
              <input type="password" class="form-control" placeholder="Password" name="pass"> </div>
            <button type="submit" class="form-control btn-block " name="btn" 
            style="background-color: #4CAF50; margin-bottom: 10px" >Login</button>
          </form>
        </div>
        	
        </div>
        
        <div class="col-md-3"></div>
        <div class="col-md-2"></div>
        <div class="col-md-3 ">
         
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>


<script>
	
	/*var modal=document.getElementById('popup_login');
	window.onclick=function(event)
	{
		if(event.target==modal)
			{
				modal.style.display="none";
			}
	}*/
	
	</script>

</html>