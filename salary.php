<?php
class emp
{
	public $a,$b,$c;
	function sum()
	{
	$this->c=$this->a+$this->b;
	return $this->c;
	}
	function mul()
	{
	$this->c=$this->a*$this->b;
	return $this->c;
	}
}
$emp_info=new emp();
$sal=new emp();
$salary->a=1000;
$salary->b=2000;
echo "emp_info 1<br>",$emp_info->a;
echo"<br>";
echo $sal->a;
echo"<br>";
echo "emp_info 2<br>" ,$emp_info->b;
echo"<br>";
echo $sal->b;
?>