 <!-- Header -->
 <header class="header">
     <div class="container">
         <div class="d-flex justify-content-between align-items-center py-2">
             <div class="logo">
                 <a href="{{url('/')}}" class="d-flex align-items-center">
                     <i class="fas fa-spa text-primary me-1 fs-1"></i>
                     <span class="logo-text">Secure & Viom</span>
                 </a>
             </div>

             <!-- Mobile menu toggle button -->
             <div class="mobile-toggle d-lg-none">
                 <i class="fas fa-bars"></i>
             </div>

             <!-- Desktop navigation -->
             <nav class="desktop-nav d-none d-lg-flex align-items-center">
                 <div class="search-icon me-3">
                     <i class="fas fa-search" data-target="#travelSearchModal" data-toggle="modal"></i>
                 </div>
                 @if (!Auth::check())
                 <div class="dropdown">
                    <a class="dropdown-toggle user-icon me-3" href="#" role="button" id="userIconTrigger" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userIconTrigger">
                        <li><a class="dropdown-item" href="{{route('my-ads')}}">My Listing</a></li>
                        <li><a class="dropdown-item" href="{{route('account')}}">Account</a></li>
                        <li><a class="dropdown-item" href="{{route('logout')}}" >Logout</a></li>
                    </ul>
                </div>
                @else 
                 <div class="user-icon me-3" id="userIconTrigger">
                     <i class="fas fa-user" data-target="#newModal" data-toggle="modal"></i>
                 </div>
                 @endif
                 <a href="{{route('dashboard')}}" class="text-decoration-none">
                     <button class="btn btn-primary rounded-pill w-100">
                         <i class="fas fa-calendar-plus me-2"></i> POST YOUR AD
                     </button>
                 </a>
             </nav>
            
         
            

             <!-- Mobile navigation -->
             <nav class="mobile-nav">
                 <div class="mobile-nav-content">
                     <div class="mobile-nav-header d-flex justify-content-between align-items-center">
                         <div class="logo">
                             <a href="index.html" class="d-flex align-items-center">
                                 <i class="fas fa-spa text-primary me-2"></i>
                                 <span class="logo-text">Viom Escorts</span>
                             </a>
                         </div>
                         <div class="mobile-close">
                             <i class="fas fa-times"></i>
                         </div>
                     </div>
                     <div class="mobile-nav-body">
                         <div class="mobile-search mb-4">
                             <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Search...">
                                 <button class="btn btn-outline-secondary" type="button"
                                     data-target="#travelSearchModal" data-toggle="modal">
                                     <i class="fas fa-search"></i>
                                 </button>
                             </div>
                         </div>
                         <div class="mobile-account mb-4 d-flex align-items-center">
                             <i class="fas fa-user me-3"></i>
                             <span>My Account</span>
                         </div>
                         <a href="{{route('dashboard')}}" class="text-decoration-none">
                             <button class="btn btn-primary rounded-pill w-100">
                                 <i class="fas fa-calendar-plus me-2"></i> POST YOUR AD
                             </button>
                         </a>
                     </div>
                 </div>
             </nav>
         </div>
     </div>
 </header>

