@extends('frontend.layouts.main')

@section('title', 'Contact Us')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
@endsection
@section('content')
   <!-- Main Banner -->
   <section class="main-banner">
    <div class="container-fluid p-0">
        <div class="banner-content">
            <h1>VIOM BLOG</h1>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="container mt-4">
    <h2 class="welcome-text">Welcome to Our <span class="text-primary">New Website</span></h2>
</section>

<!-- Main Content -->
<section class="container mt-4">
    <div class="row">
        <!-- Blog Posts Column -->
        <div class="col-lg-8">
            <!-- Blog Post 1 -->
            <div class="blog-post mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class="blog-image-container position-relative">
                        <img src="{{ asset('assets/images/blog/4.jpg')}}" alt="Blog Post Image" class="img-fluid rounded">
                            <div class="category-badge beauty">Beauty</div>
                            <div class="date-badge">January 25th, 2023</div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="blog-title">Cosplay Makeovers: The Ultimate Fantasy Experience</h3>
                        <div class="author-info d-flex align-items-center my-2">
                            <img src="{{ asset('assets/images/blog/1.jpg')}}" class="rounded-circle author-profile me-2" alt="Author" >
                            <span class="text-muted">February 25th, 2023</span>
                        </div>
                        <p class="blog-excerpt">
                            Interested to know more about cosplay makeovers? You're in the right place! Our talented makeup artists can transform you into any character you desire. From superheroes to fantasy characters, we can bring your vision to life. The skilled beauticians at VIOM are experts at creating transformations with the creativity and attention to detail that cosplay demands.
                        </p>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="blog-post mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class="blog-image-container position-relative">
                            <img src="{{ asset('assets/images/blog/4.jpg')}}" alt="Blog Post Image" class="img-fluid rounded">
                            <div class="category-badge technology">Technology</div>
                            <div class="date-badge">February 15th, 2023</div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="blog-title">The VR Spa Trend: What's It All About?</h3>
                        <div class="author-info d-flex align-items-center my-2">
                            <img src="{{ asset('assets/images/blog/4.jpg')}}" class="rounded-circle author-profile me-2" alt="Author">
                            <span class="text-muted">February 15th, 2023</span>
                        </div>
                        <p class="blog-excerpt">
                            VR spa has taken the salon world by storm. If you've been following the latest trends in the industry, you'll know that virtual reality is becoming a game-changer for spas. It's actually useful for users wanting to learn more before trying our premium relaxation sessions. Explore how our VR preview helps clients choose their perfect treatment.
                        </p>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="blog-post mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class="blog-image-container position-relative">
                            <img src="{{ asset('assets/images/blog/4.jpg')}}" alt="Blog Post Image" class="img-fluid rounded">
                            <div class="category-badge guide">Guide</div>
                            <div class="date-badge">February 10th, 2023</div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="blog-title">A Guide to Meeting a Stylist for the First Time</h3>
                        <div class="author-info d-flex align-items-center my-2">
                            <img src="{{ asset('assets/images/blog/3.jpg')}}" class="rounded-circle author-profile me-2" alt="Author">
                            <span class="text-muted">February 10th, 2023</span>
                        </div>
                        <p class="blog-excerpt">
                            If you're planning on meeting a stylist for the first time, here is a guide to ensure that initial consultation goes well. Although scheduling and timing is important, communication about your hair goals and expectations is key to a successful salon visit.
                        </p>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 4 -->
            <div class="blog-post mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class="blog-image-container position-relative">
                            <img src="{{ asset('assets/images/blog/8.jpg')}}" alt="Blog Post Image" class="img-fluid rounded">
                            <div class="category-badge business">Business</div>
                            <div class="date-badge">February 5th, 2023</div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="blog-title">Becoming An Expert: The Importance of Having a Niche</h3>
                        <div class="author-info d-flex align-items-center my-2">
                            <img src="{{ asset('assets/images/blog/4.jpg')}}" class="rounded-circle author-profile me-2" alt="Author">
                            <span class="text-muted">February 5th, 2023</span>
                        </div>
                        <p class="blog-excerpt">
                            Thinking of specializing? If you're looking to establish yourself in the competitive market of beauty services, finding your niche is essential. Whether it's specialized hair coloring, organic treatments, or bridal makeup, having a specialty can boost your existing earnings.
                        </p>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 5 -->
            <div class="blog-post mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class="blog-image-container position-relative">
                            <img src="{{asset('assets/images/blog/4.jpg')}}" alt="Blog Post Image" class="img-fluid rounded">
                            <div class="category-badge safety">Safety</div>
                            <div class="date-badge">February 1st, 2023</div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="blog-title">National Condom Day: Protection for Clients and Safety for Beauticians</h3>
                        <div class="author-info d-flex align-items-center my-2">
                            <img src="{{ asset('assets/images/blog/4.jpg')}}" class="rounded-circle author-profile me-2" alt="Author">
                            <span class="text-muted">February 1st, 2023</span>
                        </div>
                        <p class="blog-excerpt">
                            While National Condom Day on February 14th serves as a reminder about safe practices, in the beauty industry it's a time to discuss the importance of skin protection for clients and safety for beauticians when using various chemicals and treatments.
                        </p>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 6 -->
            <div class="blog-post mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class="blog-image-container position-relative">
                            <img src="{{ asset('assets/images/blog/4.jpg')}}" alt="Blog Post Image" class="img-fluid rounded">
                            <div class="category-badge special">Special</div>
                            <div class="date-badge">January 30th, 2023</div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="blog-title">No Date, No Problem: Transform Valentine's Day with VIOM Beauty</h3>
                        <div class="author-info d-flex align-items-center my-2">
                            <img src="{{ asset('assets/images/blog/4.jpg')}}" class="rounded-circle author-profile me-2" alt="Author">
                            <span class="text-muted">January 30th, 2023</span>
                        </div>
                        <p class="blog-excerpt">
                            VIOM stylists can't wait to go out with you this Valentine's Day! Book a self-care day if you don't have plans on February 14th. We understand that self-love is just as important, and our special Valentine's packages are designed to make you feel pampered and beautiful.
                        </p>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 7 -->
            <div class="blog-post mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class="blog-image-container position-relative">
                            <img src="{{ asset('assets/images/blog/8.jpg')}}" alt="Blog Post Image" class="img-fluid rounded">
                            <div class="category-badge health">Health</div>
                            <div class="date-badge">January 25th, 2023</div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="blog-title">Sexual Health Week: The Importance of Sexual and Mental Health for Beauticians</h3>
                        <div class="author-info d-flex align-items-center my-2">
                            <img src="{{ asset('assets/images/blog/4.jpg')}}" class="rounded-circle author-profile me-2" alt="Author">
                            <span class="text-muted">January 25th, 2023</span>
                        </div>
                        <p class="blog-excerpt">
                            Every year, Sexual Health Week serves as an important reminder of how crucial it is to prioritize our well-being. For everyone, and especially beauty professionals who work closely with clients, maintaining good physical and mental health is essential for providing quality service.
                        </p>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 8 -->
            <div class="blog-post mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class="blog-image-container position-relative">
                            <img src="{{ asset('assets/images/blog/4.jpg')}}" alt="Blog Post Image" class="img-fluid rounded">
                            <div class="category-badge massage">Massage</div>
                            <div class="date-badge">January 20th, 2023</div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="blog-title">Erotic Massage Benefits</h3>
                        <div class="author-info d-flex align-items-center my-2">
                            <img src="{{ asset('assets/images/blog/4.jpg')}}" class="rounded-circle author-profile me-2" alt="Author">
                            <span class="text-muted">January 20th, 2023</span>
                        </div>
                        <p class="blog-excerpt">
                            Looking for a way to enhance intimacy with your partner? Couples massage is the perfect relaxation method. Sensuous skin-to-skin contact offers a sense of connection, sensuality, and relaxation that can strengthen your bond while relieving stress and tension.
                        </p>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 9 -->
            <div class="blog-post mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class="blog-image-container position-relative">
                            <img src="{{ asset('assets/images/blog/4.jpg')}}" alt="Blog Post Image" class="img-fluid rounded">
                            <div class="category-badge trends">Trends</div>
                            <div class="date-badge">January 15th, 2023</div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="blog-title">Spa Trends for 2025</h3>
                        <div class="author-info d-flex align-items-center my-2">
                            <img src="{{ asset('assets/images/blog/1.jpg')}}" class="rounded-circle author-profile me-2" alt="Author">
                            <span class="text-muted">January 15th, 2023</span>
                        </div>
                        <p class="blog-excerpt">
                            2025 is already shaping up to be an exciting year for spa trends and the salon industry! With technology evolving at lightning speed, a focus on sustainability, and personalized treatments becoming more sophisticated, there's a lot to look forward to in the beauty world.
                        </p>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 10 -->
            <div class="blog-post mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class="blog-image-container position-relative">
                            <img src="{{ asset('assets/images/blog/8.jpg')}}" alt="Blog Post Image" class="img-fluid rounded">
                            <div class="category-badge guide">Guide</div>
                            <div class="date-badge">January 10th, 2023</div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="blog-title">Preparing For Date Night With A Beauty Makeover</h3>
                        <div class="author-info d-flex align-items-center my-2">
                            <img src="{{ asset('assets/images/blog/8.jpg')}}" class="rounded-circle author-profile me-2" alt="Author">
                            <span class="text-muted">January 10th, 2023</span>
                        </div>
                        <p class="blog-excerpt">
                            Date night can be stressful but let our stylists make it a breeze! From hair and makeup to nail care, our comprehensive beauty packages will have you looking and feeling your best for that special experience.
                        </p>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation" class="my-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">25</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Sidebar Column -->
        <div class="col-lg-4">
            <!-- Newsletter -->
            <div class="sidebar-widget newsletter-widget mb-4">
                <h3 class="widget-title">Newsletter</h3>
                <p>Join the VIOM List Now!</p>
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                </form>
                <p class="small text-muted mt-2">Your email is safe with us. We don't spam.</p>
            </div>

            <!-- Latest Posts -->
            <div class="sidebar-widget latest-posts-widget mb-4">
                <h3 class="widget-title">Latest Posts</h3>
                <div class="latest-post-item d-flex mb-3">
                    <img src="{{ asset('assets/images/blog/1.jpg')}}" class="img-fluid me-3" alt="Latest Post">
                    <div>
                        <h5 class="latest-post-title">Cosplay Events: Perfect Opportunity for Fantasy Makeovers</h5>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
                <div class="latest-post-item d-flex mb-3">
                    <img src="{{ asset('assets/images/blog/5.jpg')}}" class="img-fluid me-3" alt="Latest Post">
                    <div>
                        <h5 class="latest-post-title">The VR Spa Trend: What's It All About?</h5>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
                <div class="latest-post-item d-flex mb-3">
                    <img src="{{ asset('assets/images/blog/5.jpg')}}" class="img-fluid me-3" alt="Latest Post">
                    <div>
                        <h5 class="latest-post-title">A Guide to Meeting a Stylist for the First Time</h5>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
                <div class="latest-post-item d-flex mb-3">
                    <img src="{{ asset('assets/images/blog/5.jpg')}}" class="img-fluid me-3" alt="Latest Post">
                    <div>
                        <h5 class="latest-post-title">Becoming An Expert: Finding Your Beauty Niche</h5>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
                <div class="latest-post-item d-flex mb-3">
                    <img src="{{ asset('assets/images/blog/5.jpg')}}" class="img-fluid me-3" alt="Latest Post">
                    <div>
                        <h5 class="latest-post-title">National Condom Day: Protection for Clients and Safety for Beauticians</h5>
                        <a href="#" class="read-more-link"><i class="fas fa-arrow-right me-1"></i> READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Categories -->
            <div class="sidebar-widget categories-widget mb-4">
                <h3 class="widget-title">Categories</h3>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Beauty</a>
                        <span class="badge bg-primary rounded-pill">9</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Cosmetics</a>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Economy</a>
                        <span class="badge bg-primary rounded-pill">5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Fashion</a>
                        <span class="badge bg-primary rounded-pill">8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Fraud</a>
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Guides for Experts</a>
                        <span class="badge bg-primary rounded-pill">12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Guides for Users</a>
                        <span class="badge bg-primary rounded-pill">10</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Health</a>
                        <span class="badge bg-primary rounded-pill">6</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Interview</a>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Massage</a>
                        <span class="badge bg-primary rounded-pill">7</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">News</a>
                        <span class="badge bg-primary rounded-pill">20</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Prevention</a>
                        <span class="badge bg-primary rounded-pill">4</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Safety</a>
                        <span class="badge bg-primary rounded-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Security</a>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Spa</a>
                        <span class="badge bg-primary rounded-pill">15</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Spa and Beauty</a>
                        <span class="badge bg-primary rounded-pill">27</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Staff Communications</a>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Support</a>
                        <span class="badge bg-primary rounded-pill">24</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Tips</a>
                        <span class="badge bg-primary rounded-pill">33</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Tutorials</a>
                        <span class="badge bg-primary rounded-pill">5</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- VIOM in the World -->
