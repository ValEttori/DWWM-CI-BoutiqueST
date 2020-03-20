 var element = document.getElementById('delete');
 element.onclick = function(){
   result = window.confirm("Etes vous certain de vouloir supprimer ce produit?");
   var pro_id = document.getElementById("pro_id").value;
   if(result == true){
   document.location.href = 'deleteForm.php?id='+pro_id;
   alert('Ce produit à bien été supprimé');
 }
};