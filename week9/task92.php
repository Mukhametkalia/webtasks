
<a href="task92.php?category=sport">Sport news</a> | <a href="task92.php?category=politics">Politic news</a><br/><br/>
<a href="task92.php?category=sport&format=json">Sport news (JSON)</a> | <a href="task92.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];


/* Write your code here */
if(isset($_GET['format'])){
	echo '{"';
	if(isset($_GET['category'])){
		echo $news[$_GET['category']][0];
		echo '" , "';
		echo $news[$_GET['category']][1];
	}
	echo '"}';
}
else{
	if(isset($_GET['category'])){
		echo $news [$_GET['category']][0];
		echo '<br><hr>';
		echo $news[$_GET['category']][1];
		echo '<br><hr>';
	}
}


?>
