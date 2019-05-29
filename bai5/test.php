<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$so_A = $_POST['so_A'];
		$so_B = $_POST['so_B'];
		$sum = 0;
		for($x=$so_A; $x<=$so_B; $x++)
		{
		$sum +=$x;
		}
	?>
	<h1>Tong vong lap 50 so</h1>
        <form action="" method="post">
            
            <div id="data">
                <input type="text" name="so_A"/>  
                <input type="text" name="so_B"/> 
            </div>
            
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" name="Tinh" value="Tính"/><br/>
            </div>
        </form>
        <?php echo "tong cac so tu 0 toi 50 la $sum "; ?>
</body>
</html>