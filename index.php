 <!doctype html>
        <html lang="fr">
        
        <head>
        
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="">
          
          <title></title>
          
        
          <link type="text/css" rel="stylesheet" href="css/modernizer.css"  media="screen,projection"/>
          <link href="css/style.css" rel="stylesheet" type="text/css" />
          <link href="css/carousel.core.css" rel="stylesheet">
          <link href="css/carousel.theme.css" rel="stylesheet">
          <link href="css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
          
          
        <!--[if lt IE 9]>
        <script src="js/css3-queries.js"></script>
        <![endif]-->
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        </head>
        
        <body>      




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123290992-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123290992-1');
</script>




    <div id="header">

    <div class="parallax-container uplvlPara">
      <div id="content_header">
       <div class="box_header">
          <div id="logo"><img src="images/logo_header.jpg" /></div>
          <h2>FORMULAIRE D’INSCRIPTION</h2>
          <div class="line"></div>
         Vous souhaitez intégrer notre université ? <br>
Choisissez une formation et remplissez 
le formulaire d’inscription pour être recontacté.
       </div>
      </div>
      <div class="parallax"><img src="images/header_parallax.jpg"></div>
    </div>

    </div>



                 <form class="col s12 vwForm" id="formID" action="dopost.php" method="POST">

      <div id="cont_formations">
        <div id="dataFormations">           
           <h2>Quelle formation vous intéresse ?</h2>
           <div class="row"> 
             <div class="input-field col m12 s12">
              <select class="champsMe nytList validate[required]" name="formation">
                <option value="">Formations</option>
                <option value="Année préparatoire aux Licences Professionnelles – Santé et Management">Année préparatoire aux Licences Professionnelles – Santé et Management</option>
                <option value="Année préparatoire aux Licences Professionnelles - Science et Technique">Année préparatoire aux Licences Professionnelles - Science et Technique</option>
                <option value="Formation Architecte Post Bac">Formation Architecte Post Bac</option>
                <option value="Licence Professionnelle Génie des procédés Industriels et Digitalisation  (GPID)">Licence Professionnelle Génie des procédés Industriels et Digitalisation  (GPID)</option>
                <option value="Licence Professionnelle Maintenance des Equipements Médicaux  (MEM)">Licence Professionnelle Maintenance des Equipements Médicaux  (MEM)</option>
                <option value="Licence Professionnelle Opérations Industrielles et Digitalisation  (OID)">Licence Professionnelle Opérations Industrielles et Digitalisation  (OID)</option>
                <option value="Licence Professionnelle Santé et Management Hospitalier (SMH)">Licence Professionnelle Santé et Management Hospitalier (SMH)</option>
                <option value="Licence Sciences des Données (LSD)">Licence Sciences des Données (LSD)</option>
                <option value="Master Biotechnologie et Agrobiosciences (BABS)">Master Biotechnologie et Agrobiosciences (BABS)</option>
                <option value="Master Electrical Engineering For Renewable Energy & Smart Grids (RESMA) ">Master Electrical Engineering For Renewable Energy & Smart Grids (RESMA) </option>
                <option value="Master Fertilizer Science & Technology(FS&T)">Master Fertilizer Science & Technology(FS&T)</option>
                <option value="Master Green Building Engineering and Energy Efficiency “Green BEE” ">Master Green Building Engineering and Energy Efficiency “Green BEE” </option>
                <option value="Master Modélisation Hybride Avancée et Calcul Scientifique (MHACS)">Master Modélisation Hybride Avancée et Calcul Scientifique (MHACS)</option>
                <option value="Master Resilient, Sustainable and Smart Buildings and Cities (RSSBC)">Master Resilient, Sustainable and Smart Buildings and Cities (RSSBC)</option>
                <option value="Master Sciences Chimiques et Valorisation des Phosphates Naturels (SCVPN)">Master Sciences Chimiques et Valorisation des Phosphates Naturels (SCVPN)</option>
                <option value="Master Sciences des Données et Aide à la Décision (SDAD)">Master Sciences des Données et Aide à la Décision (SDAD)</option>
                <option value="Master Sciences et Ingénierie des Matériaux">Master Sciences et Ingénierie des Matériaux</option>
                <option value="Master Technologies Industrielles pour l’Usine du Futur (TIUF)">Master Technologies Industrielles pour l’Usine du Futur (TIUF)</option>
              </select>
             </div>
           </div> 
        </div> <!-- End Data formations -->
     </div>
  


          <div class="fullSection">
            <?php if( (isset($_GET["status"])) and (!empty($_GET["status"])) ) {
              echo "<div class='MsgUser'>Votre inscription a bien été enregistrée.</div>";
                  }
            ?>
            <h2>formulaire de renseignement</h2>
           <div id="formContainer">
                   <div class="row"> 

                    <div class="input-field col m6 s12">
                  <input value=""  autocomplete="off" type="text" id="nom" placeholder="Nom" name="nom"  class="champsMe validate[required] textField"/> 
                    </div>


                    <div class="input-field col m6 s12">
                  <input value=""  autocomplete="off" type="text" id="nom" placeholder="Prénom" name="prenom"  class="champsMe validate[required] textField"/> 
                    </div>


                    <div class="input-field col m6 s12">
                  <input value=""  autocomplete="off" type="text" id="specialite"  placeholder="Spécialité
