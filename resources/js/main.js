// catturo gli elementi html
let firstNumber = document.querySelector('#firstNumber'); // primo numero progressivo
let secondNumber = document.querySelector('#secondNumber'); // secondo numero progressivo
let thirdNumber = document.querySelector('#thirdNumber'); // terzo numero progressivo
let searchButton = document.querySelector('#searchButton'); // icona della lente sulla nav
let searchbar = document.querySelector('#searchbar'); // searchbar sulla nav

// numeri progressivi
if(firstNumber){
    let observ = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                incrementa(firstNumber, 2000, 0.1);
                incrementa(secondNumber, 1000, 1);
                incrementa(thirdNumber, 500, 10);
            }
        })
    });
    
    // nel momento in cui si arriva a firstNumber sul sito parte la funzione
    observ.observe(firstNumber);
}
    // funzione che incrementa i numeri
    function incrementa(element, numTot, time){
        let count = 0;
        
        let interval = setInterval(() => {
            if(count <= numTot){
                element.innerHTML = count;
            }else{
                clearInterval(interval);
            }
            
            count++;
        }, time);
    }


    // searchbar
    searchButton.addEventListener('click', () => {
        if(searchbar.classList.contains('d-none')){
            searchbar.classList.remove('d-none');
            searchButton.classList.add('d-none');
        }else{
            searchbar.classList.add('d-none');
            searchButton.classList.remove('d-none');
        }
    })