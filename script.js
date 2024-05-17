const header = document.querySelector('header');

window.addEventListener('scroll',()=>{
    header.classList.toggle('sticky',window.scrollY > 50)
})

const menu_icon = document.querySelector('#menu-icon')
const nav__list = document.querySelector('.nav__list')

menu_icon.addEventListener('click',()=>{
    menu_icon.classList.toggle('bx-x');
    nav__list.classList.toggle('show')
})
