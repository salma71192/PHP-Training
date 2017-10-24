<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>
            <form method="POST">
                Please Enter Your Name: <input type="text" name="name">
                <?php                    
                    $name = $_POST['name'];
                    echo "<h3> Hello {$name}</h3>";
                ?>
                
            </form>
	</body>
</html>
