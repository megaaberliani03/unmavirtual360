<div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <td>No</td>
            <td>Ruang</td>
            <td>Prodi</td>
            <td>Fakultas</td>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            $no = 1;
            $query = "SELECT * FROM ruang";
            $dewan1 = $db1->prepare($query);
            $dewan1->execute();
            $res1 = $dewan1->get_result();

            if ($res1->num_rows > 0) {
                while ($row = $res1->fetch_assoc()) {
          ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><a href="Lihat.php?&foto=<?= $row['foto']; ?>" class="btn btn-info" role="button">
                    <?php echo $row['nama'];; ?>
                </a>
                </td>
                <td><?php echo $row['nama_prodi']; ?></td>
                <td><?php echo $row['nama_fak']; ?></td>
</td>
            </tr>
        <?php } } else { ?> 
            <tr>
                <td colspan='7'>Tidak ada data ditemukan</td>
            </tr>
        <?php } ?>
    </tbody>
</table>