class Header {
    constructor() {
        this.header = document.querySelector('header .stic');
        window.pageYOffset > 100 ? this.header.classList.add("move-activ") : null;
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 100) {
                this.header.classList.add("move-activ");
                console.log('add move');
            } else {
                this.header.classList.remove("move-activ");
                console.log('add move');
            }
        })
    }
}
const header = new Header; 




class MenuMobile {
    constructor(){
        this.open=document.querySelector('header .open-menu');
        this.close=document.querySelector('header .close-menu');
        this.menu=document.querySelector('header .menu');
        this.open.addEventListener('click', ()=>{
            this.menu.classList.toggle('open');
        });
        this.close.addEventListener('click', ()=>{
            this.menu.classList.toggle('open');
        });
    }
}
if(document.querySelector('header .open-menu')) {
    const menumobile = new MenuMobile;
}

