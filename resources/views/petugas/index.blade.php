@extends('layouts.main',['title'=> 'Petugas'])

@section('content-header')
<div class="container-fluid mb-2">
    <h1> <i class="fas fa-user-friends"></i>Petugas</h1>
</div><!-- /.container-fluid -->

@endsection

@section('content')
<x-notif/>
  <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <x-btn-tambah label="Petugas" :link="route('petugas.create')"/>
            </div>
            <div class="col d-flex justify-content-end ">
                <x-search/>
            </div>
        </div>
    </div>
    <div class="card-body Small-shadow">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Petugas</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no =1;
                ?>
                @foreach ($data as $col)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $col->nama}}</td>
                    <td>{{ $col->username}}</td>
                    <td>{{ ucwords( $col->level )}}</td>
                    <td>
                    <x-btn-edit :link="route('petugas.edit',['petuga'=>$col->id])" />
                        @if ( $col->level != 'admin')
                    <x-btn-hapus :link="route('petugas.destroy',['petuga'=>$col->id])"/>
                        @endif 
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
        <p>
            {{ $data->appends(['search'=>request()->search])->links('layouts.pages') }}
        </p>
    </div>
</div>

@endsection
<x-modal-delete/>
{{-- @push('js')
    <script>
            $('button.hapus').click(function(){
                var url = $(this).attr('data-url');
            
        swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      window. location = ""+url+""
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
            });

    </script>
@endpush --}}


