<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
set_api_key("SqohU2ZpR8OFy33GOXP7vB5naKWTwIzF3bojA7OKeR0"); 

# for single sentence 
// echo sentiment("Come on, lets play together");
if(isset($_POST)){
    if(isset($_POST['submit'])){
        $text=$_POST['text'];
    }
}
$str = sentiment($text);
echo $str ;
$json = json_decode($str, true);
// echo "This is a ".$json['sentiment'];
# for multiple sentence as array

// $text_list = "[ \"Come on, lets play together\",\"Team performed well overall\" ]";
// echo sentiment_batch($text_list);
?>