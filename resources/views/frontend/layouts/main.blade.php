<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
            background-color: rgba(0, 0, 0, 0.5);
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
            color: white;
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
    </style>
</head>

<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @yield('js')

    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            // Show/hide button on scroll
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('#backToTop').fadeIn();
                } else {
                    $('#backToTop').fadeOut();
                }
            });

            $('#backToTop').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
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
        });
    </script>
</body>

</html>
