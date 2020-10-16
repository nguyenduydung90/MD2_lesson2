<?php
class Data{
    public static $data='users.json';

    public static function saveData($data)
    {
        $newData=json_encode($data);
        file_put_contents(self::$data,$newData);
    }
    public static function loadData(){
        $dataJson=file_get_contents(self::$data);
        return json_decode($dataJson,true);
    }
}

