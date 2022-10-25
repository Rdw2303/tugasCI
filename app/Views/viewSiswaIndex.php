<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
    
</head>

<body>
    <div class="container">
    <div class="card mt-3">
  <h5 class="card-header bg-secondary text-white text-center">Data Siswa</h5>
  <div class="card-body">
  <form action="" method ="get">
  <div class="input-group mb-3">
    
  
</div>
</form>
<!-- Button trigger modal -->
<a href="<?= base_url('add_siswa')?>" class="btn btn-info btn-sm">+ Tambah</a>


<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3 row">
    <label for="inputId" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputId">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNama">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputJk" class="col-sm-2 col-form-label">JK</label>
    <div class="col-sm-10">
      <select name="" id="inputJk" class="form-select">
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputAlamat">
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
      </div>
    </div>
  </div>
</div> -->
<table class="table">
    <thead>
        <tr>
            
            
            <th>Tanggal Berkunjung</th>
            <th>Nama Tamu</th>
            <th>No Telepon</th>
            <th>Keperluan</th>
            <th class="scope">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data_siswa as $row):?>
            <tr>
            
            <td><?= $row->tgl_berkunjung?></td>
            <td><?= $row->nama_tamu?></td>
            <td><?= $row->no_telepon?></td>
            <td><?= $row->keperluan?></td>
            <td>
            <a href="<?= base_url('edit_siswa').'/'.$row->id ?>" class="btn btn-warning">Edit</a>
            <a href="<?= base_url('hapus_siswa').'/'.$row->id ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
  </div>
</div>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<!-- <script>
    $('#tombolSimpan').on('click',function(){
        var $id = $('#inputId').val();
        var $nama = $('#inputNama').val();
        var $jk = $('#inputJK').val();
        var $alamat = $('#inputAlamat').val();

        $.ajax({
            url:",
            type:"POST",
            success:function(hasil){
                var $obj = $.parseJSON(hasil);
                if($obj.sukses == false){
                    alert('saya gagal pesan :'+obj.error);
                else{
                    alert('saya sukses')
                }}

            }
        });
    });
</script> -->
</body>
</html>