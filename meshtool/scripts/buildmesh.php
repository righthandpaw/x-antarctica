#!/usr/bin/php
<?php 
	echo "building mesh ...\n";
	
	$files = scandir(__DIR__.'/dem/');
	
	
	
	foreach ($files as $file )
	{
		if(preg_match('/hgt/',$file))
		{
			$dsf = preg_replace('/S|W/','-',$file);
			$dsf = preg_replace('/E/','+',$dsf);
			$dsf = preg_replace('/\.hgt/','',$dsf);
			$cmd = "./MeshTool shapefile ./climate/./$dsf.xes ./dem/$file ./dump ./dsf/./$dsf.dsf";

			echo $cmd."\n";
			$output = system($cmd);
			echo $output;	
			
		}
	}
	
	