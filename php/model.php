<?php 
class database{
        
    var $connect;
    var $insertDatabase;
 
    public function connect() {
        $server   = "localhost";
        $user     = "pcmasterru";
        $password = "pcmaster";
        $db       = "pcmaster";
 
        $this->connect        = mysql_connect($server, $user, $password) or die(mysql_error());
        $this->insertDatabase = mysql_query($db); 
        
    }
 
    function close(){
        mysql_close($this->conn);  
    }
 
	function clean($value = "") {
		$value = trim($value);
		$value = stripslashes($value);
		$value = strip_tags($value);
		$value = htmlspecialchars($value);
		
		return $value;
	}


	function check_length($value = "", $min, $max) {
		$result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
		return !$result;
	}	
}
?>