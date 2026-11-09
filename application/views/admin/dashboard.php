<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/dashboard.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/dashboard.php') ?>

		<div class="content">
			<h1>Dashboard</h1>
			<p><b>13</b> <span class="text-gray">Barang</span></p>
			<p><b>11</b> <span class="text-gray">Peminjaman</span></p>	
			
			<?php $this->load->view('admin/dashboard.php') ?>
		</div>
	</main>
</body>

</html>