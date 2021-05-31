<?php

$publisherQueryBuilder->deletePublisher($_GET['publisher']);

header('Location: /');
