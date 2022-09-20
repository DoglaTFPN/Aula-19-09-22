<?php  

	class Cambio
	{
		private $marcha;

		function __construct($marcha)
		{
			$this->marcha = $marcha;
		}
		function getMarcha()
		{
			return $this->marcha;
		}

		function setMarcha($marcha)
		{
			$this->marcha = $marcha;
		}		
	}

?>