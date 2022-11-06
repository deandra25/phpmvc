<div class="container">
    <h3 class="mb-3 text-capitalize">Daftar buku <?= $data['nama'] ?></h3>
    <table class="table table-info table striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tanggal Selesai</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($data['buku'] as $buku){
            ?>
            <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?= $buku['judul'] ?> </td>
                <td><?= $buku['author'] ?> </td>
                <td><?= $buku['tanggal'] ?> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>