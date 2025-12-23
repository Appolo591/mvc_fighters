<div class="card 
            <?=  $character["side"]==="dark" ? "darkShadow" : "lightShadow" ?>" 
            style="width: 18rem;">
    <img src="public/images/<?=  $character["image"]?>" class="card-img-top w-100"
  style="aspect-ratio: 4 / 3; object-fit: cover;" alt="<?=  $character["name"]?>">
    <div class="card-body">
        <h5 class="card-title text-uppercase class fw-bold text-center"><?=  $character["name"]?></h5>
        <p class="card-text d-flex justify-content-between">
            <sp><b>Santé:</b></sp>
            <sp><?=  $character["health"]?> PV</sp>
        </p>
        <p class="card-text d-flex justify-content-between">
            <sp><b>Magie:</b></sp>
            <sp><?=  $character["magic"]?> PV</sp>
        </p>
        <p class="card-text d-flex justify-content-between">
            <sp><b>Puissance:</b></sp>
            <sp><?=  $character["power"]?> PV</sp>
        </p>

        <div class=" d-flex justify-content-between">
        <form action="modifyCharacter" method="post">
            <input type="hidden" name="id" value="<?=  $character["id"]?>">
            <button type="submit" class="btn r btn-primary">Modifier</button>
        </form>
        <form action="deleteCharacter" method="post">
            <input type="hidden" name="id" value="<?=  $character["id"]?>">
            <button type="submit" class="btn btn-danger btn-primary">Supprimer</button>
        </form>
    </div>
    </div>
</div>