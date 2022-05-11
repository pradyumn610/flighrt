<?php 




class Solution
{


	function calPoints($ops)
	{

		//print_r($ops);
		$arrOpr = array();

		if(count($ops)==0)
		{
			return 'invalid array';
		}

		for($i=0;$i<count($ops);$i++)
		{



			//echo $ops[$i];

			if(!empty($ops[$i]))
			{
						if($ops[$i]=='D')
						{

							$elmnt = $arrOpr[count($arrOpr)-1];

							 $oprAdd = $elmnt*2;

							array_push($arrOpr,$oprAdd);



						}else if($ops[$i]=='+')
						{


							$last = $arrOpr[count($arrOpr)-1];
							$lastminus1 = $arrOpr[count($arrOpr)-2];




							array_push($arrOpr,($last+$lastminus1));


						}else if($ops[$i]=='C')
						{
							array_pop($arrOpr);


						}else{

								array_push($arrOpr,$ops[$i]);


						}  

						if($ops[$i]=='D'){

							//print_r($arrOpr);die;

						}

			
           }
			



		} //loopp ends here .


		//print_r($arrOpr);

			return array_sum($arrOpr);


	}


 }




$obj = new Solution();
$arrayOpd = array("5","-2","4","C","D","9","+","+");
$arrayOpd = array("5","2","C","D","+");
$result = $obj->calPoints($arrayOpd);

echo $result ;






?>
