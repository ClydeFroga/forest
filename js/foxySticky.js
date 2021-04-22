let foxyes = ['.foxyOne', ".foxyTwo", ".foxyThree"];

function foxySticky(blc) {
	if(document.documentElement.clientWidth >= 1024) {
		let long = document.querySelector(blc)
		let last = document.querySelector('.last')
		let sticky = document.querySelector('.verticalBlock1')
		let curr = 1;
		let prev = 0;
		let min = Math.ceil(0);
		let max = Math.floor(3);
		let rand = Math.floor(Math.random() * (max - min)) + min;

		let randFoxy = document.querySelector(`${foxyes[rand]}`)
		
		if(long != undefined && last != undefined) {
			window.addEventListener('scroll', addSticky)
		}
		
		function addSticky() {
			let longTop = long.getBoundingClientRect().top - 800
			let lastBottom = last.getBoundingClientRect().bottom
			if(longTop > 0 && lastBottom < -100) {
				curr = 0;
			} else {
				curr = 1;
			}

			if(curr === prev) {
				prev === 1 ? prev = 0 : prev = 1;
				randFoxy.classList.toggle('foxySticky')
				try {
					sticky.classList.toggle('foxySticky')
				} catch(e) {

				}
			}
		}
		
	}
}