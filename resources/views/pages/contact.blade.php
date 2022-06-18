@extends('layouts.app',['titre'=>'Contact'])

@section('content')
<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Contact</li>
              </ul>
              <h5>Nous <strong>Contactez</strong></h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content" >
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="300" frameborder="2" style="border:0" allowfullscreen></iframe>

      <div class="container">
        <div class="row">
          
          <div class="span8">
            <h4>Votre message sera la bienvenue, DN Consulting vous remercie</h4>

            @if (session()->has('message'))
            <div class="alert alert-success">{{session()->get('message')}}</div>
            @endif

            <form action="{{route('messages')}}" method="POST"  class="contactForm">
              {{csrf_field()}}
              <div class="row">
                <div class="span4 form-group field">
                  <input type="text" name="nom" id="nom" placeholder="Entrer votre nom" data-rule="minlen:4" data-msg="Le nom doit comporté aumoins 4 caractères" />
                  <div class="validation"></div>
                </div>

                <div class="span4 form-group">
                  <input type="email" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Entrer un email correct" />
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <input type="text" name="objet" id="objet" placeholder="Objet" data-rule="required" data-msg="L'objet de ce message est obligatoire" />
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <textarea name="message" rows="5" data-rule="required"  data-msg="le message est obligatoir et doit comporter aumoins 10 caractères" 
                    placeholder="Votre Message"></textarea>
                  <div class="validation"></div>
                  <div class="text-center">
                    <button class="btn btn-theme btn-medium margintop10" type="submit">Envoyer le message</button>
                   
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Informations Contact<span></span></h5>

                <ul class="contact-info">
                  <li><label>Adresse :</label> Avédji<br /> Lomé-Togo</li>
                  <li><label>Téléphone :</label>00228 00000000</li>
                  <li><label>Fax : </label>00228 91 66 40 40 / +228 97 48 11 00</li>
                  <li><label>Email : </label> contactdnc@gmail.com</li>
                </ul>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
@stop