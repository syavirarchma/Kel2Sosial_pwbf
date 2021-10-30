@extends('../layouts/index')

@section('container')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Table kota</h6>
    </div>
    <div class="card-body">
        <div class="pb-3">
            <a href="/tambahkota"class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>nama</th>       
                        <th>created_at</th>
                        <th>updated_at</th>  
                        <th>id_provinsi</th>                   
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kota as $datakota)
                    <tr>
                        <td>{{ $datakota -> id }}</td>
                        <td>{{ $datakota -> nama}}</td>                
                        <td>{{ $datakota -> created_at }}</td>
                        <td>{{ $datakota -> updated_at}}</td>        
                        <td>{{ $datakota -> id_provinsi}}</td>     
                    </tr>
                    @endforeach               
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection