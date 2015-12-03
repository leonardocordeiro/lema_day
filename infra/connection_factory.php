<?php

class ConnectionFactory {

	public function getConnection() { 
		return mysqli_connect("localhost:3306", "root", "", "lema_day");
	}

}

?>