<div class="container">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="mx-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($temp as $temp) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $temp['judul_buku']; ?></td>
                        <td><?= $temp['penulis']; ?></td>
                        <td><?= $temp['penerbit']; ?></td>
                        <td><?= $temp['tahun_terbit']; ?></td>
                        <td><a href="<?= base_url('Booking/delete/') . $temp['id'] ?>" class="btn btn-sm btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="mx-3"><a href="<?= base_url('Beranda') ?>" class="btn btn-info">Lanjutkan Booking</a> <a href="" class="btn btn-success">Booking Sekarang</a> <a class="btn btn-danger" href="<?= base_url('Booking/print') ?>">Export PDF</a></div>
</div>