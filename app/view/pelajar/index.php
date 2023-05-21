<div class="container mt-3">

<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>

    </div>
</div>

<div class="row mb-3">
    <div class="col-lg-6">
    <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
  Tambah Data Pelajar
</button>
    </div>
</div>


<div class="row ">
    <div class="col-lg-6">
   <form action="<?= BASEURL; ?>/pelajar/cari" method="post" >
   <div class="input-group">
    <input type="text" class="form-control" placeholder="Cari Nama Pelajar.." name="keyword" id="keyword" auto-complete="off" >
   <div class="input-group-append">
    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
   </div>
</div>
</form>
    </div>
</div>


<div class="row mb-3">
<div class="col-lg-6">

</div>
</div>
<h3>Daftar Pelajar</h3>
<ul class="list-group">
<?php foreach( $data['mhs'] as $mhs ) : ?>
<li class="list-group-item ">
    <?= $mhs['nama'];?>
    <a href="<?= BASEURL; ?>/pelajar/hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right ml-1" onclick="return confirm('YAKIN AKAN MENGHAPUS?');">HAPUS</a>
    <a href="<?= BASEURL; ?>/pelajar/ubah/<?= $mhs['id'];?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'];?>">EDIT</a>
    <a href="<?= BASEURL; ?>/pelajar/detail/<?= $mhs['id'];?>" class="badge badge-primary float-right ml-1">DETAILS</a>
</li>
<?php endforeach; ?>
</ul>
</div>
</div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="formModalLabel">Tambah Data Pelajar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= BASEURL; ?>/pelajar/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
    <label for="nama">NAMA</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>

  <div class="form-group">
    <label for="nisn">NISN</label>
    <input type="number" class="form-control" id="nisn" name="nisn">
  </div>

  <div class="form-group">
    <label for="email">EMAIL</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com">
  </div>

  <div class="form-group">
    <label for="jurusan">JURUSAN</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
      <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
      <option value="Tata Busana">Tata Busana</option>
      <option value="Tata Boga">Tata Boga</option>
      <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
      <option value="Teknik Bisnis dan Sepeda Motor">Teknik Bisnis dan Sepeda Motor</option>
      
    </select>
  </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
</div>