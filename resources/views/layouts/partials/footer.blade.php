<footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Voir la page</h5>
              <ul class="link-list">
                <li><a href="{{route('finance')}}">Service financier</a></li>
                <li><a href="{{route('formation')}}">Service de formation</a></li>
                <li><a href="{{route('consultation')}}">Service de consultation et conseil</a></li>
                <li><a href="{{route('apropos')}}">Qui sommes nous</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Infos</h5>
            <address>
							<strong>DN CONSULTING</strong><br>
							<i class="icon-map-marker"></i> Avédji Lomé-Togo<br>
						</address>
              <p>
                <i class="icon-phone"></i> (00228) 0000000 / 91 66 40 40 <br>
                <i class="icon-envelope-alt"></i> contactdnc@gmail.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">S'abonner</h5>
              <p>
              Restez à jour pour les nouvelles versions et les cadeaux. Entrez votre e-mail et abonnez-vous à notre newsletter.
              </p>
              <form action="{{route('abonne')}}" method="post" class="subscribe">
              {{csrf_field()}}
                <div class="input-append">
                  <input type="email" name="email_abonne" id="email" placeholder="Votre Email"  data-rule="email" data-msg="Entrer un email correct" />
                  <button class="btn btn-theme" name="btn-footer" type="submit">S'abonner</button>
                 
                </div>
              </form>
              <p style="color:red;font-style:italic;font-weight:bold;">{{$errors->first('email_abonne')}}</p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; DN CONSULTING company. Tout droit reservé</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                   Fait par<a href="#"> K@m@l</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>