<?php
require_once("header.php");

require_once ("sidbar.php");
 
?>


    
    <?php
	if(!isset($_SESSION['userLogged'])){				
		
		echo '<p class="error_msg">من �?ضلك سجل دخولك أولا</p>';			
		
	}else{
		
		if(isset($_POST['joinBTN'])){
			
			//1- insert photo
			$realName = $_FILES['photo']['name'];
			$tempFile = $_FILES['photo']['tmp_name'];
			$uploadPath = "images/".time()."_".$realName;			
			move_uploaded_file($tempFile, $uploadPath);
			
//			$q = "insert into posts set 
//				  title='{$_POST['pTitle']}',
//				  p='{$_POST['pDesc']}',
//				  photo='$uploadPath',
//				  
//				  
//				  user={$_SESSION['userLogged']},
//				
//				  date=NOW()";
                        $sql = "INSERT INTO `posts`(`title`, `p`, `photo`, `user`, `date`) VALUES ('{$_POST['pTitle']}','{$_POST['pDesc']}','$uploadPath',{$_SESSION['userLogged']},Now())";

			$r = mysql_query($sql);
			if($r){
				
				$photoID = mysql_insert_id();				
				 
        
        
            $xml=new DOMDocument('1.0','UT-8');
            $xml->load('xx.xml');
            $cname=$_POST['pTitle'];
            $caddress=$_POST['pDesc'];
            $date=date('D-  d M  -Y  h:i:s');
            $rootTag=$xml->getElementsByTagName('posts')->item(0);
            $infoTag=$xml->createElement('post');
            $nameTag=$xml->createElement('post_title',$cname);
            $addressTag=$xml->createElement('description',$caddress);
            $dateTage=$xml->createElement('post_date',$date);
            $infoTag->appendChild($nameTag);
            $infoTag->appendChild($addressTag);
            $infoTag->appendChild($dateTage);
            $rootTag->appendChild($infoTag);
            $xml->save('xx.xml');
            
           
        
        
//				//2-insert tags
//				if(!empty($_POST['pTags'])){
//					
//					$wordsArray = explode("-", $_POST['pTags']);
//					$idArray = array();
//					
//					foreach($wordsArray as $word){
//						
//						$word = trim($word);
//						
//						$q = "select * from tags where word='{$word}'";
//						$r = mysql_query($q);
//						
//						if(mysql_num_rows($r) > 0){
//							
//							$row = mysql_fetch_array($r);
//							$q = "update tags set 
//								  tags.repeat=tags.repeat+1 
//								  where id={$row['id']}";
//							$r = mysql_query($q);
							
							//$idArray[] = $row['id'];
							
//						}else{
//							
//							$q = "insert into tags set 
//								  tags.repeat=1,
//								  word='{$word}'";
//							$r = mysql_query($q);
//							
//							$idArray[] = mysql_insert_id();
//							
//						}
//						
					}
					
//					//3- make relation between photo and its tags
//					foreach($idArray as $tagID){
//						
//						$q = "insert into photo_tags set 
//							  photo_id={$photoID},
//							  tag_id={$tagID}";
//						$r = mysql_query($q);
//						
//					}
//					
//					$q = "update users set 
//						  activity=activity+1 
//						  where id=".$_SESSION['userLogged'];
//					$r = mysql_query($q);
//					
//					$_SESSION['userAct']++;
					
					echo '<p class="confirm_msg">oK</p>';
					
					
        }
				
			
			
		
		
	?>

<div id="content">
    

  <div class="login">
    <h2>enter news </h2>
    <div class="data">
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        
    <table align="center" cellpadding="10">
    
        <tr>
            <td>title: </td>
            <td><input type="text" name="pTitle" class="form-text" /></td>
        </tr>
        <tr>
            <td>photo: </td>
            <td><input type="file" name="photo" class="form-text" /></td>
        </tr>
        <tr>
            <td valign="top">news   : </td>
            <td><textarea name="pDesc" class="form-area" rows="4"></textarea></td>
        </tr>
        
        
        <tr>
            <td></td>
            <td><input type="submit" value="enter" name="joinBTN" /></td>
        </tr>
    
    </table>
    
    </form>
    
    <?php
	}
	?>
    
    </div>
  </div>
  
  <br class="clearfix" />
</div>

