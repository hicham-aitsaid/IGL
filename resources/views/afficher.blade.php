
@foreach ($etudiant as $etudiant)
	<br>
	{{  $etudiant->name   }}

	{{  $etudiant->matricule  }}
	 echo "&bnsp";
	{{  $etudiant->email }}
	
	{{  $etudiant->groupe }}
	{{  $etudiant->promo }}
	
@endforeach