// catturo elementi html
let successMessage = document.querySelector('#successMessage');
let addCart = document.querySelector('#addCart');
let removeCart = document.querySelector('#removeCart');

// funzione che dopo 2500 ms aggiunge a successMessage la classe d-none
setTimeout(() => {
    if (successMessage) {
        successMessage.classList.add('d-none');
        addCart.classList.add('d-none');
        removeCart.classList.remove('d-none');
    }
}, 2500);
