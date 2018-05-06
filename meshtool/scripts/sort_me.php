#!/usr/bin/php
<?php
//this is the newer sort algo
$files = scandir(__DIR__.'/dsf/');

foreach ($files as $file )
{
	if(preg_match('/dsf/',$file))
	{
		$dsf = preg_replace('/\.dsf/','',$file);
			
		//sort
		$pos = substr($dsf,1);
		if(preg_match('/-/',$pos))
		{
			$location = explode('-',$pos);
			
			for($i=0;$i<180;$i++)
			{
				if($i%10 == 0)
				{
					$currentTen = $i;
					$nextTen = $i+10;
				}
				
				if($location[1]> $currentTen && $location[1]<= $nextTen )
				{
					$j = "-".str_pad($nextTen,3,'0',STR_PAD_LEFT);
					break;
				}
			}
			

		}
		else{
			
			
			$location = explode('+',$pos);
			
			for($i=0;$i<180;$i++)
			{
			
				if($i%10 == 0)
				{
					$currentTen = $i;
					$nextTen = $i+10;
				}
			
				if($location[1] >= $currentTen && $location[1] < $nextTen)
				{
					$j = "+".str_pad($currentTen,3,'0',STR_PAD_LEFT);
					break;
				}
			
			
			}
			
		}
		
	}
	
	
	for($y=50;$y<=80;$y=$y+10)
	{
		
		$k = $y+10;
		if($location[0]> $y && $location[0]<= $k )
		{
			
			$cmd = "cp -- ./dsf/./$dsf.dsf ./Earth\ nav\ data/./-$k$j/";
			//echo $cmd."\n";
			
			$output = system($cmd);
			echo $output;
		}
	}
}
			
			
			

?>
