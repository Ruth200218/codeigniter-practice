<!DOCTYPE html>
<html lang="en">

<body>
    <h2> Register </h2>
    <!-- form generated by codeigniter  -->
    <?php
    echo form_open('register/create', array('method' => 'POST'));
    echo form_label('Email');
    echo form_input(array('type' => 'email', 'name' => 'email'));
    echo form_label('Password');
    echo form_input(array('type' => 'password', 'name' => 'password'));
    echo form_close();
    ?>
    <!-- home route -->
    <?php foreach ($home as $item) : ?>
        <a href="<?= $item['url'] ?>">
            <?= $item['title'] ?>
        </a>
    <?php endforeach ?>
</body>

</html>