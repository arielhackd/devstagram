import Dropzone from "dropzone";
Dropzone.autoDiscover = false;
const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Sube aquí tu imagen",
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar Archivo",
    maxFiles: 1,
    uploadMultiple: false,
});

//ACA UTILIZO DE NUEVO LA VARIABLE QUE SE CREÓ ANTES EN const dropzone = ....
//ESTOS METODOS SIRVEN PARA EJECUTAR FUNCIONES EN LOS EVENTOS DE DROPZON
//EJEMPLO CUANDO ESTÁ SUBIENDO, CUANDO FUE CON EXITO, ETC.
dropzone.on('sending', function(file,xhr, formdata){
    console.log(file);
});

dropzone.on('success', function(file, response){
    console.log(response);
});

dropzone.on('error', function(file, message){
    console.log(message);
});

dropzone.on('removedfile', function(file, message){
    console.log('Archivo eliminado.');
});