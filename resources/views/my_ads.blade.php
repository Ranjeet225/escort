@extends('frontend.layouts.main')

@section('title', 'My Ads')
@section('css')
   <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background: white;
            padding: 15px;
            border-radius: 10px;
        }
        .sidebar .nav-link {
            color: #333;
            font-weight: 500;
        }
        .sidebar .nav-link.active {
            color: #a50000;
        }
        .info-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .ad-card {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .ad-image {
            width: 80px;
            height: 80px;
            border-radius: 5px;
        }
        .ad-status {
            color: red;
            font-weight: bold;
        }
        .ad-buttons .btn {
            margin-right: 5px;
        }
</style>
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9">
            <div class="container mt-5">
                @foreach ($postAds as $postAd)
                <div class="ad-card d-flex flex-column flex-md-row align-items-start p-3">
                    @if ($postAd->images)
                        <img src="{{ asset(json_decode($postAd->images)[0]) }}" alt="Ad Image" class="ad-image me-3" style="width: 40%; height: 100%; object-fit: cover;">
                    @endif
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $postAd->name }}</h5>
                        <p class="text-muted mb-1">{{ $postAd->details }}</p>
                        <p class="text-muted mb-1">{!! Str::limit($postAd->description, 150) !!}</p>
                        <p class="text-muted mb-1">{{ $postAd->locality }}, {{ $postAd->city->name }}, {{ $postAd->state->name }}, {{ $postAd->country->name }}</p>
                        <p class="ad-status">{{ $postAd->status }}</p>
                        <div class="ad-buttons mt-2">
                            <a href="{{ route('edit.post.ads', $postAd->id) }}" class="btn btn-success">✏️ Edit</a>
                            <button class="btn btn-danger" onclick="deletePostAd({{ $postAd->id }})">🗑️ Delete</button>
                            {{-- <button class="btn btn-primary">📢 Promote</button> --}}
                        </div>
                        <p class="text-muted mt-2">Updated: {{ $postAd->updated_at->format('M d, Y, h:i A') }} | Total View: {{ $postAd->views }}</p>
                    </div>
                    <span class="badge bg-light text-dark">{{ $postAd->category }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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
                    success: function(response) {
                        if (response.success) {
                            Swal.fire(
                                'Deleted!',
                                'Your ad has been deleted.',
                                'success'
                            ).then(function() {
                                window.location.reload();
                            });
                        }
                    },
                    error: function(response) {
                        Swal.fire(
                            'Error!',
                            'Something went wrong.',
                            'error'
                        );
                    }
                });
            }
        })
    }
</script>
@endsection 



