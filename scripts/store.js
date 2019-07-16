/* Only numbers allowed */
let numbers = /^[0-9]+$/;

/* ATT FORM VAL */
function attFormVal(){
    /* INPUTS */
    let wAtt1 = document.forms["attForm"]["wAtt1Count"];
    let wAtt2 = document.forms["attForm"]["wAtt2Count"];
    let wAtt3 = document.forms["attForm"]["wAtt3Count"];
    let wAtt4 = document.forms["attForm"]["wAtt4Count"];

    var allGood = true;

    if(!wAtt1.value.match(numbers) || wAtt1.value == ""){
        allGood = false;
        wAtt1.classList.add("is-invalid");
    }else{
        wAtt1.classList.remove("is-invalid");
    }

    if(!wAtt2.value.match(numbers) || wAtt2.value == ""){
        allGood = false;
        wAtt2.classList.add("is-invalid");
    }else{
        wAtt2.classList.remove("is-invalid");
    }

    if(!wAtt3.value.match(numbers) || wAtt3.value == ""){
        allGood = false;
        wAtt3.classList.add("is-invalid");
    }else{
        wAtt3.classList.remove("is-invalid");
    }

    if(!wAtt4.value.match(numbers) || wAtt4.value == ""){
        allGood = false;
        wAtt4.classList.add("is-invalid");
    }else{
        wAtt4.classList.remove("is-invalid");
    }

    if(wAtt1.value == 0 && wAtt2.value == 0 && wAtt3.value == 0 && wAtt4.value == 0){
        allGood = false;
    }

    return allGood;
}

/* DEF FORM VAL */
function defFormVal(){
    /* INPUTS */
    let wDef1 = document.forms["defForm"]["wDef1Count"];
    let wDef2 = document.forms["defForm"]["wDef2Count"];
    let wDef3 = document.forms["defForm"]["wDef3Count"];
    let wDef4 = document.forms["defForm"]["wDef4Count"];

    var allGood = true;

    if(!wDef1.value.match(numbers) || wDef1.value == ""){
        allGood = false;
        wDef1.classList.add("is-invalid");
    }else{
        wDef1.classList.remove("is-invalid");
    }

    if(!wDef2.value.match(numbers) || wDef2.value == ""){
        allGood = false;
        wDef2.classList.add("is-invalid");
    }else{
        wDef2.classList.remove("is-invalid");
    }

    if(!wDef3.value.match(numbers) || wDef3.value == ""){
        allGood = false;
        wDef3.classList.add("is-invalid");
    }else{
        wDef3.classList.remove("is-invalid");
    }

    if(!wDef4.value.match(numbers) || wDef4.value == ""){
        allGood = false;
        wDef4.classList.add("is-invalid");
    }else{
        wDef4.classList.remove("is-invalid");
    }

    if(wDef1.value == 0 && wDef2.value == 0 && wDef3.value == 0 && wDef4.value == 0){
        allGood = false;
    }

    return allGood;
}

/* SPY FORM VAL */
function spyFormVal(){
    /* INPUTS */
    let wSpy1 = document.forms["spyForm"]["wSpy1Count"];
    let wSpy2 = document.forms["spyForm"]["wSpy2Count"];

    var allGood = true;

    if(!wSpy1.value.match(numbers) || wSpy1.value == ""){
        allGood = false;
        wSpy1.classList.add("is-invalid");
    }else{
        wSpy1.classList.remove("is-invalid");
    }

    if(!wSpy2.value.match(numbers) || wSpy2.value == ""){
        allGood = false;
        wSpy2.classList.add("is-invalid");
    }else{
        wSpy2.classList.remove("is-invalid");
    }

    if(wSpy1.value == 0 && wSpy2.value == 0){
        allGood = false;
    }

    return allGood;
}

/* EXP FORM VAL */
function expFormVal(){
    /* INPUTS */
    let wExp1 = document.forms["expForm"]["wExp1Count"];
    let wExp2 = document.forms["expForm"]["wExp2Count"];

    var allGood = true;

    if(!wExp1.value.match(numbers) || wExp1.value == ""){
        allGood = false;
        wExp1.classList.add("is-invalid");
    }else{
        wExp1.classList.remove("is-invalid");
    }

    if(!wExp2.value.match(numbers) || wExp2.value == ""){
        allGood = false;
        wExp2.classList.add("is-invalid");
    }else{
        wExp2.classList.remove("is-invalid");
    }

    if(wExp1.value == 0 && wExp2.value == 0){
        allGood = false;
    }

    return allGood;
}