<h1>Neuen Film hochladen</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
<?php 
session_start();


//Abfrage ob gerade eine Fehlerkorektur eines Uploades durchgefürht wird
if ($_SESSION["fehlerImUpload"] == true)
{
	
	// Abfrage der Daten aus dem Vorherigen Formular
	$Filmtitel 		= $_SESSION['Name_cor']; // Daten aus dem Formular
	$Genre 			= $_SESSION['Genre_cor'];// Daten aus dem Vormular
	$Beschreibung 	= $_SESSION['Beschreibung_cor'];// Daten aus dem Formular
	
}

?>


Filmtitel:
<br>
<input type="Text" size="24" maxlength="50" name="Name" value="<?php echo $Filmtitel; ?>"></input>
<br>
Genre:
<br>
<input type="Text" size="24" maxlength="50" name="Genre" value="<?php echo $Genre; ?>"></input>
<br><br>
Gr&ouml;&szlig;e des Films:
<br>
<br>
Width: <input type="Text" size="24" maxlength="5" name="Width" ></input>
<br>
<br>
Hight: <input type="Text" size="24" maxlength="5" name="Hight" ></input>
<br>
<br>

Filmbeschreibung:
<br>
<textarea name="Beschreibung" cols="50" rows="10" value="<?php echo $Beschreibung; ?>"></textarea>
<br>
<br>
<br>

W&auml;hlen Sie eine Videodatei (mp4, flv, 3gp usw.) von Ihrem Rechner aus, um sie hochzuladen<br>

<input name="datei" type="file" size="50" maxlength="100000" accept="text/*"><br>
<br><br><br>
 <input type="checkbox" name="update_box" value="update" />Updaten<br/>

<input type="submit" value="Hochladen">

</form>
</table>


</p>
</form>