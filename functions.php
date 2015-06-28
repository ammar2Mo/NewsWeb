<?php
// function to get current subject details
function getCurrentSubDetails($field){
	
	$q = "SELECT * FROM posts ORDER BY time_stamp DESC LIMIT 1";
	$r = mysql_query($q);
	$subject = mysql_fetch_array($r);

	switch($field){
		
		case "id":
			return $subject['id'];
			break;
			
		case "title":
			return $subject['title'];
			break;
			
		case "p":
			return $subject['p'];
			break;
		
		case "photo":
			return $subject['photo'];
			break;
			
//		case "winner":
//			return $subject['winner_id'];
//			break;
//			
		case "date":
			return $subject['date'];
			break;
			
		case "all":
			return $subject;
			break;
		
	}
	
}

//insert tags into DB and return array of IDs
//function insertTags($tags){
//	
//	$tagsIDs = array();
//	
//	foreach($tags as $tag){
//		
//		$tag = trim($tag);
//		
//		$q = "SELECT * FROM tags WHERE word='".$tag."'";
//		$r = mysql_query($q);
//		
//		if(mysql_num_rows($r) > 0){
//			
//			$row = mysql_fetch_array($r);
//			
//			$q = "UPDATE tags SET 
//				  tags.repeat=tags.repeat+1 
//				  WHERE id=".$row['id'];
//			$r = mysql_query($q);
//			
//			$tagsIDs[] = $row['id'];
//			
//		}else{
//			
//			$q = "INSERT INTO tags SET 
//				  tags.word='".$tag."',
//				  tags.repeat=1";
//			$r = mysql_query($q);
//			
//			$tagsIDs[] = mysql_insert_id();
//			
//		}
//		
//	}
//	
//	return $tagsIDs;
//	
//}

// function to get photo details by ID
function getPhotoDetailsByID($id, $field){
	
	$q = "SELECT `id`, `photo` FROM `posts` WHERE  id=".$id." LIMIT 1";
	$r = mysql_query($q);
	$photo = mysql_fetch_array($r);

	switch($field){
		
		case "photo":
			return $photo['photo'];
			break;
			
		case "title":
			return $photo['title'];
			break;
			
		case "desc":
			return $photo['desc'];
			break;
		
		case "votes":
			return $photo['votes'];
			break;
			
		case "user":
			return $photo['user_id'];
			break;
			
		case "sub":
			return $photo['sub_id'];
			break;
			
		case "date":
			return $photo['time_stamp'];
			break;
			
		case "all":
			return $photo;
			break;
		
	}
	
}
