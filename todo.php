<?php
if(isset($_POST["submit"])) {

    $new_todo = array(
        "todo" => $_POST['todo']
    );

    if(filesize("todo.json") == 0) {
        $first_record = array($new_todo);
        $data_to_save = $first_record;
    } else {
        $old_records = json_decode(file_get_contents("todo.json"));
        array_push($old_records, $new_todo);
        $data_to_save = $old_records;
    }

    if(!file_put_contents("todo.json", json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX)){
        $error = "Error storing todo, please try again";
    }else {
        $success = "Todo is stored successfully";
    }
}
