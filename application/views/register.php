<!DOCTYPE html>
<html lang="en">

<body>
    <h2> Register </h2>
    <!-- form generated by codeigniter  -->
    <?php
    echo form_open('register/create', array('method' => 'POST'));
    echo form_label('Name');
    echo form_input(array('type' => 'text', 'name' => 'name'));

    echo form_label('Last Name');
    echo form_input(array('type' => 'text', 'name' => 'lastname'));

    echo form_label('Email');
    echo form_input(array('type' => 'email', 'name' => 'email'));

    echo form_label('Password');
    echo form_input(array('type' => 'password', 'name' => 'password'));

    echo form_label('Password Confirm');
    echo form_input(array('type' => 'password', 'name' => 'password-confirm'));

    echo form_submit('submit', 'Register');

    echo form_close();
    ?>

    <?= isset($msg) ? $msg : '' ?>

    <!-- home route -->
    <?php foreach ($home as $item) : ?>
        <a href="<?= $item['url'] ?>">
            <?= $item['title'] ?>
        </a>
    <?php endforeach ?>
</body>

</html>