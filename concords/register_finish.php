<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
header("Content-Type:text/html; charset=utf-8");
include("mysql_connect.inc.php");

$name = $_POST['name'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$id = $_POST['id'];
$lineid = $_POST['lineid'];
$mailbox = $_POST['mailbox'];
$cellphone = $_POST['cellphone'];
//帳號是否正確
//判斷兩次密碼有沒有依樣
if($id != null && $password != null && $password2 != null && $password == $password2)
{
        //新增資料進資料庫語法
        $sql = "insert into login (name, id, password, lineid, mailbox, cellphone) values ('$name', '$id', '$password', '$lineid','$mailbox', '$cellphone')";
		
        if(mysqli_query($con,$sql))
        {
			if(@$_SESSION['username'] != null){
				echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=admin.php>';
			}
			else
			{
				echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
			}
                
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>