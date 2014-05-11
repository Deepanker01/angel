<?php
require "conn.php";
$_SESSION['fname'] = "arun";
$name = $_SESSION['fname'];
@$feed = $_POST['feedback'];

	require_once 'alchemy/alchemyapi.php';

	$alchemyapi = new AlchemyAPI();

	$temp = $feed;
	
if(isset($feed))
{

	$response = $alchemyapi->keywords('text',$feed, array('sentiment'=>1));

	if ($response['status'] == 'OK') {
		echo '## Response Object ##', PHP_EOL;
		echo print_r($response);
		echo PHP_EOL;
		echo '## Keywords ##', PHP_EOL;
		foreach ($response['keywords'] as $keyword) {
			//echo 'keyword: ', $keyword['text'], PHP_EOL;
			//echo 'relevance: ', $keyword['relevance'], PHP_EOL;
			echo 'sentiment: ', $keyword['sentiment']['type']; 			
			if (array_key_exists('score', $keyword['sentiment'])) {
				echo ' (' . $keyword['sentiment']['score'] . ')', PHP_EOL;
			$score = $keyword['sentiment']['score'];

			} else {
				echo PHP_EOL;
			}
			echo PHP_EOL;
		}
	}

	 else {
		echo 'Error in the keyword extraction call: ', $response['statusInfo'];
	}
if(isset($score))
echo $score;
$res = mysql_query("INSERT INTO feedback (`username`, `feedback`) values ('$name', '$feed' )");
if($res)
{


echo "GOoD";

}

if(isset($score))
{
echo $score;
$res2 = mysql_query("SELECT * from user where username = '$name'");
while($row = mysql_fetch_array($res2))
{

$total = $row['total'];
$rating = $row['rating'];

}

$final = $total*$rating;
$total = $total+1;

if($score==0)
	$tnew = 3;
else if($score>0 && $score<0.5)
	$tnew = 4;
else if($score>0.5 && $score<1)
	$tnew = 5;
else if($score>-0.5 && $score<0)
	$tnew = 2;
else
	$tnew = 1;
echo $tnew;

$final = $final + $tnew;
$final = $final/$total;

$res3 = mysql_query("UPDATE user set `rating` = '$final' , `total` =' $total'  where username = '$name'");
if($res3)
{


echo " very GOoD";

}


}
}
?>

<html>
<body>
	<form action = "feed.php" method = "POST">
NAME:	<input type = "text" value = <?php echo $name; ?> >
FEEDBACK: <textarea name="feedback"> </textarea>
<input type= "submit">

	</form>
</body>
</html>