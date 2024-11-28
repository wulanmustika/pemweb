<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Montserrat', sans-serif;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            border-radius: 15px 15px 0 0;
            padding: 1.5rem;
        }
        .card-body {
            padding: 2rem;
        }
        .table {
            margin-bottom: 0;
        }
        .table th, .table td {
            border-color: #dee2e6;
        }
        .btn {
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Data Produk</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Gambar Produk</th>
                            <th>Opsi</th>
                        </tr>
                    <a href="create.php">Tambah produk lagi</a>
                    </thead>
                    <tbody>
                        <?php
                            require './config/db.php';

                            $products = mysqli_query($db_connect,"SELECT * FROM products");
                            $no = 1;

                            while($row = mysqli_fetch_assoc($products)) {
                        ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$row['name'];?></td>
                                <td>Rp <?=number_format($row['price'], 0, ',', '.');?></td>
                                <td><a href="<?=$row['image'];?>" target="_blank">Unduh</a></td>
                                <td>
                                    <a href="edit.php?id=<?=$row['id'];?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="delete.php?id=<?=$row['id'];?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>