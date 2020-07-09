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

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>
            <a href="{{ url('/pertanyaan/create')}}" class="btn btn-primary btn-sm float-right  " >Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>                  
                    <tr>
                        <th style="width: 5%">#</th>
                        <th style="width: 40%">List Pertanyaan</th>
                        <th  style="width: 40%">Form Jawaban</th>
                        <th style="width: 40px">Label</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($pertanyaans as $pertanyaan)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pertanyaan->isi}}</td>
                        <td>
                            <form action="{{('/jawaban/'.$pertanyaan->id)}}" method="post">
                            @csrf
                                <input type="text" class="form-control mb-1" name="isi">
                                <input type="hidden" class="form-control mb-1" name="judul" value="NULL">
                                <input type="hidden" name="pertanyaan_id" value="{{$pertanyaan->id}}">
                                <input type="hidden" name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
                                <input type="hidden" name="tanggal_diperbaruhi" value="{{ \Carbon\Carbon::now() }}">
                                <button type="submit" class="btn btn-success btn-sm" >Submit</button>
                           
                            </form>
                        </td>
                        <td>
                            <a href="{{url('/jawaban/'.$pertanyaan->id)}}" class="btn btn-warning btn-sm">Jawaban</a>
                        </td>
                    </tr>

                   @endforeach
               
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->



@endsection