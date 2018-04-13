////////////////////////COULEURS////////////////////////

function surligne(champ, erreur){ //rouge
    if(erreur){
        champ.style.backgroundColor = "#f88";
    }
    else{
        champ.style.backgroundColor = "";
    }
}

function surligne2(champ, erreur){ //jaune
    if(erreur){
        champ.style.backgroundColor = "#ff8";
    }
    else{
        champ.style.backgroundColor = "";
    }
}

function surligne3(champ, erreur){ //vert
    if(erreur){
        champ.style.backgroundColor = "";
    }
    else{
        champ.style.backgroundColor = "#8f8";
    }
}

////////////////////////CONNEXION////////////////////////

////////////////////////IDENTIFIANT////////////////////////
function pseudo_on_key_up(champ){
    if(champ.value.length < 2 || champ.value.length > 20){
        surligne(champ, true);
        return false;
    }
    else{
        surligne(champ, false);
        return true;
    }
}
////////////////////////MOT DE PASSE////////////////////////
function password_on_key_up(champ){
    if(champ.value != "walou"){
        surligne(champ, true);
        return false;
    }
    else{
        surligne(champ, false);
        return true;
    }
}
////////////////////////SUBMIT////////////////////////
function connexion(f){
    var pseudoOK = pseudo_on_key_up(f.header_identifiant);
    var passOK = password_on_key_up(f.header_password);
    if(pseudoOK==true && passOK==true){
        alert(" ÇA MARCHE !!!");
        return true;
    }
    else{
        alert("Veuillez remplir correctement les champs obligatoires");
        return false;
    }
}
////////////////////////CREATION////////////////////////

////////////////////////PSEUDO////////////////////////
function verif_pseudo(champ){
    if(champ.value.length < 2 || champ.value.length > 20){
        surligne(champ, true);
        champ = false;
    }
    else{
        surligne(champ, false);
        champ = true;
    }
    if (champ == true) {
        document.getElementById('check_ok_pseudo').style.display = 'flex';
        document.getElementById('check_pas_ok_pseudo').style.display = 'none';

    } else {
        document.getElementById('check_pas_ok_pseudo').style.display = 'flex';
        document.getElementById('check_ok_pseudo').style.display = 'none';
    }
    return champ;
}
////////////////////////DATE DE NAISSANCE////////////////////////
function verification_date_birth(champ) {
    if (champ.value != "") {
        var today = new Date();
        var birth = new Date(champ.value);
        var hundred_year = (today.getFullYear() - 120);
        var hundred_month = (today.getMonth());
        var hundred_day = (today.getDate());
        var hundred = new Date(hundred_year, hundred_month, hundred_day);
        if ((birth < today && birth > hundred)) {
            surligne(champ, false);
            document.getElementById('check_ok_birth').style.display = 'flex';
            document.getElementById('check_pas_ok_birth').style.display = 'none';
            return true;
        }
        else {
            surligne(champ, true);
            document.getElementById('check_pas_ok_birth').style.display = 'flex';
            document.getElementById('check_ok_birth').style.display = 'none';
            return false;
        }
    }
    else{
        surligne(champ, true);
        document.getElementById('check_pas_ok_birth').style.display = 'flex';
        document.getElementById('check_ok_birth').style.display = 'none';
        return false;
    }
}

////////////////////////ADRESSE MAIL////////////////////////
function verif_mail(champ){
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if(!regex.test(champ.value)){
        surligne(champ, true);
        champ = false;
    }
    else{
        surligne(champ, false);
        champ = true;
    }
    if (champ == true) {
        document.getElementById('check_ok_mail').style.display = 'flex';
        document.getElementById('check_pas_ok_mail').style.display = 'none';
    }
    else{
        document.getElementById('check_pas_ok_mail').style.display = 'flex';
        document.getElementById('check_ok_mail').style.display = 'none';
    }
    return champ;
}


