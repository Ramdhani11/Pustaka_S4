<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Login Member</h3>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('pesan'); ?>
            <form action="<?= base_url('Auth') ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan email">
                    <small class="text-danger"><?= form_error('email'); ?></small>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <small class="text-danger"><?= form_error('password'); ?></small>
                </div>
                <div class="text-center">
                    <span>Belum punya akun?? <a href="<?= base_url('auth/daftar') ?>">Daftar</a></span>
                </div>
        </div>
        <div class="card-footer">
            <div class="justify-content-center">
                <button type="submit" class="btn btn-outline-primary col">Login</button>
            </div>
            <div class="justify-content-center mt-2">
                <a href="<?= base_url('Beranda') ?>" class="btn btn-outline-secondary col">Kembali</a>
            </div>
        </div>
        </form>
    </div>
</div>
</div>