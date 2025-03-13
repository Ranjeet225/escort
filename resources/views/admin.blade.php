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
                        <th>User Name</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Whatsapp</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postAds as $postAd)
                        <tr>
                            <td>{{ $postAd->id }}</td>
                            <td>{{ App\Models\User::find($postAd->user_id)->name ?? '' }}</td>
                            <td>{{ $postAd->name }}</td>
                            <td>{{ $postAd->phone }}</td>
                            <td>{{ $postAd->whatsapp }}</td>
                            <td>
                                <div class="form-group">
                                    <select class="form-control" name="status" id="status_{{ $postAd->id }}" onchange="changeStatus({{ $postAd->id }})">
                                        <option value="active" {{ $postAd->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $postAd->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" onclick="deletePostAd({{ $postAd->id }})">Delete</button>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function changeStatus(id) {
        var status = $('#status_' + id).val();
        alert(status);
        $.ajax({
            url: "{{ route('admin.post.ads.update', [ 'id' => ':id' ]) }}".replace(':id', id),
            method: "POST",
            data: {status: status, _token: '{{ csrf_token() }}'},
            success: function(data) {
                console.log(data);
            }
        });
    }
    function deletePostAd(id) {
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
                    url: "{{ url('delete-post-ad') }}",
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
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

