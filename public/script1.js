let btn = document.querySelector('.btn');
// let id_classe = document.querySelector('#idClasse');
// let id_class= id_classe.value;


const API= 'http://localhost:8081/';

btn.addEventListener('click',()=>{
    let tab=[];
    let id_classe = document.querySelector('#idClasse');
    let id_class= id_classe.value;
let id_discipline;
let typeNOte;
let note;
    let inputs = document.querySelectorAll('.updated');
    inputs.forEach(input => {
        let data= input.getAttribute('data');
        let dat= data.split("_");
         id_discipline= dat[0];
         typeNOte = dat[1];
         note=input.value;
        
         tab.push({
             note:note,
             id_discipline:id_discipline,
             typeNOte:typeNOte,
             idclasse:id_class
         })
    })
    
    
    fetch(API + 'classe/update',{
        method:'POST',
        body:JSON.stringify({tab:tab})
    })
    
    .then(response=>{
        response.text().then(console.log)
    })
});

    function recup(e){
        e.classList.add('updated');
    }



let buttonDeletes = document.querySelectorAll('.fa-xmark');
console.log(buttonDeletes);

buttonDeletes.forEach(buttonDelete=>{
    
    buttonDelete.addEventListener('click', ()=>{
        let id =buttonDelete.getAttribute('data-id');
        console.log(id);
        let id_disc ={
            'id':id
        }
        fetch(API + 'Classe/supprimer',
         { 
         method: 'POST', 
         body:JSON.stringify(id_disc)
        })
        .then((response)=>{
            console.log(response);
        }).catch(error=>{
            console.error(error);
        })
    })

})

let groupeDiscipline= document.querySelector('#groupe-discipline');
let groupeNote = document. querySelector('#groupe-note');

groupeDiscipline.addEventListener('change',()=>{
    
    let discipl= groupeDiscipline.value;
    console.log(discipl);

    groupeNote.addEventListener('change', ()=>{
        let note= groupeNote.value;
        console.log(note);
        fetch(API + 'classe/afficheNote', {
            method:'POST', body:JSON.stringify({iddiscipline:discipl,noteMax:note})
        })
    })
    
})
  
  