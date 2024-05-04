<!DOCTYPE html>
<html lang="en">

<body>
    <!-- form to login -->
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-6">
                <h2>Login</h2>
                <form action="<?= base_url('login/validate') ?>" method="POST" id="form-login">
                    <div class="form-group" id="email">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@email.com">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group" id="password">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="********">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="form-group" id="alert">

                    </div>
                </form>

                <!-- home route -->
                <?php foreach ($home as $item) : ?>
                    <a href="<?= $item['url'] ?>">
                        <?= $item['title'] ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?= base_url('assets/js/auth/login.js') ?>"></script>
</body>

</html>