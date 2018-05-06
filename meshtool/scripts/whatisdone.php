#!/usr/bin/php
<?php 
	echo "building mesh ...\n";
	
	$files = scandir(__DIR__.'/dsf/');
	
	
	
	foreach ($files as $file )
	{
		if(preg_match('/dsf/',$file))
		{
			if( preg_match('/-..-.../',$file) ){
				$hgt = preg_replace('/-(..)-(...)/','S$1W$2',$file);
			}
			else{
				$hgt = preg_replace('/-(..)\+(...)/','S$1E$2',$file);
			}
			$hgt = preg_replace('/dsf/','hgt',$hgt);
			$cmd = "mv ./dem/$hgt ./done/";

			echo $cmd."\n";
			$output = system($cmd);
			echo $output;	
			
		}
	}
	
