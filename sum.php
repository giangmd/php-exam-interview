<?php
/**
 * Count Sum from 1 to N setting
 * Using for loop and recursive
 */
class MySum
{
	protected $inputData;
	function __construct($n)
	{
		$this->n = $n;
	}

	function getByFor()
	{
		$n = $this->n;
		$sum = 0;
		for ($i=1; $i <= $n; $i++) { 
			$sum += $i;
		}

		print_r($sum);
	}

	function getByWhile()
	{
		$n = $this->n;
		$sum = 0;
		$i = 1;
		while ($i <= $n) {
			$sum += $i;
			$i++;
		}

		print_r($sum);
	}

	function getByRecursive($n)
	{
		if ($n == 1) {
			return $n;
		}
		
		return $n + $this->getByRecursive($n-1);
	}
}


$run = new MySum(10);
echo $run->getByFor();
echo "</br>";

echo $run->getByRecursive(10);
echo "</br>";

echo $run->getByWhile();
echo "</br>";
