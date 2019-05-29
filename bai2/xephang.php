<?php  
    $diem_toan = $_POST['diem_toan'];
    $diem_li = $_POST['diem_li'];
    $diem_hoa = $_POST['diem_hoa'];
    
    $trung_binh = ($diem_toan + $diem_li + $diem_li) /3 ;
   		
    if ($trung_binh < 5){
        $rank ="D";
    }
    else if ($trung_binh >= 5 && $trung_binh < 6.5){
        $rank ="C";
    }
    else if ($trung_binh >= 6.5 && $trung_binh < 8){
        $rank ="B";
    }
    else {
        $rank ="A";
    }

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Untitled 2</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
        <h1>Diem trung binh cac mon</h1>
            
                <label>trung binh </label>
                <span><?php echo $trung_binh; ?></span><br />
                <label>xep hang </label>
                <span><?php echo $rank ?></span><br />
            </div>
    </main>
</body>
</html>