<!-- Main content -->
<section class="content">
    @extends('layouts/master')

    @section('content')
    <div class="container container-fluid">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    <a href="/ayam" class="btn btn-primary">Kembali</a>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <div class="col-md-8">
                                <tr>
                                    <th> Jenis Ayam</th>
                                    <td>{{$ayam->jenis_ayam}}</td>
                                </tr>
                                <tr>
                                    <th> kode Ayam</th>
                                    <td>{{$ayam->kode_ayam}}</td>
                                </tr>
                                <tr>
                                    <th> Stok</th>
                                    <td> {{$ayam->stok}}</td>
                                </tr>
                            </div>
                            <div class="col-md-4">
                                <tr>Foto</tr>
                                <td> @if($ayam->foto)
                                    <div class="mb-3">

                                        <img style="max-width:150px ; max-height:150px" src="{{url('foto').'/'.$ayam->foto}}">
                                    </div>

                                    @endif
                                </td>
                            </div>


                        </table>
                    </div>







                    <!-- /.box-body -->
                    <div class="box-footer">
                        Footer
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
                <!-- /.box -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    @endsection