<?php

$publishers = $app['database']->selectAllPublishers('publishers');

require 'views/index.view.php';