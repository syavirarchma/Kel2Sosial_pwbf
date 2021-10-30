
@extends('../layouts/index')

@section('container')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Table provinsi</h6>
    </div>
    
    <div class="card-body">
        <div class="pb-3">
            <a href="/tambahprovinsi"class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>nama</th>       
                        <th>created_at</th>
                        <th>updated_at</th>  
                        <th>aksi</th>

                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($provinsi as $dataprovinsi)
                    <tr>
                        <td>{{ $dataprovinsi -> id }}</td>
                        <td>{{ $dataprovinsi -> nama}}</td>                
                        <td>{{ $dataprovinsi -> created_at }}</td>
                        <td>{{ $dataprovinsi -> updated_at}}</td>     
                        <td>
                            <form action="/editprovinsi" method="post" class="d-inline">
                                @csrf
                                <input type="hidden" name="id" value="{{ $dataprovinsi ->id }}">
                                <button class="btn btn-primary tombol border-0">
                                    Edit
                                </button>
                            </form>
                            <form action="/hapusprovinsi" method="post" class="d-inline">
                                @csrf
                                <input type="hidden" name="id" value="{{ $dataprovinsi ->id }}">
                                <button class="btn btn-danger tombol border-0" onclick="return confirm('Akan menghapus data');">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach               
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection