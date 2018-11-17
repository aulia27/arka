<?php
function strReplace($n,$m,$b)
{
    if(substr_count($n, $m))
    {
        $array=explode($m,$n);
        return implode($b, $array);
    }
}
echo strReplace("kelompok","o","a");

?>