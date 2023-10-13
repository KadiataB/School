// let edit = document.querySelectorAll('.edit');
// let modal= document.querySelector('.modal');
// let annuler= document.querySelector('.btn-annuler');
// let modifier= document.querySelector('#id_annee');
// console.log(modifier);
// let niveauEleve= document.querySelector('.niveau');
// console.log(niveau);

const API= 'http://localhost:8081/';


// for (const icon_edit of edit) {
//     icon_edit.addEventListener('click',()=>{
//         modal.style.display='flex';
//         modifier.value=icon_edit.dataset.id;

//     }) 
// }
// annuler.addEventListener('click', ()=>{
//     modal.style.display='none';
// })

//  niveau.addEventListener('click', ()=>{
//     modal.style.display='flex';
//  })


// function chargerClasse() {
//     var selectElement=document.getElementById('select-niveau');
//     console.log(selectElement);
//     var niveauId=selectElement.value;

//     if(niveauId!== '') {
//         var selectNiveau = document.getElementById('#select-niveau');
//         console.log(selectNiveau);
//         fetch('')
//         .then(response => response.json())
//         console.log(response);
//         then(data => {
//             console.log(data);
//             let option=document.createElement('option');
//             option.innerText='Choisir un niveau';
//             clas.appendChild(option);
//             selectNiveau.innerHTML= '';


//             data.forEach(niveau => {
//                 console.log(niveau);
//                 var option= document.createElement('option');
//                 option.value= niveau.id_niveau;
//                 option.text= niveau.libelle;
//                 selectNiveau.appendChild(option);
                
//             });
//         })
//         .catch(error => {
//             console.error('Errerr lors du chargement des classes:', error);
//         })
//     }
    
// }


let niveau=document.querySelector('#niveau');
let classe=document.querySelector('#classe');
let discipline=document.querySelector('#discipline');
let button=document.querySelector('#button');
let input=document.querySelector('.input');
let groupe= document.querySelector('#groupe');
let update= document.querySelector('#update');
let modal=document.querySelector('.modal-content');
let save = document.querySelector('#save');
let input1= document.querySelector('#recipient-name');



fetch(API + 'niveau/getNiveau')
.then(response => response.json())
.then(data =>{
  let option=document.createElement('option');
  option.innerText='Choisir un niveau';
  niveau.appendChild(option);
  data.forEach(niv => {
    let option= document.createElement('option');
    option.innerText=niv.libelle;
    option.value=niv.id_niveau;
    niveau.appendChild(option);
    
  });
})

fetch(API + 'discipline/selectGroupe')
.then(response => response.json())
.then(data =>{

  data.forEach(group => {
    let option= document.createElement('option');
    option.innerText=group.libelle;
    option.value=group.id;
    
    groupe.appendChild(option);
  });
})

save.addEventListener('click', ()=>{
    let group= input1.value;
    console.log(group);
    fetch(API + 'discipline/insert',{
        method:'POST', body:JSON.stringify({libelle:group})
    })
})

groupe.addEventListener('change',function(){
    console.log(this.value)

    if(this.value === '1'){
        $('#myModal').modal('show')
    } 
})

let btnCloseModal= document.querySelector('#btn-close-modal');
btnCloseModal.addEventListener('click', ()=>{
    $('#myModal').modal('hide')
})
save.addEventListener('click', ()=>{
    $('#myModal').modal('hide')
})


niveau.addEventListener('change', ()=>{
    classe.innerHTML='';
    fetch(API +`classe/getClasse/${niveau.value}`)
    .then(response=>response.json())
    .then(data=>{
        let option=document.createElement('option');
        option.innerText='Choisir une classe';
        classe.appendChild(option);
        data.forEach(clas=>{
            let option=document.createElement('option');
            option.innerText=clas.nom;
            option.value=clas.id_classe;
            classe.appendChild(option);
            
        })
    })
})


let tab =[];

function afficheDiscipline(url){
    discipline.innerHTML='';
    fetch(url)
    .then(response=>response.json())
    .then(data=>{
        data.forEach(dis=>{
            console.log(dis);
            let div=document.createElement('div')
            div.setAttribute('class', 'col-6')
            let label= document.createElement('label');
            label.innerText=dis.libelle + '('+ dis.code_discipline +')';
            let checkbox= document.createElement('input');
            checkbox.setAttribute('type','checkbox');
            checkbox.setAttribute('checked',dis.etat);
            checkbox.value= dis.id_discipline;
            console.log(dis);
            checkbox.addEventListener('change', ()=>{
                  tab.push(checkbox.value);
            })
            div.append(checkbox,label);
            discipline.append(div);
        })
    })
}


classe.addEventListener('change', ()=>{
    
    afficheDiscipline(API + `discipline/getDiscipline/${classe.value}`)
    
})


button.addEventListener('click', ()=>{
    let discipline = input.value;
    input.value= '';
    let clas=classe.value;
    let group=groupe.value;
    fetch(API + 'discipline/recupeCode')
    
    let code=discipline.substr(0,3).toUpperCase();
    fetch(API + 'discipline/addDiscipline', 
     {method:'POST', body: JSON.stringify({libelle:discipline,code:code,classe:clas, groupe:group})}
    )
    afficheDiscipline(API + `discipline/getDiscipline/${clas}`)
})


update.addEventListener('click', ()=>{
    console.log(tab);
        fetch(API + 'discipline/updat', 
    {method:'POST', body: JSON.stringify({discipline:tab})}
    )
    afficheDiscipline(API + `discipline/getDiscipline/${classe.value}`)
})







