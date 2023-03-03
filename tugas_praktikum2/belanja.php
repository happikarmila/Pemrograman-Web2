<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <h3>BELANJA ONLINE</h3>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 mt-4">
        <form method = "POST" action= "hasil.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="customer" type="text" placeholder="Nama Customer" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="text" name="jumlah" type="text" placeholder="Jumlah" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
		</div>
		<div class="col-md-4 mt-4">
			<table class="table">
				<thead>
        <tr>
						<th class="bg-primary">
							DAFTAR HARGA
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							TV : Rp. 4.200.000
						</td>
					</tr>
					<tr>
						<td>
							KULKAS : Rp. 3.100.00
						</td>
					</tr>
					<tr>
						<td>
							MESIN CUCI : Rp. 3.800.000
						</td>
					</tr>
					<tr class="bg-primary">
						<th>
							HARGA DAPAT BERUBAH SETIAP SAAT
						</th>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>