<?php
$tasks = $query->select_all('todo_lists');

require 'view/index.view.php';