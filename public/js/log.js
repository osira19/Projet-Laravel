var numlog = document.getElementById('num'); 
var description = document.getElementById('apropos');
var libagence = document.getElementById('lib_ag'); 
var adrsagence = document.getElementById('adrs_ag'); 
var libcite = document.getElementById('cite');
var prix = document.getElementById('prix');
var idagence = document.getElementById('idag')  ;

function test(id_agence,num_lgmt,apropos,lib_agence,adrs_agence,lib_cite,prix_lgmt){
    document.getElementById('idag').value = id_agence;
    document.getElementById('num').value = num_lgmt;
    document.getElementById('apropos').value = apropos;
    document.getElementById('lib_ag').value = lib_agence;
    document.getElementById('adrs_ag').value = adrs_agence;
    document.getElementById('cite').value = lib_cite;
    document.getElementById('prix').value = prix_lgmt;
}

