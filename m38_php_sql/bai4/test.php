<!DOCTYPE HTML>
<html>
<head>
	<title></title>
    <meta charset="utf-8"/>
</head>

<body> 
    <?php  
        $result = '';
       if (isset($_POST['thuchien']))
        {
            $so_A =isset($_POST['so_A']) ? $_POST['so_A'] : ''; 
            $so_B =isset($_POST['so_B']) ? $_POST['so_B'] : '';
            $so_C =isset($_POST['so_C']) ? $_POST['so_C'] : '';

            $delta = ($so_B*$so_B) - (4*$so_A*$so_C);

            if ($delta < 0){
            $result = 'Phương trình vô nghiệp';
                }
            else if ($delta == 0){
                $result = 'Phương trình nghiệp kép x1 = x2 = ' . (-$so_B/2*$so_A);
                }
            else {
                $result = 'Phương trình có hai nghiệp phân biệt, x1 = ' . ((-$so_B + sqrt($delta))/2*$so_A);
                $result .= ',x2 = ' . ((-$so_B - sqrt($delta))/2*$so_A);
                } 
        }
        
    ?>
    <h1>Phuong trinh bac hai</h1>
        <form action="" method="post">
            
            <div id="data">
                <input type="text" name="so_A"/> X <sup>2</sup> 
                +
                <input type="text" name="so_B"/> Y
                +
                <input type="text" name="so_C"/> = 0
            </div>
            
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" name="thuchien" value="Tính"/><br/>
            </div>
        </form>

        <?php echo $result; ?>
    

</body>
</html>

