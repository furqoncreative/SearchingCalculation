<?php 
    
function binarySearch(Array $arr, $x) {   
    

    if (count($arr) === 0) return false; 
    $low = 0; 
    $high = count($arr) - 1; 
      
    while ($low <= $high) { 
          
        // compute middle index 
        $mid = floor(($low + $high) / 2); 
   
        // element found at mid 
        if($arr[$mid] == $x) { 
            return true; 
        } 
  
        if ($x < $arr[$mid]) { 
            // search the left side of the array 
            $high = $mid -1; 
        } 
        else { 
            // search the right side of the array 
            $low = $mid + 1; 
        } 
    } 
      
    // If we reach here element x doesnt exist 
    return false; 
} 
  


if (isset($_POST['find']))
{
$batas=$_POST['batas'];
$arr = range(1,$batas);
$value = $_POST['cari']; 
$time_start = microtime(true);
if(binarySearch($arr, $value) == true) { 
    $time_end = microtime(true);
        $time = $time_end - $time_start;    
    echo $value." dari ".$batas." angka ditemukan dalam waktu $time milisecond.";
        }
        else
        {
    echo $value." dari ".$batas." tidak ditemkuan";
 } 
}
?> 
