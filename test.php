
<!DOCTYPE html>
<html>
<head>
	<title>Hoan doi vi tri</title>
	<style >
		.*{
		margin:0;
		padding:0;
	}
	</style>
</head>
<body>
	<?php

	$numbera = $_POST['so_a'];
	$numberb =$_POST['so_b'];
	$numberC = '';
	function swap(&$number1, &$number2)
    	{
        	$numberC   = $number1;
        	$number1  = $number2;
        	$number2 = $numberC;
    	}
    	swap($numbera, $numberb);
?>
		<form action="" method="post">
			<label for="">A</label>	
			<input type="text" name="so_a">
			
			<label for="">B</label>	
			<input type="text" name="so_b">
			
			 <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Hoan doi"/><br/>
            </div>
		</form>
		<?php     
		echo $numbera;
    	echo $numberb; 
    	?>
</body>
</html>

