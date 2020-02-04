<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-university"></i> TABEL MAHASISWA
  	</div>

  	<button class="btn btn-sm btn-primary mb-3"data-toggle="modal" data-target="#tambah_data"><i class="fas fa-plus fa-sm"></i>Tambah Data</button>
  	<table class="table table-bordered table-striped table-hover">
  		<tr>
  			<th>No</th>
  			<th>NPM</th>
  			<th>Nama</th>
  			<th>Jurusan</th>
  			<th>Kelas</th>
  			<th colspan="2">Aksi</th>
  		</tr>
  		<?php 
		$no=1;
		foreach($mahasiswa as $mhs) : ?>
		<tr>
			<td width="20px"><?php echo $no++ ?></td>
			<td><?php echo $mhs->npm ?></td>
			<td><?php echo $mhs->nama_mhs ?></td>
			<td><?php echo $mhs->jurusan ?></td>
			<td><?php echo $mhs->kelas?></td>
			<td width="20px"><?php echo anchor('Administrator/Mahasiswa/edit/' .$mhs->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')  ?> </td>
			<td width="20px"><?php echo anchor('Administrator/Mahasiswa/hapus/' .$mhs->id, '<div class="btn btn-danger btn-sm"><i 
				class="fas fa-trash"></i></div>') ?> </td>
		</tr>
		<?php endforeach; ?>

  	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Mahasiswa </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'Administrator/Mahasiswa/tambah' ?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>NPM</label>
				<input type="text" name="npm" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>NAMA MAHASISWA</label>
				<input type="text" name="nama_mhs" class="form-control">
        	</div>
			
			<div class="form-group">
        		<label>JURUSAN</label>
				<input type="text" name="jurusan" class="form-control">
        	</div>
			
			<div class="form-group">
        		<label>KELAS</label>
				<input type="text" name="kelas" class="form-control">
        	</div>	
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

  		</form>
    </div>
  </div>
</div>