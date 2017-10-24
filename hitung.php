<?php
class hitung{
public $sisi;

 	function set_luaspersegi($sisi)
 	{

 		$this->sisi = $sisi;
 		
 	}

 	function get_luaspersegi(){
 		return  $this->sisi * $this->sisi;
 	}
 }

 $persegi1 = new hitung;
 $persegi1->set_luaspersegi(3);
 echo"<h3> Bangun datar persegi </h3>";
 echo"Luas : " .$persegi1->get_luaspersegi().'<br>';
 	?>