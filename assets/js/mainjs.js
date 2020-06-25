$(document).ready(function(){
    var i=0;
    var j =0;
    $('#add-commune').click(function(){
        i++;
        $('.add-cell-commune').append('<tr class="row-comm'+i+'"><td><input type="text" name="commune[]" id="commune" class="input-control" placeholder="Exemple: Tabarre" /></td><td><p class="remove-commune" id="'+i+' ">-</p></td></tr>');
    });
// ---- start populate select -----

	function getListOpt(idMaxValue, idOption){

		var ListOption = new Array();
		var IdEl = document.getElementById(idMaxValue);
		var maxV = IdEl.innerText;
		for(var i = 0; i <= maxV; i++){
			var opt = document.getElementById(idOption+i);
			var val = opt.innerText;
			ListOption.push(val);
			
		}

		return  ListOption;

	};
		
	function addOption(idMaxValue1, idOption1, idSelect){
		
		var ListOp = getListOpt(idMaxValue1, idOption1);
		var slct = document.getElementById(idSelect);
		for(var k =0; k<ListOp.length; k++){
			var createOption = document.createElement('option');
				createOption.innerText= ListOp[k];
				createOption.value=ListOp[k];
				slct.appendChild(createOption);
		}
	};
//-- End ---

    $(document).on('click','.remove-commune', function(){
        var remove_idi = $(this).attr('id');
        $('.row-comm'+remove_idi+'').remove();
    });

     var k =0;
    $('.add-unit').click(function(){
       k++;
       $('.add-cell-unit').append('<tr class="row-unit'+k+'"><td><input type="text" name="unit[]" id="unit" class="input-control" placeholder="Kg ou litre" /></td><td><p class="remove-unit" id="'+k+'">-</p></td></tr>');
    });
    $(document).on('click', '.remove-unit', function(){
        var remove_unit = $(this).attr('id');
        $('.row-unit'+remove_unit+'').remove();
    });

    $('.add-category').click(function(){
        j++;
        $('.add-cell-category').append('<tr class="row'+j+'"><td><input type="text" name="category[]" id="category" class="input-control" placeholder="Exemple: Laitier" /></td><td><p class="remove-category" id="'+j+' ">-</p></td></tr>');
    });

     $(document).on('click','.remove-category', function(){
        var remove_idj = $(this).attr('id');
        $('.row'+remove_idj+'').remove();
    });

    var t = 0;
	var v = 0;
	var comptS=0;
	var comptcCount =0;
    $('#add-product').click(function(){
        t++;
		v++;
		comptS++;
		comptcCount++;
        var add_row ='<tr class="ligne'+t+'" id="dynamic-row"><td><input type="text" required="required" id="nameP" class="form-input" name="nameP[]" placeholder="Lait holandais" /></td>'+
		'<td><input type="text" required="required" id="unit_quantity" class="form-input" name= "unit_quantity[]" placeholder="150" /></td><td>'+
		'<select id="unit'+comptS+'" name="unit[]">'+
        '<option value=""> Choisir l\'unite</option>'+
		'</select><br /><br />'+
		'</td><td>'+
		'<select id="categoSel'+comptcCount+'" name="category[]">'+
		'<option value=""> Choisir une categorie</option>'+
		
		'</select><br /><br /></td><td>'+
		'<select name ="provenance[]" ><option value="">Provenance</option>'+
		'<option value="locale">Locale</option>'+
		'<option value="étrangère">Etrangère</option>'+
		'</select><br /><br /></td><td><p class="remove-product" id="'+t+'">-</p></td>+</tr>';

        $('.add-cell-product').append(add_row);
		addOption('maxCatego','catego','categoSel'+comptcCount);
		addOption('maxUni','unite','unit'+comptS);

    });


    $(document).on('click', '.remove-product', function(){
        var remove_product = $(this).attr('id');
        $(".ligne"+remove_product+"").remove();
    });
    var s= 0;
	var compt =0;
    $('#add-market-row').click(function(){

        s++;
		compt++;
        var add_market ='<tr class="row'+s+' "><td><input type="text" required="required" id="nameM" class="form-input" name="nameM[]" placeholder="Delimart" /></td>'+
        '<td><select id ="opt'+compt+'" name="commune[]">'+
		'<option value="">commune</option>'+
		
		'</select><br /><br /></td>'+
		'<td><p class="remove-market" id="'+s+'">-</p></td></tr>';
        $('.table-add-market').append(add_market);

		addOption('max','comm','opt'+compt);
    });
    $(document).on('click', '.remove-market', function(){
        var remove_market = $(this).attr('id');
        $('.row'+remove_market+'').remove();
    });
    var z =0;
	var comptc=0;
	var comptcMSel =0;
	var comptcPSel =0;
    $('#add-price-row').click(function(){
        z++;
		comptc++;
		comptcMSel++;
		comptcPSel++;
        var add_price = '<tr class="row'+z+'"><td>'+
		
		'<select id="produitSel'+comptcPSel+'" name="nameP[]">'+
			'<option value= "">Nom Produit</option>'+
			
			'</select><br /><br />'+
		
		'</td>'+
		'<td>'+
		'<select id="marketSel'+comptcMSel+'" name="market[]">'+
			'<option value= "">Market</option>'+
		
			'</select><br /><br />'+
		'</td>'+
		'<td><select id ="opt1'+comptc+'" name="commune[]">'+
		'<option value="">commune</option>'+
		
		'</select><br /><br /></td><td><input type="text" required="required" id="price" class="form-input" name="price[]" placeholder="170" /></td>'+
		'<td><input type="text" required="required" id="date" class="form-input" name="date[]" placeholder="yyyy-MM-dd" /></td><td><p class="remove-price" id="'+z+'">-</p></td></tr>';
        $('.add-price').append(add_price);
		addOption('maxProduit','produitPrice','produitSel'+comptcPSel);
		addOption('maxMarket','marketPrice','marketSel'+comptcMSel);
		addOption('max','commP','opt1'+comptc);

        });

        $(document).on('click', '.remove-price', function(){
            var price_remove = $(this).attr('id');
            $('.row'+price_remove+'').remove();
        });
});
