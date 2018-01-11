<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>URLShortner</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="container">
	<div class="row">
		<form class="form-inline" method="post" action="process.php">
		  <div class="col-md-12">
			<div class="col-offset-3 col-md-6">
			  <label for="inlineFormInput">Input Your URL</label>
			  <input type="text" class="form-control mb-2" name="geturl" id="geturl" placeholder="Example: http://xyz.com/index.html">
			</div>  
			<div class="col-auto">
			  <button type="submit" class="btn btn-primary mb-2">Submit</button>
			</div>
		  </div>
		</form>
	</div>
</div>
</body>
</html>
