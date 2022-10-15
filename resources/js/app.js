import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new  Dropzone('#dropzone',{
    dictDefaultMessage: 'Subir Imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks:  true,
    dictRemoveFile: 'Borrar Imagen',
    maxFiles: 1,
    uploadMultiple: false
});

dropzone.on('sending', function(file, xhr, formData){
    console.log(file);
});
