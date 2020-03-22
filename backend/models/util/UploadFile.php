<?php

namespace backend\models\util;
use Yii;


class UploadFile {
	
    public static function upload($file, $path) {
        
        $files=explode(".", $file);
        $ext = end($files);
        $generateRandomName = Yii::$app->security->generateRandomString().".{$ext}";

        $full_path = $path.$generateRandomName;

        $file->saveAs($full_path);
        return $full_path;
    }

}

