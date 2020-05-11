<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <h4>Data Kota Indonesia</h4>

        <table class="table table-bordered table-hover">
            <br>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Provinsi</th>
                    <th>Nama Kota</th>
                    <th>Kota/Kabupaten</th>
                    <th>Kode Pos</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($city as $data) :
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data["province"]; ?></td>
                        <td><?php echo $data["city_name"];   ?></td>
                        <td><?php echo $data["type"];   ?></td>
                        <td><?php echo $data["postal_code"];   ?></td>
                    </tr>
                <?php
                    $no++;
                endforeach;
                ?>
            </tbody>

        </table>

    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\testMagang\blog\resources\views/liatApi.blade.php ENDPATH**/ ?>