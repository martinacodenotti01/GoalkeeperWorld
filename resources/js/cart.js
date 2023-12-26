// catturo elementi html
let successMessage = document.querySelector('#successMessage');

// funzione che dopo 2500 ms aggiunge a successMessage la classe d-none
setTimeout(() => {
    if(successMessage) {
        successMessage.classList.add('d-none');
    }
}, 2500);
