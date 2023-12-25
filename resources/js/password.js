// catturo elementi html
let mostraPassword = document.querySelector('#mostraPassword');
let mostraConfermaPassword = document.querySelector('#mostraConfermaPassword');
let password = document.querySelector('#password');
let password_confirmation = document.querySelector('#password_confirmation');


mostraPassword?.addEventListener('click', () =>{
    vediPassword();
});

mostraConfermaPassword?.addEventListener('click', () => {
    vediPasswordConf();
});

// funzione che cambia passowrd da type 'password' a type 'text' e viceversa
function vediPassword(){
    if(password.type === 'password'){
        password.type = 'text';
    }else{
        password.type = 'password';
    }
}

// funzione che cambia passowrd_confirmation da type 'password' a type 'text' e viceversa
function vediPasswordConf(){
    if(password_confirmation.type === 'password'){
        password_confirmation.type = 'text';
    }else{
        password_confirmation.type = 'password';
    }
}