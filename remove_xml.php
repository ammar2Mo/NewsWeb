<?php

require_once("header.php");

require_once ("sidbar.php");

if(!isset($_SESSION['userLogged'])){				
		
		echo '<p class="error_msg">من فضلك سجل دخولك أولا</p>';			
		
	}else{


 if (isset($_POST['remove']))
     {
 $xml=new DOMDocument('1.0','utf-8');
            $xml->load('xx.xml');
            $cname=$_POST['pTitle'];
            $xpath=new DOMXPath($xml);
            foreach ($xpath->query("/posts/post[post_title = '$cname']")as $node)
            {
                $node->parentNode->removeChild($node);
            }
            $xml->formatOutput=TRUE;
            $xml->save('xx.xml');
 }
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        
    <table align="center" cellpadding="10">
    
        <tr>
            <td>title: </td>
            <td><input type="text" name="pTitle" class="form-text" /></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" value="remove" name="remove" /></td>
        </tr>
    
    </table>
    
    </form>
<?php
        }
?>