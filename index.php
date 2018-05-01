<?php 
	session_start();
	include("/home/chiroschelle/public_html/mefi/php/functions.php");
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Medische Fiche Online!</title>
		<meta name="description" content="Vul nu je medische fiche online in! - Chiro Schelle">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/mefi/images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="/mefi/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="/mefi/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="/mefi/css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="/mefi/css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="/mefi/css/custom.css" rel="stylesheet">
      
      
    <script style="text/javascript">
      function creeerElement(){
      var table = document.createElement('MedicatieLijst');
        var tr = document.createElement('tr');   

          var td1 = document.createElement('td');
          var td2 = document.createElement('td');
          var td3 = document.createElement('td');

          var input1 = document.createElement("input");
          var input2 = document.createElement("input");
          var input3 = document.createElement("input");
		  
		  input1.name = "MedicatieLijst[]";
		  input2.name = "MedicatieLijst[]";
		  input3.name = "MedicatieLijst[]";

          td1.appendChild(input1);
          td2.appendChild(input2);
          td3.appendChild(input3);
          tr.appendChild(td1);
          tr.appendChild(td2);
          tr.appendChild(td3);

          var element = document.getElementById("MedicatieLijst");
	      element.appendChild(tr);
      }
        
      function enableAndere() {
       if ( document.getElementById("ZLandere").checked == true ) {
            document.getElementById("ZLarea").disabled = false;
       }
        else {
            document.getElementById("ZLarea").disabled = true;
            document.getElementById("ZLarea").value = "";
        }
      }
    </script>
      
      <script src='https://www.google.com/recaptcha/api.js'></script>
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="#banner">Chiro Schelle</a></div>
								<div class="site-slogan">Medische Fiche Online!</div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li><a href="/mefi/login/">Login</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container-fluid">
					<div class="row-fluid">
						<!--<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">-->
							<h3 class="Nieuwe Medische Fiche"></h3>
							<!--Hier moet een form kome-->
                          
                          <div class="col-xs-0 col-md-1 col-lg-2"></div>
                            <div class="col-xs-12 col-md-10 col-lg-8 form-container">
                              <form action="index.php" method="POST">
								<input name="function" value="NieuweFiche" hidden />
                                  <table class="table">
                                    <tr>
                                      <td colspan="3"><h3>Kamp 2017 - 2018 - Individuele medische steekkaart</h3></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3">Beste ouders, deze steekkaart moet door u of een arts zorgvuldig worden ingevuld. Aldus kan er rekening worden gehouden met de behoeften en mogelijkheden van uw kind tijdens zijn vakantieverblijf.
                                        <br>
                                        <span class="required">Gelieve deze velden in te vullen!</span>
                                        <br>&nbsp;<hr></td>
                                    </tr>
                                    <tr>
                                      <td>Afdeling&nbsp;<span class="required">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <select name="Afdeling" required>
                                          <option value=""></option>
                                          <option value="Ribbel Meisjes">Ribbel Meisjes</option>
                                          <option value="Ribbel Jongens">Ribbel Jongens</option>
                                          <option value="Speelclub meisjes">Speelclub meisjes</option>
                                          <option value="Speelclub jongens">Speelclub jongens</option>
                                          <option value="Kwiks">Kwiks</option>
                                          <option value="Rakkers">Rakkers</option>
                                          <option value="Tippers">Tippers</option>
                                          <option value="Toppers">Toppers</option>
                                          <option value="Tiptiens">Tiptiens</option>
                                          <option value="Kerels">Kerels</option>
                                          <option value="Aspi Meisjes">Aspi Meisjes</option>
                                          <option value="Aspi Jongens">Aspi Jongens</option>
                                          <option value="Kokkie">Kokkie</option>
                                          <option value="Kookploeg">Kookploeg</option>
                                          <option value="VB">VB</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr><td colspan="3"><h6>Identiteit van het kind</h6></td></tr>
                                    <tr>
                                      <td style="width: 33%;">Naam <span class="required">*</span></td>
                                      <td style="width: 33%;">Voornamen <span class="required">*</span></td>
                                      <td style="width: 33%;">Geboortedatum <span class="required">*</span></td>
                                    </tr>
                                    <tr>
                                      <td><input type="text" name="Naam"  style="width: 90%;" required></td>
                                      <td><input type="text" name="Voornaam" style="width: 90%;" required></td>
                                      <td><input type="date" name="Geboortedatum" style="width: 90%;" required></td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                </table>
                                <table class="table">
                                    <tr><td colspan="4"><h6>Adres</h6></td></tr>
                                    <tr>
                                      <td width="40%">Straat <span class="required">*</span></td>
                                      <td width="10%">Nummer <span class="required">*</span></td>
                                      <td width="15%">Postcode <span class="required">*</span></td>
                                      <td width="35%">Woonplaats <span class="required">*</span></td>
                                    </tr>
                                    <tr>
                                      <td><input style="width: 100%;" type="text" name="Straat" required></td>
                                      <td><input style="width: 100%;" type="text" name="Nummer" required></td>
                                      <td><input style="width: 100%;" type="text" name="Postcode" required></td>
                                      <td><input style="width: 100%;" type="text" name="Woonplaats" required></td>
                                    </tr>
                                    <tr><td colspan="4"><hr></td></tr>
                                </table>
                                <table class="table">
                                    <tr><td colspan="3"><h6>Contactgegevens gezinsleden</h6></td></tr>
                                    <tr>
                                      <td>Telefoonnummer <span class="required">*</span></td>
                                      <td>Naam en voornaam <span class="required">*</span></td>
                                      <td>Verwantschap <span class="required">*</span></td>
                                    </tr>
                                    <tr>
                                      <td><input type="text" name="Telefoon1" style="width: 90%;" required></td>
                                      <td><input type="text" name="NaamVoornaam1" style="width: 90%;" required></td>
                                      <td><input type="text" name="Verwantschap1" style="width: 90%;" required></td>
                                    </tr>
                                    <tr>
                                      <td><input type="text" name="Telefoon2" style="width: 90%;"></td>
                                      <td><input type="text" name="NaamVoornaam2" style="width: 90%;"></td>
                                      <td><input type="text" name="Verwantschap2" style="width: 90%;" ></td>
                                    </tr>
                                    <tr><td colspan="4"><hr></td></tr>
                                </table>
                                <table class="table">
                                    <tr><td colspan="3"><h6>Medische gegevens en vragenlijst</h6></td></tr>
                                    <tr>
                                      <td>Naam huisarts <span class="required">*</span></td>
                                      <td>Telefoonnummer huisarts <span class="required">*</span></td>
                                      <td>Bloedgroep <span class="required">*</span></td>
                                      <td>Rhesusfactor <span class="required">*</span></td>
                                    </tr>
                                    <tr>
                                      <td><input type="text" name="NaamHuisarts" required></td>
                                      <td><input type="text" name="TelefoonArts" required></td>
                                      <td><input type="text" name="Bloedgroep" required></td>
                                      <td><input type="text" name="ResusFactor" required></td>
                                    </tr>
                                  </table>
                                
                                  <table class="table">
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr>
                                      <td><strong>Beantwoord onderstaande vragen door rechts ja of neen aan te vinken en verduidelijk uw antwoord indien nodig.</strong></td>
                                      <td width="5%">JA</td>
                                      <td width="5%">NEE</td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr>
                                      <td>Lijdt uw kind aan een van onderstaande ziekten? <span class="required">*</span></td>
                                      <td><input type="radio" group="ZiektenLijst" name="ZiektenLijst[]" value="Ja" required></td>
                                      <td><input type="radio" group="ZiektenLijst" name="ZiektenLijst[]" value="Nee" checked="true"></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3">
                                        <table class="table">
                                          <tr>
                                            <td><input type="checkbox" name="ZiektenLijst[]" value="suikerziekte"> Suikerziekte</td>
                                            <td><input type="checkbox" name="ZiektenLijst[]" value="astma"> Astma</td>
                                            <td><input type="checkbox" name="ZiektenLijst[]" value="hartkwaal"> Hartkwaal</td>
                                            <td><input type="checkbox" name="ZiektenLijst[]" value="epilepsie"> Epilepsie</td>
                                            <td><input type="checkbox" name="ZiektenLijst[]" value="reuma"> Reuma</td>
                                            <td width="10%"></td>
                                          </tr>
                                          <tr>
                                            <td><input type="checkbox" name="ZiektenLijst[]" value="huidaandoening"> Huidaandoeningen</td>
                                            <td><input type="checkbox" name="ZiektenLijst[]" value="slaapwandelen"> Slaapwandelen</td>
                                            <td><input type="checkbox" name="ZiektenLijst[]" value="hooikoorts"> Hooikoorts</td>
                                            <td><input type="checkbox" name="ZiektenLijst[]" value="allergieën"> Allergieën</td>
                                            <td><input type="checkbox" name="ZiektenLijst[]" id="ZLandere" onchange="enableAndere()" value=""> Andere</td>
                                            <td></td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td colspan="3">Indien u Andere heeft aangevinkt, welke?</td>
                                    </tr>
                                    <tr>
                                      <td><textarea name="ZiektenLijst[]" disabled id="ZLarea"></textarea></td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr>
                                      <td></td>
                                      <td width="5%">JA</td>
                                      <td width="5%">NEE</td>
                                    </tr>
                                    
                                    <tr><td colspan="3"><hr></td></tr>
                                    
                                    <tr>
                                      <td>Is uw kind lactose intolerant? <span class="required">*</span></td>
                                      <td><input type="radio" group="Lactose" name="Lactose" value="Ja" onchange="LactoseZichtbaar()" required></td>
                                      <td><input type="radio" group="Lactose" name="Lactose" value="Nee" onchange="HideOnLoad()" checked="true"></td>
                                    </tr>
									<tr id="trlac1" style="display:none;">
									  <td>Enkel melkproducten in eten verwerkt. <span class="required">*</span></td>
									  <td><input id="lactose1" type="radio" group="LactoseX" name="LactoseX" value="Verwerkt"></td>
									</tr>
									<tr id="trlac2" style="display:none;">
                                      <td>Totaal geen melkproducten. <span class="required">*</span></td>
                                      <td><input id="lactose2" type="radio" group="LactoseX" name="LactoseX" value="Geen"></td></td>
                                      <td></td>
                                    </tr>
									
									<tr><td colspan="3"><hr></td></tr>
									
									<tr>
                                      <td>Is uw kind bijzonder gevoelig voor bepaalde stoffen of voedingsmiddelen? Zo ja, welke? <span class="required">*</span></td>
                                      <td><input type="radio" group="GevoeligStoffenVoeding" name="GevoeligStoffenVoeding[]" value="Ja" required></td>
                                      <td><input type="radio" group="GevoeligStoffenVoeding" name="GevoeligStoffenVoeding[]" value="Nee" checked="true"></td>
                                    </tr>
                                    <tr>
                                      <td><textarea name="GevoeligStoffenVoeding[]"></textarea></td>
                                    </tr>
									<tr><td colspan="3"><hr></td></tr>
                                    <tr>
                                      <td>Is uw kind ooit ernstig ziek geweest of heeft het heelkundige ingrepen ondergaan? Zo ja, welke? <span class="required">*</span></td>
                                      <td><input type="radio" group="Ingrepen" name="Ingrepen[]" value="Ja" required></td>
                                      <td><input type="radio" group="Ingrepen" name="Ingrepen[]" value="Nee" checked="true"></td>
                                    </tr>
                                    <tr>
                                      <td><textarea name="Ingrepen[]"></textarea></td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr>
                                      <td>Werd uw kind gevaccineerd tegen klem (tetanus)? Zo ja, welk jaar? <span class="required">*</span></td>
                                      <td><input type="radio" group="VaccinatieTetanus" name="VaccinatieTetanus[]" value="Ja" required></td>
                                      <td><input type="radio" group="VaccinatieTetanus" name="VaccinatieTetanus[]" value="Nee" checked="true"></td>
                                    </tr>
                                    <tr>
                                      <td><input type="text" name="VaccinatieTetanus[]"/></td>
                                    </tr><tr><td colspan="3"><hr></td></tr>
                                    <tr>
                                      <td>Kreeg uw kind reeds serum tegen klem (tetanus)? Zo ja, welk jaar? <span class="required">*</span></td>
                                      <td><input type="radio" group="SerumTetanus" name="SerumTetanus[]" value="Ja" required></td>
                                      <td><input type="radio" group="SerumTetanus" name="SerumTetanus[]" value="Nee" checked="true"></td>
                                    </tr>
                                    <tr>
                                      <td><input type="text" name="SerumTetanus[]" /></td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr>
                                      <td>Werd uw kind gevaccineerd tegen hersenvliesontsteking (type C)? <span class="required">*</span></td>
                                      <td><input type="radio" group="VaccinatieHersenvliesontsteking" name="VaccinatieHersenvliesontsteking" value="Ja" required></td>
                                      <td><input type="radio" group="VaccinatieHersenvliesontsteking" name="VaccinatieHersenvliesontsteking" value="Nee" checked="true"></td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr>
                                      <td>Is uw kind bijzonder gevoelig of allergisch voor bepaalde geneesmiddelen? Zo ja, welke? <span class="required">*</span></td>
                                      <td><input type="radio" group="AllergieMedicatie" name="AllergieMedicatie[]" value="Ja" required></td>
                                      <td><input type="radio" group="AllergieMedicatie" name="AllergieMedicatie[]" value="Nee" checked="true"></td>
                                    </tr>
                                    <tr>
                                      <td><textarea name="AllergieMedicatie[]"></textarea></td>
                                    </tr><tr><td colspan="3"><hr></td></tr>
                                    <tr>
                                      <td>Is uw kind vegetarisch? <span class="required">*</span></td>
                                      <td><input type="radio" group="Vegetarisch" name="Vegetarisch" value="Ja" required></td>
                                      <td><input type="radio" group="Vegetarisch" name="Vegetarisch" value="Nee"></td>
                                    </tr>
                                    <tr>
                                    <tr>
                                      <td>Is uw kind incontinent (bedwateren?) <span class="required">*</span></td>
                                      <td><input type="radio" group="Incontinent" name="Incontinent" value="Ja" required></td>
                                      <td><input type="radio" group="Incontinent" name="Incontinent" value="Nee"></td>
                                    </tr>
                                    <tr>
                                      <td>Kan uw kind deelnemen aan sport (baden inbegrepen) en spel afgestemd op zijn leeftijd? <span class="required">*</span></td>
                                      <td><input type="radio" group="DeelnemenSport" name="DeelnemenSport" value="Ja" required></td>
                                      <td><input type="radio" group="DeelnemenSport" name="DeelnemenSport" value="Nee"></td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr><td colspan="3"><h6>Roken: enkel voor keti’s en aspi’s!</h6></td></tr>
                                    <tr>
                                      <td>Rookt uw kind? <span class="required">*</span></td>
                                      <td><input type="radio" group="Roken" name="Roken" value="Ja" required></td>
                                      <td><input type="radio" group="Roken" name="Roken" value="Nee"></td>
                                    </tr>
                                    <tr>
                                      <td>Geeft u toestemming aan uw kind om (enkel tijdens afgesproken tijdstippen en buiten het zicht van de andere leden) te roken ? <span class="required">*</span></td>
                                      <td><input type="radio" group="ToestemmingRoken" name="ToestemmingRoken" value="Ja" required></td>
                                      <td><input type="radio" group="ToestemmingRoken" name="ToestemmingRoken" value="Nee"></td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr><td colspan="3"><h6>Medicatielijst</h6></td></tr>
                                    <tr>
                                      <td colspan="3">
                                      <table class="table" >
                                        <tbody id="MedicatieLijst">
                                        <tr>
                                          <td>Medicatie</td>
                                          <td>Tijdstip</td>
                                          <td>Reden van toediening</td>
                                        </tr>
                                        <tr>
                                          <td><input type="text" name="MedicatieLijst[]"></td>
                                          <td><input type="text" name="MedicatieLijst[]"></td>
                                          <td><input type="text" name="MedicatieLijst[]"></td>
                                        </tr>
                                      </tbody>
                                      </table>
                                        <tr>
                                          <td>
                                            <input type="button" id="MeerMedicatie" class="btn btn-warning" style="color: black;" value="Meer medicatie toevoegen"/><br><br>
                                            <script style="text/javascript">
	                                           document.getElementById("MeerMedicatie").addEventListener("click", creeerElement);
                                            </script>
                                          </td>
                                        </tr>
                                      </td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr><td colspan="3"><h6>Medische zorgen</h6></td></tr>
                                    <tr>
                                      <td>
                                        Leiding en kampverpleging mag - behalve EHBO - niet op eigen initiatief medische handelingen uitvoeren. Zonder toestemming van de ouders mogen ze zelfs geen lichte pijnstillende of koortswerende medicatie toedienen, zoals Perdolan, Dafalgan of aspirines *
                                      </td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td width="5%">JA</td>
                                      <td width="5%">NEE</td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr>
                                      <td>Wij geven toestemming aan de leiding/verpleging om bij hoogdringendheid aan onze zoon/ dochter een dosis via de apotheek vrij verkrijgbare pijnstillende en koortswerende medicatie toe te dienen <span class="required">*</span></td>
                                      <td><br><input type="radio" group="ToestemmingMedicatie" name="ToestemmingMedicatie" value="Ja" required></td>
                                      <td><br><input type="radio" group="ToestemmingMedicatie" name="ToestemmingMedicatie" value="Nee"></td>
                                    </tr>
                                    <tr>
                                      <td>Geeft u toestemming om uw kind in dringende gevallen een heelkundige ingreep te laten ondergaan? <span class="required">*</span></td>
                                      <td><input type="radio" group="ToestemmingIngrepen" name="ToestemmingIngrepen" value="Ja" required></td>
                                      <td><input type="radio" group="ToestemmingIngrepen" name="ToestemmingIngrepen" value="Nee"></td>
                                    </tr>
                                    <tr >
                                      <td colspan="3"><i>* Gebaseerd op aanbeveling Kind&amp;Gezin 09.12.2009 – Aanpak van koorts / Toedienen van geneesmiddelen in de kinderopvang</i></td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
									<tr>
                                      <td>Wij geven toestemming aan de leiding om ons kind te laten fotograferen en te publiceren.<span class="required">*</span></td>
                                      <td><input type="radio" group="ToestemmingFoto" name="ToestemmingFoto" value="Ja" required></td>
                                      <td><input type="radio" group="ToestemmingFoto" name="ToestemmingFoto" value="Nee"></td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr><td colspan="3"><h6>Andere inlichtingen</h6></td></tr>
                                    <tr>
                                      <td><textarea name="AndereInlichtingen"></textarea></td>
                                    </tr>
                                    <tr><td colspan="3"><hr></td></tr>
                                    <tr><td colspan="3"><h6>Contacteer de leiding en/of de verpleging indien u bijkomende informatie wenst te geven of indien er specifieke richtlijnen te volgen zijn in noodsituaties.</h6></td></tr>
                                  </table>
                                <table class='table'>
                                    <tr>
                                      <td>Uw naam <span class="required">*</span></td>
                                      <td>Overeenkomst  <span class="required">*</span></td>
                                      <td rowspan="2"><div class="g-recaptcha" data-sitekey="6Lf3xBsUAAAAAJgi77tbiZk4sI3dDt93T8hnN0rs"></div></td>
                                    </tr>
                                    <tr>
                                      <td><input type="text" name="NaamInvuller" required/></td>
                                      <td><input type="checkbox" name="GebruiksVoorwaarden" required/> Ik ga akkoord dat Chiro Schelle deze informatie bewaard.</td>
                                    </tr>
                                  </table>
                                  
								  <input type="submit" id="submit" class="btn btn-warning btn-block" style="color: black;" value="Indienen"/>
                              </form>
                            </div>
                            <div class="col-xs-0 col-md-1 col-lg-2"></div>
						</div>
					<!--</div>-->
				</div>
			</div>
		</div>
		<!-- banner end -->
		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="/mefi/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="/mefi/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="/mefi/plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="/mefi/plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="/mefi/plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="/mefi/plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="/mefi/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="/mefi/js/custom.js"></script>

	</body>
	<script type="text/javascript">
        function HideOnLoad()
        {
            document.getElementById("trlac1").style.display = "none";
            document.getElementById("trlac2").style.display = "none";
            document.getElementById("lactose1").checked = false;
            document.getElementById("lactose2").checked = false;
        }

        function LactoseZichtbaar()
        {
            document.getElementById("trlac1").style.display = "block";
            document.getElementById("trlac2").style.display = "block";
        }
    </script>
</html>
