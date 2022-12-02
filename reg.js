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

function verifMdp(){
    var password = document.getElementById('password').value;
    var regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if (password.match(regex)){
        //Mettre la 1ere lettre en maj
        password = document.getElementById('password').style.backgroundColor = 'lightgreen';
        var erreurPassword = document.getElementById('erreurPassword');
        erreurPassword.innerHTML = "";
        test3 = true;
    }
    else 
    {
        password = document.getElementById('password').style.backgroundColor = '#FFCCCB';
        var erreurPassword = document.getElementById('erreurPassword');
        erreurPassword.innerHTML = "<font color = red> Attention, rentrez un mot de passe valide !</font>";
        test3 = false;
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



