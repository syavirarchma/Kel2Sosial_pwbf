@extends('../layouts/index')

@section('container')
    <!-- general form elements -->
    <div class="card card-primary">
    <div class="card-header">
                <h3 class="card-title">Edit Data provinsi</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              
              <form  action="/editdata/provinsi"method="post">
                @csrf
                <div class="card-body">
 
                  <div class="form-group"> 
                    <label for="exampleInputEmail1">Nama provinsi</label>
                    <input type="text"name="provinsi" class="form-control" id="exampleInputEmail1" placeholder="Nama Provinsi">
                  </div>
                  
                  <div class="form-group">                   
                    <input hidden type="text"name="id" class="form-control" id="exampleInputEmail1" value="{{ $request->id }}">
                  </div> 
                </div>
              
                 

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            @endsection