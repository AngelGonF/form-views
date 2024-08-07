function registro(){
    let resultado = "<?php registrar(); ?>"
    document.write(resultado);
    $.ajax({url: "formcedu.php", succes:function (registrar) {
        $("div").text(registrar)}
    });
}