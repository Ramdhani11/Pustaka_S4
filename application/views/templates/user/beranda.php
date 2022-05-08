<div class="container">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row justify-content-center">
        <?php foreach ($buku as $buk) : ?>
            <div class="card mt-2 mr-2" style="width: 16rem;">
                <img class="card-img-top mx-auto" src="<?= base_url() . 'assets/image/' . $buk['image'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $buk['judul_buku']; ?></h5>
                    <p class="card-text"><?= $buk['pengarang']; ?></p>
                    <p class="card-text"><?= $buk['tahun_terbit']; ?></p>
                    <div class="d-flex justify-content-center">
                        <?php if ($this->session->userdata('email')) { ?>
                            <a href="<?= base_url('booking/book/') . $buk['id'] ?>" class="btn btn-outline-primary">Booking</a>
                        <?php } else { ?>
                            <a href="<?= base_url('beranda/book') ?>" class="btn btn-outline-primary">Booking</a>
                        <?php } ?>
                        <a href="<?= base_url('buku/detail/') . $buk['id'] ?>" class="btn btn-outline-secondary ml-2">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>