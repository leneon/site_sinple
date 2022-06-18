
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +228 00 00 00 00</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> TogoCel@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Totsi</a></li>
					</ul>
					<ul class="header-links pull-right">
                        <li><!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-user-o sursor"></i>
                                    <span>Mon Compte</span>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="./img/product01.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h6 class="product-name"><b>NADOH</b> </h6>
                                                <h6 class="product-price">A. kamaroudine</h6>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="cart-summary">
                                        <small>Connecter en tant qu'Admin</small>
                                        <h6>Site@gmail.com</h6>
                                    </div>
                                    <div class="cart-btns">

                                        <a href="{{ ""}}">Modifier</a>
                                        <a href="#">Se Déconnecter  <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart --></li>
						<li><a href="{{ route('utilisateurs.index') }}"><i class="fa fa-user"></i>+ Créer un compte</a></li>


					</ul>
				</div>
			</div>

			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="/./img/logo-name.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Service ID</option>
										<option value="1">LS</option>
										<option value="1">LSI</option>
									</select>
									<input class="input" placeholder="Rechercher">
									<button class="search-btn">Rech</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->


					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