////////////////////////MOT DE PASSE////////////////////////
function verif_password(champ){

    if(champ.value.length < 8 || champ.value.length > 25) //rouge
    {
        surligne(champ, true);
        champ = false;
    }
    else if (champ.value.length >= 8 && champ.value.length < 15) //jaune
    {
        surligne2(champ, true);
        champ = true;
    }
    else{    //vert
        surligne3(champ, false);
        champ = true;
    }
    if (champ == true) {
        document.getElementById('check_ok_password').style.display = 'flex';
        document.getElementById('check_pas_ok_password').style.display = 'none';
    }
    else if(champ == false) {
        document.getElementById('check_pas_ok_password').style.display = 'flex';
        document.getElementById('check_ok_password').style.display = 'none';
    }
    return champ;
}
////////////////////////CONFIRMATION MOT DE PASSE////////////////////////
function verif_conf_password(champ){
    var password = document.getElementById('password');  //retrouve l'ID du mot de passe
    var password_value = password.value;                  //prend la valeur du mot de passe grace à l'ID
    var password_confirm_value = champ.value;            //prend la veuleur du mot de passe à comparer (this)
    var password_confirm_test = 0;
    if (password_confirm_value != password_value || password_confirm_value == ''){
        password_confirm_test = false;                //validation fausse
        surligne(champ, true);
        document.getElementById('password_confirm').innerHTML = false;
    }
    else {
        password_confirm_test = true;
        surligne(champ, false);
        document.getElementById('password_confirm').innerHTML = true;
    }
    if (password_confirm_test == false) {
        document.getElementById('check_pas_ok_password_confirm').style.display = 'flex';
        document.getElementById('check_ok_password_confirm').style.display = 'none';
    } else {
        document.getElementById('check_pas_ok_password_confirm').style.display = 'none';
        document.getElementById('check_ok_password_confirm').style.display = 'flex';
    }
    return password_confirm_test;
}


////////////////////////DATE de creation////////////////////////
function verification_date_creation(champ) {
    if (champ.value != "") {
        var today = new Date();
        var birth = new Date(champ.value);
        var hundred_year = (today.getFullYear() - 120);
        var hundred_month = (today.getMonth());
        var hundred_day = (today.getDate());
        var hundred = new Date(hundred_year, hundred_month, hundred_day);
        if ((birth < today && birth > hundred)) {
            surligne(champ, false);
            document.getElementById('check_ok_creation').style.display = 'flex';
            document.getElementById('check_pas_ok_creation').style.display = 'none';
            return true;
        }
        else {
            surligne(champ, true);
            document.getElementById('check_pas_ok_creation').style.display = 'flex';
            document.getElementById('check_ok_creation').style.display = 'none';
            return false;
        }
    }
    else{
        surligne(champ, true);
        document.getElementById('check_pas_ok_creation').style.display = 'flex';
        document.getElementById('check_ok_creation').style.display = 'none';
        return false;
    }
}

