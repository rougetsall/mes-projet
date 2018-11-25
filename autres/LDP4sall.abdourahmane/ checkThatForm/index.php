
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<style type="text/css">
		.formul{
			margin: auto;
			display: block;
			background-color: blue;
			width: 500px;
			height: 700px;
			margin-left: 35%; 
			border-radius: 15px;
		}
		h2{
			text-align: center;
		}
		body{
			background-color: #00DFA4
;
		}
		.inpp{
			width: 300px;
			height: 30px;
			border-radius: 10px;
		}

	</style>
</head>
<body>
	<div class="formul">
		<h2>Inscrisption</h2>
	<form method="post" action="checkThatForm.php">
		<table>
			<tr>
				<td>
					 Prenom :
				</td>
				<td>
					<input class="inpp" type="text" name="prenom" >
				</td>
			</tr>
			<tr>
				<td>
					Nom :
				</td>
				<td>
					<input class="inpp" type="text" name="nom" >
				</td>
			</tr>
			<tr>
				<td>
				  Email :
				</td>
				<td>
					<input class="inpp" type="email" name="email">
				</td>
			</tr>
			<tr>
				<td>
				  Age :
				</td>
				<td>
					<input  class="inpp" type="text" name="age">
				</td>
			</tr>
			<tr>
				<td>
				  Bachelor :	</td>
				<td>
					<input class="inpp" type="text" name="bachelor"> 
			
				</td>
			</tr>
			<tr>
				<td>
				 Mot de passe :	</td>
				<td>
					<input class="inpp" type="password" name="mdp">
			
				</td>
			</tr>
			<tr>
				<td>
				Retapez mot de passe:
				<td>
					<input class="inpp" type="text" name="rmdp">
				</td>
			</tr>
		</table>
	

		<div></div>
		
		<div>Sexe
			<div><input type="radio" name="sexe" value="Femme">Femme</div>
		<div><input type="radio" name="sexe" value="homme" >homme</div>
		
		<div> Quelest votre tome du voyage galactique prefere<br>
					 <div><input type="checkbox" name="voyageur[]" value="le Guide du voyageur galactique">le Guide du voyageur galactique</div>
					<div><input type="checkbox" name="voyageur[]" value="le Dernier Restaurant avant la fin du monde">le Dernier Restaurant avant la fin du monde</div>
					<div><input type="checkbox" name="voyageur[]" value="La vie , l'Univers et le Reste">La vie , l'Univers et le Reste</div>
					<div><input type="checkbox" name="voyageur[]" value="Salue ,et encore merci pour le poisson">Salue ,et encore merci pour le poisson</div>
					<div><input type="checkbox" name="voyageur[]" value="Globalement inoffensive">Globalement inoffensive</div>
					

			</div>
			<div><br></div>
			<div> Un petit commentaire<br>
			   <textarea   style="font-weight: bold"   name="mess" rows="5" cols="40" value="" size="35" disabled><b> si c'est text s'affiche en gras, u lost the game </b></textarea></div>
             <div style="text-align: center; "><input type="submit" name="inscription" value="inscription" style="text-align: center; font-size: 20px; border-radius: 5px;background-color: #00951E;"></div>
	</form>
	</div>
</body>
</html>

