<?php
			if(file_exists($directory)) {      
				if($dir_handle=@opendir($directory)) {      
					while(false!==($filename=readdir($dir_handle))) {  
						if($filename!="." && $filename!="..") {   
							unlink($directory."/".$filename);             
						}
					}
					closedir($dir_handle);                      
				                     
				}
				rmdir($directory);     
			}
?>
