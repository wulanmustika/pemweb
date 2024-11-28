<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
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
        .form-control {
            border-radius: 8px;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            transition: background-color 0.3s ease-in-out;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Tambah Produk</h3>
                    </div>
                    <div class="card-body">
                        <a href="show.php" class="btn btn-outline-primary mb-3">Lihat Data Produk</a>
                        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama produk" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Harga Produk</label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Masukkan harga produk" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar Produk</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-custom w-100">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>