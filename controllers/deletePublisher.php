<?php

$delete_err = $publisherQueryBuilder->deletePublisher($_GET['publisherID']);

if (!isset($deleteErr)) {
    require 'controllers/index.php';
} else {
    header('Location: /');
}
