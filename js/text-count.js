var tempo_estimado = false;

/*function cuenta(){

	//conta palavras
	// var frase = document.forms[0].texto.value;
	var frase = $("#corpo-texto").text();
	var palavras = frase.split(" ");
	var quantidade = 0;
	for (i=0; i< palavras.length; i++){if(palavras[i] != ''){quantidade++;}}
	document.forms[0].palavras.value=quantidade;
    document.getElementById('tempo-estimado').style.backgroundColor = "#e9e9e9";
}*/

function minutes() {
    
	//var palavras = document.calculator.palavras.value;
    // var wpm = document.calculator.wpm.value;
    var frase = $("#corpo-texto").text().trim();
	var palavras = frase.split(" ");
	var minutes = palavras.length/150;
	minutes = Math.ceil(Math.floor(minutes*10)/10);
	// var segundos = minutes*60; 
    //document.getElementById('tempo-estimado').style.backgroundColor = "#25d366";
    //if (tempo_estimado) { tempo_estimado.innerHTML = ' TEMPO ESTIMADO: ' + segundos + ' SEGUNDO(S)'; }
    document.getElementById('tempo-estimado').innerHTML = ' <em class="fas fa-stopwatch"></em> ' + minutes + ' min de leitura';
    console.log(segundos);
}
/*
function loaded() {
	tempo_estimado = document.getElementById('tempo-estimado');
}*/