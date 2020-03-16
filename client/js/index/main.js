

function connect() {
    document.getElementById('pop-up-FORM').style.display = "flex";
}

function disconnect() {
    document.getElementById('connect').style.display = "block";
    document.getElementById('connected-buttons').style.display= "none";
    enter('leave');
    ready('not-ready');
}

function enter(state) {
    if (state == 'join'){
        document.getElementById('join').style.display = "none";
        document.getElementById('leave').style.display = "initial";
        document.getElementById('ready').classList.remove('btn-disable') ;
        document.getElementById('ready').removeAttribute('disabled');
    }
    if (state == 'leave'){
        document.getElementById('join').style.display = "initial";
        document.getElementById('leave').style.display = "none";
        ready('not-ready');
        document.getElementById('ready').setAttribute('disabled', 'disabled');
        document.getElementById('ready').classList.add('btn-disable');
    }
}

function ready(state) {
    if (state == 'ready'){
        document.getElementById('ready').style.display = "none";
        document.getElementById('not-ready').style.display = "initial";
    }
    if (state == 'not-ready'){
        document.getElementById('ready').style.display = "initial";
        document.getElementById('not-ready').style.display = "none";
    }
}

function change(state) {
    con = document.getElementById('select-co').style;
    ins = document.getElementById('select-in').style;
    connexion = document.getElementById('connexion').style;
    inscription = document.getElementById('inscription').style;

    if (state == 'Connexion'){
        con.border = "none";
        ins.borderLeft = "black 2px solid";
        ins.borderTop = "black 2px solid";
        connexion.display = "block";
        inscription.display = "none";
        ins.backgroundColor ="#888888";
        con.backgroundColor ="transparent";
    }
    if (state == 'Inscri'){
        ins.border = "none";
        con.borderRight = "black 2px solid";
        con.borderTop = "black 2px solid";
        connexion.display = "none";
        inscription.display = "block";
        ins.backgroundColor ="transparent";
        con.backgroundColor ="#888888";
    }
}

function closePop(){
    document.getElementById('pop-up-FORM').style.display = "none";
}

function CONNECTED(){
    closePop();
    document.getElementById('connect').style.display = "none";
    document.getElementById('connected-buttons').style.display= "block";
}