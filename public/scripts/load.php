<?php
date_default_timezone_set('Europe/Moscow');


if (isset($_GET["tags"]))
    $get_tag = $_GET["tags"];



echo "<div class='messages_window'>";

$dir    = './scripts/messages/';
$files1 = scandir($dir, 1);

echo "<br />";


//если отслеживать максимальный номер сообщения
//$max_mes_number = 1;


foreach($files1 as $key => $myarr)
{
    if ($key > count($files1) - 3)
        continue;
    
    $file_read = fopen($dir.$myarr, 'r');
    //
    //echo "opened ".$file_read.";";
    $json_read = fread($file_read, filesize($dir.$myarr));//'messages/'.

    $fin_mes__name = json_decode($json_read)->name;
    $fin_mes__text = json_decode($json_read)->text;
    $fin_mes__tags = json_decode($json_read)->tags;
    $fin_mes__date = json_decode($json_read)->createdAt;
    //echo $json_read."<br />";


    //
    $echoedMes = false;
    if (isset($get_tag)) {
        if (stristr($fin_mes__tags, $get_tag)) {
            $echoedMes = true;
        }
    }
    else {
        $echoedMes = true;
    }
    //
    
    if ($echoedMes) {

        
        
        //максимальный номер сообщения
        //if($max_mes_number < strstr($myarr, '_', true))
            //$max_mes_number = strstr($myarr, '_', true);
        
        echo "<div class='message_card hidden_card' id='mc_".strstr($myarr, '_', true)."'>";
        
            echo "<div class='message_card_name'>".$fin_mes__name."</div>";
            echo "<div class='message_card_text'>".$fin_mes__text."</div><br />";
            echo "<div class='message_card_tags'>Теги: ".$fin_mes__tags."</div>";

            echo "<div class='message_card_under'>";
                echo "<div class='message_card_number'>".strstr($myarr, '_', true)."</div>";
                echo "<div class='message_card_date'>".date('Y-m-d H:i:s', $fin_mes__date)."</div>";
            echo "</div>";
        echo "</div>";
    }

    
    fclose($file_read);
}

echo "<button class='show_more'> Показать ещё </button>";
echo "</div>";

/*echo "<script type='application/javascript'>
    //console.log(".$max_mes_number.");
    localStorage.setItem('max_mes', '".$max_mes_number."');
    </script>";*/


?>