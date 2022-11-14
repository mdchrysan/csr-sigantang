<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url() ?>/img/logo-no-bg.png" type="image/gif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <title><?= $title; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body style="overflow: hidden; background-color: black;">
    <div class="login-bg">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    <form action="/auth" method="POST" class="form-login">
        <?= csrf_field(); ?>
        <h1>Masuk sebagai Admin</h1>
        <div class="mb-3 form-item">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" placeholder="Masukkan identitas" value="<?= old('username'); ?>" autofocus>
            <div class="invalid-feedback" style="color: red;">
                <?= $validation->getError('username'); ?>
            </div>
            <?php if (session()->getFlashdata('msg-user')) : ?>
                <div style="color: red; font-size: .875em; margin-top: .25rem;">
                    <?= session()->getFlashdata('msg-user'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="mb-3 form-item">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Masukkan kata sandi">
            <div class="invalid-feedback" style="color: red;">
                <?= $validation->getError('password'); ?>
            </div>
            <?php if (session()->getFlashdata('msg-pass')) : ?>
                <div style="color: red; font-size: .875em; margin-top: .25rem;">
                    <?= session()->getFlashdata('msg-pass'); ?>
                </div>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary login-btn">Masuk</button>
        <div class="mb-3 text-center">
            <a href="<?= base_url('/'); ?>" class="back-home">
                < Kembali ke Halaman Utama Sigantang</a>
        </div>
    </form>
</body>

</html>