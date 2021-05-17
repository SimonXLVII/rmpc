<?php

function loadImg($minFileSize, $maxFileSize, $validFileTypes, $uploadPath, $nameElem)
{
    $error = "";
    $newName = "";

    if (isset($_FILES[$nameElem])) {
        $file = $_FILES[$nameElem];

        if (!empty($file['error'])) {
            $error = $file['error'];
        } elseif ($file['size'] > $maxFileSize) {
            $error = "Размер файла превышает максимум";
        } elseif ($file['size'] < $minFileSize) {
            $error = "Размер файла меньше минимума";
        } else {
            $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
            $type = finfo_file($fileInfo, $file['tmp_name']);
            finfo_close($fileInfo);

            $name = pathinfo($file['name'], PATHINFO_FILENAME) .'_'.time();
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $newName = "$name.$ext";

            if (in_array($type, $validFileTypes)) {
                if (!move_uploaded_file($file['tmp_name'], $uploadPath.$newName)) {
                    $error = "Не удалось загрузить ихображение...";
                }
            } else {
                $error = "Допустимые расширения: jpg, jpeg, png";
            }
        }
        
        if (!empty($error)) {
            $error = $file['name'].'-'.$error;
        }
    }
    return [$error, $newName];
}

function deleteImg($file)
{
    if (is_file($file)) {
        unlink($file);
    }
}