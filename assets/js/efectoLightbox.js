const imagen = document.querySelectorAll('.imgGaleria');
const lightbox = document.querySelector('.lightbox');
const imgLi = document.querySelector('.imgLightbox');
const contImgLi = document.querySelector('.contImg');
const titFoto = document.querySelector('.titFoto');
const descFoto = document.querySelector('.descFoto');
const precFoto = document.querySelector('.precFoto');


imagen.forEach(image => {
	image.addEventListener('click', ()=>{
		captarImg(image.getAttribute('src'), image.getAttribute('alt'), image.getAttribute('name'), image.getAttribute('id'));
	})
})

const captarImg = (srcImg, nombImg, descImg, precImg)=>{
	lightbox.style.transform = 'scale(1)';
	contImgLi.style.transform = 'scale(1)';
	imgLi.src = srcImg;
	titFoto.innerHTML = nombImg;
	descFoto.innerHTML = descImg;
	precFoto.innerHTML = precImg;

}
lightbox.addEventListener('click', ()=>{
	lightbox.style.transform = 'scale(0)';
	contImgLi.style.transform = 'scale(0)';
})