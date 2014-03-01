</div>
<script type="text/javascript" src="../../assets/jquery_/jquery.js"></script>
<script src="dist/js/bootstrap.js"></script>
<script src="dist/js/elire_book.js"></script>
<script src="dist/js/deselire_book.js"></script>
<script src="dist/js/active_recipe.js"></script>
<script src="dist/js/unactive_recipe.js"></script>
<script>
	$('#fermer_show').on('click',function(){
        window.setTimeout("location=('?appli=recettes');",1000);
        return false;
    });
</script>
</body>
</html>