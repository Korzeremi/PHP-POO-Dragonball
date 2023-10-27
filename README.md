# README - PHP-POO-Dragonball
## Étape 1 - Réflexion autour de la structure PHP :
### Array() :  
	- attaques debloquables :  
		- nom
		- nb dégat
		- statut (debloque ou pas)
		- pallier
	- attaques ennemis :  
		- nom
		- dégats
	- combats :  
		- description	
		- phase
		- ennemi
		- id 
	- ennemi :  
		- nom
		- ennemi PV
		- attaques
### Class :
		- Personnage :
			- statut perso (héro ou méchant)
			- attaques de base
		- Héros (h Personnage)
		- Méchant (h Personnage)
		- Combats :
			- Attaques debloquables
		- Game :
			- Fonctions de jeux
			- objectifs
		- Menu :
			- Fonction de Menu
			- Save
### Fonctionnalités :
	- créer des persos
	- gestion attributs
	- gestion des combats
	- gestion de la progression
	- équilibrage
	- menu		