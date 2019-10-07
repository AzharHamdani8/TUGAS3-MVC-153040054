<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
<div class="container mt-3">

	<div class="row">
		<div class="col-6">

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
		Tambah data Mahasiswa
		</button>
		<br>
		<br>

			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach( $data['mhs'] as $mhs) : ?>
  					<li class="list-group-item d-flex justify-content-between align-items-center">
  					<?= $mhs['nama']; ?>
  					<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-info ">detail</a>
  					</li>
  			<?php endforeach; ?>
			</ul>
			
			
			

		</div>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tambah data</button>
      </div>
    </div>
  </div>
</div>