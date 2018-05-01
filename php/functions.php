<?php
	if(isset($_POST["function"]))
	{				
		if($_POST["function"] == "Login")
		{
			Login($_POST["user"], $_POST["pass"]);
		}
		
		if($_POST["function"] == "Vegie")
		{
			Vegie();
		}
		
		if($_POST["function"] == "NieuweFiche")
		{	
			NieuweFiche($_POST["Lactose"],$_POST["LactoseX"],$_POST["ToestemmingFoto"],$_POST["Afdeling"],$_POST["Naam"],$_POST["Voornaam"],$_POST["Geboortedatum"],$_POST["Straat"],$_POST["Nummer"],$_POST["Postcode"],$_POST["Woonplaats"],$_POST["Telefoon1"],$_POST["Telefoon2"],$_POST["NaamVoornaam1"],$_POST["NaamVoornaam2"],$_POST["Verwantschap1"],$_POST["Verwantschap2"],$_POST["NaamHuisarts"],$_POST["TelefoonArts"],$_POST["Bloedgroep"],$_POST["ResusFactor"],$_POST["ZiektenLijst"],$_POST["GevoeligStoffenVoeding"],$_POST["Ingrepen"],$_POST["VaccinatieTetanus"],$_POST["SerumTetanus"],$_POST["VaccinatieHersenvliesontsteking"],$_POST["AllergieMedicatie"],$_POST["Vegetarisch"],$_POST["Incontinent"],$_POST["DeelnemenSport"],$_POST["ToestemmingMedicatie"],$_POST["ToestemmingIngrepen"],$_POST["AndereInlichtingen"],$_POST["NaamInvuller"],$_POST["Roken"],$_POST["ToestemmingRoken"],$_POST["MedicatieLijst"]);
		}
	}
	
	if(isset($_GET["function"]))
	{
		if($_GET["function"] == "Logout")
		{
			Logout();
		}
	}

	function LinkDB()
	{
	    $link = mysqli_connect("127.0.0.1","chiroschelle","mKVcJNuA7quVsG6r","chirosch_medifi");

		// Check connection
		if (mysqli_connect_errno())
		{
			$link = false;
			return $link;
		}
		else
		{
			return $link;
		}
	}
	
	function Login($user, $password)
	{
		$link = LinkDB();
		
		if($link != false)
		{
			$sql="SELECT * FROM user";
			$result=mysqli_query($link,$sql);

			// Associative array
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				if($row["login"] == $user && $row["password"] == $password)
				{
					$_SESSION["login"] = 1000;
					$_SESSION["user"] = $row["login"];
					$url = "../admin/";
					echo "<meta http-equiv='refresh' content='0;URL=$url' />";
					exit();
				}
			}
			
			$_SESSION["login"] = 0;
			$_SESSION["meldingLogin"] = "Login Fout!";
			$url = "/mefi/login/";
			echo "<meta http-equiv='refresh' content='0;URL=$url' />";
		}
		else
		{
			echo "Error connecting to database";
			$_SESSION["login"] = 0;
		}	
	}
	
	function Logout()
	{
		session_destroy();
		
		$url = "/mefi/login/";
		echo "<meta http-equiv='refresh' content='0;URL=$url' />";
	}

	function Zoeken($zoek)
	{
	    $link = LinkDB();
		$html = null;
		
		if($link != false)
		{
		    if ($zoek == null) {
		        $html .= "<p style='color: red; margin-bottom: 20px; font-size: 150%; text-align: center;'>Voer een zoekopdracht in!</p>";
		    }
		    else 
			{
				if($zoek == "*")
				{
					$sql="SELECT DISTINCT Naam, Voornaam, Afdeling, IDlid FROM lid";
				}
				else
				{
					$sql="SELECT DISTINCT Naam, Voornaam, Afdeling, IDlid FROM lid WHERE Voornaam LIKE '%$zoek%'OR Naam LIKE '%$zoek%' OR Afdeling LIKE '%$zoek%' ORDER BY Naam ASC";
				}
				
				$result=mysqli_query($link,$sql);

				// Associative array
				$html = "<ul class='nav'><hr>";
				
				while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					$html .= "<li><a href='?function=Fiche&id=".$row["IDlid"]."'> " . $row["Naam"] . " - " . $row["Voornaam"] . " - " . $row["Afdeling"] . "</a></li><hr>";
				}
				
				$html .= "</ul>";
		    }
		}	
		
		return $html;
	}

    function NieuweFiche($Lactose ,$LactoseX ,$ToestemmingFoto, $Afdeling ,$Naam ,$Voornaam ,$Geboortedatum ,$Straat ,$Nummer ,$Postcode ,$Woonplaats ,$Telefoon1 ,$Telefoon2 ,$NaamVoornaam1 ,$NaamVoornaam2 ,$Verwantschap1 ,$Verwantschap2 ,$NaamHuisarts ,$TelefoonArts ,$Bloedgroep ,$ResusFactor ,$ZiektenLijst ,$GevoeligStoffenVoeding ,$Ingrepen ,$VaccinatieTetanus ,$SerumTetanus ,$VaccinatieHersenvliesontsteking ,$AllergieMedicatie ,$Vegetarisch ,$Incontinent ,$DeelnemenSport ,$ToestemmingMedicatie ,$ToestemmingIngrepen ,$AndereInlichtingen ,$NaamInvuller ,$Roken ,$ToestemmingRoken, $MedicatieLijst)
	{
		$Afdeling = ucwords((strtolower($Afdeling)));
		$Naam = ucwords((strtolower($Naam)));
		$Voornaam = ucwords((strtolower($Voornaam)));
		$Straat = ucwords((strtolower($Straat)));
		$Woonplaats = ucwords((strtolower($Woonplaats)));
		$NaamVoornaam1 = ucwords((strtolower($NaamVoornaam1)));
		$NaamVoornaam2 = ucwords((strtolower($NaamVoornaam2)));
		$Verwantschap1 = ucwords((strtolower($Verwantschap1)));
		$Verwantschap2 = ucwords((strtolower($Verwantschap2)));
		$NaamHuisarts = ucwords((strtolower($NaamHuisarts)));
        $NaamInvuller = ucwords((strtolower($NaamInvuller)));
        
        date_default_timezone_set("Europe/Brussels");    
        $Datum = date("d/m/Y H:i");
        
        $Geboortedatum = date("d/m/Y", strtotime($Geboortedatum));
		
		//ZiektenLijst ja, text
		$temp = null;
		$teller = 0;
		
		foreach ($ZiektenLijst as $value) 
		{           	
			if($value == "")
			{
				$temp .= "<br> Andere ";
			}
			
			$temp .= $value . ", ";
		}
		$ZiektenLijst = $temp;
		//Einde ZiektenLijst
		
		//GevoeligStoffenVoeding ja, text
		$temp = null;
		$teller = 0;
		foreach ($GevoeligStoffenVoeding as $value) 
		{
			if($teller == 0)
			{
				$temp .= $value . ", ";
				$teller++;
			}
			else
			{
				$temp .= $value;
			}			
		}
		$GevoeligStoffenVoeding = $temp;
		//Einde GevoeligStoffenVoeding
		
		//Ingrepen ja, text
		$temp = null;
		$teller = 0;
		foreach ($Ingrepen as $value) 
		{
			if($teller == 0)
			{
				$temp .= $value . ", ";
				$teller++;
			}
			else
			{
				$temp .= $value;
			}			
		}
		$Ingrepen = $temp;
		//Einde Ingrepen
		
		//VaccinatieTetanus ja, text
		$temp = null;
		$teller = 0;
		foreach ($VaccinatieTetanus as $value) 
		{
			if($teller == 0)
			{
				$temp .= $value . ", ";
				$teller++;
			}
			else
			{
				$temp .= $value;
			}			
		}
		$VaccinatieTetanus = $temp;
		//Einde VaccinatieTetanus
		
		//SerumTetanus ja, text
		$temp = null;
		$teller = 0;
		foreach ($SerumTetanus as $value) 
		{
			if($teller == 0)
			{
				$temp .= $value . ", ";
				$teller++;
			}
			else
			{
				$temp .= $value;
			}			
		}
		$SerumTetanus = $temp;
		//Einde SerumTetanus

		//AllergieMedicatie ja, text
		$temp = null;
		$teller = 0;
		foreach ($AllergieMedicatie as $value) 
		{
			if($teller == 0)
			{
				$temp .= $value . ", ";
				$teller++;
			}
			else
			{
				$temp .= $value;
			}			
		}
		$AllergieMedicatie = $temp;
		//Einde AllergieMedicatie

		$AndereInlichtingen = ucfirst(strtolower($AndereInlichtingen));
		$NaamInvuller = ucfirst(strtolower($NaamInvuller));
        
        //MedicatieLijst Medicatie, Tijdstip, Reden
        $temp = null;
		$teller = 0;
		foreach ($MedicatieLijst as $value) 
        {
            if($teller == 2)
			{
				$temp .= $value . "<br>";
				$teller = 0;
			}
			else
			{
				$temp .= $value . ", ";
                $teller++;
			}	
        }
        $MedicatieLijst = $temp;
        //Einde MedicatieLijst
		
		$sql = "INSERT INTO `lid`(`Lactose`, `LactoseX`, `ToestemmingFoto`,`Afdeling`, `Naam`, `Voornaam`, `Geboortedatum`, `Straat`, `Nummer`, `Postcode`, `Woonplaats`, `Telefoon1`, `Telefoon2`, `NaamVoornaam1`, `NaamVoornaam2`, `Verwantschap1`, `Verwantschap2`, `NaamHuisarts`, `TelefoonArts`, `Bloedgroep`, `ResusFactor`, `ZiekteLijst`, `GevoeligStoffenVoeding`, `Ingrepen`, `VaccinatieTetanus`, `SerumTetanus`, `VaccinatieHersenvliesontsteking`, `AllergieMedicatie`, `Vegetarisch`, `Incontinent`, `DeelnemenSport`, `ToestemmingMedicatie`, `ToestemmingIngrepen`, `AndereInlichtingen`, `NaamInvuller`, `Datum`, `Roken`, `ToestemmingRoken`, `MedicatieLijst`)
        VALUES ('$Lactose', '$LactoseX', '$ToestemmingFoto', '$Afdeling', '$Naam', '$Voornaam', '$Geboortedatum', '$Straat', '$Nummer', '$Postcode', '$Woonplaats', '$Telefoon1', '$Telefoon2', '$NaamVoornaam1', '$NaamVoornaam2', '$Verwantschap1', '$Verwantschap2', '$NaamHuisarts', '$TelefoonArts', '$Bloedgroep', '$ResusFactor', '$ZiektenLijst', '$GevoeligStoffenVoeding', '$Ingrepen', '$VaccinatieTetanus', '$SerumTetanus', '$VaccinatieHersenvliesontsteking', '$AllergieMedicatie', '$Vegetarisch', '$Incontinent', '$DeelnemenSport', '$ToestemmingMedicatie', '$ToestemmingIngrepen', '$AndereInlichtingen', '$NaamInvuller', '$Datum', '$Roken', '$ToestemmingRoken', '$MedicatieLijst')";
		
		$link = LinkDB();
		
		if($link != false)
		{
			mysqli_query($link,$sql);
			$_SESSION["melding"] = "Medische Fiche Succesvol Ingediend!";
		}
		else
		{
			$_SESSION["melding"] = "Er Is Iets Fout Gelopen, Probeer Opnieuw!";
		}

		$url = "../mefi/succes/";
		echo "<meta http-equiv='refresh' content='0;URL=$url' />";
	}
	
	function IndividueleFiche($id)
	{
		$link = LinkDB();
		$html = null;
		
		if($link != false)
		{
			$sql="SELECT * FROM lid WHERE IDlid = $id";
			$result=mysqli_query($link,$sql);
			
			// Associative array
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				$_SESSION["afdeling"] = $row["Afdeling"];
				
				$html = "<table>";
				
				$html .= '<table class="table table-bordered">
				            <tr>
				                <td><a href="../admin/?function=Volgende"><button class="btn btn-warning btn-block" style="color: black;" >Vorige</button></a></td>
				                <td><a href="../admin/?function=Vorige"><button class="btn btn-warning btn-block" style="color: black;" >Volgende</button></a></td>
				            <tr>
							<thead>
								<tr>
									<th class="text-center" colspan="2"><h3 style="color:#f4d442;">'.$row["Naam"]." ".$row["Voornaam"]." - ".$row["Afdeling"].'</h3></th>
								</tr>
							</thead>
							<tr>
								<td width="30%">Geboortedatum</td>
                                <td width="70%"><input name="geboortedatum" value="'.$row["Geboortedatum"].'"></td>
							</tr>
							<tr>
								<td>Adres</td>
								<td><input name="straat" value='.$row["Straat"].'> <input name="nummer" value='.$row["Nummer"].'> <input name="postcode" value='.$row["Postcode"].'> <input name="woonplaats" value='.$row["Woonplaats"].'></td>
							</tr>
							<tr>
								<td>Gezinslid 1</td>
								<td>'.$row["NaamVoornaam1"].", ".$row["Telefoon1"].", ".$row["Verwantschap1"].'</td>
							</tr>
							<tr>
								<td>Gezinslid 2</td>
								<td>'.$row["NaamVoornaam2"].", ".$row["Telefoon2"].", ".$row["Verwantschap2"].'</td>
							</tr>
							<tr>
								<td>Huisarts</td>
								<td>'.$row["NaamHuisarts"].", ".$row["TelefoonArts"].'</td>
							</tr>
							<tr>
								<td>Bloedgroep</td>
								<td>'.$row["Bloedgroep"].'</td>
							</tr>
							<tr>
								<td>Resus Factor</td>
								<td>'.$row["ResusFactor"].'</td>
							</tr>
							<tr>
								<td>Ziektes</td>
								<td>'.$row["ZiekteLijst"].'</td>
							</tr>
							<tr>
								<td>Gevoelig aan?</td>
								<td>'.$row["GevoeligStoffenVoeding"].'</td>
							</tr>
							<tr>
								<td>Lactose intolerant?</td>
								<td>'.$row["Lactose"].'</td>
							</tr>
							<tr>
								<td>Indien \'Ja\', helemaal geen lactose? Of verwerkt in voeding?</td>
								<td>'.$row["LactoseX"].'</td>
							</tr>
							<tr>
								<td>Ingrepen</td>
								<td>'.$row["Ingrepen"].'</td>
							</tr>
							<tr>
								<td>Tetanus vaccin</td>
								<td>'.$row["VaccinatieTetanus"].'</td>
							</tr>
							<tr>
								<td>Tetanus Serum</td>
								<td>'.$row["SerumTetanus"].'</td>
							</tr>
							<tr>
								<td>Hersenvlies Vaccin (type C)</td>
								<td>'.$row["VaccinatieHersenvliesontsteking"].'</td>
							</tr>
							<tr>
								<td>Allergiën aan medicatie</td>
								<td>'.$row["AllergieMedicatie"].'</td>
							</tr>
							<tr>
								<td>Vegetarisch</td>
								<td>'.$row["Vegetarisch"].'</td>
							</tr>
							<tr>
								<td>Incontinent</td>
								<td>'.$row["Incontinent"].'</td>
							</tr>
							<tr>
								<td>Deelnemen aan sport</td>
								<td>'.$row["DeelnemenSport"].'</td>
							</tr>
							<tr>
								<td>Toestemming fotos</td>
								<td>'.$row["ToestemmingFoto"].'</td>
							</tr>
							<tr>
								<td>Medicatielijst</td>
								<td>'.$row["MedicatieLijst"].'</td>
							</tr>
							<tr>
								<td>Toestemming om medicatie te geven?</td>
								<td>'.$row["ToestemmingMedicatie"].'</td>
							</tr>
							<tr>
								<td>Toestemming om ingrepen te laten ondergaan?</td>
								<td>'.$row["ToestemmingIngrepen"].'</td>
							</tr>
							<tr>
								<td>Andere inlichtingen</td>
								<td>'.$row["AndereInlichtingen"].'</td>
							</tr>
							<tr>
								<td>Naam van de invuller</td>
								<td>'.$row["NaamInvuller"].'</td>
							</tr>
							<tr>
								<td>Datum van het invullen</td>
								<td>'.$row["Datum"].'</td>
							</tr>
							<tr>
								<td>Rook je?</td>
								<td>'.$row["Roken"].'</td>
							</tr>
							<tr>
								<td>Toestemming om op kamp te roken?</td>
								<td>'.$row["ToestemmingRoken"].'</td>
							</tr>
                            <thead>
								<tr>
									<th class="text-center" colspan="2"><h3 style="color:#f4d442;">'."Medicatielijst".'</h3></th>
								</tr>
                                <tr>
                                    <td>Medicatie, Tijdstip, Reden</td>
								    <td>'.$row["MedicatieLijst"].'</td>
                                </tr>
							</thead>
						</table>';
			}
		}	
		
		return $html; 
	}
	
	function Vegie()
	{
		$link = LinkDB();
		$html = null;
		
		if($link != false)
		{
			$sql="SELECT DISTINCT Naam, Voornaam, Afdeling, IDlid FROM lid WHERE Vegetarisch = 'Ja' ORDER BY Naam ASC";
			
			
			$result=mysqli_query($link,$sql);

			// Associative array
			$html = "<ul class='nav'><hr>";
			
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				$html .= "<li><a href='?function=Fiche&id=".$row["IDlid"]."'> " . $row["Naam"] . " - " . $row["Voornaam"] . " - " . $row["Afdeling"] . "</a></li><hr>";
			}
			
			$html .= "</ul>";
		}	
		
		return $html;
	}
	
	function Allergie()
	{
		$link = LinkDB();
		$html = null;
		
		if($link != false)
		{
			$sql="SELECT DISTINCT Naam, Voornaam, Afdeling, IDlid FROM lid WHERE GevoeligStoffenVoeding like '%Ja%' ORDER BY Naam ASC";	
			
			$result=mysqli_query($link,$sql);

			// Associative array
			$html = "<ul class='nav'><hr>";
			
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				$html .= "<li><a href='?function=Fiche&id=".$row["IDlid"]."'> " . $row["Naam"] . " - " . $row["Voornaam"] . " - " . $row["Afdeling"] . "</a></li><hr>";
			}
			
			$html .= "</ul>";
		}	
		
		return $html;
	}
?>