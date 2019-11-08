<?php
$seconds =10;
set_time_limit (5);

$a; 
$b; 
$u; 
$v; 
$i; 
$j; 
$k; 
$min = 0; 
$mincost = 0; 
$cost[10][10]; 
$visited[10]; 
$ne=1; 
$n=10; 
$sorter[100]; 
$k;

$cl = array("cl0", "cl1", "cl2", "cl3", "cl4", "cl5", "cl6", "cl7", "cl8", "cl9", "cl10", );
$cls = "cls";
$c = 1;
$d = 2;
$sc = strval($c);
$sd = strval($d);
echo("$cls$sc$sd");

	$visited = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 );
	$cost = array(
        array(0, 5, 0, 5, 0, 0, 0, 0, 0, 0),
        array(5, 0, 5, 0, 0, 0, 0, 0, 0, 0),
        array(0, 5, 0, 0, 5, 0, 0, 0, 0, 0),
        array(5, 0, 0, 0, 5, 5, 0, 0, 0, 0),
        array(0, 0, 5, 5, 0, 0, 0, 0, 0, 5),
        array(0, 0, 0, 5, 0, 0, 5, 0, 0, 0),
        array(0, 0, 0, 0, 0, 5, 0, 5, 0, 0),
        array(0, 0, 0, 0, 0, 0, 5, 0, 5, 5),
        array(0, 0, 0, 0, 0, 0, 0, 5, 0, 0),
        array(0, 0, 0, 0, 5, 0, 0, 5, 0, 0),
  );
	


	for($i=0; $i<10; $i++){
		echo("<br>");
		for($j=0; $j<10; $j++){
			echo($cost[$i][$j]);
		}
	}

	for($i=0;$i<$n;$i++)
 
	for($j=0;$j<$n;$j++)
 
	{
		
		if($cost[$i][$j]==0)
 
			$cost[$i][$j]=999;
 
	}
	for($i=0; $i<10; $i++){
		echo("<br>");
		for($j=0; $j<10; $j++){
			echo($cost[$i][$j]);
		}
	}
 
	$visited[0]=1;
 
	echo("<br>");
 
	while($ne < $n)
 
	{
 
		for($i=0,$min=999;$i<$n;$i++)
 
		for($j=0;$j<$n;$j++){
 
		if($cost[$i][$j]< $min)
 
		if($visited[$i]!=0)
 
		{
 
			$min=$cost[$i][$j];
 
			$a=$u=$i;
 
			$b=$v=$j;
 
		}

		}
 
		if($visited[$u]==0 || $visited[$v]==0)
 
		{
			$c = $a+1;
			$d = $b+1;
 
			echo("<br> Edge {$ne}:({$c}, {$d}) cost: {$min}");

			echo("&nbsp;&nbsp;&nbsp;&nbsp; cls{$c}{$d}");
			
			$ne++;

			$mincost+=$min;
 
			$visited[$b]=1;
 
		}
 
		$cost[$a][$b]=$cost[$b][$a]=999;
 
	}
 
	echo("<br><br> Minimun cost={$mincost}");
 

		if($cl[$c] == $cl[$d] and ($cl[$c] == 'activated' or $cl[$d] == 'activated')){
			$cls{$c+$d} = 'activated';
		}
		else{
			$cls{$c+$d} = 'deactivated';			
		}

?>