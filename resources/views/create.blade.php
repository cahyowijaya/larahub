@extends('app.master')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Table Pertanyaan</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>

        <form action="{{ url('/pertanyaan')}}" method="POST">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Judul Pertanyaan</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label>Pertanyaan Baru</label>
                    <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>
                </div>
                <input type="hidden" name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
                <input type="hidden" name="tanggal_diperbaruhi" value="{{ \Carbon\Carbon::now() }}">
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</section>

@endsection