" name="specialite"  class="champsMe validate[required] textField"/> 
                    </div>

                    <div class="input-field col m6 s12">
                  <input value="" autocomplete="off" type="text" id="diplome" placeholder="Dernier diplôme
" name="diplome"  class="champsMe validate[required] textField"/> 
                    </div>


                   <div class="input-field col m6 s12">
                  <input value="" autocomplete="off" type="text" id="tel"  placeholder="Etablissement actuel" name="ecole"  class="champsMe validate[required] textField"/>
                   </div>


                   <div class="input-field col m6 s12">
                  <input value="" autocomplete="off" type="text" id="mobile"  placeholder="Mobile
" name="mobile"  class="champsMe validate[required,custom[integer]] textField"/>
                   </div>

<!--     <div class="input-field col m6 s12">
                  <input value="" autocomplete="off" type="text" id="mobile"  placeholder="Mobile
" name="mobile"  class="champsMe validate[required,custom[integer],custom[phoneStrict],minSize[14],maxSize[14]] textField"/>
                   </div> -->

                  <div class="input-field col m6 s12">
                  <input value="" autocomplete="off" type="text" id="email" placeholder="E-mail
" name="email"  class="champsMe validate[required,custom[email]] textField"/> 
                    </div>


                   <!-- <div class="input-field col m6 s12">
                  <input value="" autocomplete="off" type="text" id="dn" maxlength="80" placeholder="Date de naissance
" name="dn"  class="champsMe validate[required] datepicker textField"/>
                   </div>  -->                  


                   <div class="input-field col m6 s12">
      <select class="champsMe nytList validate[required]" name="pays">
