function panier(url1) {
    $.ajax({
        type: 'GET',
        url: url1,
        asynch: true}).done(function(code_html){
            if(code_html.toLowerCase() === "false") {
                window.alert("Produit déjà enregistré.");
            }else{
                $("#total").html(code_html);
            }
        });
}