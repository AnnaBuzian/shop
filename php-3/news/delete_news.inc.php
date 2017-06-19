<?php
$id = $news->clearInt($_GET['del']);
if($id) {
    if (!$news->deleteNews($id)) {
        $errMsg = 'Error deleted row!';
    } else {
        header('Location: news.php');
        exit;
    }
}
?>