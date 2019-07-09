<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	$n = $_POST['so_A'];

	function Fibonacci($n){ 
  
    $num1 = 0; 
    $num2 = 1; 
  
    $counter = 0; 
    while ($counter < $n){ 
        echo ' '.$num1; 
        $num3 = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $num3; 
        $counter = $counter + 1; 
    		} 
	} 
	?>
	<h1>Fibo</h1>
        <form action="" method="post">
            
            <div id="data">
            	<label for="">Nhập N</label>
                <input type="text" name="so_A"/>!
            </div>
            
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" name="Tinh" value="Tính"/><br/>
            </div>
        </form>
        <?php echo Fibonacci($n); ?>
</body>
</html>
