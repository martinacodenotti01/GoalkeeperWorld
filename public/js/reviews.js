// catturo elementi html
let stars = document.querySelectorAll("#stars");

for(let i = 0; i < stars.length; i++){
    stars[i].addEventListener('mouseup', () =>{
        if(i>0){
            for(let j = 0; j < i; j++){
                stars[j].setAttribute('checked', 'true');
            }
            for(let j = i; j < 5; j++){
                stars[j].removeAttribute('checked');
            }
        }
    })
    
}

