document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("fvalida").addEventListener('submit', validaF);
});
function validaF(evento){
    evento.preventDefault();
    var nombre = document.getElementById('nombre').value;
    if(nombre.length==0){
        alert('no has escrito nada en nombre');
        return;
    }
    var apellido = document.getElementById('apellido').value;
    if(apellido.length==0){
        alert('no has escrito nada en apellidos');
        return;
    }
    var com_prod = document.getElementById('com-prod').value;
    if(com_prod.length==0){
        alert('no has comentado nada sobre los productos');
        return;
    }
    var com_prec = document.getElementById('com-prec').value;
    if(com_prec.length==0){
        alert('no has comentado nada sobre los precios');
        return;
    }
    var punt = document.getElementById('punt').value;
    if(punt.length==0){
        alert('no has puntuado');
        return;
    }
    this.submit();
}