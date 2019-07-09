<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php

    $month = $_POST['thang_n']; 

         switch ($month) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                  $thang ="$month số ngày: 31";
                  break;
            case 4:
            case 6:
            case 9:
            case 11:
                  $thang ="$month số ngày: 30";
                  break;
            case 2:
                 $thang = "$month số ngày: 28";
                  break;
            default:
                   $thang ="Không tìm thấy";
                  break;
            }
    ?>
	<h1>Tháng</h1>
        <form action="" method="post">
            
            <div id="data">
            	<label for="">Nhập N</label>
                <input type="text" name="thang_n"/>
            </div>
            
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" name="Tinh" value="Tính"/><br/>
            </div>
        </form>
        <?php  echo "Tháng $thang" ;?>
        <!-- <?php echo (new \DateTime())->format('Y-m-d') ;?> -->
        
</body>
</html>
<!-- switch ($month) {
            case 1:
                  $thang = "Một";
                  break;
            case 2:
                  $thang ="Hai";
                  break;
            case 3:
                  $thang ="Ba";
                  break;
            case 4:
                  $thang ="Tư";
                  break;
            case 5:
                  $thang ="Năm";
                  break;
            case 6:
                   $thang ="Sáu";
                  break;
            case 7:
                  $thang ="Bảy";
                  break;
            case 8:
                   $thang ="Tám";
                  break;
            case 9:
                  $thang ="Chín";
                  break;
            case 10:
                  $thang ="Mười";
                  break;
            case 11:
                  $thang ="Mười Một";
                  break;
            case 12:
                  $thang ="Mười Hai";
                  break;
            default:
                   $thang ="Không tìm thấy";
                  break;
            } -->