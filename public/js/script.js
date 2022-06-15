
const btnHam = document.querySelector('.ham')
const btnTimes = document.querySelector('.times')
const navBar = document.getElementById('nav-bar')
const pageMain = document.getElementById('pageall')
const pageFooter = document.getElementById('pageOne')
const btnUser = document.querySelector('.header-btns')
const btnSearch = document.querySelector('.search-btn')
const btnNav = document.getElementById('main-nav')
const btnDiscover = document.querySelector('.input-men')
const btnSch = document.querySelector('#sch-btn')
const headerTitle = document.querySelector('header-title');


btnHam.addEventListener('click', function(){
    if(btnHam.className !== ""){
        btnHam.style.display = "none";
        btnTimes.style.display = "block";
        navBar.classList.add("show-nav");
        // pageMain.style.display = "none";
        // pageFooter.style.display = "none";
        btnUser.style.display = "none";
        btnTimes.style.justifyContent = "space-between";
    }
})

btnTimes.addEventListener('click', function(){
    if(btnHam.className !== ""){
        this.style.display = "none";
        btnHam.style.display = "block";
        navBar.classList.remove("show-nav");
        pageMain.style.display = "block";
        pageFooter.style.display = "block";
        btnUser.style.display = "block";
        headerTitle.style.justifyContent = "center";
    }
})

btnHam.addEventListener('click', function(){
    if(window.innerWidth > 800){
        btnHam.style.display = "none";
        btnTimes.style.display = "block";
        btnSearch.style.display = "none";
        btnNav.style.justifyContent = "space-between";
        // navBar.classList.add("show-nav");
        // // pageMain.style.display = "none";
        // // pageFooter.style.display = "none";
        // btnUser.style.display = "none";
        // btnTimes.style.float = "right";
    }
})

btnTimes.addEventListener('click', function(){
    if(window.innerWidth > 800){
        btnHam.style.display = "block";
        btnTimes.style.display = "none";
        btnSearch.style.display = "block";
        btnNav.style.justifyContent = "space-between";
        // navBar.classList.add("show-nav");
        // // pageMain.style.display = "none";
        // // pageFooter.style.display = "none";
        // btnUser.style.display = "none";
        // btnTimes.style.float = "right";
    }
})

btnSch.addEventListener("click", () =>{
    if(window.innerWidth > 800){
        btnDiscover.classList.toggle("active");
    }
})


