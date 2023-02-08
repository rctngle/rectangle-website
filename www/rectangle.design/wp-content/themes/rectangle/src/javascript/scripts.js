
var breakpoint = {}
breakpoint.refreshValue = function () {
	this.value = window.getComputedStyle(document.querySelector('body'), ':before').getPropertyValue('content').replace(/\"/g, '')
}

window.addEventListener('DOMContentLoaded', e=>{
	breakpoint.refreshValue()
	console.log('rectangle')
})


