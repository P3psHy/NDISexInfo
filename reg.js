var test1, test2, test3, test4, test5, test6, test7, test8, test9, test10;
function test(){
    if (test1 && test2 && test3 && test4 && test5 && test6 && test7 && test8 && test9 && test10){
        document.getElementById('button1').disabled = false;
        
    }
}
function verifNom() {
    var Nom = document.getElementById('Nom').value;
    var regex = /^[a-zA-Z\-].{2,100}$/;
    if (Nom.match(regex)){
        //Mettre la 1ere lettre en maj
        Nom = document.getElementById('Nom').style.backgroundColor = 'lightgreen';
        var erreurNom = document.getElementById('erreurNom');
        erreurNom.innerHTML = "";
        test1 = true;
    }
    else 
    {
        Nom = document.getElementById('Nom').style.backgroundColor = '#FFCCCB';
        var erreurNom = document.getElementById('erreurNom');
        erreurNom.innerHTML = "<font color = red> Attention, rentrez au moins 3 lettres et uniquement des lettres !</font>";
        test1 = false;
    }
    test();
}


function verifPrenom() {
    var Prenom = document.getElementById('Prenom').value;
    var regex = /^[a-zA-Z\-].{1,100}$/;
    if (Prenom.match(regex)){
        //Mettre la 1ere lettre en maj
        Prenom = document.getElementById('Prenom').style.backgroundColor = 'lightgreen';
        var erreurPrenom = document.getElementById('erreurPrenom');
        erreurPrenom.innerHTML = "";
        test2 = true;
    }
    else 
    {
        Prenom = document.getElementById('Prenom').style.backgroundColor = '#FFCCCB';
        var erreurPrenom = document.getElementById('erreurPrenom');
        erreurPrenom.innerHTML = "<font color = red> Attention, rentrez au moins 2 lettres et uniquement des lettres !</font>";
        test2 = false;
    }
    test();
}


function verifMail() {
    var Mail = document.getElementById('Mail').value;
    var regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    if (Mail.match(regex)){
        //Mettre la 1ere lettre en maj
        Mail = document.getElementById('Mail').style.backgroundColor = 'lightgreen';
        var erreurMail = document.getElementById('erreurMail');
        erreurMail.innerHTML = "";
        test3 = true;
    }
    else 
    {
        Mail = document.getElementById('Mail').style.backgroundColor = '#FFCCCB';
        var erreurMail = document.getElementById('erreurMail');
        erreurMail.innerHTML = "<font color = red> Attention, rentrez une adresse mail valide !</font>";
        test3 = false;
    }
    test();
}


function verifCfMail(){
    var Mail = document.getElementById('Mail').value;
    var CfMail = document.getElementById('CfMail').value;
    if(CfMail == Mail){
        CfMail = document.getElementById('CfMail').style.backgroundColor = 'lightgreen';
        var erreurCfMail = document.getElementById('erreurCfMail');
        erreurCfMail.innerHTML = "";
        test4 = true;
    }
    else 
    {
        CfMail = document.getElementById('CfMail').style.backgroundColor = '#FFCCCB';
        var erreurCfMail = document.getElementById('erreurCfMail');
        erreurCfMail.innerHTML = "<font color = red> Attention, rentrez la même adresse mail !</font>";
        test4 = false;
    }

    if (document.getElementById('CfMail').value == ""){
        CfMail = document.getElementById('CfMail').style.backgroundColor = '#FFCCCB';
        var erreurCfMail = document.getElementById('erreurCfMail');
        erreurCfMail.innerHTML = "<font color = red>Attention, la case ne peut pas être vide !</font>";
        test4= false;
    }
    test();
}


function verifCfMdp(){
    var password = document.getElementById('password').value;
    var CfPassword = document.getElementById('CfPassword').value;
    if(CfPassword == password){
        CfPassword = document.getElementById('CfPassword').style.backgroundColor = 'lightgreen';
        var erreurCfPassword = document.getElementById('erreurCfPassword');
        erreurCfPassword.innerHTML = "";
        test4 = true;
    }
    else 
    {
        CfPassword = document.getElementById('CfPassword').style.backgroundColor = '#FFCCCB';
        var erreurCfPassword = document.getElementById('erreurCfPassword');
        erreurCfPassword.innerHTML = "<font color = red> Attention, rentrez le même mot de passe !</font>";
        test4 = false;
    }

    if (document.getElementById('CfPassword').value == ""){
        CfPassword = document.getElementById('CfPassword').style.backgroundColor = '#FFCCCB';
        var erreurCfPassword = document.getElementById('erreurCfPassword');
        erreurCfPassword.innerHTML = "<font color = red>Attention, la case ne peut pas être vide !</font>";
        test4= false;
    }
    test();
}

function verifPoids(Poids){
    var Poids = document.getElementById('Poids').value;
    var regex = /^[0-9]*$/;
    if (Poids.match(regex)){
        //Mettre la 1ere lettre en maj
        Poids = document.getElementById('Poids').style.backgroundColor = 'lightgreen';
        var erreurPoids = document.getElementById('erreurPoids');
        erreurPoids.innerHTML = "";
        test5 = true;
    }
    else 
    {
        Poids = document.getElementById('Poids').style.backgroundColor = '#FFCCCB';
        var erreurPoids = document.getElementById('erreurPoids');
        erreurPoids.innerHTML = "<font color = red> Attention, rentrez un poids valide !</font>";
        test5= false;
    }

    if (document.getElementById('Poids').value == ""){
        Poids = document.getElementById('Poids').style.backgroundColor = '#FFCCCB';
        var erreurPoids = document.getElementById('erreurPoids');
        erreurPoids.innerHTML = "<font color = red>Attention, la case ne peut pas être vide !</font>";
        test5= false;
    }
    test();
}