<section class="container mt-5 mb-5">
    <h3 class="text-center mb-4">VIOM IN THE WORLD</h3>
    <div class="row">
        <div class="col-md-3 mb-3">
            <ul class="list-unstyled">
                <li><img src="https://flagcdn.com/w40/br.png" class="me-2 my-2" alt="Brazil Flag"> <a href="#">VIOM Brazil</a></li>
                <li><img src="https://flagcdn.com/w40/cl.png" class="me-2 my-2" alt="Chile Flag"> <a href="#">VIOM Chile</a></li>
                <li><img src="https://flagcdn.com/w40/co.png" class="me-2 my-2" alt="Colombia Flag"> <a href="#">VIOM Colombia</a></li>
                <li><img src="https://flagcdn.com/w40/cr.png" class="me-2 my-2" alt="Costa Rica Flag"> <a href="#">VIOM Costa Rica</a></li>
                <li><img src="https://flagcdn.com/w40/cu.png" class="me-2 my-2" alt="Cuba Flag"> <a href="#">VIOM Cuba</a></li>
            </ul>
        </div>
        <div class="col-md-3 mb-3">
            <ul class="list-unstyled">
                <li><img src="https://flagcdn.com/w40/do.png" class="me-2 my-2" alt="Dominican Republic Flag"> <a href="#">VIOM Dominican Republic</a></li>
                <li><img src="https://flagcdn.com/w40/ec.png" class="me-2 my-2" alt="Ecuador Flag"> <a href="#">VIOM Ecuador</a></li>
                <li><img src="https://flagcdn.com/w40/gt.png" class="me-2 my-2" alt="Guatemala Flag"> <a href="#">VIOM Guatemala</a></li>
                <li><img src="https://flagcdn.com/w40/mx.png" class="me-2 my-2" alt="Mexico Flag"> <a href="#">VIOM Mexico</a></li>
                <li><img src="https://flagcdn.com/w40/pa.png" class="me-2 my-2" alt="Panama Flag"> <a href="#">VIOM Panama</a></li>
            </ul>
        </div>
        <div class="col-md-3 mb-3">
            <ul class="list-unstyled">
                <li><img src="https://flagcdn.com/w40/py.png" class="me-2 my-2" alt="Paraguay Flag"> <a href="#">VIOM Paraguay</a></li>
                <li><img src="https://flagcdn.com/w40/pe.png" class="me-2 my-2" alt="Peru Flag"> <a href="#">VIOM Peru</a></li>
                <li><img src="https://flagcdn.com/w40/pr.png" class="me-2 my-2" alt="Puerto Rico Flag"> <a href="#">VIOM Puerto Rico</a></li>
                <li><img src="https://flagcdn.com/w40/uy.png" class="me-2 my-2" alt="Uruguay Flag"> <a href="#">VIOM Uruguay</a></li>
                <li><img src="https://flagcdn.com/w40/ve.png" class="me-2 my-2" alt="Venezuela Flag"> <a href="#">VIOM Venezuela</a></li>
            </ul>
        </div>
        <div class="col-md-3 mb-3">
            <ul class="list-unstyled">
                <li><img src="https://flagcdn.com/w40/au.png" class="me-2 my-2" alt="Australia Flag"> <a href="#">VIOM Australia</a></li>
                <li><img src="https://flagcdn.com/w40/in.png" class="me-2 my-2" alt="India Flag"> <a href="#">VIOM India</a></li>
                <li><img src="https://flagcdn.com/w40/jp.png" class="me-2 my-2" alt="Japan Flag"> <a href="#">VIOM Japan</a></li>
                <li><img src="https://flagcdn.com/w40/sg.png" class="me-2 my-2" alt="Singapore Flag"> <a href="#">VIOM Singapore</a></li>
                <li><img src="https://flagcdn.com/w40/za.png" class="me-2 my-2" alt="South Africa Flag"> <a href="#">VIOM South Africa</a></li>
            </ul>
        </div>
    </div>
</section>

@endsection