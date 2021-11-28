<i id="panier_<?= $article->id ?>" >ajouter</i>
<script>
$("#panier_<?= $article->id ?>").on('click',function()
{panier("<?= WEBROOT.'panier/mettreAuPanier/'.$article->id ?>");});
</script>


