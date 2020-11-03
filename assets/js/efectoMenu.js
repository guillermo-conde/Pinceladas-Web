	function menu(){
		setTimeout(function(){titulo()},0);
		setTimeout(function(){primero()},0);
		setTimeout(function(){segundo()},600);
		setTimeout(function(){tercero()},1000);
	}	

	function titulo() {
		const titulo = document.querySelector('.tituloPagina');
		titulo.classList.toggle('efectoTitulo');
	}

	function primero() {
		const efecto1 = document.querySelector('.efecto1');
		efecto1.classList.toggle('mostrarMenu');
	}

	function segundo() {
		const efecto2 = document.querySelector('.efecto2');
		efecto2.classList.toggle('mostrarMenu');
	}

	function tercero() {
		const efecto3 = document.querySelector('.efecto3');
		efecto3.classList.toggle('mostrarMenu');
	}
