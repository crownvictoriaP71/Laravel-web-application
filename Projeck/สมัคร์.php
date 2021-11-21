<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Register</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-xs-12">
                    
    <form  name="register" action="สมัคร์action.php" method="POST" id="register" class="form-horizontal">
       <div class="form-group">
       <div class="col-sm-1">  </div>
       <div class="col-sm-5" align="left">
       <br>
       <h4> สมัครสมาชิก </h4>
       </div>
       <input name="Admin_level" type="hidden" id="Admin_level" value="2" />
       </div>
       <div class="container">
       	<div class="col-sm-2" align="right"> Username. : </div>
          <div class="col-sm-5" align="left">
            <input  name="username" type="text" required class="form-control" id="Admin_username"  pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
      </div>
        
        <div class="container">
        <div class="col-sm-2" align="right"> Password. : </div>
          <div class="col-sm-5" align="left">
            <input  name="password" type="password" required class="form-control" id="Admin_password"  pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>
        <div class="container">
        <div class="col-sm-2" align="right"> name : </div>
          <div class="col-sm-5" align="left">
            <input  name="name" type="text" required class="form-control" id="name"  />
          </div>
        </div>
        
  
        <!-- <div class="container">
        <div class="col-sm-2" align="right"> level : </div>
          <div class="col-sm-5" align="left">
            <input  name="level" type="text" class="form-control" id="level"   />
          </div>
        </div>

         -->



           


      <div class="container">
      <div class="col-sm-2"> </div>
          <div class="col-sm-6">
          <button type="submit" class="btn btn-primary" id="btn">  สมัครสมาชิก  </button>
          </div>
          

      </div>
      </form>
</div>
</div>
</div>

	
</body>
</html> 
 <body>
         
<html>


