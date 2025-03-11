@extends('frontend.layouts.main')

@section('title', 'Settings')
@section('css')
   <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .sidebar .nav-link {
            color: #333;
            font-weight: 500;
        }
        .sidebar .nav-link.active {
            color: #a50000;
        }

        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            width: 50%;
        }

        @media (max-width: 767px) {
            .form-group {
                width: 100%;
            }
        }
   </style>
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9">
            <div class="form-container">
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <h4 class="mb-4">Settings</h4>
                    {{-- <p>Change Password ({{ auth()->user()->email }})</p> --}}
                    <p>Keep your account safe with a secure password and by signing out of devices you're not actively using.</p>

                    <div class="form-group">
                        <label for="old_password">Old Password</label>
                        <input type="password" class="form-control" id="old_password" name="old_password" required autocomplete="current-password">
                        @if($errors->has('old_password'))
                            <div class="text-danger mt-2">{{ $errors->first('old_password') }}</div>
                        @endif
                    </div>

                    <div class="form-group mt-4">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                        @if($errors->has('password'))
                            <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                        @endif
                    </div>

                    <div class="form-group mt-4">
                        <label for="password_confirmation">Repeat Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                        @if($errors->has('password_confirmation'))
                            <div class="text-danger mt-2">{{ $errors->first('password_confirmation') }}</div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary w-100">
                            Update Password
                        </button>
                    </div>
                </form>

                <hr class="my-4">

                <h4 class="mb-4">Account management</h4>
                <p>Control other options to manage your data, like deleting your account.</p>

                <div class="d-flex justify-content-end mt-4">
                    <form method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            Delete Account (This will Permanently delete your  account and data.)
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

