<?php

$publisherQueryBuilder->deletePublisher($_GET['publisherID']);

header('Location: /');
