// Funções da calculadora
function insert(num) {
	document.form.textview.value = document.form.textview.value+num;
}
function equal() {
	var exp = document.form.textview.value;
	if(exp) {
		document.form.textview.value = eval(exp);
	}
}
function clean() {
	document.form.textview.value = '';
}
function back() {
	var exp = document.form.textview.value;
	document.form.textview.value = exp.substring(0, exp.length-1);
}

// Apresentação dos Comprovantes e Recibos
function openCont(el) {
	var openCompr = document.getElementById(el).style.display;
	if(openCompr == "none" || openCompr == '') {
		document.getElementById(el).style.display = 'flex';
	} else {
		document.getElementById(el).style.display = 'none';
	}
}

function openRecibs(el) {
	var openRecibs = document.getElementById(el).style.display;
	if(openRecibs == "none" || openRecibs == '') {
		document.getElementById(el).style.display = 'flex';
	} else {
		document.getElementById(el).style.display = 'none';
	}
}