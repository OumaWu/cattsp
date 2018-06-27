<?php

define('FILE_UPLOAD_PATH', $_SERVER['DOCUMENT_ROOT'] . "/cattsp/user_files/");

if (!empty($_POST)) {

    // Would have to sanitize and filter the $_POST array.
    if (!empty($_FILES['img1']['name'])) {
        echo (string) $_FILES['img1']['name'];
//        $productArray['image1'] = (string) $_FILES['image1']['name'];
//        $originalImage = FILE_UPLOAD_PATH . (string) $_POST['imageoriginal'];
    } else {
//        $productArray['image1'] = (string) $_POST['imageoriginal'];
    }
//    $filePath = FILE_UPLOAD_PATH . $productArray['image1'];
//    if(file_exists($originalImage)) {
//        unlink($originalImage);
//    }
//    if(file_exists($filePath)) {
//        unlink($filePath);
//    }
//    if(move_uploaded_file($_FILES["image"]["tmp_name"], $filePath)) {
//        if ($this->crudProducts->update($productArray)) {
//            $this->view['saved'] = 1;
//        }
//        else {
//            $this->view['error'] = 1;
//        }
//    }
//    else {
//        $this->view['error'] = 1;
//    }
//} else {
//    $results = $this->readProducts();
//    if (is_object($results)) {
//        $results = [$this->hydrateArray($results)];
//    } else {
//        for ($i = 0; $i < count($results); $i++) {
//            $results[$i] = $this->hydrateArray($results[$i]);
//        }
//    }
//    $this->view['results'] = $results;
}

?>