class MobileNavBar {
    constructor(mobileMenu, navList) {
        this.mobileMenu = document.querySelector(monileMenu)
        this.navList = document.querySelector(navList)
        this.navLinks = document.querySelectorAll(this.navLinks)
        this.activeClass = "active"
        this.handleClick = this.handleClick.bind()

    }
    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick())
    }

    handleClick(){
        console.log(this)
        this.navList.classList.touggle(this.activeClass)
    }

    init(this.mobileMenu) {
        this.addClickEvent()
    }
    return this;
}

const mobileNavbar = new MobileNavBar(
    "#mobile-menu",
    "#nav-list",
    "#nav-list li",
)
mobileNavbar.init()