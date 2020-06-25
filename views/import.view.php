
<?php 
    $title ="Importation de donnees";

    include('includes/constants.php');
    require('partials/header_general.php');
    require('partials/banner_general.php');

    $q = $db->query('SELECT * FROM commune');
    $q1 = $db->query('SELECT * FROM commune');
    $q2 = $db->query('SELECT * FROM unite');
    $q3 = $db->query('SELECT * FROM categorie');
    $q4 = $db->query('SELECT * FROM produit');
    $q5 = $db->query('SELECT * FROM market'); 
 ?>

 <!-- define a dialogbox-->


    <!--end of dialogbox -->

    <div class="wrapper">
    <div class="form clearfix">
        <header>
            <h1>Formulaire d'importation de donnees dans la base SIMM</h1>
        </header>
             <div class="row clearfix">
                    <div class="column">
                    <h1 id="column-title">Nouvelle Commune</h1>
                            <form class="dynamic-form" method="POST" action="">
                                <table class="add-cell-commune">
                                    <tr>
                                        <td><input type="text" name="commune[]" id="commune" class="input-control" placeholder="Exemple: Tabarre" /></td>
                                        <td id="add-commune"><p class="add-commune">+</p></td>
                                    </tr>
                                </table>
                                <input type ="submit" name="submit_commune" class="submit" value="valider" id ="submit-commune" />
                            </form>
                    </div>
                    <div class="column">
                    <h1 id="column-title">Enregistrement d'unite</h1>
                            <form class="dynamic-form" method="POST" action="">
                                <table class="add-cell-unit">
                                    <tr>
                                        <td><input type="text" name="unit[]" id="unit" class="input-control" placeholder="Kg ou litre" /></td>
                                        <td id="add-unit" ><p class="add-unit">+</p></td>
                                    </tr>
                                </table>
                                <input type ="submit" name="submit_unit" class="submit" value="valider" id ="submit-unit" />
                            </form>
                    </div>
                    <div class="column">
                    <h1 id="column-title">Nouvelle categorie</h1>
                            <form class="dynamic-form" method="POST" action="">
                                <table class="add-cell-category">
                                    <tr>
                                        <td><input type="text" name="category[]" id="category" class="input-control" placeholder="Exemple: Laitier" /></td>
                                        <td id="category"><p class="add-category">+</p></td>
                                    </tr>
                                </table>
                                <input type ="submit" name="submit_category" class="submit" value="valider" id ="submit-category" />
                            </form>
                        </div>
                </div>
             <div class="row-form-product">
                <h1>Enregistrement de produits</h1>
                <form class="import-form-product" method="POST">
                    <table class="add-cell-product">
                        <tr>
                            <th>
                               Nom du produit:
                            </th>

                             <th>
                                Quantite:
                            </th>

                             <th>
                                Uinte de mesure:
                            </th>
                             <th>
                                Category:
                            </th>
                             <th>
                                Provenance:
                            </th>
                             <th>
                                <p id="add-product">+</p>
                            </th>
                        </tr>
                        <tr name ="row[]">
                            <td>
                                
                                <input type="text" required="required" id="nameP" class="form-input" name="nameP[]" placeholder="Lait holandais" />
                            </td>
                            <td>
                                
                                <input type="text" required="required" id="unit_quantity" class="form-input" name= "unit_quantity[]" placeholder="150" />
                            </td>
                            <td>
                                <?php $comp1= 0; ?>
                               <select id="unitSe" name="unit[]">
                                    
                                    <option value=""> Choisir l'unite</option>
                                    
                                    <?php while($data2 = $q2->fetch()):; ?>
                                    <option id="unite<?=$comp1?>" value= "<?= $data2['unit'] ?>"><?= $data2['unit'] ?></option>
                                     <?php $comp1++; ?>
                                    <?php endwhile; ?>
                               
                                </select><br /><br />
                              <p style="display:none;" id="maxUni"><?= $comp1-1;  ?></p>
                            </td>
                            <td>
                                <?php $w=0; ?>
                                <select id ="category" name="category[]">
                                    <option  value="none"> Choisir une category</option>
                                    <?php while($data3 = $q3->fetch()):; ?>
                                    <option id="catego<?=$w;?>" value= "<?= $data3['category'] ?>"><?= $data3['category'] ?></option>
                                    <?php $w++; ?>
                                    <?php endwhile; ?>
                                </select><br /><br />
                                <p style="display:none;" id="maxCatego"><?= $w-1;  ?></p>
                            </td>
                            <td>
                                <select name ="provenance[]" >
                                    <option value="">Provenance</option>
                                    <option value="locale">Locale</option>
                                    <option value="étrangère">Etrangère</option>
                                </select><br /><br />
                            </td>
                            <td>
                               
                            </td>
                        </tr>
                    </table>
                    <input type="submit" id="submit-button" class="submit-button" value="Valider" name="valide_product" />
                </form>
          </div> 
        <div id="form-market" class="form clearfix">
            <h1>Enregistrement de Markets</h1>
            <form class="import-form" method="POST">
                <table class="table-add-market">
                    <tr>
                        <th>
                             Nom du Market:
                        </th>
                        <th>
                            Commune:
                        </th>
                        <th>
                             <p id="add-market-row">+</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" required="required" id="nameM" class="form-input" name="nameM[]" placeholder="Delimart" />
                        </td>
                        <td>
                            <select name="commune[]">
									<option value= "">Commune</option>
                                    <?php $comp = 0; ?>
									<?php while($data = $q->fetch()):; ?>
									<option value= "<?= $data['nomCo'] ?>" id = "comm<?=$comp ?>"><?= $data['nomCo'] ?></option>
                                    <?php $comp++; ?>
                                    
									<?php endwhile; ?>
                                    
                                </select><br /><br />
                                <p style="display:none;" id="max"><?= $comp-1;  ?></p>
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                </table>      
                <input type="submit" id="submit-button" class="submit-button" value="Valider" name="validate_market" />
            </form>
        </div>
         <div id="price-form" class="form clearfix">
            <h1>Enregistrement de prix</h1>
            <form class="import-form" method="POST">
                <table class="add-price">
                    <tr>
                        <th>
                            Nom du produit:
                        </th>
                        <th>
                           Nom du Market:
                        </th>
                        <th>
                            Commune:
                        </th>
                        <th>
                            Montant du prix:
                        </th>
                        <th>
                            date de collecte:
                        </th>
                        <th>
                            <p id="add-price-row">+</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                             <?php $p=0; ?>
                              <select name="nameP[]">
                                <option value= "">Nom Produit</option>
                                <?php while($data4 = $q4->fetch()):; ?>
                                <option id = "produitPrice<?=$p; ?>" value= "<?= $data4['nomP'] ?>"><?= $data4['nomP'] ?></option>
                                <?php $p++; ?>
                                <?php endwhile; ?>
                            </select><br /><br />
                             <p style="display:none;" id="maxProduit"><?= $p-1;  ?></p>
                        </td>
                        <td>
                            <?php $mark=0;?>
                            <select name="market[]">
                                <option value= "">Market</option>
                                <?php while($data5 = $q5->fetch()):; ?>
                                <option id = "marketPrice<?=$mark;?>" value= "<?= $data5['nameM'] ?>"><?= $data5['nameM'] ?></option>
                                <?php $mark++;?>
                                <?php endwhile; ?>
                            </select><br /><br />
                             <p style="display:none;" id="maxMarket"><?= $mark-1;  ?></p>
                        </td>
                        <td>
                             <?php $c =0; ?>
                            <select name="commune[]">
                                <option value= "">Commune</option>
                                <?php while($data1 = $q1->fetch()):; ?>
                                  
                                <option id = "commP<?=$c;?>" value= "<?= $data1['nomCo'] ?>"><?= $data1['nomCo'] ?></option>
                               <?php $c++;?>
                                <?php endwhile; ?>
                            </select><br /><br />
                        </td>
                        <td>
                            
                            <input type="text" required="required" id="price" class="form-input" name="price[]" placeholder="170" />
                        </td>
                        <td>
                            
                            <input type="date" required="required" id="date" class="form-input" name="date[]" placeholder="yyyy-MM-dd"/>
                        </td>
                        <td>
                           
                        </td>
                    </tr>
                </table>
                <input type="submit" id="submit-button" class="submit-button" value="Valider" name="validate_price" />
            </form>
        <div>
<?php 
     if(isset($_POST['submit_csv'])){
            $file = $_FILES['userfile']['tmp_name'];
         
            $handle = fopen($file, 'r');
         
            while(($fileop = fgetcsv($handle, 1000, ',')) !==false){
      
               $q= $db->prepare("INSERT INTO prix(nomP, nomM, nomCo, montant, collected_at) VALUES(:nomP, :nomM, :nomCo,  :montant, :collected_at)");

               $q->execute([
                        'nomP'=>$fileop[0],
                        'nomM'=>  $fileop[1],
                        'nomCo'=> $fileop[2],
                        'montant'=> $fileop[3],
                        'collected_at'=> $fileop[4]
                 ]);
            }
           //header('Location: index.php');  
        }
?>

            <h2>Importer via un fichier *.csv </h2>
            <form class="form-csv" method="post" action ="" enctype="multipart/form-data">
                <input name="userfile" type="file" value="table" />
                <input name="submit_csv" type="submit" value="importer"/>
            </form>
        </div>
        </div>

    </div>
   
    





<?php require('partials/footer.php') ?>	