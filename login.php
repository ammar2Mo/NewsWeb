
<?php
require_once("header.php");
require_once ("sidbar.php");
?>


<?php
		
	if(isset($_POST['loginBTN'])){			
		$nam=mysql_real_escape_string($_POST['uname']);
                $ps=mysql_real_escape_string(md5($_POST['upass']));
		$q= "SELECT `name`, `h_pass` FROM `users` WHERE `name`=\"$nam\"";
		$r = mysql_query($q) or die(mysql_error());
		
		if($r){
				
				echo '<p class="confirm_msg">Welcom</p>';
				
				$_SESSION['userLogged'] =1;
				$_SESSION['userName'] = $_POST['uname'];
				$_SESSION['userAct'] = 0;
				$_SESSION['userDate'] = date("Y-m-d");
				//header("location:index.php");
				
				
			}else {
			
			echo '<p class="error_msg">invalid data </p>';
			
		}
		
	}
	
	?>
    
<div class="welcome">
    <?php
	if(isset($_SESSION['userLogged'])){
		echo '<h3> Welcome </h3>' . $_SESSION['userName'] . "<br />"; 
		echo '<p>you are sign up at ' . date("d / m / Y", strtotime($_SESSION['userDate'])) . "</p><br />"; 
		echo '<p>Number of activites ( ' . $_SESSION['userAct'] . ") </p><br />"; 
		
		echo '<a href="profile.php">your profile</a> | ';
		echo '<a href="logout.php">log out</a>';
		
	}else{
				
	
	?>
     
     </div>
    	<div id="content">
                     

 <div class="data">            
            <div class="login">
                <h2>Login</h2>   
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    
        
        
    <table align="center" cellpadding="10">
    
        <tr>
            <td>user name: </td>
            <td><input type="text" name="uname" /></td>
        </tr>
        <tr>
            <td align="left">password: </td>
            <td><input type="password" name="upass" /></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" value="Login" name="loginBTN" /></td>
        </tr>
    
    </table>
    
    </form>
            </div>
    
    <?php
	}
	?>
    
  </div>
  </div>


            <?php
require_once ("footer.php");
?>