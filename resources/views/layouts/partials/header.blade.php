  <!-- start header -->
  <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p class="topcontact"><i class="icon-phone"></i> 00228 00000000</p>
            </div>
            <div class="span6">

              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest  icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-google-plus icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Dribbble"><i class="icon-dribbble icon-white"></i></a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <a href="{{route('accueil')}}"><img src="img/logo.png" alt="" /></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                  @if($titre==='Accueil')
                  <li class="dropdown active">
                  @else
                  <li class="dropdown">
                  @endif

                      <a href="{{ route('accueil')}} "><i class="icon-home"></i> Accueil</a>
                    </li>
                  @if($titre=== 'Consulatnce & Conseil')
                  <li class="dropdown active">                  
                  @elseif($titre==='Finance')
                  <li class="dropdown active">                  
                  @elseif($titre==='Formation')
                  <li class="dropdown active">                  
                  @else
                  <li class="dropdown">
                  @endif
                      <a href="#">Services <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{route('finance')}}">Services financiers </a></li>
                        <li><a href="{{route('formation')}}">Services de formation</a></li>
                        <li><a href="{{route('consultation')}}">Services de Consultance et de conseil</a></li>
                     </ul>
                    </li>
                  @if($titre==='Apropos')
                  <li class="dropdown active">                  
                  @else
                  <li class="dropdown">
                  @endif
                      <a href="{{ route('apropos') }}">Apropos</a>              
                    </li>
                  @if($titre==='Blog')
                  <li class="dropdown active">                  
                  @else
                  <li class="dropdown">
                  @endif
                      <a href="{{ route('blog') }}">Blog</a>              
                    </li>
                    @if($titre==='Contact')
                  <li class="dropdown active">                  
                  @else
                  <li class="dropdown">
                  @endif
                      <a href="{{route('contact')}}">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
