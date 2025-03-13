@extends('frontend.layouts.main')

@section('title', 'Admin Panel')
@section('css')
<style>
    .nav-stacked>li+li {
        margin-top: 0;
    }
</style>
@endsection
@section('content')
<div class="container m-5">
    <div class="row">
       @include('admin-sidebar')
        <div class="col-md-9">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="form-group">
                                    <select class="form-control" name="status" id="status_{{ $user->id }}" onchange="changeStatus({{ $user->id }})">
                                        <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" onclick="deleteUser({{ $user->id }})">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function changeStatus(id) {
        var status = $('#status_' + id).val();
        $.ajax({
            url: "{{ url('admin/user/update') }}/" + id,
            method: "POST",
            data: {
                status: status,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                alert('Status updated successfully');
            }
        });
    }

    function deleteUser(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ url('admin/user/delete') }}/" + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        location.reload();
                    }
                });
            }
        });
    }
</script>
@endsection
