<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$password = $_POST['password'];
$password2 = $_POST['password2'];
$name = $_POST['name'];
$mailbox = $_POST['mailbox'];
$lineid = $_POST['lineid'];
$cellphone = $_POST['cellphone'];
//紅色字體為判斷密碼是否填寫正確
if($_SESSION['username'] != null && $password != null && $password2 != null && $password == $password2)
{
		$id = $_SESSION['username'];
		
		echo $id;
        //更新資料庫資料語法
        $sql = "update login set name='$name',mailbox='$mailbox',password='$password',cellphone='$cellphone',lineid='$lineid'  where id='$id'";
        if(mysqli_query($con,$sql))
        {
                echo '修改成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.html>';
        }
        else
        {
                echo '修改失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.html>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>