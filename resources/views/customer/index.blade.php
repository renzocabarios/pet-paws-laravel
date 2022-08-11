@extends('master')
@section('content')

<div>
    <a href="{{ route('service.add') }}" class="bg-sky-300 py-2 px-4 rounded-md shadow-sm text-white focus:outline-none ">Add Service</a>

    <table id="myTable" class="drop-shadow-2xl">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>
@endsection()

@push('scripts')

<script>
    $(function() {
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{!! route('customer.data') !!}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'user.first_name',
                    name: 'user.first_name'
                },
                {
                    data: 'user.last_name',
                    name: 'user.last_name'
                },
                {
                    data: 'user.email',
                    name: 'user.email'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'img',
                    name: 'img',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });
</script>
@endpush