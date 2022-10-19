import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new  Dropzone('#dropzone',{
    dictDefaultMessage: 'Subir Imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks:  true,
    dictRemoveFile: 'Borrar Imagen',
    maxFiles: 1,
    uploadMultiple: false,

    init: function(){

        if(document.querySelector('[name="img"]').value.trim()){
            const imgPublicado= {};
            imgPublicado.size = 1234;
            imgPublicado.name = document.querySelector('[name="img"]').value;

            this.options.addedfile.call(this, imgPublicado);
            this.options.thumbnail.call(this, imgPublicado, `/uploads/${imgPublicado.name}`);

            imgPublicado.previewElement.classList.add("dz-success", "dz-complete");
        }
    },
});

dropzone.on("success", function (file, response){
    document.querySelector('[name="img"]').value = response.img;
});

dropzone.on("removedfile", function (){
    document.querySelector('[name="img"]').value = "";
});