<option value="">Pays</option>
<option value="Maroc">Maroc</option>
<option value="Afghanistan">Afghanistan </option>
<option value="Afrique_Centrale">Afrique_Centrale </option>
<option value="Afrique_du_sud">Afrique_du_Sud </option>
<option value="Albanie">Albanie </option>
<option value="Algerie">Algerie </option>
<option value="Allemagne">Allemagne </option>
<option value="Andorre">Andorre </option>
<option value="Angola">Angola </option>
<option value="Anguilla">Anguilla </option>
<option value="Arabie_Saoudite">Arabie_Saoudite </option>
<option value="Argentine">Argentine </option>
<option value="Armenie">Armenie </option>
<option value="Australie">Australie </option>
<option value="Autriche">Autriche </option>
<option value="Azerbaidjan">Azerbaidjan </option>
<option value="Bahamas">Bahamas </option>
<option value="Bangladesh">Bangladesh </option>
<option value="Barbade">Barbade </option>
<option value="Bahrein">Bahrein </option>
<option value="Belgique">Belgique </option>
<option value="Belize">Belize </option>
<option value="Benin">Benin </option>
<option value="Bermudes">Bermudes </option>
<option value="Bielorussie">Bielorussie </option>
<option value="Bolivie">Bolivie </option>
<option value="Botswana">Botswana </option>
<option value="Bhoutan">Bhoutan </option>
<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
<option value="Bresil">Bresil </option>
<option value="Brunei">Brunei </option>
<option value="Bulgarie">Bulgarie </option>
<option value="Burkina_Faso">Burkina_Faso </option>
<option value="Burundi">Burundi </option>
<option value="Caiman">Caiman </option>
<option value="Cambodge">Cambodge </option>
<option value="Cameroun">Cameroun </option>
<option value="Canada">Canada </option>
<option value="Canaries">Canaries </option>
<option value="Cap_vert">Cap_Vert </option>
<option value="Chili">Chili </option>
<option value="Chine">Chine </option>
<option value="Chypre">Chypre </option>
<option value="Colombie">Colombie </option>
<option value="Comores">Colombie </option>
<option value="Congo">Congo </option>
<option value="Congo_democratique">Congo_democratique </option>
<option value="Cook">Cook </option>
<option value="Coree_du_Nord">Coree_du_Nord </option>
<option value="Coree_du_Sud">Coree_du_Sud </option>
<option value="Costa_Rica">Costa_Rica </option>
<option value="Cote_d_Ivoire">CÃ´te_d_Ivoire </option>
<option value="Croatie">Croatie </option>
<option value="Cuba">Cuba </option>
<option value="Danemark">Danemark </option>
<option value="Djibouti">Djibouti </option>
<option value="Dominique">Dominique </option>
<option value="Egypte">Egypte </option>
<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
<option value="Equateur">Equateur </option>
<option value="Erythree">Erythree </option>
<option value="Espagne">Espagne </option>
<option value="Estonie">Estonie </option>
<option value="Etats_Unis">Etats_Unis </option>
<option value="Ethiopie">Ethiopie </option>
<option value="Falkland">Falkland </option>
<option value="Feroe">Feroe </option>
<option value="Fidji">Fidji </option>
<option value="Finlande">Finlande </option>
<option value="France">France </option>
<option value="Gabon">Gabon </option>
<option value="Gambie">Gambie </option>
<option value="Georgie">Georgie </option>
<option value="Ghana">Ghana </option>
<option value="Gibraltar">Gibraltar </option>
<option value="Grece">Grece </option>
<option value="Grenade">Grenade </option>
<option value="Groenland">Groenland </option>
<option value="Guadeloupe">Guadeloupe </option>
<option value="Guam">Guam </option>
<option value="Guatemala">Guatemala</option>
<option value="Guernesey">Guernesey </option>
<option value="Guinee">Guinee </option>
<option value="Guinee_Bissau">Guinee_Bissau </option>
<option value="Guinee equatoriale">Guinee_Equatoriale </option>
<option value="Guyana">Guyana </option>
<option value="Guyane_Francaise ">Guyane_Francaise </option>
<option value="Haiti">Haiti </option>
<option value="Hawaii">Hawaii </option>
<option value="Honduras">Honduras </option>
<option value="Hong_Kong">Hong_Kong </option>
<option value="Hongrie">Hongrie </option>
<option value="Inde">Inde </option>
<option value="Indonesie">Indonesie </option>
<option value="Iran">Iran </option>
<option value="Iraq">Iraq </option>
<option value="Irlande">Irlande </option>
<option value="Islande">Islande </option>
<option value="Israel">Israel </option>
<option value="Italie">italie </option>
<option value="Jamaique">Jamaique </option>
<option value="Jan Mayen">Jan Mayen </option>
<option value="Japon">Japon </option>
<option value="Jersey">Jersey </option>
<option value="Jordanie">Jordanie </option>
<option value="Kazakhstan">Kazakhstan </option>
<option value="Kenya">Kenya </option>
<option value="Kirghizstan">Kirghizistan </option>
<option value="Kiribati">Kiribati </option>
<option value="Koweit">Koweit </option>
<option value="Laos">Laos </option>
<option value="Lesotho">Lesotho </option>
<option value="Lettonie">Lettonie </option>
<option value="Liban">Liban </option>
<option value="Liberia">Liberia </option>
<option value="Liechtenstein">Liechtenstein </option>
<option value="Lituanie">Lituanie </option>
<option value="Luxembourg">Luxembourg </option>
<option value="Lybie">Lybie </option>
<option value="Macao">Macao </option>
<option value="Macedoine">Macedoine </option>
<option value="Madagascar">Madagascar </option>
<option value="MadÃ¨re">MadÃ¨re </option>
<option value="Malaisie">Malaisie </option>
<option value="Malawi">Malawi </option>
<option value="Maldives">Maldives </option>
<option value="Mali">Mali </option>
<option value="Malte">Malte </option>
<option value="Man">Man </option>
<option value="Mariannes du Nord">Mariannes du Nord </option>
<option value="Maroc">Maroc </option>
<option value="Marshall">Marshall </option>
<option value="Martinique">Martinique </option>
<option value="Maurice">Maurice </option>
<option value="Mauritanie">Mauritanie </option>
<option value="Mayotte">Mayotte </option>
<option value="Mexique">Mexique </option>
<option value="Micronesie">Micronesie </option>
<option value="Midway">Midway </option>
<option value="Moldavie">Moldavie </option>
<option value="Monaco">Monaco </option>
<option value="Mongolie">Mongolie </option>
<option value="Montserrat">Montserrat </option>
<option value="Mozambique">Mozambique </option>
<option value="Namibie">Namibie </option>
<option value="Nauru">Nauru </option>
<option value="Nepal">Nepal </option>
<option value="Nicaragua">Nicaragua </option>
<option value="Niger">Niger </option>
<option value="Nigeria">Nigeria </option>
<option value="Niue">Niue </option>
<option value="Norfolk">Norfolk </option>
<option value="Norvege">Norvege </option>
<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
<option value="Oman">Oman </option>
<option value="Ouganda">Ouganda </option>
<option value="Ouzbekistan">Ouzbekistan </option>
<option value="Pakistan">Pakistan </option>
<option value="Palau">Palau </option>
<option value="Palestine">Palestine </option>
<option value="Panama">Panama </option>
<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
<option value="Paraguay">Paraguay </option>
<option value="Pays_Bas">Pays_Bas </option>
<option value="Perou">Perou </option>
<option value="Philippines">Philippines </option>
<option value="Pologne">Pologne </option>
<option value="Polynesie">Polynesie </option>
<option value="Porto_Rico">Porto_Rico </option>
<option value="Portugal">Portugal </option>
<option value="Qatar">Qatar </option>
<option value="Republique_Dominicaine">Republique_Dominicaine </option>
<option value="Republique_Tcheque">Republique_Tcheque </option>
<option value="Reunion">Reunion </option>
<option value="Roumanie">Roumanie </option>
<option value="Royaume_Uni">Royaume_Uni </option>
<option value="Russie">Russie </option>
<option value="Rwanda">Rwanda </option>
<option value="Sahara Occidental">Sahara Occidental </option>
<option value="Sainte_Lucie">Sainte_Lucie </option>
<option value="Saint_Marin">Saint_Marin </option>
<option value="Salomon">Salomon </option>
<option value="Salvador">Salvador </option>
<option value="Samoa_Occidentales">Samoa_Occidentales</option>
<option value="Samoa_Americaine">Samoa_Americaine </option>
<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
<option value="Senegal">Senegal </option>
<option value="Seychelles">Seychelles </option>
<option value="Sierra Leone">Sierra Leone </option>
<option value="Singapour">Singapour </option>
<option value="Slovaquie">Slovaquie </option>
<option value="Slovenie">Slovenie</option>
<option value="Somalie">Somalie </option>
<option value="Soudan">Soudan </option>
<option value="Sri_Lanka">Sri_Lanka </option>
<option value="Suede">Suede </option>
<option value="Suisse">Suisse </option>
<option value="Surinam">Surinam </option>
<option value="Swaziland">Swaziland </option>
<option value="Syrie">Syrie </option>
<option value="Tadjikistan">Tadjikistan </option>
<option value="Taiwan">Taiwan </option>
<option value="Tonga">Tonga </option>
<option value="Tanzanie">Tanzanie </option>
<option value="Tchad">Tchad </option>
<option value="Thailande">Thailande </option>
<option value="Tibet">Tibet </option>
<option value="Timor_Oriental">Timor_Oriental </option>
<option value="Togo">Togo </option>
<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
<option value="Tristan da cunha">Tristan de cuncha </option>
<option value="Tunisie">Tunisie </option>
<option value="Turkmenistan">Turmenistan </option>
<option value="Turquie">Turquie </option>
<option value="Ukraine">Ukraine </option>
<option value="Uruguay">Uruguay </option>
<option value="Vanuatu">Vanuatu </option>
<option value="Vatican">Vatican </option>
<option value="Venezuela">Venezuela </option>
<option value="Vierges_Americaines">Vierges_Americaines </option>
<option value="Vierges_Britanniques">Vierges_Britanniques </option>
<option value="Vietnam">Vietnam </option>
<option value="Wake">Wake </option>
<option value="Wallis et Futuma">Wallis et Futuma </option>
<option value="Yemen">Yemen </option>
<option value="Yougoslavie">Yougoslavie </option>
<option value="Zambie">Zambie </option>
<option value="Zimbabwe">Zimbabwe </option>
      </select>       
                   </div>




        <div class="input-field col m12 s12">
          <textarea id="question" name="question" class="materialize-textarea"></textarea>
          <label for="question">Question ou commentaires</label>
        </div>


                       <!-- Switch -->
         <div class="input-field col m12 s12">
         <div class="switch switerCentred">
          <label class="txt_reglement_contact">
            <input autocomplete="off"  class="validate[required] checkbox" data-prompt-position="topLeft:+50" type="checkbox" id="agree" value="oui" name="agree" />
            <span class="lever"></span>
