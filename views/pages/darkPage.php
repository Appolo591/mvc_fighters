<h1 class="text-center mb-4">Personnage du Mal</h1>


<h2>Liste des personnages:</h2>

<div>
    <div class="d-flex gap-3 flex-wrap justify-content-center">


    <?php 
    foreach($characters as $character){
        require 'views/components/card.php';
    }
    ?>
    
</div>