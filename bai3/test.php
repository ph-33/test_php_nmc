<!DOCTYPE HTML>
<html>
<head>
	<title></title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body> 
    <?php
    $result = '';
       if (isset($_POST['Tinh']))
        {
            $so_A =isset($_POST['so_A']) ? (float)trim($_POST['so_A']) : ''; 
            $so_B =isset($_POST['so_B']) ? (float)trim($_POST['so_B']) : '';

            if ($so_A == ''){
                $result = 'Bạn chua nhập số a';
            }
            else if ($so_B == ''){
                $result = 'Bạn chưa nhập số b';
            }
            else if ($so_A == 0){
                $result = 'Số a phải nhập khác 0';
            }
            else {
                $result = -($so_B) / $so_A;
            } 
        }
    ?>
    <h1>Phuong trinh bac nhat</h1>
        <form action="" method="post">
            
            <div id="data">
                <input type="text" name="so_A"/> X 
                +
                <input type="text" name="so_B"/> = 0
            </div>
            
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" name="Tinh" value="Tính"/><br/>
            </div>
        </form>

        <?php echo $result; ?>
    

</body>
</html>

