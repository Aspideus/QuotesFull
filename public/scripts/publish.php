<?php

echo "Loaded with status OK";
$nocheats = true;
// Configure the data store

$dir = __DIR__.'/data';

echo "data loaded";

$posted_name = $_POST["name"];
$posted_comment = $_POST["comment"];

if(isset($_POST["tags"])){
    $posted_tags = $_POST["tags"];

    //если в переданной переменной 4 ";" тогда систему попытались обмануть, просто не засчитываем такую запись
    //echo 'before array count values';
    $check_for_cheat_tags = substr_count($posted_tags, ';');
    //echo 'after it';
    if(($check_for_cheat_tags > 3) || ($check_for_cheat_tags < 1))
        $nocheats = false;
    
}
else
    $posted_tags = ''; //ну пусть будет на всякий случай, хотя не должно использоваться вообще



if(isset($posted_name) && isset($posted_comment) && $nocheats) {
    
    $name = htmlspecialchars($_POST["name"]);
    $name = str_replace(array("\n", "\r"), '', $name);


    echo "name set";

    $comment = htmlspecialchars($_POST["comment"]);
    $comment = str_replace(array("\n", "\r"), '', $comment);
	
    if(strlen($comment) > 240) {
        $comment = mb_strimwidth($comment, 0, 240, '');
        //echo "; ".$comment." comment > 240 ";
    }
    if(strlen($name) > 240) {
        $name = mb_strimwidth($name, 0, 240, '');
        //echo "; ".$name." name > 240 ";
    }



    $tags = htmlspecialchars($_POST["tags"]);
    $tags = str_replace(array("\n", "\r"), '', $tags);

    $shout = array(
        'text' => $comment,
        'name' => $name,
        'tags' => $tags,
		//'img' => $img,
        'createdAt' => time()
    );
    var_dump($shout);
    echo "shout created ";
    

    $json = json_encode($shout);
    echo 'json encoded';

   

    $message_history = 'message_history.txt';
    $history = fopen($message_history, 'r+');

    //echo $message_history;
    $message_number = fread($history, filesize($message_history)) +1;

    fclose($history); //возможно не подобрал нужный режим открытия, но из тех что перепробовал не получается одновременно и открывать и читать, хоть х+
    $history = fopen($message_history, 'w+');

    echo '; Message number: '.$message_number.'; ';

    fwrite($history, $message_number);
    fclose($history);

    //для правильной хронологии имя файла меньше 10 будет в начале нолик содержать
    if ($message_number < 10)
        $filename = 'messages/0'.$message_number.'_'.date('d.m.y').'.json'; //.rand().
    else
        $filename = 'messages/'.$message_number.'_'.date('d.m.y').'.json'; //.rand().

    echo $filename;

    $file = fopen($filename,'w+');

    echo $file;

    fwrite($file, $json);
    fclose($file);

   // $repo->store($shout);
    
}

echo "done";


header( 'Location: ../index.php');
die();
?>