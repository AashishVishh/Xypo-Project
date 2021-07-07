console.log('This is app.js');

const menuBtn = document.querySelector('#menuBtn');
const sideNav = document.querySelector('#sideNav');

sideNav.style.right = "-250px";

menuBtn.addEventListener('click',()=>{
    if (sideNav.style.right == "-250px") {
        sideNav.style.right = "0";
    }
    else{
        sideNav.style.right = "-250px";
    }
});