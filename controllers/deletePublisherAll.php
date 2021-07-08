<?php

$publisherQueryBuilder->deletePublisherAll($_GET['publisherID']);

header('Location: /');
