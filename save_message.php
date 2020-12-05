<meta http-equiv="Content-Type" content="text/html" charset="utf-8" ;/>


<?php include("admin/connect_2.php");?>

 <?php 
 if( $_POST["demo"]!=null)
 {
    if ($_POST["email"] !=null && $_POST["message"]!=null)
    {
    //上傳資料
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];
      $demo = $_POST["demo"];

      $nowTime = new DateTime("now",new DateTimeZone('Asia/Taipei'));
      $ann_time= $nowTime->format("Y-m-d");//紀錄登記的時間，或者("YmdHis")

      //驗證區VVV


      //驗證區AAA

        if (preg_match('/^([.0-9a-z]+)@([0-9a-z]+).([.0-9a-z]+)$/i',$email) == true)
        {
          $sql = "insert into messenge(Name,Email,Content,time) values('$name','$email','$message','$ann_time')";
        mysqli_query($conn,$sql);

        echo "<script>alert('你的留言我們已經收到囉!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=contact.html>';
        }
        else{
          echo "<script>alert('信箱格式錯誤');</script>";
          echo '<meta http-equiv=REFRESH CONTENT=0;url=contact.html>';//content是時間
        }
    }
    else{
      echo "<script>alert('請填寫資料');</script>";
      echo '<meta http-equiv=REFRESH CONTENT=0;url=contact.html>';
    }
  }
  else{
    echo "<script>alert('請勾選<我不是機器人>');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=contact.html>';
  }
 ?>
