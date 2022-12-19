let $=function(id){
    return window.document.getElementById(id);
};

let= function(elementId){
    let elm=(elementId);
    if(elm.style.display=='none'){
        elm.styme.display='initial';
        }else{
            elm.style.display='none'
        }
}

let displayReponse=function(messages){
    $('reponse').innerHTML=message;
};

let trials;


$('bt-gen').addEventListener('click', function(){
    $('step2').style.display='block';
    $('step1').style.display='none';

    nombre=Math.floor(Math.random()*$('max').value)+Number($('min').value);
    console.log(nombre);
    
});

$(go).addEventListener('change', function(){
    let (go==nombre){
        displayReponse('You win !')
        return;
    }
        displayReponse('You Miss !')
});














/*



*/
