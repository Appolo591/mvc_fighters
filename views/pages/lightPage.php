<h1 class="text-center mb-4">Personnages du Bien</h1>

 <div class="d-flex gap-3 flex-wrap justify-content-center">


    <?php 
    foreach($characters as $character){
        if($character["side"]=="light"){
           require 'views/components/card.php'; 
        }
        
    }
    ?>
    
</div>