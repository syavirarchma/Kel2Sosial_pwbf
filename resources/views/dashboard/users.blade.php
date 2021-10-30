
@extends('../layouts/index')

@section('container')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Table users</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Tgl_lahir</th>                                         
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $datausers)
                    <tr>
                        <td>{{ $datausers -> id }}</td>
                        <td>{{ $datausers -> name }}</td>
                        <td>{{ $datausers -> email }}</td>
                        <td>{{ $datausers -> tgl_lahir }}</td>
                        <td>{{ $datausers -> password }}</td>
                        
                        
                    </tr>
                    @endforeach
                     
                    
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection