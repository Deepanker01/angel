<?php	

$name = "arun";

	require "../conn.php";

	require_once 'alchemyapi.php';

	$alchemyapi = new AlchemyAPI();
	
// $res = mysql_query("SELECT * from feedback where username = '$name'");
// echo $res;

//while($row = mysql_fetch_array($res))
//{
$temp = "he is bad";
$temp2 = "he is a good man";
//echo $row['feedback'];
//	$demo_text = $row['feedback'];
//	$demo_url = 'http://www.npr.org/2013/11/26/247336038/dont-stuff-the-turkey-and-other-tips-from-americas-test-kitchen';
//	$demo_html = '<html><head><title>GETHEM | SENTIMEMENTAL ANALYSIS</title></head><body><h1>Checking the Sentimental analysis.</h1><p>Arun is very good></body></html>';



	
	//echo 'Processing text: ', $demo_text, PHP_EOL;
	echo PHP_EOL;

	

	$response = $alchemyapi->keywords('text',$temp2, array('sentiment'=>1));

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


//echo $score;
?>