En cliquant sur “Envoyer”, vous accordez le droit
à l’Université Mohammed VI Polytechnique<br>d’utiliser
vos coordonnées pour vous contacter et partager
avec vous des informations relatives à ses programmes,
départements et partenaires.


          </label>
          <input type="checkbox" name="agree" value="oui" class="validate[required] checkbox" />  
         </div> 
         </div>   






                  <div class="clear"></div>
         <button class="btn waves-effect waves-light subBtnForm" type="submit" name="action">
          Envoyer &nbsp; <i class="fa sub_frm_ico fa-arrow-right"></i>
         </button>
        

          </div>
        </div><!-- End Main Row -->
          


      <div class="clear"></div>

      <div id="backToForm">
         revenir<br>
         au formulaire
         <i class="fa fa-long-arrow-up"></i>
      </div>


<!--            <div id="callToaction">
            <a href="#" title="">
              <div class="content">
              <span>cliquez ici</span>
              pour lire la description complète
              de la formation.
              </div>
            </a>
           </div> -->

      </div> <!-- End FullForm -->       

                 </form>








     <div class="detailMaster">
    <div id="container">

      <div class="elem_formation">
         <div class="media_formation"><img src="images/v1.jpg" alt="" /></div>
         <div class="content_formation">
            <h1>débouchés à l’issue du master</h1>
            <div class="dataFormation">
              <strong>Les lauréats de ce Master auront accès à des options de carrière dans plusieurs organismes, tels que</strong>:<br>
              <ul>
                <li>Industries automobile et aéronautique</li>
                <li>Energies renouvelables</li>
                <li>Compagnies minières</li>
                <li>Cimenterie, céramiques et verre</li>
                <li>Plasturgie et textile</li>
                <li>Mobilité et stockage électrique (Batteries)</li>
                <li>Centres d’analyse</li>
                <li>Services de recherche et développement</li>
                <li>Bureaux d’études</li>
                <li>Création d’entreprises (auto-emploi) Ou poursuivre une carrière dans la recherche.</li>
              </ul>
            </div>
         </div>
      </div>



      <div class="elem_formation">
         <div class="content_formation">
            <h1>Conditions d’accès</h1>
            <div class="dataFormation">
