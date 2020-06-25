<?php
    require('config/database.php');
    require('includes/functions.php');
    require("views/import.view.php");
if(isset($_POST['submit_commune'])){
    $number1 = count($_POST['commune']);
    if($number1 >=1 ){
        
            for($i = 0; $i < $number1; $i++){
                if(!empty($_POST['commune'][$i])){
                    securisation($_POST['commune'][$i]);
                    if(!is_already_in_use('nomCo', $_POST['commune'][$i], 'commune')){
                        
                        $q = $db->prepare('INSERT INTO commune(nomCo) VALUES(:nomCo)');
                        $q->execute([
                            'nomCo' => $_POST['commune'][$i]
                        ]);
                    }else{
                        echo 'deja dans la base';
                    }
                }else{
                    echo 'il faut remplir chaque champ choisi';
                }
            }
     }else{
         echo 'il faut remplir au moins un champ';
     } 
}  

if(isset($_POST['submit_unit'])){
    $number1 = count($_POST['unit']);
    if($number1 >=1 ){
        
            for($i = 0; $i < $number1; $i++){
                if(!empty($_POST['unit'][$i])){
                    securisation($_POST['unit'][$i]);
                    if(!is_already_in_use('unit', $_POST['unit'][$i], 'unite')){
                        
                        $q = $db->prepare('INSERT INTO unite(unit) VALUES(:unit)');
                        $q->execute([
                            'unit' => $_POST['unit'][$i]
                        ]);
                    }else{
                        echo 'deja dans la base';
                    }
                }else{
                    echo 'il faut remplir chaque champ choisi';
                }
            }
     }else{
         echo 'il faut remplire au moins un champ';
     } 
}

if(isset($_POST['submit_category'])){
    $number1 = count($_POST['category']);
    if($number1 >=1 ){
        
            for($i = 0; $i < $number1; $i++){
                if(!empty($_POST['category'][$i])){
                    securisation($_POST['category'][$i]);
                    if(!is_already_in_use('category', $_POST['category'][$i], 'categorie')){
                        
                        $q = $db->prepare('INSERT INTO categorie(category) VALUES(:category)');
                        $q->execute([
                            'category' => $_POST['category'][$i]
                        ]);
                    }else{
                        echo 'deja dans la base';
                    }
                }else{
                    echo 'il faut remplir chaque champ choisi';
                }
            }
     }else{
         echo 'il faut remplire au moins un champ';
     } 
}

if (isset($_POST['valide_product'])){

if(!empty($_POST['nameP']) && !empty($_POST['unit_quantity']) && !empty($_POST['unit']) && !empty($_POST['category']) && !empty($_POST['provenance']) ){
        $number = count($_POST['nameP']);
        if($number >= 1){
            for($i =0; $i< $number; $i++){
              securisation($_POST['nameP'][$i]); 
              securisation($_POST['unit_quantity'][$i]);
                if(!is_already_in_use('nameP', $_POST['nameP'][$i], 'produit')){
                    $q= $db->prepare('INSERT INTO produit(nomP, quantity, unit, category, provenance) VALUES(:nomP, :quantity, :unit, :category, :provenance)');
                    $q->execute([
                        'nomP'=>$_POST['nameP'][$i],
                        'quantity'=>$_POST['unit_quantity'][$i],
                        'unit'=>$_POST['unit'][$i],
                        'category'=> $_POST['category'][$i],
                        'provenance'=> $_POST['provenance'][$i]
                    ]);
                }
            }
        }
    }else{
        echo 'Veuillez remplir tous les champs';
    }
}

if (isset($_POST['validate_market'])){
if(!empty($_POST['nameM']) && !empty($_POST['commune'])){
        $number = count($_POST['nameM']);
        if($number >= 1){
            for($i =0; $i< $number; $i++){
              securisation($_POST['nameM'][$i]); 
              if(!is_already_in_use('nameM', $_POST['nameM'][$i], 'market')){
                    $q= $db->prepare('INSERT INTO market(nameM, commune) VALUES(:nameM, :commune)');
                    $q->execute([
                        'nameM'=>$_POST['nameM'][$i],
                        'commune'=> $_POST['commune'][$i]
                    ]);
                }
            }
        }
    }else{
        echo 'Veuillez remplir tous les champs';
    }
}

if (isset($_POST['validate_price'])){

if(!empty($_POST['price']) && !empty($_POST['date'])){

        $number = count($_POST['nameP']);
        
        if($number >= 1){

            for($i =0; $i< $number; $i++){

              securisation($_POST['price'][$i]); 
              securisation($_POST['date'][$i]);
              
                 $q= $db->prepare('INSERT INTO prix(nomP, nomM, nomCo, montant, collected_at) VALUES(:nomP, :nomM, :nomCo, :montant, :collected_at)');

                 $q->execute([
                        'nomP'=>$_POST['nameP'][$i],
                        'nomM'=> $_POST['market'][$i],
                        'nomCo'=> $_POST['commune'][$i],
                        'montant'=> $_POST['price'][$i],
                        'collected_at'=> $_POST['date'][$i]
                 ]);
                
            }
        }
    }else{
        echo 'Veuillez remplir tous les champs';
    }

    //Traitement CSV File
     
    
        
      

}