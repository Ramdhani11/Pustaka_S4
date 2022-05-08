<div class="container">
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
                        <td><a href="">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>