<div class="container">
    <div class="mx-3">
        <h1 class="h3 mb-4 text-grey-800">My Profil</h1>
        <div class="card mb-3 col-6">
            <div class="row no-gutters">
                <div class="col-4">
                    <img src="<?= base_url('assets/image/') . $profil['image'] ?>" alt="" class="card-img my-3">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $profil['nama']; ?></h5>
                        <p class="card-text"><?= $profil['email']; ?></p>
                        <p class="card-text"><small class="text-muted">Jadi member sejak</small></p>
                        <h6><?= date('d F Y', $profil['tanggal_input']) ?></h6>
                        <a href="#" class="btn btn-success float-right mb-2" role="button" data-target="#edit" data-toggle="modal">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>