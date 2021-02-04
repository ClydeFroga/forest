let foxyes = ['.foxyOne', ".foxyTwo", ".foxyThree"];

function foxyStickyWithNews() {
	if(document.documentElement.clientWidth >= 1024) {
		let full = document.querySelector('.foxyFullOne')
		let last = document.querySelector('.readersChoise')
		if(last == null) {
			last = document.querySelector('.anotherNews')
		}
		
		let randFoxy = document.querySelector(`${foxyes[_.random(0, 2)]}`)
		
		if(full != undefined && last != undefined) {
			window.addEventListener('scroll', addSticky)
		}
	
		function addSticky() {
			let longTop = full.getBoundingClientRect().top - 300
			let lastBottom = last.getBoundingClientRect().bottom
			if(longTop > 0 && lastBottom < -600) {
				randFoxy.classList.add('foxySticky')
			} else {
				randFoxy.classList.remove('foxySticky')
			}
		}
	}
}

function foxyStickyWithoutNews() {
	if(document.documentElement.clientWidth >= 1024) {
		let long = document.querySelector('.foxyLong')
		let last = document.querySelector('.readersChoise')
	
		let randFoxy = document.querySelector(`${foxyes[_.random(0, 2)]}`)
		
		if(long != undefined && last != undefined) {
			window.addEventListener('scroll', addSticky)
		}
		
		function addSticky() {
			let longTop = long.getBoundingClientRect().top - 300
			let lastBottom = last.getBoundingClientRect().bottom
			
			if(longTop > 0 && lastBottom < -300) {
				randFoxy.classList.add('foxySticky')
			} else {
				randFoxy.classList.remove('foxySticky')
			}
		}
		
	}
}