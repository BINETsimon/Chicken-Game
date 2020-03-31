function CONNECTED(){
    var pseudo = document.getElementById('CoPseudo').value;
    var passwrd = document.getElementById('CoUserpassword').value;
    DBconnexion(pseudo, passwrd);    
}

function INSCRPTION(){
    var pseudo = document.getElementById('InsPseudo').value;
    var passwrd = document.getElementById('InsUserpassword').value;
    var confpasswrd = document.getElementById('InsConfpassword').value;

    if (passwrd == confpasswrd){
        DBinscription(pseudo, passwrd);
    }else{
        alert('vos deux mots de passes ne sont pas identiques');
    }
}


function DBinscription(pseudo, passwrd){
    
    var url = "../../../../to_host/serveur/inscription.php";

    $.ajax({
        type: "GET",
        url: url,
        dataType:'json',
        data: {
            'Pseudo': pseudo,
            'Userpassword': passwrd,
        },
        crossDomain: true,
        cache: false
    });

}


function DBconnexion(pseudo, passwrd){
    
    var url = "../../../server/connexion.php";

    $.ajax({
        type: "POST",
        url: url,
        dataType:'json',
        data: {
            'Pseudo': pseudo,
            'Userpassword': passwrd,
        },
        success:function(connStatus){
            coucou = connStatus;
            console.log(coucou);
        },
        crossDomain: true,
        cache: false
        
    });

}