document.addEventListener("DOMContentLoaded", () => {
    const burgerNavbar = document.querySelector('#burger-navbar');
    if(burgerNavbar.style.display === "block"){

            const navbar = document.querySelector('#navbarOne');
            navbar.style.display = 'none'
    }
    // const hoverableElement = document.getElementById('menu-battery');

    // hoverableElement.addEventListener('mouseover', function() {const testProduct = document.querySelector('#test-product')
    //     testProduct.style.display = "block"});
});
document.querySelector('#burger-navbar').addEventListener('click', function() {
    console.log("Hello Console!");
    const navbar = document.querySelector('#navbarOne');
    if(navbar.style.display === "none"){

        navbar.style.display = 'block'
    }
    else {
        navbar.style.display = 'none'
    }
  });
