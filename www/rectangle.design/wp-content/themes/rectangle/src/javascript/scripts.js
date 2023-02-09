
var breakpoint = {}
breakpoint.refreshValue = function () {
	this.value = window.getComputedStyle(document.querySelector('body'), ':before').getPropertyValue('content').replace(/\"/g, '')
}

window.addEventListener('DOMContentLoaded', e=>{
	breakpoint.refreshValue()
	console.log('rectangle')
})


window.addEventListener('scroll', e=>{
	doLetters()
})


function doLetters(){
	if(document.querySelector('.endmatter')){
		const endmatterRectangle = document.querySelector('.endmatter .rectangle')
		const mainRectangle = document.querySelector('.rectangle--main')
		const bbox = document.querySelector('.endmatter').getBoundingClientRect()

		var extraPosition = bbox.top - document.body.scrollTop - window.innerHeight
		console.log(extraPosition)
		if(-extraPosition >= window.innerHeight){


			endmatterRectangle.classList.add('rectangle--fixed')
			document.body.classList.add('extra-color')
		} else {
			document.body.classList.remove('extra-color')
			endmatterRectangle.classList.remove('rectangle--fixed')	
		}

		if(extraPosition <= 0){
			mainRectangle.classList.add('rectangle--moving')
		} else {
			mainRectangle.classList.remove('rectangle--moving')
		}
	}
}