<div class="container-fluid"> 
    <h3><i class="fas fa-edit"></i> EDIT DATA </h3>

<?php foreach ($mahasiswa as $mhs) :  ?>

<form method="post" action="<?php echo base_url().'Administrator/Mahasiswa/update' ?>">

	<div class="for-group">
		<label>NPM</label>
		<input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
		<input type="text" name="npm" class="form-control" value="<?php echo $mhs->npm ?>">
	</div>

	<div class="for-group">
		<label>Nama</label>
		<input type="text" name="nama_mhs" class="form-control" value="<?php echo $mhs->nama_mhs ?>">
	</div>

	<div class="for-group">
		<label>Jurusan</label>
		<input type="text" name="jurusan" class="form-control" value="<?php echo $mhs->jurusan ?>">
	</div>

	<div class="for-group">
		<label>Kelas</label>
		<input type="text" name="kelas" class="form-control" value="<?php echo $mhs->kelas ?>">
	</div>
	
	<button type="submit" class="btn btn-primary btn-sm mt-4">SIMPAN</button>

</form>


<?php endforeach; ?>
	
</div>