<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<h2 class="text-center">Edit Tamu</h2>
<form action="<?= base_url('proses_edit_tamu')?>" method="post">
<div class="container">
<input type="hidden" class="form-control" name="id" value="<?= $data_siswa->id?>">
<div class="mb-3">
    <label class="form-label">Tanggal Berkunjung</label>
    <input type="date" class="form-control" name="tgl_berkunjung" value="<?= $data_siswa->tgl_berkunjung?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Tamu</label>
    <input type="text" class="form-control" name="nama_tamu" value="<?= $data_siswa->nama_tamu?>" >
  </div>
  <div class="mb-3">
    <label class="form-label">No Telepon</label>
    <input type="text" class="form-control" name="no_telepon" value="<?= $data_siswa->no_telepon?>" >
  </div>
  <div class="mb-3">
    <label class="form-label">Keperluan</label>
    <input type="text" class="form-control" name="keperluan" value="<?= $data_siswa->keperluan?>" >
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
  
</form>