Être titulaire d’une Licence en sciences chimiques, physiques ou
d’un diplôme équivalent
            </div>
         </div>
         <div class="media_formation"><img src="images/v2.jpg" alt="" /></div>
      </div>


      <div class="elem_formation">
         <div class="media_formation"><img src="images/v3.jpg" alt="" /></div>
         <div class="content_formation">
            <h1>Dossier de candidature (*)</h1>
            <div class="dataFormation">
             <!--  <strong>Les lauréats de ce Master auront plusieurs options de carrières dans plusieurs domaines tels que </strong>:<br> -->
              <ul>
                <li>Lettre de motivation manuscrite</li>
                <li>Curriculum Vitae</li>
                <li>Deux photos d’identité</li>
                <li>Relevés de notes</li>
                <li>Copie des diplômes ou attestations de réussite</li>
                <li>Photocopie de la C.N.I.</li>
                <li>les noms de deux références</li>
              </ul>
<small><strong>(*) Les documents originaux et / ou copies certifiées conformes seront requis au moment
de l’inscription finale</strong></small>
            </div>
         </div>
      </div>




      <div class="elem_formation">
         <div class="content_formation">
            <h1>Frais de scolarité (*)</h1>
            <div class="dataFormation">
              <ul>
                <li>Frais d’inscription : 5.000 Dhs</li>
                <li>Frais d’études : 75.000 Dhs / an</li>
             </ul>
