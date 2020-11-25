<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><body>

<h3 style="text-align: center">Laporan Barang Masuk</h3>
    <table>

        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>

    <?php foreach($barang as $b):?>
        <tr>
            <td><?= $b->nama_barang?></td>
            <td><?= $b->harga?></td>
            <td><?= $b->stok?></td>
        </tr>
    <?php endforeach;?>
    </table>
</body></html>
