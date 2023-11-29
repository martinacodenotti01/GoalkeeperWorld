// catturo gli elementi html
let firstNumber = document.querySelector('#firstNumber'); // primo numero progressivo
let secondNumber = document.querySelector('#secondNumber'); // secondo numero progressivo
let thirdNumber = document.querySelector('#thirdNumber'); // terzo numero progressivo
let carouselInner = document.querySelector('#carouselInner'); // carosello

// numeri progressivi
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

// cards recensioni
let recensioni = [
    {image : "/media/buffon.png", stelle : 5, nome : "Gianluigi Buffon", descrizione : "Il miglior sito di shop per portieri, acquisto qui da quando giocavo nei pulcini."},
    {image : "/media/Donnarumma.png", stelle : 5, nome : "Gianluigi Donnarumma", descrizione : "Tutto ciò di cui puoi avere bisogno lo trovi qui. Fantastico sito"},
    {image : "/media/giuliani.png", stelle : 5, nome : "Laura Giuliani", descrizione : "Fin da quando sono bambina acquisto da questo sito, fantastico."},
    {image : "/media/neuer.png", stelle : 4, nome : "Manuel neuer", descrizione : "Prezzi e materiali stupendi, consegna da migliorare ma sito fantastico!"}
];

// creo le cards delle recensioni dinamicamente
recensioni.forEach((recensione) => {
    let div = document.createElement("div");
    div.classList.add("carousel-item");
    if(recensione == recensioni[0]){
        div.classList.add("active");
    }
    div.innerHTML = `
        <div class="card" style="width: 18rem;">
        <img src="${recensione.image}" class="card-img-top" alt="${recensione.nome}">
        <div class="card-body">
        <h5 class="card-title">${recensione.nome}</h5>
        <h5 class="card-title txt-yellow">${creaStar(recensione.stelle)}</i></h5>
        <p class="card-text">${recensione.descrizione}</p>
        </div>
        </div>
    `;
    carouselInner.appendChild(div);
});

// funzione che crea una stringa con n stelle piene e 5-n stelle vuote
function creaStar(nStelle){
    let s = "";
    for(let i = 0; i < nStelle; i++){
        s += `<i class="fa-solid fa-star"></i>`;
    }

    while(nStelle < 5){
        s += `<i class="fa-regular fa-star"></i>`;
        nStelle++;
    }

    return s;
}

