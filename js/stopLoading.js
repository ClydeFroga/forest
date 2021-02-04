document.addEventListener('DOMContentLoaded', () => {
    function stopLoading() {
        let a = document.querySelector('.single__mainContent.article-loaded')
        let b = document.querySelector('.foxyLong')
        // console.log(b)
        if((b.getBoundingClientRect().top - a.getBoundingClientRect().bottom) > 150) {
            // console.log(a)
            a.insertAdjacentHTML('beforeend', `
            <div id="stop" style='height: ${b.getBoundingClientRect().top - a.getBoundingClientRect().bottom}px' class="tester" role="img" ></div>`)
            let stop = document.querySelector('#stop')
            // stop.addEventListener('click', () => {
            //     stop.remove()
            //     window.removeEventListener('scroll', scrollWatch)
            //     let body = document.querySelector('body')
            //     body.classList.add('loading')
            //     setTimeout(() => body.classList.add('loading'), 2000);
            //     document.querySelector('.additionalBlock').style.display = 'none'
            // }, {
            //     once: true,
            // })
            stop.addEventListener('click', () => {
                window.scrollTo({
                    top: b.offsetTop,
                    behavior: "smooth"
                });
            })
        }
    }
    stopLoading()
})
