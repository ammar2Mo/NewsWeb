<?php
require_once("header.php");
require_once ("sidbar.php");

?>


    
    
    <?php
	if(isset($_POST['signupBTN'])){	
            
		
		if($_POST['upass1'] == $_POST['upass2']){
                    
//			
//			$q = "insert into users set 
//				  name='".$_POST['uname']."',
//				  h_pass='".md5($_POST['upass1'])."',
//				  email='".$_POST['umail']."',
//				  level=0,
//				  joined=NOW()";
                    
                    $sql = "INSERT INTO `users`(`name`, `h_pass`, `email`, `joined`) VALUES ('".$_POST['uname']."','".md5($_POST['upass1'])."','".$_POST['umail']."',NOW())";
			$r = mysql_query($sql);
			
			if($r){
				
				echo '<p class="confirm_msg">Welcom</p>';
				
				//$_SESSION['userLogged'] =1;
				$_SESSION['userName'] = $_POST['uname'];
				$_SESSION['userAct'] = 0;
				$_SESSION['userDate'] = date("Y-m-d");
				//header("location:index.php");
				
				
			}
			
		}else{
			
			echo '<p class="error_msg" " >Error</p>';
			
		}
	
	}
	?>
    
        <div id="content">
           
    <div class="data">
            <div class="login">
         <h2>Sign Up</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        
    <table align="center" cellpadding="10">
    
        <tr>
            <td>Name : </td>
            <td><input type="text" name="uname" class="form-text" /></td>
        </tr>
        <tr>
            <td>password : </td>
            <td><input type="password" name="upass1" class="form-text" /></td>
        </tr>
        <tr>
            <td>try password : </td>
            <td><input type="password" name="upass2" class="form-text" /></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><input type="text" name="umail" class="form-text" /></td>
        </tr>
        
        <tr>
            <td></td>
            
            <td><input type="submit" value="Sign Up" name="signupBTN" /></td>
        </tr>
    
    </table>
    
    </form>
    
  </div>
  
  <br class="clearfix" />
</div>
</div>


<?php
require_once ("footer.php");
?>