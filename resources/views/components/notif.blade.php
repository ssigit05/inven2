@if(session('success') == 'store')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil Simpan!</strong> Data berhasil di simpan
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
@if(session('success') == 'update')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil Di Edit!</strong> Data telah di edit
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
@if(session('success') == 'destroy')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil Di Hapus!</strong> Data telah di hapus
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif