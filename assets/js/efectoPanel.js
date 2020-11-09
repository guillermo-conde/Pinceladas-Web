/*Funciones para cambiar contenido principal al hacer clic sobre una seccion del sidebar*/
function abrirNuevos(){
	/*Obtenemos los elementos en base a su id*/
	const secTodos = document.getElementById('todos');
	const secInicio = document.getElementById('inicio');
	const secNuevos = document.getElementById('nuevos');
	//Mientras uno se muestra, los demas se esconden.
	secNuevos.style.display = 'block';
	secTodos.style.display = 'none';
	secInicio.style.display = 'none';
	
}

function abrirTodos(){
	const secTodos = document.getElementById('todos');
	const secInicio = document.getElementById('inicio');
	const secNuevos = document.getElementById('nuevos');

	secTodos.style.display = 'block';
	secInicio.style.display = 'none';
	secNuevos.style.display = 'none';
}

function abrirInicio(){
	const secTodos = document.getElementById('todos');
	const secInicio = document.getElementById('inicio');
	const secNuevos = document.getElementById('nuevos');

	secInicio.style.display = 'block';
	secTodos.style.display = 'none';
	secNuevos.style.display = 'none';
}

/*Efectos para abrir un modal desde la parte de arriba de la pagina*/
function modalEdit()
{
	// Obtenemos los elementos en base a su clase
	const modalEdit = document.querySelector('.editar');
	const contMod = document.querySelector('.contenedorModalEdit');
	// El fondo se muestra sin ningun efecto.
	modalEdit.style.transform = 'scale(1)';
	// El Modal se muestra con un efecto de caida.
	contMod.style.transform='translateY(0%)';
}

function modalElim()
{
	const modalElim = document.querySelector('.eliminar');
	const contMod = document.querySelector('.contenedorModalElim');
	modalElim.style.transform = 'scale(1)';
	contMod.style.transform='translateY(0%)';
}

/*Efectos para cerrar un modal desde su punto de viaudalizacion hacia arriba*/
function cerrarEdit(){
	// Obtenemos los elementos en base a su clase
	const contMod = document.querySelector('.contenedorModalEdit');
	// Primero se cierra el modal hacia arriba.
	contMod.style.transform='translateY(-150%)';
	// Despues (con un retraso), se cierra el fondo.
	setTimeout(function(){cerrarmodal()},200);
}

function cerrarElim(){
	const contMod = document.querySelector('.contenedorModalElim');
	contMod.style.transform = 'translateY(-150%)';
	setTimeout(function(){cerrarmodal()},200);
}
// Funcion para cerrar el fondo.
function cerrarmodal(){
	const modalEdit = document.querySelector('.editar');
	const modalElim = document.querySelector('.eliminar');
	modalEdit.style.transform = 'scale(0)';
	modalElim.style.transform = 'scale(0)';
}