<h1 class="text-center mb-4">Bienvenue sur le site php mvc</h1>

<?php 
    // showArray($sides);
    // showArray($characters);

?>
<h2>Liste des personnages:</h2>

<div>
    <div class="d-flex gap-3 flex-wrap justify-content-center">


    <?php 
    foreach($characters as $character){
        require 'views/components/card.php';
    }
    ?>
    
</div>