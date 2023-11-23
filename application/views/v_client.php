
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>HTML</title>
</head>
<body>
    <table border="1" style="width : 100%; border-collapse: collapse;">
    <tr>
        <td>NIM</td>
        <td>NAMA</td>
        <td>EMAIL</td>
    </tr>
    <?php foreach ($data->data as $row): ?>
        <tr>
            <td><?=$row->nim_mhs ?></td>
            <td><?=$row->nama_mhs ?></td>
            <td><?=$row->email_mhs ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>