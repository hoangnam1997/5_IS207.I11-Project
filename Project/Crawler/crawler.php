<?php
require "simple_html_dom.php";
require "connect.php";
require "DBConnect.php"

class DataClothe{
	public $price;
	public $name;
	public $pictureurl;	
	function DataClothe($price,$name,$pictureurl){
		$this->$price=$price;
		$this->$name=$name;
		$this->$pictureurl=$pictureurl;
	}

	function INSERTDB(){
		$qr="INSERT INTO quanao VALUES($price,$name;$pictureurl)";
		// Nên kiểm tra $this->url đã có trong db chưa
	}
}


$connecttodatabase=new Connect();


for($t=1;$t<=1;$t++){
	getDatabase($t);
}


	function getDatabase($page){
	$html=file_get_html("http://zuhaus.vn/zu-design-pc150502.html?page=$page");
	$ds=$html->find("ul.products li");

	foreach ($ds as $sp) {
	# code...
	$price=$sp->find("span.price span",0);
	echo $price;
	echo "<br>";
	$name=$sp->find("a",3)->innertext;
	echo $name; 
	echo "<br>";
	$pictureurl=$sp->find("img",0)->src;
	echo $pictureurl;
	echo "<br>";

	DataClothe.INSERTDB();
	}	
}

?>