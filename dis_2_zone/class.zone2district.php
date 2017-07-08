<?php
if(!empty($_POST))
{
	$zone = $_POST['zone'];
	$a_zone = array();
	$z_arr=array("s_z"=>array("First Select Zone"),
				 "Mechi"=>array("Jhapa","Ilam","Panchthar","Taplejung"),
				 "Koshi"=>array("Morang","Sunsari","Bhojpur","Dhankuta","Terhathum","Sankhuwasabha"),
				 "Sagarmatha"=>array("Saptari","Siraha","Udayapur","Khotang","Okhaldhunga","Solukhumbu"),
				 "Janakpur"=>array("Dhanusa","Mahottari","Sarlahi","Sindhuli","Ramechhap","Dolakha"),
				 "Bagmati"=>array("Bhaktapur","Dhading","Kathmandu","Kavrepalanchok","Lalitpur","Nuwakot","Rasuwa","Sindhupalchok"),
				 "Narayani"=>array("Bara","Parsa","Rautahat","Chitwan","Makwanpur"),
				 "Gandaki"=>array("Gorkha","Kaski","Lamjung","Syangja","Tanahun","Manang"),
				 "Lumbini"=>array("Kapilvastu","Nawalparasi","Rupandehi","Arghakhanchi","Gulmi","Palpa"),
				 "Dhaulagiri"=>array("Baglung","Myagdi","Parbat","Mustang"),
				 "Rapti"=>array("Dang","Pyuthan","Rolpa","Rukum","Salyan"),
				 "Karnali"=>array("Dolpa","Humla","Jumla","Kalikot","Mugu"),
				 "Bheri"=>array("Banke","Bardiya","Surkhet","Dailekh","Jajarkot"),
				 "Seti"=>array("Kailali","Achham","Doti","Bajhang","Bajura"),
				 "Mahakali"=>array("Kanchanpur","Dadeldhura","Baitadi","Darchula")
				 );
	if(in_array($zone,array_keys($z_arr)))
	{
		  $d_data=$z_arr[$zone];
		  for($i=0;$i<count($d_data);$i++){
			  $print_data  = $d_data[$i];
			  echo "<option value=\"{$print_data}\">{$print_data}</option>";  
		  }

	}

}
?>