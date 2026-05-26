<!DOCTYPE HTML>
<html>
	<head>		
		<title>T A N I N</title>
		<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="icon" href="favicon1.jpg">
	</head>

<body>

	<div id="layout">
	
<div id="header"> 
		<div id="header-left">
			<img src="aublogo.gif">  
		</div>
		
		<div id="header-right">Internet Programming</br>
			<font size="5px">Assignment # 2</font> 
		</div>
		<div class="clear"> </div>
	</div>
	
		<div id="menu">
			<a href="index.html">HOME</a>
			<a href="html.html">HTML</a>
			<a href="css.html">CSS</a>
			<a href="javascript.html">JAVA SCRIPT</a>
			<a href="php.php">PHP</a>
			<a href="contact.html">CONTACT</a>
			
			
		</div>
		
		<div id="content">
			<div id="mainContent">		
			
			<h1>PHP</h1> 
			
			<p>This page is developed for practicing php... </p>
	

		<fieldset>
			<legend><h3>Welcome Message!</h3></legend>
			
			<?php
					
				setcookie("user", "Tanin", time()+3600);
			
				if (isset($_COOKIE["user"]))
					echo "Welcome! " . $_COOKIE["user"] . "!<br />";
				else
					echo "Welcome guest!<br />";
			?>

				<?php
				$d=date("D");
				if ($d=="Fri")
				  echo "Have a nice weekend as Friday!";
				elseif ($d=="Sun")
				  echo "Have a nice Sunday!";
				  elseif ($d=="Mon")
				  echo "Have a nice Monday!";
				  elseif ($d=="Tue")
				  echo "Have a nice Tuesday!";
				  elseif ($d=="Thu")
				  echo "Have a nice Thursday!";
				  elseif ($d=="Wed")
				  echo "Have a nice Wednesday!";
				else
				  echo "Have a nice Saturday!";
				?>
				
		</fieldset>
		
		
		
		<fieldset>
						
				<legend><h3>Calculate Area of a Rectangle:</h3></legend>
				
				<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
				
				Width: <input type = "text" name = "width" size=10> <br/> 
				Height: <input type = "text" name = "length" size=10> <br>
				
				<input type="hidden" name="calc" value ="yes"/> 
				
				<input type = "submit" name = "Calculate" value="Calculate"/> 
				</form>
				
				<?php if ($_POST['calc'] == "yes") { $width = $_POST['width']; $length = $_POST['length']; $area = $width*$length; print "<h3>Results</h3>"; print "The area of a rectangle $width x $length is $area <p>"; } ?> 
			
			
		</fieldset>
		



		<fieldset>
				<legend><h3>Your Age:</h3></legend>
				
				<form action=" " method="POST">
				Name: <input type="text" Name="fname"/>
				Age: <input type="text" Name="age"/>
				
				<input type="submit" name="submit" value="yes"/>
				
				</from><br/>		
				
																
				<?php if ($_POST['submit']=="yes") 
				
				echo $_POST['fname']." "."you are"." "; ?>
				
				<?php if ($_POST['submit']=="yes") 
				
				echo $_POST['age']." "."years old!"." "; ?>

		
		</fieldset>
		
		
		
	</div>
		

		<div id="sidebar">
			
				<a href="">Home</a>
				<a href="">Home</a>
				<a href="">Home</a>
				
				
			</div>
			<div class="clear"></div>
			
		</div>
		<div id="footer">
			Copyright © 2012,   Md. Tahsin Tanin
		</div>
		
	</div>
	
</body>
</html>

