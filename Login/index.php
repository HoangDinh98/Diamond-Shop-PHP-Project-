
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="javascript" src="js.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>
<body>
<?php 
?>
<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" id="myBtn" 
          data-toggle="modal" data-target="#login-form">Login</button>
  
  <button type="button" class="btn btn-default btn-lg" id="myregister"
          data-toggle="modal" data-target="#register-form">Register</button>
  <!-- Modal -->
  <div class="modal fade" id="login-form" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Login </h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
            <form role="form" method="POST">
            <div class="form-group">
              <label for="username"><span class="glyphicon glyphicon-user"></span>
                  Username</label>
                
              <input type="text" class="form-control" id="username" 
                     name="username" placeholder="Enter username">
             
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> 
                  Password</label>
              <input type="password" class="form-control" id="password" 
                     name="password" placeholder="Enter password">
             </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
                <button type="submit" id="submit" name="submit" class="btn btn-success" 
                        data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-off"></span> 
                    Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" 
                  data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>
              Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
  
  
  <div class="modal fade" id="register-form" role="dialog">
    <div class="modal-dialog">
    
       Modal content
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Register</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
            </div>    
             <div class="form-group">
                <label for="phone"><span class="glyphicon glyphicon-user"></span> Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone">
            </div>    
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
             <div class="form-group">
                <label for="fname"><span class="glyphicon glyphicon-user"></span> Full Name</label>
                <input type="text" class="form-control" id="fname" name="fullname" placeholder="Enter Your Full Name">
            </div>    
              
           
              <button type="submit" name="register-submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off">
                  </span> Register </button>
              <p> Alredy a member?</p> 
              <a href="login.php">Sign in</a>
             
          </form>
        </div>
       
      </div>
      
    </div>
  </div> 
</div>
<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"login.php",  
                     method:"POST",  
                     data: {username:username, password:password},  
                     success:function(response)  
                     {  
                          //alert(data);  
                          if(response== "No")  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          {  
                               window.location.href="o.php"  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });
  
  return false;
 });
 </script>  



</body>
</html>
