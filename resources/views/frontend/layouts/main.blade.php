<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    @yield('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        /* Modal Styles */
        .custom-modal {
            display: none;
            position: fixed;
            z-index: 1050;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
        }

        .custom-modal-dialog {
            position: relative;
            margin: 10% auto;
            max-width: 400px;
            animation: fadeIn 0.3s ease-in-out;
        }

        .custom-modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        /* Modal Header */
        .custom-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .custom-modal-title {
            font-size: 18px;
            font-weight: bold;
        }

        .custom-close-btn {
            font-size: 24px;
            cursor: pointer;
        }

        /* List Group */
        .custom-list-group {
            padding: 0;
            list-style: none;
        }

        .custom-list-item {
            padding: 10px 0;
            font-size: 16px;
        }

        /* Buttons */
        .custom-btn {
            width: 75%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .custom-btn-primary {
            background-color: #007bff;
            color:black;
            border: none;
        }

        .custom-btn-primary:hover {
            background-color: #0056b3;
        }

        .custom-btn-outline {
            background-color: white;
            color: #007bff;
            border: 2px solid #007bff;
        }

        .custom-btn-outline:hover {
            background-color: #007bff;
            color: white;
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        .age-overlay {
            background-color: rgba(0, 0, 0, 0.85);
        }

        /* Popup Box */
        .age-popup {
            max-width: 500px;
            width: 90%;
            border-radius: 12px;
            background: #222;
            color: black;
            text-align: center;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.1);
        }

        /* Popup Header */
        .age-popup h5 {
            font-size: 22px;
            font-weight: bold;
        }

        /* Popup Content */
        .age-popup p {
            font-size: 16px;
            margin: 15px 0;
            line-height: 1.5;
        }

        /* Checkbox Styling */
        .age-checkbox label {
            font-size: 14px;
            color: black;
            cursor: pointer;
        }

        /* Buttons */
        .age-btn {
            width: 100%;
            font-weight: bold;
            padding: 12px;
            border-radius: 8px;
        }

        .age-btn-enter {
            background-color: #28a745;
            border: none;
        }

        .age-btn-exit {
            background-color: #dc3545;
            border: none;
        }

        .age-btn:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .age-popup {
                max-width: 90%;
                padding: 20px;
                margin: auto;
            }

            .age-popup h5 {
                font-size: 18px;
            }

            .age-popup p {
                font-size: 14px;
            }

            .age-checkbox label {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    {{-- age confirmations  --}}
    <div class="modal fade age-overlay mx-auto" id="ageVerificationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content age-popup bg-white">
                <div class="modal-header border-0">
                    <h5 class="modal-title">Please Confirm Your Age</h5>
                </div>
                <div class="modal-body">
                    <p>I am over 18 years old and accept viewing explicit texts and images intended for an adult audience.</p>
                    <div class="form-check age-checkbox text-start">
                        <input class="form-check-input" type="checkbox" id="ageTermsAccept">
                        <label class="form-check-label" for="ageTermsAccept">
                            I have read and accept the <a href="{{url('/terms-and-conditions')}}">Terms and Conditions</a>.
                        </label>
                    </div>
                </div>
                <div class="modal-footer border-0 d-flex flex-column gap-2">
                    <button class="btn age-btn age-btn-enter" id="ageAcceptBtn" disabled>Enter</button>
                    <button class="btn age-btn age-btn-exit" id="ageRejectBtn">I am Under 18</button>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    <!-- Age Verification Modal -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @yield('js')

    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
     document.addEventListener("DOMContentLoaded", function () {
        if (localStorage.getItem('ageVerified') !== 'true') {
            var ageModal = new bootstrap.Modal(document.getElementById('ageVerificationModal'));
            ageModal.show();

            document.getElementById('ageTermsAccept').addEventListener('change', function () {
                document.getElementById('ageAcceptBtn').disabled = !this.checked;
            });

            document.getElementById('ageAcceptBtn').addEventListener('click', function () {
                localStorage.setItem('ageVerified', 'true');
                ageModal.hide();
            });

            document.getElementById('ageRejectBtn').addEventListener('click', function () {
                window.location.href = "https://www.google.com";
            });
        }
     });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const mobileToggle = document.querySelector(".mobile-toggle");
            const mobileNav = document.querySelector(".mobile-nav");
            const mobileClose = document.querySelector(".mobile-close");
            const navOverlay = document.createElement("div");

            // Create overlay dynamically
            navOverlay.classList.add("nav-overlay");
            document.body.appendChild(navOverlay);

            // Function to open mobile menu
            function openNav() {
                mobileNav.classList.add("active");
                navOverlay.classList.add("active");
                document.body.style.overflow = "hidden";
            }

            // Function to close mobile menu
            function closeNav() {
                mobileNav.classList.remove("active");
                navOverlay.classList.remove("active");
                document.body.style.overflow = "";
            }

            // Event listeners
            mobileToggle.addEventListener("click", openNav);
            mobileClose.addEventListener("click", closeNav);
            navOverlay.addEventListener("click", closeNav); // Close on overlay click
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let modal = document.getElementById("signupModal");
            let openModalBtn = document.getElementById("openSignupModal");
            let closeModalBtn = document.getElementById("closeSignupModal");

            if (openModalBtn && closeModalBtn && modal) {
                // Open Modal
                openModalBtn.addEventListener("click", function(event) {
                    event.preventDefault();
                    modal.style.display = "block";
                });

                // Close Modal
                closeModalBtn.addEventListener("click", function() {
                    modal.style.display = "none";
                });

                // Close when clicking outside modal
                window.addEventListener("click", function(event) {
                    if (event.target === modal) {
                        modal.style.display = "none";
                    }
                });
            }
        });
    </script>
</body>

</html>
