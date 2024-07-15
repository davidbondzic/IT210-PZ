<?php
	function povezi(){
		try {
			$con = new PDO("mysql:host=localhost;dbname=oglasi", "root", "");
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $con;
		}
		catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}
?>