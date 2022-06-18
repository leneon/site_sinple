@extends('layouts.app',['titre'=>'Apropos'])

@section('content')
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span12">
              <div class="inner-heading">
                  <ul class="breadcrumb">
                  <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                  <li class="active">Apropos</li>
                  </ul>
                  <h5>Qui <strong>Sommes nous</strong></h5>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <p>
                    <h4 class="title">DN Consulting,</h4> c'est une société de conseil en TIC et en gestion qui aide les organisations à gérer la complexité de leurs activités en leur offrant une vue interactive de leurs opérations. Les dirigeants acquièrent la visibilité et les informations dont ils ont besoin pour faire les bons choix pour une gouvernance efficace et pour trouver le bon équilibre entre capacité d'innovation, optimisation des coûts et gestion des risques.
                    Pour répondre aux nouvelles exigences de nos clients, nous proposons des prestations d'accompagnement globales allant de la mise en œuvre des principes de Corporate Governance à l'optimisation des processus métiers et à l'adoption des meilleures pratiques en matière de système d'information et de gestion d'entreprise.
                </p>            
            </div>
        </div>    
        <div class="row">
            <div class="span6">
                <div class="pricing-box-wrap">
                <div style="height:50px;text-align:center;padding:2px;" class="pricing-terms ">
                    <h6>Nos prestations de services s'articulent autour de nos principaux domaines d'expertise </h6>
                </div>
                <div class="pricing-content">
                    <ul>
                    <li><i class="icon-ok"></i> Gouvernance d'entreprise et gestion des risques d'entreprise (KING III, COSO…)</li>
                    <li><i class="icon-ok"></i> Architecture d'Entreprise (TOGAF)</li>
                    <li><i class="icon-ok"></i> Gouvernance informatique et stratégie informatique (COBIT, ITIL, CMMI…)</li>
                    <li><i class="icon-ok"></i> Audit</li>
                    <li><i class="icon-ok"></i> Risque informatique et sécurité de l'information (ISO 2700X, ISO 22301 …)</li>
                    <li><i class="icon-ok"></i>Analyse d'affaires et architecture informatique</li>
                    <li><i class="icon-ok"></i>Systèmes d'information, analyse de données et informatique</li>
                    <li><i class="icon-ok"></i>Gestion de programme et de projet (PMBOK, PRINCE 2,…)</li>
                    <li><i class="icon-ok"></i>Système de Management (ISO 9001, ISO 20000, ISO 27001, ISO 38500, ISO 22301…)</li>
                    
                    </ul>
                </div>
            
                </div>
            </div>
            
            <div class="span6">
              <!-- Description -->
              <h3><strong>Nos cliens</strong></h3>
              <div>Nos équipes de Conseil accompagnent et conseillent les acteurs privés et publics pour aligner leurs organisations sur leurs stratégies et réaliser leurs transformations, pour une meilleure performance globale.
                Nos équipes ont développé une expertise sectorielle approfondie et peuvent vous accompagner dans la conduite de vos projets de transformation sur toutes leurs dimensions 
              </div>
              
                <ul class="unstyled">
                  <li><b>Traiter</b></li>
                  <li>
                    <ul>
                      <li>Améliorer la performance de vos processus</li>
                      <li>Simplifier et rendre plus efficaces vos procédures de gestion </li>
                      <li>Mieux gérer vos risques</li>
                    </ul>
                  </li>        
                  <li><b>Les meilleures pratiques</b></li>
                  <li>
                    <ul>
                      <li>Mise en œuvre des meilleures pratiques informatiques (IT Service Management, IT Governance, Information Security Governance, Project Management, Business Analysis, Software Engineering)</li>
                    </ul>
                  </li>
                  <li><b>Systèmes d'information</b></li>
                  <li>
                    <ul>
                      <li>Etudes préalables à la mise en place de nouveaux systèmes, en passant par la rédaction de cahier des charges, gestion de projet, recette d'application logicielle...</li>
                    </ul>
                  </li>
                  <br>
                </ul>
                
                <hr> 
                            
              
              <div>
              DN Consulting est en mesure de mobiliser une équipe de consultants multi-compétences pour répondre au mieux aux exigences de votre secteur et à vos attentes.
              </div>
            </div>
        
        </div>
        <div class="row">
          <div class="container" style="font-size:16px;">
            <h4 class="title">Secteurs d'activité de nos clients</h4>
            <div class="span4" >
              <ul  class="unstyled">
                <li>
                  <ul>
                    <li> <i class="icon-ok"></i> Administration et secteur public</li>
                    <li> <i class="icon-ok"></i> Institutions internationales</li>
                    <li> <i class="icon-ok"></i> ONG/Programmes-Projet de développement</li>
                    <li> <i class="icon-ok"></i> Bancaire et Financier</li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="span4">
            <ul class="unstyled">
                <li>
                  <ul>
                    <li> <i class="icon-ok"></i> Assurance-Retraite</li>
                    <li> <i class="icon-ok"></i> Microfinance</li>
                    <li> <i class="icon-ok"></i> Secteur/PME</li>
                    <li> <i class="icon-ok"></i> Télécommunication/Services informatiques</li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="span3">
            <ul class="unstyled">
                <li>
                  <ul>
                    <li> <i class="icon-ok"></i> Santé</li>
                    <li> <i class="icon-ok"></i> Transport et Logistique</li>
                    
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
</section>


@stop
