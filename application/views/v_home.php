<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPID BANJAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<!-- this for nvbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:24px 0;">
		<a class="navbar-brand" href="javascript:void(0)">PPID BANJAR</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navb">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link disabled" href="javascript:void(0)"><?php echo $this->session->userdata('nama')?></a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a href="<?php echo site_url('login/logout')?>" class="btn btn-primary my-2 my-sm-0" type="button">Logout</a>
			</form>
		</div>
	</nav>
	<!-- this for nvbar -->


  <h2><?php echo $judul ?></h2>         
  <table class="table table-striped table-dark" >
  <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Instansi</th>
        <th>Permohonan_baru</th>
        <th>Permohonan_proses</th>
        <th>Permohonan_selesai</th>
      </tr>
    </thead>
    <tbody>
		<?php $no = 0;?>
		<?php foreach($data_user as $data):?>
		<?php $no++;?>
      <tr>
      <td><?php echo $no?></td>
        <td><?php echo $data->instansi?></td>
        <td><?php echo $data->Permohonan_baru?></td>
        <td><?php echo $data->Permohonan_proses?></td>
        <td><?php echo $data->Permohonan_selesai?></td>
	  </tr>
	  <?php endforeach?>
    </tbody>
  </table>
</div>

</body>
</html>
