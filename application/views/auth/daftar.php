<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Daftar Member</h3>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Auth/daftar') ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap">
                    <small class="text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan email">
                    <small class="text-danger"><?= form_error('email'); ?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="text" name="alamat" placeholder="Masukkan alamat anda">
                    <small class="text-danger"><?= form_error('alamat'); ?></small>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <small class="text-danger"><?= form_error('password'); ?></small>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Ulangi password" name="password2">
                    <small class="text-danger"><?= form_error('password2'); ?></small>
                </div>
        </div>
        <div class="modal-footer">
            <a href="<?= base_url('auth') ?>" class="btn btn-outline-success">Login</a>
            <button type="submit" class="btn btn-outline-primary">Daftar</button>
        </div>
        </form>
    </div>
</div>
</div>