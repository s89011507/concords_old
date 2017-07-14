<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
//搜尋資料庫資料
$result = mysqli_query($con,"SELECT * FROM login where id = '$id'");
$row = @mysqli_fetch_row($result);
$result2 = mysqli_query($con,"SELECT * FROM admin where id = '$id'");
$row2 = @mysqli_fetch_row($result2);
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.html>';
}
elseif($id != null && $pw != null && $row2[1] == $id && $row2[2] == $pw)
{
	//將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '<meta http-equiv=REFRESH CONTENT=1;url=admin.html>';
}

else
{
       
        echo '<meta http-equiv=REFRESH CONTENT=1;url=connect_error.html>';
}
?>