function verifTaille(){
    var Taille = document.getElementById('Taille').value;
    var regex = /[+-]?([0-9]*[.])?[0-9]+/;
    if ( (Taille <= 2.70) && (Taille.match(regex))){
        Taille = document.getElementById('Taille').style.backgroundColor = 'lightgreen';
        var erreurTaille = document.getElementById('erreurTaille');
        erreurTaille.innerHTML = "";
        test6 = true;
    }
    else 
    {
        Taille = document.getElementById('Taille').style.backgroundColor = '#FFCCCB';
        var erreurTaille = document.getElementById('erreurTaille');
        erreurTaille.innerHTML = "<font color = red> Attention, rentrez une taille valide !</font>";
        test6= false;
    }

    if (document.getElementById('Taille').value == ""){
        Taille = document.getElementById('Taille').style.backgroundColor = '#FFCCCB';
        var erreurTaille = document.getElementById('erreurTaille');
        erreurTaille.innerHTML = "<font color = red>Attention, la case ne peut pas être vide !</font>";
        test6= false;
    }
    test();
}

var now = new Date();

function verifYear(){
    var Year = document.getElementById('Year').value;
    var Datemin = now.getFullYear() - 122;

    if((Year <= now.getFullYear()) && (Year >= Datemin)){
        Year = document.getElementById('Year').style.backgroundColor = 'lightgreen';
        var erreurYear = document.getElementById('erreurYear');
        erreurYear.innerHTML = "";
        test7 = true;
    }
    else 
    {
        Year = document.getElementById('Year').style.backgroundColor = '#FFCCCB';
        var erreurYear = document.getElementById('erreurYear');
        erreurYear.innerHTML = "<font color = red> Attention, rentrez une année valide !</font>";
        test7= false;
    }

    if (document.getElementById('Year').value == ""){
        Year = document.getElementById('Year').style.backgroundColor = '#FFCCCB';
        var erreurYear = document.getElementById('erreurYear');
        erreurYear.innerHTML = "<font color = red> Attention, la case ne peut pas être vide !</font>";
        test7= false;
    }
    test();
}

function verifMois(){
    var Mois = document.getElementById('Mois').value;
    var Mois = Mois - 1;
    
    
    if (Mois < 12){
        Mois = document.getElementById('Mois').style.backgroundColor = 'lightgreen';
        var erreurMois = document.getElementById('erreurMois');
        erreurMois.innerHTML = "";
        test8 = true;
    }
    else 
    {
        Mois = document.getElementById('Mois').style.backgroundColor = '#FFCCCB';
        var erreurMois = document.getElementById('erreurMois');
        erreurMois.innerHTML = "<font color = red> Attention, rentrez un mois valide !</font>";
        test8 = false;
    }

    if (document.getElementById('Mois').value == ""){
        Mois = document.getElementById('Mois').style.backgroundColor = '#FFCCCB';
        var erreurMois = document.getElementById('erreurMois');
        erreurMois.innerHTML = "<font color = red> Attention, la case ne peut pas être vide !</font>";
        test8 = false;
    }
    test();
}

function verifJour(){
    var Jour = document.getElementById('Jour').value;
    if ((Jour < 32) && (Jour > 0) ){
        Jour = document.getElementById('Jour').style.backgroundColor = 'lightgreen';
        var erreurJour = document.getElementById('erreurJour');
        erreurJour.innerHTML = "";
        verifDate();
        test9 = true;
    }
    else 
    {
        Jour = document.getElementById('Jour').style.backgroundColor = '#FFCCCB';
        var erreurJour = document.getElementById('erreurJour');
        erreurJour.innerHTML = "<font color = red> Attention, rentrez un jour valide !</font>";
        test9 = false;
    }

    if (document.getElementById('Jour').value == ""){
        Jour = document.getElementById('Jour').style.backgroundColor = '#FFCCCB';
        var erreurJour = document.getElementById('erreurJour');
        erreurJour.innerHTML = "<font color = red> Attention, la case ne peut pas être vide !</font>";
        test9 = false;
    }
    test();
} 


function verifDate(){
    var Jour = document.getElementById('Jour').value;
    var Mois = document.getElementById('Mois').value;
    var Year = document.getElementById('Year').value;
    var month = Mois - 1;
    const oui = new Date(Year, month, Jour);
    if (oui.getMonth() == month){
        var erreurJour = document.getElementById('erreurJour');
        erreurJour.innerHTML = "";
        test10 = true;
    }
    else 
    {
        Jour = document.getElementById('Jour').style.backgroundColor = '#FFCCCB';
        var erreurJour = document.getElementById('erreurJour');
        erreurJour.innerHTML = "<font color = red> Attention, rentrez un jour valide selon son mois !</font>";
        test10 = false;
    }

    if (document.getElementById('Jour').value == ""){
        Jour = document.getElementById('Jour').style.backgroundColor = '#FFCCCB';
        var erreurJour = document.getElementById('erreurJour');
        erreurJour.innerHTML = "<font color = red> Attention, la case ne peut pas être vide !</font>";
        test10 = false;
    }
    test();
} 