//////////////////////////////////cpt bancaire//////////////
function verification_bank_account(champ){
    if(champ.value.length < 2 || champ.value.length > 20){
        surligne(champ, true);
        champ = false;
    }
    else{
        surligne(champ, false);
        champ = true;
    }
    if (champ == true) {
        document.getElementById('check_ok_bank_account').style.display = 'flex';
        document.getElementById('check_pas_ok_bank_account').style.display = 'none';
    } else {
        document.getElementById('check_pas_ok_bank_account').style.display = 'flex';
        document.getElementById('check_ok_bank_account').style.display = 'none';
    }
    return champ;
}
//////////////////////////////////gps_country_user//////////////
function verification_gps_country_user(champ){
    if(champ.value.length < 2 || champ.value.length > 20){
        surligne(champ, true);
        champ = false;
    }
    else{
        surligne(champ, false);
        champ = true;
    }
    if (champ == true) {
        document.getElementById('check_ok_gps_country_user').style.display = 'flex';
        document.getElementById('check_pas_ok_gps_country_user').style.display = 'none';
    } else {
        document.getElementById('check_pas_ok_gps_country_user').style.display = 'flex';
        document.getElementById('check_ok_gps_country_user').style.display = 'none';
    }
    return champ;
}
//////////////////////////////////gps_city_user//////////////
function verification_gps_city_user(champ){
    if(champ.value.length < 2 || champ.value.length > 20){
        surligne(champ, true);
        champ = false;
    }
    else{
        surligne(champ, false);
        champ = true;
    }
    if (champ == true) {
        document.getElementById('check_ok_gps_city_user').style.display = 'flex';
        document.getElementById('check_pas_ok_gps_city_user').style.display = 'none';
    } else {
        document.getElementById('check_pas_ok_gps_city_user').style.display = 'flex';
        document.getElementById('check_ok_gps_city_user').style.display = 'none';
    }
    return champ;
}
//////////////////////////////////profile_pic//////////////
function verification_profile_pic(champ){
    if(champ.value.length < 2 || champ.value.length > 20){
        surligne(champ, true);
        champ = false;
    }
    else{
        surligne(champ, false);
        champ = true;
    }
    if (champ == true) {
        document.getElementById('check_ok_profile_pic').style.display = 'flex';
        document.getElementById('check_pas_ok_profile_pic').style.display = 'none';
    } else {
        document.getElementById('check_pas_ok_profile_pic').style.display = 'flex';
        document.getElementById('check_ok_profile_pic').style.display = 'none';
    }
    return champ;
}





////////////////////////gender////////////////////////
function verif_gender(champ){
    var x = document.getElementById("list_select").value;
    if( x == "homme" || x == "femme" || x == "autre"){
        champ = true;
    }
    else{
        champ = false;
    }
    if (champ == false) {
        document.getElementById('check_pas_ok_list_select').style.display = 'flex';
        document.getElementById('check_ok_list_select').style.display = 'none';
    }
    else{
        document.getElementById('check_pas_ok_list_select').style.display = 'none';
        document.getElementById('check_ok_list_select').style.display = 'flex';
    }
    return champ;
}


////////////////////////CONDITIONS D'UTILISATIONS////////////////////////
function checkbox_on_click () {
    if (checkbox.checked) {
        checkbox_test = true;
        document.getElementById('checkbox_test').innerHTML = true;
    }
    else{
        checkbox_test = false;
        document.getElementById('checkbox_test').innerHTML = false;
        document.getElementById('check_pas_ok_checkbox').style.display = 'flex';
    }
    if (checkbox_test == true) {
        document.getElementById('check_ok_checkbox').style.display = 'flex';
        document.getElementById('check_pas_ok_checkbox').style.display = 'none';
    }
    else{
        document.getElementById('check_pas_ok_checkbox').style.display = 'flex';
        document.getElementById('check_ok_checkbox').style.display = 'none';
    }
    return checkbox_test;
}




////////////////////////SUBMIT////////////////////////
function soumettre(f){
    var pseudo_ok = verif_pseudo(f.pseudo);
    var birth_ok = verification_date_birth(f.birth);
    var mail_ok = verif_mail(f.mail);
    var password_ok = verif_password(f.password);
    var confirmation_ok = verif_conf_password(f.password_confirm);
    var cgu_ok = checkbox_on_click(f.checkbox);
    var gender_ok = verif_gender(f.list_select);
    var creation_ok = verification_date_creation(f.creation);
    var gps_country_ok = verification_gps_country_user(f.gps_country);
    var gps_city_ok = verification_gps_city_user(f.gps_city);
    if(pseudo_ok==true && mail_ok==true && password_ok==true && confirmation_ok==true && cgu_ok==true && gender_ok==true && birth_ok==true && creation_ok==true && gps_country_ok==true && gps_city_ok==true){
        alert(" ÇA MARCHE !!!");
        console.log('ca marche');
        return true;
    } else{
        alert("Veuillez remplir correctement les champs obligatoires");
        return false;
    }
}


// if (soumettre == true) {
//   document.getElementById('inactif').style.display = 'none';
//   document.getElementById('actif').style.display = 'flex';
// }