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
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>                  
                    <tr>
                    <th style="width: 10px">#</th>
                    <th>Pertanyaan</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->



@endsection