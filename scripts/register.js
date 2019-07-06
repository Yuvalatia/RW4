
/* Race pic configuration */

let classPics = ["imgs/orc.gif","imgs/human.gif","imgs/elf.gif","imgs/undead.gif"];
let bonus = ["Race bonus: +10% attack.","Race bonus: +15% wisdom.","Race bonus: +15% defence.",
"Race bonus: +15% attack at night."];

let bonusTitle = document.getElementById("bonus");
let raceImage = document.getElementById("race-img");
let racePick = document.getElementById("race").addEventListener("change",function () {
    changeRace(this.value);
});

// change race function
function changeRace(race) {
    bonusTitle.innerText = bonus[race];
    raceImage.src = classPics[race];
}

/* Register validation */

// vals
let english = /^[A-Za-z ]+$/;
let pureEnglish = /^[A-Za-z]+$/;
let numbers = /^[0-9]+$/;
let numbersLetters = /^[0-9a-zA-Z]+$/;

//inputs
let firstName = document.getElementById("firstname");
let lastName = document.getElementById("lastname");
let password = document.getElementById("pass");
let rePassword = document.getElementById("repass");
let email = document.getElementById("email");
let armyName = document.getElementById("username");

function valForm(){

    // Strating with all good
    let allGood = true;

    // First name validation
    if(!firstName.value.match(english) || firstName.value == ""){
        allGood = false;
        firstName.classList.add("is-invalid");
    }else{
        firstName.classList.remove("is-invalid");
    }

    //Last name validation
    if(!lastName.value.match(english) || lastName.value == ""){
        allGood = false;
        lastName.classList.add("is-invalid");
    }else{
        lastName.classList.remove("is-invalid");
    }

    // Email validation
    if(email.value == ""){
        allGood = false;
        email.classList.add("is-invalid");
    }else{
        email.classList.remove("is-invalid");
    }

    // password validation
    if(!password.value.match(numbersLetters) || password.value.length < 8 ||
        password.value.length >16 ){
        allGood = false;
        password.classList.add("is-invalid");
    }else{
        password.classList.remove("is-invalid");
    }

    //password validation
    if(password.value !== rePassword.value){
        allGood = false;
        rePassword.classList.add("is-invalid");
    }else{
        rePassword.classList.remove("is-invalid");
    }

    // armyname checked


    return allGood;
}



