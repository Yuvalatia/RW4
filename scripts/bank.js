/* Only numbers allowed */
let numbers = /^[0-9]+$/;

/* deposit FORM VAL */
function depositFormVal(){
    /* INPUTS */
    let deposit = document.forms["depositForm"]["depositInput"];

    var allGood = true;

    if(!deposit.value.match(numbers) || deposit.value == ""){
        allGood = false;
        deposit.classList.add("is-invalid");
    }else{
        deposit.classList.remove("is-invalid");
    }

    if(deposit.value == 0){
        allGood = false;
    }

    return allGood;
}

/* withdraw FORM VAL */
function withdrawFormVal(){
    /* INPUTS */
    let withdraw = document.forms["withdrawForm"]["withdrawInput"];

    var allGood = true;

    if(!withdraw.value.match(numbers) || withdraw.value == ""){
        allGood = false;
        withdraw.classList.add("is-invalid");
    }else{
        withdraw.classList.remove("is-invalid");
    }

    if(withdraw.value == 0){
        allGood = false;
    }

    return allGood;
}