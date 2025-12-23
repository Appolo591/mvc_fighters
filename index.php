
<?php

require_once 'controllers/pagesController.php';
require_once 'controllers/crudController.php';
require_once 'controllers/utilities.php';
require_once 'controllers/apiController.php';



try {

	if (empty($_GET['page'])) {
		$page = 'home';
	} else {
		$path = explode('/', filter_var($_GET['page']));
		$page = $path[0];
	}

	switch ($page) {
		case 'home':
			homePage();
			break;

		case 'add_character_page':
			addCharacterPage();
			break;

		case 'createNewCharacter':
			// showArray($_POST);
			//on sécurise les infos
			$name = htmlspecialchars($_POST['name']);
			$image = htmlspecialchars($_POST['image']);
			$health = htmlspecialchars($_POST['health']);
			$magic = htmlspecialchars($_POST['magic']);
			$power = htmlspecialchars($_POST['power']);
			$side = htmlspecialchars($_POST['side']);
			if (empty($name) || empty($image) || empty($health) || empty($magic) || empty($power) || empty($side)) {
				throw new Exception("Tous les champs doivent être remplis.");
			}

			createCurrentCharacter($name, $image, $health, $magic, $power, $side);

			break;

		case 'deleteCharacter':
			$id = ($_POST['id']);
			deleteCharacter($id);
		
			break;
			
		case 'modifyCharacter':
			// showArray($_POST);
			$id = ($_POST['id']);
			updateCharacterPage($id);
			break;

		case 'updateCharacter':
			// showArray($_POST);
			$id = ($_POST['id']);
			$name = htmlspecialchars($_POST['name']);
			$image = htmlspecialchars($_POST['image']);
			$health = htmlspecialchars($_POST['health']);
			$magic = htmlspecialchars($_POST['magic']);
			$power = htmlspecialchars($_POST['power']);
			$side = htmlspecialchars($_POST['side']);
			if (empty($name) || empty($image) || empty($health) || empty($magic) || empty($power) || empty($side)) {
				throw new Exception("Tous les champs doivent être remplis.");
			}

			updateCurrentCharacter($id, $name, $image, $health, $magic, $power, $side);

			break;

		case 'lightFighters':
			lightCharactersPage();
			break;

		case 'darkFighters':
			darkCharactersPage();
			break;

		case 'api_characters':
			apiCharacters();
			break;

		default:
			throw new Exception("La page demandée n'existe pas.");
			break;
	}
} catch (Exception $e) {

	echo "<h2> Erreur :" . $e->getMessage() . "</h2>";
}
