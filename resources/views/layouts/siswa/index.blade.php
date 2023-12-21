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

                         <!-- <a href="/kontak/create" class="btn btn-primary">+ Tambah Data</a> -->
                         <div class="table table-responsive">
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <th style="width:15px">Foto</th>
                                         <th>No Induk</th>
                                         <th>Nama</th>
                                         <th>alamat</th>
                                         <th>Jabatan</th>
                                         <th>carosel1</th>
                                         <th>carosel2</th>
                                         <th>carosel3</th>
                                         <th>BG 1</th>
                                         <th>BG 2</th>
                                         <th>Bg 3</th>
                                         <th>aksi</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($data as $item)
                                     <tr>

                                         <td>
                                             @if ($item->foto)
                                             <img style="max-width:50px; max-height:50px" src="{{url ('foto').'/'.$item->foto}}" />

                                             @endif
                                         </td>

                                         <td>{{$item->nomor_induk}}</td>
                                         <td>{{$item->nama}}</td>
                                         <td>{{$item->alamat}}</td>
                                         <td>{{$item->jabatan->jabatan}} </td>
                                         <td>
                                             @if ($item->carolsel1)
                                             <img style="max-width:50px; max-height:50px" src="{{url ('carolsel1').'/'.$item->carolsel1}}" />

                                             @endif
                                         </td>
                                         <td>
                                             @if ($item->carolsel2)
                                             <img style="max-width:50px; max-height:50px" src="{{url ('carolsel2').'/'.$item->carolsel2}}" />

                                             @endif
                                         </td>

                                         <td>
                                             @if ($item->carolsel3)
                                             <img style="max-width:50px; max-height:50px" src="{{url ('carolsel3').'/'.$item->carolsel3}}" />

                                             @endif
                                         </td>
                                         <td>
                                             @if ($item->bg1)
                                             <img style="max-width:50px; max-height:50px" src="{{url ('bg1').'/'.$item->bg1}}" />

                                             @endif
                                         </td>
                                         <td>
                                             @if ($item->bg2)
                                             <img style="max-width:50px; max-height:50px" src="{{url ('bg2').'/'.$item->bg2}}" />

                                             @endif
                                         </td>
                                         <td>
                                             @if ($item->bg3)
                                             <img style="max-width:50px; max-height:50px" src="{{url ('bg3').'/'.$item->bg3}}" />

                                             @endif
                                         </td>
                                         <td>
                                             <a class="btn btn-secondary btn-sm" href='{{ url ('/siswa/' . $item->nomor_induk)}}'>Detail</a>
                                             <a class="btn btn-info btn-sm" href='{{ url ('/siswa/' . $item->nomor_induk.'/edit')}}'>Edit</a>
                                             <br><br>
                                             <a href="">
                                                 <form onsubmit="return confirm('Yakin menghapus data')" class="d-inline" action="{{'/siswa/'.$item->nomor_induk}}" method="post">
                                             </a>
                                             @csrf
                                             @method('DELETE')
                                             <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                             </form>
                                         </td>

                                     </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                         </div>







                         <!-- /.box-body -->
                         <div class="box-footer">
                             Footer
                         </div>
                         <!-- /.box-footer-->
                     </div>
                     <!-- /.box -->
                 </div>
             </section>
             <!-- /.content -->
         </div>
         @endsection