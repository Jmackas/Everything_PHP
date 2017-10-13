<?php

class photoGallery {
	
	private $dir;
	private $directoryList;
	private $file;
	private $fullPath;
	
	public $fileTypes = array ('jpeg', 'jpg');
	
	private $photos = array();
	
	
	public function setDirect($dir) {
		$this -> dir = $dir;
  	}
	
	public function scanDirect() {
		$directory = $this -> dir;
		
		if (is_readable($directory) && (file_exists($directory))) {
			
			$directoryList = opendir($directory);
			
			while($this -> file = readdir($directoryList)) {
				
				if ($this -> file != '.' && $this -> file != '..') {
					$this -> fullPath = $directory . '/' . $this -> file;
					if (is_file($this -> fullPath)) {
						array_push($this -> photos, $this -> fullPath);
					}
				}
			}
		}
			
		closedir($directoryList);
		return $this -> photos;
	}
	
}


?>
