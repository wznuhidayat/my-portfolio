function Menu(e) {
    let list = document.querySelector('ul');
    e.name === 'menu' ? (e.name = "close", list.classList.add('top-navbar') , list.classList.add('opacity-navbar')) : (e.name = "menu", list.classList.remove('top-navbar'), list.classList.remove('opacity-navbar'))
}