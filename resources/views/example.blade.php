@extends('layouts.main',['title'=> 'Blank Page'])

@section('content-header')
<div class="container-fluid">
<div class="row mb-2">
    <div class="col-sm-6">
    <h1>Blank Page</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Blank Page</li>
    </ol>
    </div>
</div>
</div><!-- /.container-fluid -->
@endsection

@section('content')
     <!-- Default box -->
     <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>
        </div>
        <div class="card-body">
          Start creating your amazing application!
          <br> <br>
          <button class="btn btn-custome">
              Clik!!
          </button>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
@endsection

@push('css')
      <style>
          .btn-custome{
              background-color: salmon;
              color: white;
          }
      </style>
@endpush

@push('js')
    <script>
    $(function(){
        $('.btn-custome').click(function(){
            alert('Hai');
        });
    });
    </script>
@endpush