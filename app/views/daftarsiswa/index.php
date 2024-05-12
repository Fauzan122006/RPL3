<div class="container">

    <h2><?= $data['judul'] ?></h2>

    <div class="row">
        <?php foreach ($data['getsiswa'] as $siswa): ?>
            <div class="col">
                <div class="card mb-3" style="width: 18rem;">
                    <img src="<?= BASEURL ?>/img/rpl3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $siswa['nama'] ?></h5>
                        <p class="card-text">email : <?= $siswa['email'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>