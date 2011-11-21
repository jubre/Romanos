<?php
   require_once 'PHPUnit/Autoload.php';
   require_once 'PHPUnit/Framework/Assert/Functions.php';
   require_once 'conversor.php';

class romanoTest extends \PHPUnit_Framework_TestCase
{

	public function testTransformNumberUno()
       {
	
			$conversor = new Conversor();
			
			assertEquals($conversor->numberToRoman(1),"I");
       }


	public function testTransformNumberDos()
       {
			
			$conversor = new Conversor();
			
			assertEquals($conversor->numberToRoman(2),"II");
       }

	public function testTransformNumberTres()
       {
			
			$conversor = new Conversor();
			
			assertEquals($conversor->numberToRoman(3),"III");
       }

	public function testTransformNumberCuatro()
       {
			
			$conversor = new Conversor();
			
			assertEquals($conversor->numberToRoman(4),"IV");
       }
	
	public function testTransformNumberCinco()
       {
			
			$conversor = new Conversor();
			
			assertEquals($conversor->numberToRoman(5),"V");
       }
	public function testTransformNumberSeis()
       {
			
			$conversor = new Conversor();
			
			assertEquals($conversor->numberToRoman(6),"VI");
       }
	public function testTransformNumberSiete()
       {
			
			$conversor = new Conversor();
			
			assertEquals($conversor->numberToRoman(7),"VII");
       }
	public function testTransformNumberOcho()
       {
			
			$conversor = new Conversor();
			
			assertEquals($conversor->numberToRoman(8),"VIII");
       }

}

?>
