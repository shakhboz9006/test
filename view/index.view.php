<?php
    require 'partials/header.php';
?>
    <h1>My Tasks</h1>
<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?php if ($task->completed) {
                echo "<strike>" . $task->description . "</strike>";
            } else {
                echo $task->description;
            }
            ?>
        </li>
    <?php endforeach;

        require 'partials/footer.php';
