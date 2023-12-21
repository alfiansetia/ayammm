     <!-- Main content -->
     <section class="content">
         @extends('layouts/master')

         @section('content')

         <!-- Main content -->
         <section class="content">

             <!-- Default box -->
             <div class="box">
                 <div class="box-header with-border">
                     <h3 class="box-title">Kontak</h3>

                     <div class="box-tools pull-right">
                         <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                             <i class="fa fa-minus"></i></button>
                         <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                             <i class="fa fa-times"></i></button>
                     </div>
                 </div>
                 <div class="box-body">
                     <!-- KONTEN  -->
                     <form>
                         <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">no telepon</label>
                             <input type="number" class="form-control" id="" aria-describedby="">

                         </div>
                         <div class="mb-3">
                             <label for="" class="form-label">email</label>
                             <input type="text" class="form-control" id="">
                         </div>
                         <div class="mb-3">
                             <label for="" class="form-label">facebook</label>
                             <input type="text" class="form-control" id="">
                         </div>
                         <div class="mb-3">
                             <label for="" class="form-label">twiter</label>
                             <input type="text" class="form-control" id="">
                         </div>
                         <div class="mb-3">
                             <label for="" class="form-label">Instagram</label>
                             <input type="text" class="form-control" id="">
                         </div>
                         <br>
                         <div></div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
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