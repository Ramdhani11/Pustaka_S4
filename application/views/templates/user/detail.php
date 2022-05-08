<div class="container">
    <div class="row justify-content-center" style=" margin-top:100px;">
        <div class="col-3">
            <img class="img-fluid" style="width: 100%;" src="<?= base_url() . 'assets/image/' . $det['image'] ?>" alt="">
        </div>
        <div class="col-4">
            <table>
                <tr style="height: 50px;">
                    <h5><?= $det['judul_buku']; ?></h5>
                </tr>
                <div>
                    <tr>
                        <td>Penulis</td>
                        <td>:</td>
                        <td><?= $det['pengarang']; ?></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td>:</td>
                        <td><?= $det['penerbit']; ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Terbit </td>
                        <td>: </td>
                        <td><?= $det['tahun_terbit']; ?></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>:</td>
                        <td><?= $det['stok']; ?></td>
                    </tr>
                    <tr>
                        <td>Dipinjam</td>
                        <td>:</td>
                        <td><?= $det['dipinjam']; ?></td>
                    </tr>
                    <tr>
                        <td>Dibooking</td>
                        <td>:</td>
                        <td><?= $det['dibooking']; ?></td>
                    </tr>
                </div>
            </table>
            <div style="margin-top: 100px;">
                <a href="<?= base_url('beranda') ?>" class="btn btn-outline-secondary">Kembali</a>
                <a href="#" class="btn btn-outline-primary">Booking</a>
            </div>
        </div>
    </div>
</div>