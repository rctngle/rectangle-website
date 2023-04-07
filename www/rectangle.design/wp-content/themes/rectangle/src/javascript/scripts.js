
var breakpoint = {}
breakpoint.refreshValue = function () {
	this.value = window.getComputedStyle(document.querySelector('body'), ':before').getPropertyValue('content').replace(/\"/g, '')
}

window.addEventListener('DOMContentLoaded', e=>{
	breakpoint.refreshValue()
	document.querySelectorAll('.audio').forEach(video=>{
		video.addEventListener('click', e=> {
			video.muted = !video.muted
			if (video.muted) {
				video.parentNode.classList.remove('unmuted')
			} else {
				video.parentNode.classList.add('unmuted')
			}
		})
	})
	document.querySelectorAll('.audiotoggle').forEach(control=>{
		control.addEventListener('click', e=> {
			e.preventDefault()
			video = control.parentNode.parentNode.parentNode.querySelector('.post__mediaitem video')
			console.log(video)
		
			video.muted = !video.muted
			if (video.muted) {
				video.parentNode.classList.remove('unmuted')
			} else {
				video.parentNode.classList.add('unmuted')
			}
		})
		
	})

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