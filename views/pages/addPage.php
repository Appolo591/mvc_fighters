<?php
// showArray($sides)
?>


<h1 class="text-center mb-4">ajouter un combattant</h1>


<form action="createNewCharacter" method="POST">
<div class="mb-3">
  <label for="name" class="form-label">Nom du personnage</label>
  <input type="text" class="form-control" id="name" placeholder="Entrez le nom du personnage" name="name" required>
</div>
<div class="mb-3">
  <label for="image" class="form-label">avatar du personnage</label>
  <input type="text" class="form-control" id="image" placeholder="Entrez l'URL de l'image du personnage" name="image" required>
</div>
<div class="mb-3">
  <label for="health" class="form-label">santé du personnage</label>
  <input type="text" class="form-control" id="health" placeholder="Entrez la santé du personnage" name="health" required>
</div>
<div class="mb-3">
  <label for="magic" class="form-label">magic du personnage</label>
  <input type="text" class="form-control" id="magic" placeholder="Entrez le magic du personnage" name="magic" required>
</div>
<div class="mb-3">
  <label for="power" class="form-label">power du personnage</label>
  <input type="text" class="form-control" id="power" placeholder="Entrez la puissance du personnage" name="power" required>
</div>
<div class="mb-3">
  <label for="side" class="form-label">Coté de la force ?</label>
  <select name="side" id="side" type="text" class="form-select" required>
    <option disabled selected value="">Choisissez un côté de la force 😇 👿</option>
    <?php
    foreach ($sides as $side): ?>

      <option value="<?= $side['side'] ?>"> <?= $side['side'] ?></option>

    <?php endforeach; ?>
  </select>

</div>
<button type="submit" class="btn btn-primary mt-3 w-100"> Créer un personnage</button>
</form>