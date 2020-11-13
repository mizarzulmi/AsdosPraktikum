<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome to CodeIgniter 4!</title>
        <h1>READ DATA</h1>

        <table border="1">
            <thead>
                <th>Nama Produk</th>
                <th>Deskripsi Produk</th>
            </thead>
            <tbody>
                <?php foreach($data as $key => $keluar) { ?>
                <tr>
                    <td><?php echo $keluar['nama_produk'];  ?></td>
            	    <td><?php echo $keluar['deskripsi_produk'];  ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>
</html>