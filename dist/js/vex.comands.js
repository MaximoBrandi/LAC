vex.dialog.buttons.YES.text = 'Aceptar';
vex.dialog.buttons.NO.text = 'Cancelar';

function alertCloseSession(){
    vex.dialog.confirm({
        message: '¿Estás seguro de que quieres eliminar esta cuenta? Esta acción es irreversible.',
        className: 'vex-theme-default',
        input: [
            `<button type="submit" class="vex-dialog-button-primary vex-dialog-button vex-first" onclick="window.location.href='perfil.php?delete=1'">Confirmar</button>`,
            '<button type="button" class="vex-dialog-button-secondary vex-dialog-button vex-last" onclick="vex.closeAll()">Cancelar</button>'
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function alertDeleteAccount(){
    vex.dialog.confirm({
        message: '¿Estás seguro de que quieres cerrar sesión?.',
        className: 'vex-theme-default',
        input: [
            `<button type="submit" class="vex-dialog-button-primary vex-dialog-button vex-first" onclick="window.location.href='perfil.php?clss=1'">Confirmar</button>`,
            '<button type="button" class="vex-dialog-button-secondary vex-dialog-button vex-last" onclick="vex.closeAll()">Cancelar</button>'
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function alertInexistingAccount(){
    vex.dialog.confirm({
        message: 'Esta cuenta no existe.',
        className: 'vex-theme-default',
        input: [
            '<button type="button" class="vex-dialog-button-secondary vex-dialog-button vex-last" onclick="vex.closeAll()">Confirmar</button>'
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function alertErrorAccount(){
    vex.dialog.confirm({
        message: 'Fallo al iniciar sesión.',
        className: 'vex-theme-default',
        input: [
            '<button type="button" class="vex-dialog-button-secondary vex-dialog-button vex-last" onclick="vex.closeAll()">Confirmar</button>'
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function alertSuccessfulChange(){
    vex.dialog.confirm({
        message: 'Cambio de contraseña exitoso.',
        className: 'vex-theme-default',
        input: [
            '<button type="button" class="vex-dialog-button-secondary vex-dialog-button vex-last" onclick="vex.closeAll()">Confirmar</button>'
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function alertSuccessfulUpload(id){
    vex.dialog.confirm({
        message: 'Subida de archivo exitosa.',
        className: 'vex-theme-default',
        input: [
            `<button type="submit" class="vex-dialog-button-secondary vex-dialog-button vex-first" onclick="window.location.href='material.php?id=${id}'">Confirmar</button>`
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function alertErrorUpload(){
    vex.dialog.confirm({
        message: 'Fallo al subir archivo.',
        className: 'vex-theme-default',
        input: [
            '<button type="button" class="vex-dialog-button-secondary vex-dialog-button vex-last" onclick="vex.closeAll()">Confirmar</button>'
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function alertSuccessfulEdit(id){
    vex.dialog.confirm({
        message: 'Actualización de archivo exitosa.',
        className: 'vex-theme-default',
        input: [
            `<button type="submit" class="vex-dialog-button-secondary vex-dialog-button vex-first" onclick="window.location.href='material.php?id=${id}'">Confirmar</button>`
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function alertErrorEdit(){
    vex.dialog.confirm({
        message: 'Fallo al actualizar el archivo.',
        className: 'vex-theme-default',
        input: [
            '<button type="button" class="vex-dialog-button-secondary vex-dialog-button vex-last" onclick="vex.closeAll()">Confirmar</button>'
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function alertErrorChange(){
    vex.dialog.confirm({
        message: 'Fallo al cambiar contraseña.',
        className: 'vex-theme-default',
        input: [
            '<button type="button" class="vex-dialog-button-secondary vex-dialog-button vex-last" onclick="vex.closeAll()">Confirmar</button>'
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function alertSuccessfulRegister(){
    vex.dialog.confirm({
        message: 'Cuenta creada correctamente.',
        className: 'vex-theme-default',
        input: [
            `<button type="submit" class="vex-dialog-button-primary vex-dialog-button vex-first" onclick="window.location.href='index.php'">Confirmar</button>`,
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function alertErrorRegister(){
    vex.dialog.confirm({
        message: 'Fallo al crear la cuenta.',
        className: 'vex-theme-default',
        input: [
            '<button type="button" class="vex-dialog-button-secondary vex-dialog-button vex-last" onclick="vex.closeAll()">Confirmar</button>'
        ].join(''),
        buttons: [],
        callback: function (value) {
        }
    })
}

function changeUserPic(){
    vex.dialog.open({
        className: 'vex-theme-default',
        input: [
            '<form action="perfil.php" method="post">',
            '<label><a href="https://postimages.org/" target="_blank">Sube tu imagen primero aqui (Direct link)</a></label>',
            '<input type="url" name="webIMG" placeholder="Inserte la url aqui" required />',
            '<button type="submit" class="vex-dialog-button-primary vex-dialog-button vex-first">Guardar</button>','<button type="button" onclick="vex.closeAll()" class="vex-dialog-button-secondary vex-dialog-button vex-last">Cancelar</button>',
            '</form>'
        ].join(''),
        buttons: [],
        showCloseButton: false,
        callback: function (data) {}
    })
}

function alertChangePassword(){
    vex.dialog.open({
        message: 'Completa los campos para cambiar la contraseña',
        className: 'vex-theme-default',
        input: [
            '<form action="perfil.php" method="post" name="formChangePassword">',
                '<input name="actu" type="password" class="inputChangePassword" placeholder="Contraseña actual" required />',
                '<input name="nue1" type="password" class="inputChangePassword inputPasswordRegister" placeholder="Contraseña nueva" required />',
                '<input name="nue2" type="password" class="inputChangePassword inputPasswordRegister" placeholder="Verifica contraseña nueva" required />',
                '<div class="d-flex mb-2">',
                '<input type="checkbox" id="seePasswordInputs" class="btn-check"><label class="btn btn-outline-primary" for="seePasswordInputs">Ver contraseñas</label>',
                '</div>',
            '<button type="submit" class="vex-dialog-button-primary vex-dialog-button vex-first">Aceptar</button>','<button type="button" onclick="vex.closeAll()" class="vex-dialog-button-secondary vex-dialog-button vex-last">Cancelar</button>',
            '</form>'
        ].join(''),
        buttons: [],
        showCloseButton: false,
        callback: function (data) {}
    })
    document.getElementById('seePasswordInputs').addEventListener('click', ()=>{
        let inputs = document.querySelectorAll(".inputChangePassword");
        if(document.getElementById('seePasswordInputs').checked == true){
            inputs.forEach(e => {
                e.type = 'text';
            });
        }
        else{
            inputs.forEach(e => {
                e.type = 'password';
            });
        }
    });
}

