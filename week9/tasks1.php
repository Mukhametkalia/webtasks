
	<?php 
echo "<pre>"; 
for($i=0;$i<12;$i++){ 
echo " "; 
} 
echo "Hello </pre>"; 
$b = 22; 
for($i=1;$i<10;$i++){ 
echo "<pre>"; 
for($k=0;$k<10-$i;$k++){ 
echo " "; 
} 
echo "Hello"; 
for($j=0;$j<$b-($b-$i*2);$j++){ 
echo " "; 
} 
echo "Hello </pre>"; 

} 
?>