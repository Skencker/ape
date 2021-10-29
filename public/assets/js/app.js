// Dark mode

let body = document.querySelector('body');
let darkmode = localStorage.getItem('darkmode')
let navbar = document.querySelector('nav')
let footer = document.querySelector('footer')
let card = document.querySelectorAll('.card')
let accordeon = document.querySelectorAll('.accordion-item')
let darkbtn = document.querySelector('.dark-btn');

//activer le mode dark
const enableDarkmode = () => {
        body.classList.add('dark')
        navbar.classList.add('navbar-dark')
        navbar.classList.add('bg-dark')
        footer.classList.add('bg-dark')
        darkbtn.classList.add('bg-dark')
        darkbtn.classList.add('text-light')
        darkbtn.classList.add('border-light')
        darkbtn.innerHTML = "<i class='bi bi-brightness-high-fill'></i>"
        for (let i = 0; i < card.length; i ++) {
            card[i].classList.add('bg-dark')
            card[i].classList.add('text-light')
        }
        for (let i = 0; i < accordeon.length; i ++) {
            accordeon[i].classList.add('bg-dark')
            accordeon[i].classList.add('text-light')
        }
        localStorage.setItem('darkmode','enabled')
    }
    
    //desactiver le dark mode
    const disableDarkmode = () => {
        body.classList.remove('dark')
        navbar.classList.remove('bg-dark')
        footer.classList.remove('bg-dark')
        darkbtn.classList.remove('bg-dark')
        darkbtn.classList.remove('text-light')
        darkbtn.classList.remove('border-light')
        darkbtn.innerHTML = "<i class='bi bi-moon-fill'></i>"
        for (let i = 0; i < card.length; i ++) {
            card[i].classList.remove('bg-dark')
            card[i].classList.remove('text-light')
        }
        for (let i = 0; i < accordeon.length; i ++) {
            accordeon[i].classList.remove('bg-dark')
           accordeon[i].classList.remove('text-light')
        }
        navbar.classList.remove('navbar-dark')
        localStorage.setItem('darkmode', null)
}

if (darkmode === 'enabled') {
        enableDarkmode();
}

darkbtn.addEventListener('click', () => {
    darkmode = localStorage.getItem('darkmode')
    if (darkmode !== 'enabled') {
        enableDarkmode();
    } else {
        disableDarkmode();
    }
})
