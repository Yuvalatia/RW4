/* Only numbers allowed */
let numbers = /^[0-9]+$/;

/* ATT FORM VAL */
function trainFormVal(){
    /* INPUTS */
    let warrior = document.forms["trainForm"]["warriorCount"];
    let worker  = document.forms["trainForm"]["workerCount"];
    let intlg   = document.forms["trainForm"]["intlgCount"];
    let spy     = document.forms["trainForm"]["spyCount"];
    let exp     = document.forms["trainForm"]["expCount"];

    var allGood = true;

    if(!warrior.value.match(numbers) || warrior.value == ""){
        allGood = false;
        warrior.classList.add("is-invalid");
    }else{
        warrior.classList.remove("is-invalid");
    }

    if(!worker.value.match(numbers) || worker.value == ""){
        allGood = false;
        worker.classList.add("is-invalid");
    }else{
        worker.classList.remove("is-invalid");
    }

    if(!intlg.value.match(numbers) || intlg.value == ""){
        allGood = false;
        intlg.classList.add("is-invalid");
    }else{
        intlg.classList.remove("is-invalid");
    }

    if(!spy.value.match(numbers) || spy.value == ""){
        allGood = false;
        spy.classList.add("is-invalid");
    }else{
        spy.classList.remove("is-invalid");
    }

    if(!exp.value.match(numbers) || exp.value == ""){
        allGood = false;
        exp.classList.add("is-invalid");
    }else{
        exp.classList.remove("is-invalid");
    }

    if(warrior.value == 0 && worker.value == 0 && intlg.value == 0 && spy.value == 0 && exp.value == 0){
        allGood = false;
    }

    return allGood;
}