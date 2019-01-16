<div>
    <?php
        if (action == 'add') {
            require 'add/index.php';
        } elseif (action == 'edit') {
            require 'edit/index.php';
        } else {
            require 'list/index.php';
        }
    ?>
</div>
