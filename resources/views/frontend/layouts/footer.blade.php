<!-- Footer -->
<footer class="footer pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="footer-logo mb-3">
                    <a href="index.html" class="d-flex align-items-center">
                        <i class="fas fa-spa text-primary me-2"></i>
                        <span class="logo-text">Viom Escorts</span>
                    </a>
                </div>
                <p class="mb-3">
                    <img src="{{asset('assets/images/logo/slogo.png')}}" alt="Trusted Badge" class="img-fluid">
                </p>
                <p class="text-muted small">
                    Glamo is the largest advertising platform for independent beauty professionals. Browse through
                    thousands of verified stylists around the world. Available in 25+ countries.
                </p>
            </div>
            <div class="col-md-3 mb-4">
                <h5 class="footer-title">Legal</h5>
                <ul class="footer-links">
                    <li><a href="{{url('/terms-and-conditions')}}">Terms and Conditions</a></li>
                    <li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5 class="footer-title">Support</h5>
                <ul class="footer-links">
                    <li><a href="{{url('/contact-us')}}">Contact us</a></li>
                    {{-- <li><a href="{{url('/help-center')}}">Help Center</a></li> --}}
                    <li><a href="{{url('blogs')}}">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-3     mb-4">
                <h5 class="footer-title">Security</h5>
                <ul class="footer-links">
                    <li><a href="{{url('/how-to-report-a-issue')}}">How to report a issue</a></li>
                    <li><a href="{{url('/promo')}}">Promo</a></li>
                </ul>
            </div>
            {{-- <div class="col-md-3 mb-4">
                <h5 class="footer-title">Company</h5>
                <ul class="footer-links">
                    <li><a href="main/bakeka.html">Bakeka Incontri</a></li>
                    <li><a href="main/network.html">viom Network</a></li>
                    <li><a href="{{url('product')}}">Our Products</a></li>
                </ul>
            </div> --}}
        </div>

        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <h5 class="footer-title">Boost your visibility</h5>
                <a href="{{route('dashboard')}}">
                    <button class="btn btn-primary rounded-pill w-100">
                        <i class="fas fa-calendar-plus me-2"></i>POST YOUR AD
                    </button>
                </a>
            </div>
            <div class="col-md-6 mb-4">
                <h5 class="footer-title">Countries</h5>
                <select class="form-select">
                    <option selected>in India</option>
                    <option>in USA</option>
                    <option>in UK</option>
                    <option>in Australia</option>
                </select>
            </div>
        </div>

        <div class="footer-bottom py-3">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">Made in <i class="fas fa-heart text-danger"></i></p>
                </div>
                <div class="col-md-6">
                    <div class="social-icons text-center text-md-end">
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <p class="mb-0">Copyright {{ date('Y') }} © Viom</p>
            </div>
        </div>
    </div>
    <button id="backToTop" title="Go to Top">
        <i class="fas fa-arrow-up"></i>
    </button>
</footer>