$('document').ready(function(){
    $('.image-delete').click(function(){
        if(confirm('¿Quitar imagen?')){
            /**@TODO: Se usara ajax mas adelante para eliminar
             * y quitar el return */
            return true;
        }
        return false;
    });
});
