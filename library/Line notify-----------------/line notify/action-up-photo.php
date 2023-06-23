<?php
	session_start();
	@ini_set('display_errors',DEBUG_MODE?1:0);
	//date_default_timezone_set(DEFAULT_TIMEZONE);
	define ('SITE_ROOT', realpath(dirname(__FILE__)));
	
	$save_dir = SITE_ROOT."/upload/";
		//if(!file_exists($save_dir))
//		{
//			mkdir($save_dir);
//		}
		
		//check type file
		$allowed =  array('gif','png','PNG','jpg','JPG');
		$filename = $_FILES['file']['name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if(!in_array($ext,$allowed)) 
		{
			echo json_encode(array(
					'success'=>false,
					'msg' => 'file is not supported'
				));
		}
		else
		{
			$times = time(' H:i:s');
			//$picName = date('Y-m-d').$times.".jpg";
			
			$temp = explode(".", $_FILES["file"]["name"]);
			$newfilename = round(microtime(true)) . '.' . end($temp);
	
	
			$images = $_FILES["file"]["tmp_name"];
			$new_images = "Slip__".$newfilename;
		
			$picName = $new_images;
			$save_path = "$save_dir/$picName" ;
			//move_uploaded_file($_FILES['file']['tmp_name'], SITE_ROOT.'/static/images/slides/1/1.jpg');
			if(move_uploaded_file($_FILES["file"]["tmp_name"],$save_dir.'/'.$picName))
			{
				$save_dir = "http://therich95.net/upload_photo/upload";
				$location = $save_dir.'/'.$picName;
				//echo $location;
				echo json_encode(array(
					'success'=>true,
					'path' => $location
				));
				
			}
		}
	
	
		
?>