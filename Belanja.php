<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Online_Shop</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mt-5">
        <form method="post" action="form_belanja.php">
            <h2>Formulir Online_Shop</h2>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label style="font-weight: bolder;" for="customer">Customer</label>
                        <input type="text" name="nama" class="form-control" placeholder="Customer" value="" />
                    </div>

                    <label style="font-weight: bolder; padding-right: 20px;" for="customer">Product</label>
                    <div class="form-check-inline px-5">
                        <input type="radio" name="produk" class="form-check-input mr-3" value="tv"> Television
                        <input type="radio" name="produk" class="form-check-input mr-3" value="kulkas"> Refrigerator
                        <input type="radio" name="produk" class="form-check-input mr-3" value="mesin"> Washing Machine

                    </div>
                    <div class="form-group mt-2">
                        <label style="font-weight: bolder;" for="customer">Order Quantity</label>
                        <input type="number" name="jumlah" class="form-control" placeholder="Order Quantity" value="" />
                    </div>
                    <div class="form-group mt-4">
                        <input type="submit" name="submit" class="btn btn-success" value="submit" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <table class="table">
                            <tr class="bg-info">
                                <th style="color: white;">Price List</th>
                            </tr>
                            <tr>
                                <td>Television : 5.200.000</td>
                            </tr>
                            <tr>
                                <td>Refrigerator : 6.100.000</td>
                            </tr>
                            <tr>
                                <td>Washing Machine: 8.800.000</td>
                            </tr>
                            <tr class="bg-info">
                                <th style="color: white;">Prices Are Subject To Change At Any Time</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
    $submit = $_POST['submit'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    if (isset($_POST['produk'])) {

        $produk = $_POST['produk'];
        if ($produk == 'tv') {
            $harga = 5200000 * $jumlah;
        } elseif ($produk == 'kulkas') {
            $harga = 6100000 * $jumlah;
        } elseif ($produk == 'mesin') {
            $harga = 7800000 * $jumlah;
        }
    }
    ?>
    <div class="container">
        <table>
            <tr>
                <th>Customer : </th>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <th>product : </th>
                <td><?= $produk; ?></td>
            </tr>
            <tr>
                <th>Order Quantity : </th>
                <td><?= $jumlah; ?></td>
            </tr>
            <tr>
                <th>Amount : </th>
                <td>Rp.<?= number_format($harga, 2, ',', '.'); ?></td>
            </tr>
        </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