<small><strong>(*) Possibilité d’octroi de bourse sur la base du mérite, de l’excellence
et des conditions sociales</strong></small>
            </div>
         </div>
         <div class="media_formation"><img src="images/v4.jpg" alt="" /></div>
      </div>      


      <div class="elem_formation">
         <div class="media_formation"><img src="images/v5.jpg" alt="" /></div>
         <div class="content_formation">
            <h1>Modalités d’inscription & dates clés</h1>
            <div class="dataFormation">
              <!-- <strong>Les lauréats de ce Master auront plusieurs options de carrières dans plusieurs domaines tels que </strong>:<br> -->
              <ul>
                  <li>Inscription en ligne et dépôt électronique du dossier avant le 15 Septembre 2018</li>
                  <li>Affichage de la liste des candidats retenus après étude des dossiers: 20 Septembre 2018</li>
                  <li>Test écrit et entretien oral: 25 Septembre 2018</li>
                  <li>Affichage des résultats: 30 Septembre</li>
                  <li>Démarrage des cours: 15 Octobre 2018</li>
              </ul>
            </div>
         </div>
      </div>




    </div> <!-- End Container -->
     </div> <!-- End DetailMaster -->


 





            


                  <script type="text/javascript" src="js/nytsee/TweenMax.min.js"></script>
                  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
                  <script src="js/jquery.validationEngine-fr.js" type="text/javascript" charset="utf-8"></script>
                  <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
 
                  <script src="js/scriptaculos.js"></script>
                  <script src="js/html_5_nytsee.js"></script>
                  <script type="text/javascript" src="js/materialize.min.js"></script> 



    </body>
  </html>
