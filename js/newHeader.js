document.addEventListener('DOMContentLoaded', () => {

    function expand() {
        let block = document.querySelector('.header__container')
        let but = document.querySelector('.header__topButtons span:first-child')
        let bot = document.querySelector('header')
        let hiddenHeight = document.querySelector('.header__hidden').scrollHeight
        let top = document.querySelector('.header__top')

        top.classList.remove('release')
        bot.style.marginTop = `${hiddenHeight + 30}px`;
        but.style.opacity = '0';
        setTimeout(() => but.style.display = 'none', 500)

        block.classList.add('expanded')
    }

    let expandBut = document.querySelector('.header__topButtons > span:first-child')

    if (expandBut !== null) {
        expandBut.addEventListener('mouseup', expand)
    }

    function collapse() {
        let block = document.querySelector('.header__container')
        let top = document.querySelector('.header__top')

        if(block.classList.contains('expanded')) {
            block.classList.remove('expanded')
            let bot = document.querySelector('header')
            bot.style.marginTop = ``;
            let but = document.querySelector('.header__topButtons span:first-child')
            but.style.display = 'block'
            setTimeout(() => but.style.opacity = '1', 100)

            makeHeight()
        } else {
            block.classList.add('collapsed')
            setTimeout(() => top.classList.add('release'), 100)
            localStorage.setItem('topCollapsed', 'true')

            block.style.height = '50px';
        }
    }

    let collapseBut = document.querySelector('.header__topButtons > span:last-child')

    if (collapseBut !== null) {
        let addBut = document.querySelector('.collapseAdditionalButton')
        collapseBut.addEventListener('mouseup', collapse)
        addBut.addEventListener('mouseup', collapse)
    }

    function expandAgain() {
        let block = document.querySelector('.header__container')
        block.classList.remove('collapsed')
        localStorage.removeItem('topCollapsed')

        makeHeight()

        setTimeout(expand, 200)
    }

    let expandAgainBut = document.querySelector('.header__topButtonsHidden > span:first-child')

    if (expandAgainBut !== null) {
        expandAgainBut.addEventListener('mouseup', expandAgain)
    }


})

function editBackgroundImage() {
    let blc = document.querySelector('.header__top')
    let set = blc.dataset.srcSet.split(',')
    let desk =  set[0]
    let mob = set[1]
    let width = document.documentElement.clientWidth

    if (width >= 577) {
        blc.style.backgroundImage = `url('${desk}')`
    } else {
        blc.style.backgroundImage = `url('${mob}')`
    }
    makeHeight()
}

function makeHeight() {
    let blc2 = document.querySelector('.header__container')
    let width = document.documentElement.clientWidth;
    if(!blc2.classList.contains('collapsed')) {
        let heightOfImg;
        if (width >= 577) {
            if(!blc2.classList.contains('collapsed')) {
                heightOfImg = Math.ceil((width / 2000) * 220);
            }
        } else {
            if(!blc2.classList.contains('collapsed')) {
                heightOfImg = Math.ceil((width / 576) * 100);
            }
        }
        blc2.style.transition = `all 0s`
        blc2.style.height = `${heightOfImg}px`
        setTimeout(() => blc2.style.transition = `all 1s`, 500)
    }
}

editBackgroundImage()

window.addEventListener("orientationchange", function () {
    setTimeout(editBackgroundImage, 100)
    setTimeout(makeHeight, 150)
});