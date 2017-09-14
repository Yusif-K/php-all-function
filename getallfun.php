<?php
function fun($a)
{
	echo "phpdə olan bütün funskiyaların sayı:".'<em style="color:red">'.count($a["internal"]).'</em><br/>';
    foreach($a as $k=>$v)
    {
    	$x=0;
    	foreach ($v as $y) {
    		$link=str_replace('_','-',$y );
    		$link="http://php.net/manual/en/function.".$link.'.php';
    		echo ++$x.")<a href=\"$link\">".$y.'() </a><br/>';
    	}

    }
}

$arr = get_defined_functions();
unset($arr["user"]);
fun($arr);
?>
