@extends('master.base')

@section('content')
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
        <thead>
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                    </div>
                </th>
                <th>id</th>
                <th>role</th>
                <th>name</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td> </td>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->name }}</td> 
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td class="d-flex">
                        <a href="#" class="btn btn-warning mx-1">Modifier</a>
                        <a href="#" class="btn btn-danger mx-1">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>  
    </table>
    <div class="d-flex justify-content-center mt-5">
    {{ $users->links('pagination::bootstrap-4') }}
</div>


@endsection
