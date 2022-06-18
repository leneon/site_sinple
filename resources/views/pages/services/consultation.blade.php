@extends('layouts.app',['titre'=>'Consulatnce & Conseil'])

@section('content')
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span12">
              <div class="inner-heading">
                  <ul class="breadcrumb">
                  <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                  <li class="active">Services</li>
                  </ul>
                  <h5>Services de <strong>Consultation & Conseil</strong></h5>
              </div>
            </div>

        <div class="span12">
            <blockquote>
            Nous fournissons des Services de Consultance et de Conseil pour aider les organisations à mettre en œuvre des projets informatiques 
            ou à les aligner sur les normes internationales et les cadres de meilleures pratiques.
            </blockquote>
        </div>

        <div class="span12">
            <h4>Nos Axes de Collaboration</h4>
            <!-- start: Accordion -->
            <div class="accordion" id="accordion2">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                <i class="icon-minus"></i> Axe 1: Gouvernance, Architecture et Stratégie Informatique</a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <div class="container fluid">
                            <li>  Gouvernance Informatique (pour le Secteur public, pour la Banque et la Finance, pour les Télécommunications)</li>
                            <li>  Cadre COBIT (Conscience, Fondation, Executant, Evaluateur)</li>
                            <li>  Cadre ITIL (Awareness, Foundation, Intermadiate, Expert)</li>
                            <li>  Cadre TOGAF (Conscience, Fondation, Praticien)</li>
                            <li>  Pratique ISO (ISO 9001, ISO 38500, ISO 20000: Sensibilisation, Exécutant ou Auditeur)</li>
                            <li>  Autres (ISO 9001, Lean IT, Green IT, Balanced score card, Préparation ISACA CGEIT ...)</li>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                <i class="icon-plus"></i> Axe 2: Audit, Risque IT er Sécuritéde l'Information</a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <div class="container fluid">
                                <li>Pratiques d'audit(Pratiques d'audit du systeme d'information,Préparation ISACA, CISCA, ...)</li>
                                <li>Gouvernance de la sécurité de l'information(pour le Secteur public, pour la Banque et la Finance, pour les Télécommunications, ...)</li>
                                <li>Pratique de gestion de risques(Gestion des risquesd'entreprise, Préparation ISACA CRISC, Méthodologies de gestion de risques d'informatiquess</li>
                                <li>Pratiques de sécurité (PCI DSS, Pratiques de cybersécurité et de sécurité de l'information,Préparation ISAC CISM, Pratiques de continuides activités)</li>
                                <li>Pratique ISO (Sensibilisation SMSI, Sensibilisation BCMS, ISO 27001 LI, ISO 27001 LA, ISO 22301 LI, ISO 22301 LA)</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                <i class="icon-plus"></i> Axe 3: Analyse d'Affaire , Systeme d'information et Technologies</a>
                    </div>
                    <div id="collapseThree" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <div class="container fluid">
                                <li>Pratiques d'analyse commercial (Sensibilisation, Cadre BABOK,Certification CBAP et CCBA)</li>
                                <li>Pratiques de gestion des données (Harmaonisation des données, Analyse des données, Exploration de données,Base de données)</li>
                                <li>Pratiques du système d'information (Notations de modélisation(UML,BPMN), Business Process Management, Requirement Management, ERP, SOA)</li>
                                <li>Technologies (Big Data, Cloud Computing, Virtualisation, Gestion de réseaux, Gestin de système, Gestion de centre de données, ...)</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                <i class="icon-plus"></i> Axe 4: Gestion de programme et de projet</a>
                    </div>
                    <div id="collapseFour" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <div class="container fluid">
                            <li>Cadre de gestion de projet (PMBOK, Certifications PMI, PRINCE 2 Foundation et Pratitionner)</li>
                            <li>Formation aux méthodologies de gestion de projet SI (Gestion de projets informatique, Méthodologie SCRUM, Méthodologie RUP)</li>
                            <li>Outils de gestion de projets (MS Project, MS EPM, PIMAVERA, ...)</li>
                            </div>
                        </div>
                    </div>
                </div>
                
            
            </div>
            <!--end: Accordion -->
        </div>
</div>

</section>


@stop

