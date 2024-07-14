<header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{url('/')}}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/about')}}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/room')}}">Room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/service')}}">Services</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                              </li>


                     

                              @if (Route::has('login'))
                           
                                @auth
                                <x-app-layout>

                                </x-app-layout>

                                @else
                                <li class="nav-item">
                                 <a class="btn btn-success mr-1" href="{{url('login')}}">Login</a>
                              </li>

                                 @if (Route::has('register'))
                                    <li class="nav-item">
                                 <a class="btn btn-primary ml-1" href="{{url('register')}}">Register</a>
                              </li>
                                    @endif
                                @endauth
                        
                        @endif

                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>