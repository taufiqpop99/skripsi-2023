<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-11">
            <h1 class="h3 mb-4 text-gray-800">Daftar Podcast</h1>
            <a href="\podcast\addPodcast" class="btn btn-primary">Add Podcast</a>
            <br><br>

            <!-- Table -->
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Artwork</th>
                                <th scope="col">Program</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Link</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($podcast as $podcast) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>
                                        <img src="/img/<?= $podcast['images']; ?>" class="thumbnail">
                                    </td>
                                    <td><?= $podcast['program']; ?></td>
                                    <td id="judul-rata-kiri"><?= $podcast['judul']; ?></td>
                                    <td>
                                        <a href="<?= $podcast['link']; ?>" class="btn btn-warning" target="_blank">Link</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('podcast/detailPodcast/' . $podcast['id']); ?>" class="btn btn-info">Details</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>