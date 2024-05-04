<!DOCTYPE html>
<html lang="en">

<body>
    <h2>Welcome to darshboard</h2>
    <?php if ($data = $this->session->flashdata('msg')) : ?>
        <p>
            <?= $data ?>
        </p>
    <?php endif; ?>
    <a href="<?= base_url('login/logout') ?>">Sign Out</a>
</body>

</html>