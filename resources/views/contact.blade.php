@extends('frontend.layouts.main')

@section('title', 'Contact Us')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
@endsection
@section('content')
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h1 class="main-title page">Contact us</h1>
                        <p>
                            For technical assistance you can contact: <strong>support@Viom.in</strong>
                        </p>
                        <p>
                            If you have any doubt about the possible illicit use of your data (such as email or phone number) send an email to: <strong>privacy@Viom.in</strong>
                        </p>
                        <p>
                            Grievance Officer: Eart Gjini, <strong>grievances@Viom.in</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

