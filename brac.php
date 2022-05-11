<?php 


//-===============------------=================

interface Eplan
{

	function getPlan($tr);
	CONST tVal=4444;

}
abstract class Parents
{

	   var  $ert = 331;

  abstract function getName($parm);


   function getJob($FRT)
  {
     return $FRT;
  }



}


Class Childs extends Parents implements Eplan
{

	function getName($param) 
	{

		return $param;
	}

	function getPlan($tr)
	{
		return Eplan::tVal.'going live';
	}



}


$objChld = new Childs();

echo $objChld->getName('harekrishna');
echo $objChld->getJob('sankirtan');
echo $objChld->getPlan('sankirtan');










die;

class Backtracking
{
	function balancedBracket($result, $size, $open, $close)
	{
		if ($close == $size)
		{
			// When get the result of parentheses in given size
			echo $result, "<br/>";
			return;
		}
		if ($open < $size)
		{
			// Add open parentheses
			$this->balancedBracket($result.
				"(", $size, $open + 1, $close);
		}
		if ($open > $close)
		{
			// Add close parentheses
			$this->balancedBracket($result.
				")", $size, $open, $close + 1);
		}
	}
	public static
	function main($args)
	{
		$task = new Backtracking();
		// This is a size of balanced parentheses
		$size = 4;
		$task->balancedBracket("", $size, 0, 0);
	}
}
Backtracking::main(array());




/*class Solution
{


	function calPoints($opsInput)
	{


		$validArray = array('(',')','{','}','[',']');


		$leftArray  = array('(','{','[');


		$rigthArray = array(')','}',']');

		//print_r($ops);
		$ops = str_split($opsInput);

		$arrOpr = array();

		

		if(count($ops)==0)
		{
			return 'invalid array';
		}




		for($i=0;$i<count($ops);$i++)
		{


			if(!in_array($ops[$i], $validArray,true))
			{
				return 'invalid array';
			}



			if(in_array($ops[$i], $leftArray,true))
			{

				array_push($arrOpr, $ops[$i]);

			}else if (in_array($ops[$i], $rigthArray,true)) 
			{

					$endElement = end($arrOpr) ;

					if(isset($endElement) && !empty($endElement) )
					{

							if(array_search($ops[$i], $rigthArray,true)===array_search($endElement, $leftArray,true))
							{

								array_pop($arrOpr);

							}else
							{

								return false;
							}

					}else
					{

						return false;
					}

					
		   }
		} //loop ends here .


		//print_r($arrOpr);

			return empty ($arrOpr)?true:false;


	}


 }




$obj = new Solution();

$strInput = "[{}(){}]";

$result = $obj->calPoints($strInput);

if($result)
{

	echo  $result.'right';

}else{

	echo $result.'-invalid string ';
}*/








?>
