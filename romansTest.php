<?php
require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';
require_once 'Converter.php';

class romanoTest extends \PHPUnit_Framework_TestCase
{
	protected $converter;

	public function setUp()  {
		
		$this->converter = new Converter();
		

	}
	public function testTransformNumberUno()
       {
			assertEquals($this->converter->numberToRoman(1),"I");
       }


	public function testTransformNumberDos()
       {
			assertEquals($this->converter->numberToRoman(2),"II");
       }

	public function testTransformNumberTres()
       {
			assertEquals($this->converter->numberToRoman(3),"III");
       }

	public function testTransformNumberCuatro()
       {
			assertEquals($this->converter->numberToRoman(4),"IV");
       }
	
	public function testTransformNumberCinco()
       {
			assertEquals($this->converter->numberToRoman(5),"V");
       }
	public function testTransformNumberSeis()
       {
			assertEquals($this->converter->numberToRoman(6),"VI");
       }
	public function testTransformNumberSiete()
       {
			assertEquals($this->converter->numberToRoman(7),"VII");
       }
	public function testTransformNumberOcho()
       {
			assertEquals($this->converter->numberToRoman(8),"VIII");
       }

}

?>
