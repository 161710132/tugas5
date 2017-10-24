<?php
class hitung2{
public $sisi;
function set_kelilingpersegi($sisi)
 	{

 		$this->sisi = $sisi;
 		
 	}

 	function get_kelilingpersegi(){
 		return 4 * $this->sisi;
 	}
 } 
 $persegi1 = new hitung2;
 $persegi1->set_kelilingpersegi(3);
 echo"<h3> Bangun datar persegi </h3>";
 echo" Keliling : ".$persegi1->get_kelilingpersegi().'cm','<br>';
?>