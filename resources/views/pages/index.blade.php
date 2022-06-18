@extends('layouts.app',['titre'=>'Accueil'])

@section('container')

    <!-- section featured -->
    <section id="featured">

      <!-- slideshow start here -->

      <div class="camera_wrap" id="camera-slide">

        <!-- slide 1 here -->
        <div data-src="img/slides/camera/slide1/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>Service de<span class="colored"> Consultance et de conseil</span></strong></h2>
                  <p class="animated fadeInUp"> Nous fournissons des Services de Consultance et de Conseil pour aider les organisations à mettre en œuvre des projets informatiques ou ....</p>
                  <a href="{{route('consultation')}}" class="btn btn-success btn-large animated fadeInUp">
											<i class="icon-link"></i> Lire Plus
										</a>
                  
                </div>
                <div class="span6">
                  <img src="img/slides/camera/slide1/screen.png" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- slide 2 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <img src="img/slides/camera/slide2/iMac.png" alt="" />
                </div>
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>S'<span class="colored">abonner</span></strong></h2>
                  <p class="animated fadeInUp"> Restez à jour pour les nouvelles versions et les cadeaux. Entrez votre e-mail et abonnez-vous à notre newsletter.</p>
                  <form method="POST" action="{{route('abonne')}}">
                    {{csrf_field()}}
                    <div class="input-append">
                      <input class="span3 input-large" name="email_menu" required type="email">
                      <button class="btn btn-theme btn-large" name="btn-menu" type="submit">S'abonner</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- slide 3 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span12 aligncenter">
                  <h2 class="animated fadeInDown"><strong><span class="colored">DN</span> Consulting </strong></h2>
                  <p class="animated fadeInUp">DN CONSULTING est une société mondiale de conseil en TIC et en gestion qui aide les organisations à gérer la complexité de leurs activités en leur offrant une vue interactive de leurs opérations.</p>
                  <img src="img/slides/camera/slide3/browsers.png" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
       <hr>
      <!-- slideshow end here -->

    </section>
    <!-- /section featured -->

@stop

@section('content')
      
      <div class="row">
              <div class="span4">
                <div class="box flyLeft animated fadeInLeftBig">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-gift active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h6> <b>Consultation & Conseil </b></h6>
                    <p>
                    Nous fournissons des Services de Consultance et de Conseil pour....
                    </p>
                    <button class="btn btn-color btn-rounded"><a href="{{route('consultation')}}">Lire Plus</a></button>
                  </div>
                </div>
              </div>

              <div class="span4">
                <div class="box flyIn animated fadeInUp">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-money active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h6 > <b>Financiers</b></h6>
                    <p>
                    DN Consulting assure la digitalisation de vos produits et services financiers...
                    </p>
                    <button class="btn btn-color btn-rounded"><a href="{{route('finance')}}">Lire Plus</a></button>

                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box flyRight animated fadeInRightBig">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-book active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h6 class=""><b>Service de Formation</b></h6>
                    <p>
                      DN Consulting est une société de conseil en TIC et en gestion qui aide...
                    </p>
                    <button class="btn btn-color btn-rounded"><a href="{{route('formation')}}">Lire Plus</a></button>
                  </div>
                </div>
              </div>

      </div>
      <div class="row">
        <div class="span12">
          <div class="cta-box">
            <div class="cta">
              <a class="btn btn-large btn-rounded btn-color" href="{{route('consultation')}}">
					<i class="icon-chevron-right"></i> Solution à tous vos problèmes</a>
            </div>
          </div>
          <!-- end tagline -->
        </div>
      </div>
      
      <div class="row">
        <div class="span12">
            <div class="tabs">
              <ul class="nav nav-tabs bold">
                <li class="active"><a href="#one" data-toggle="tab"><i class="icon-gift"></i>DN Consulting</a></li>
                <li><a href="#two" data-toggle="tab"><i class="icon-user"></i> Nos Clients</a></li>
                <li><a href="#three" data-toggle="tab"><i class="icon-book"></i>Formation</a></li>
              </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="one">
                <p>
                  <blockquote>
                <i>c'est une société de conseil en TIC et en gestion qui aide les organisations à gérer la complexité de leurs activités en leur offrant une vue interactive de leurs opérations. Les dirigeants acquièrent la visibilité et les informations dont ils ont besoin pour faire les bons choix pour une gouvernance efficace et pour trouver le bon équilibre entre capacité d'innovation, optimisation des coûts et gestion des risques</i>
                </blockquote>
                </p>
                <p>
                <a href="{{route('apropos')}}" class="btn btn-danger btn-rounded"><i class="icon-angle-right"></i> Lire Plus</a>
                </p>
              </div>
              <div class="tab-pane" id="two">
                  <p>
                    <blockquote><i>
                  Nos équipes de Conseil accompagnent et conseillent les acteurs privés et publics pour aligner leurs organisations sur leurs stratégies et réaliser leurs transformations, pour une meilleure performance globale. Nos équipes ont développé une expertise sectorielle approfondie et peuvent vous accompagner dans la conduite de vos projets de transformation sur toutes leurs dimensions
                  </i></blockquote>  
                  </p>
                  <p>
                  <a href="{{route('consultation')}}" class="btn btn-danger btn-rounded"><i class="icon-angle-right"></i> Lire Plus</a>
                  </p>
              </div>
              <div class="tab-pane" id="three">
                <p>
                  <blockquote><i>
                <b>DN CONSULTING</b> est une société de conseil en TIC et en gestion qui aide les organisations à gérer la complexité de leurs activités en leur offrant une vue interactive de leurs opérations.      
                  Les dirigeants acquièrent la visibilité et les informations dont ils ont besoin pour faire les bons choix pour une gouvernance efficace et pour trouver le bon équilibre entre capacité d'innovation, optimisation des coûts et gestion des risques.
                  </i></blockquote>
                </p>
                <p>
                <a href="{{route('formation')}}" class="btn btn-danger btn-rounded"><i class="icon-angle-right"></i> Lire Plus</a>
                </p>    
              </div>
            </div>
          </div>
        </div>
      </div>

@stop
