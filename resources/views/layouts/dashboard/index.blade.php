     <!-- Main content -->
     <section class="content">
         @extends('layouts.dashboard.master')

         @section('content')
             <!-- Main content -->
             <section class="content">

                 <!-- Default box -->
                 <div class="box">
                     <div class="box-header with-border">
                         <h3 class="box-title">Title</h3>

                         <div class="box-tools pull-right">
                             <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                 title="Collapse">
                                 <i class="fa fa-minus"></i></button>
                             <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                 title="Remove">
                                 <i class="fa fa-times"></i></button>
                         </div>
                     </div>
                     <div class="box-body">
                         <div class="container">
                             <P>Aplikasi Website Distribusi Ayam</P>
                         </div>
                     </div>
                     <!-- /.box-body -->
                     <div class="box-footer">
                         Footer
                     </div>
                     <!-- /.box-footer-->
                 </div>
                 <!-- /.box -->

             </section>
             <!-- /.content -->
         @endsection
