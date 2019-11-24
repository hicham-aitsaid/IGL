

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Ajout cours </h1>
 
   <form  action="/etudiant/ajouteretudiant" method="post">
    	 {{ csrf_field() }}
        <input type="text" name="name" placeholder="name ">
        </br>
         </br>
        <input type="email" name="email" placeholder="email">
      </br>
      </br>
         
          </br>
            </br>
        <input type="password" name="password" placeholder="password">
    </br>
    	</br>
        <input type="text" name="promo" id="promo" placeholder="promo">
        </br>
        </br>
        <input type="text" name="groupe"  placeholder="Groupe">
        </br>
         </br>
        <input type="text" name="matricule"  placeholder="Matricule">
        </br>

        <input type="submit" value="Ajouter Etudiant">
    
</form>


</body>
</html>

  
