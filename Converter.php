<?php 
class Converter
{
  public function numberToRoman($number)
 {

	if($number<=3){
		$romano = "";
		for( $i=0; $i<$number; $i++)
			$romano .="I";
		return $romano;
		
	}
    if($number == 4){
      return "IV";
    }

	if($number == 5){
      return "V";
    }

	if( $number < 9 && $number >= 6){
		$romano = "V";
        var_export($romano);
        var_export($number);
		$diff = $number - 5;
		for ($i=0; $i<$diff; $i++)
     {
      		$romano .="I"; 
     }
		return $romano;
 	}
	
}
}
?>
