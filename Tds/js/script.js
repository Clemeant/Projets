let $=function(id){
    return window.document.getElementById(id);
};

let elementContains=function(elmId,searchString){
    return ($(elmId).value.toLowerCase().includes('searchString'));
};



('test-zones').addEventListener('click', function(){
    $('test-zone').sytle[$('property').value]=$('value').value;
});



$('property').addEventListener('change', function(){
    if($('property').value.toLowerCase().indexOf('color')!=-1){
        $('value').type='color';

    }else{
        $('value').type='text'
    }
})




/*

$('bt-appliquer').addEventListener('click', function(){
    $('test-zone').sytle[$('property').value]=$('value').value;
});

*/