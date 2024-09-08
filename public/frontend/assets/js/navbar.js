const productDataBatterai = [
    {
        imgSrc: "frontend/assets/images/batlogo.png",
        title: '12.8V LiFePO4'
    },
    {
        imgSrc: 'frontend/assets/images/batlogo.png',
        title: '25.6V LiFePO4'
    },
    {
        imgSrc: 'frontend/assets/images/batlogo.png',
        title: '48V LiFePO4'
    },
    {
        imgSrc: 'frontend/assets/images/batlogo.png',
        title: '51.2V LiFePO4'
    },
    {
        imgSrc: 'frontend/assets/images/ess.png',
        title: 'ESS'
    },
    {
        imgSrc: 'frontend/assets/images/essacc.png',
        title: 'ESS Accessories'
    },
    {
        imgSrc: 'frontend/assets/images/custom.png',
        title: 'Custom Batteries'
    }
];

const productDataApplication = [
    {
      imgSrc: "frontend/assets/images/rs2.png",
      title: "Residential & Consumer",
    },
    {
      imgSrc: "frontend/assets/images/rs4.png",
      title: "Commercial",
    },
    {
      imgSrc: "frontend/assets/images/rs5.png",
      title: "Transit Battery",
    },
    {
      imgSrc: "frontend/assets/images/rs6.png",
      title: "Minigrid, Rural Electrification",
    },
    {
      imgSrc: "frontend/assets/images/rs7.png",
      title: "Starter Battery",
    },
    {
      imgSrc: "frontend/assets/images/rs8.png",
      title: "3C Products",
    },
    {
      imgSrc: "frontend/assets/images/rs9.png",
      title: "Custom Batteries",
    },
  ];
  
const solarPanelData = [
    {
      imgSrc: "frontend/assets/images/logo_solar.png",
      title: "12.8V LiFePO4",
    },
    {
      imgSrc: "frontend/assets/images/logo_solar.png",
      title: "25.6V LiFePO4",
    },
    {
      imgSrc: "frontend/assets/images/logo_solar.png",
      title: "48V LiFePO4",
    },
    {
      imgSrc: "frontend/assets/images/logo_solar.png",
      title: "51.2V LiFePO4",
    },
    {
      imgSrc: "frontend/assets/images/logo_solar.png",
      title: "ESS",
    },
    {
      imgSrc: "frontend/assets/images/logo_solar.png",
      title: "ESS Accessories",
    },
    {
      imgSrc: "frontend/assets/images/logo_solar.png",
      title: "Custom Batteries",
    },
  ];    

const smartpoleProductData = [
    {
      imgSrc: "frontend/assets/images/logo_smartpole.png",
      title: "12.8V LiFePO4",
    },
    {
      imgSrc: "frontend/assets/images/logo_smartpole.png",
      title: "25.6V LiFePO4",
    },
    {
      imgSrc: "frontend/assets/images/logo_smartpole.png",
      title: "48V LiFePO4",
    },
    {
      imgSrc: "frontend/assets/images/logo_smartpole.png",
      title: "51.2V LiFePO4",
    },
    {
      imgSrc: "frontend/assets/images/logo_smartpole.png",
      title: "ESS",
    },
    {
      imgSrc: "frontend/assets/images/logo_smartpole.png",
      title: "ESS Accessories",
    },
    {
      imgSrc: "frontend/assets/images/logo_smartpole.png",
      title: "Custom Batteries",
    },
  ];

document.addEventListener("DOMContentLoaded", () => {
    const burgerNavbar = document.querySelector('#burger-navbar');
    if(burgerNavbar.style.display === "block"){

            const navbar = document.querySelector('#navbarOne');
            navbar.style.display = 'none'
    }
    
    const productHover = document.querySelectorAll('.dropdown-hover.product-hover');
    const testProduct = document.querySelector('#test-product');
    let typeData = '';
    // Function to populate the testProduct div with data
    function populateTestProduct(productData) {
        testProduct.innerHTML = ''; // Clear existing content
        
        const contentDiv = document.createElement('div');
        contentDiv.className = 'imgProduct';
        contentDiv.style.display = 'flex';
        contentDiv.style.flexDirection = 'row';
        contentDiv.style.justifyContent = 'space-around';
        
        productData.forEach(product => {
            const productItem = document.createElement('a');
            productItem.innerHTML = `
                <div style="text-align: center;">
                    <img src="${product.imgSrc}" alt="${product.title}" width="75px" height="75px">
                    <br>
                    <span>${product.title}</span>
                </div>
            `;
            contentDiv.appendChild(productItem);
        });

        testProduct.appendChild(contentDiv);
        testProduct.style.display = 'block'; // Show the test product container
    }

    // Show testProduct with data when hovering over dropdown
    productHover.forEach((dropdown) => {
        dropdown.addEventListener('mouseenter', function () {
            if(typeData ===''){
                
                const category = dropdown.querySelector('a').textContent.trim();
                
                let productData;
                if (category === 'Solar Panel') {
                    typeData = category;
                    productData = solarPanelData;
                } else if (category === 'SmartPole') {
                    typeData = category;
                    productData = smartpoleProductData;
                } else if (category === 'Application') {
                    typeData = category;
                    productData = productDataApplication;
                } else if (category === 'Battery') {
                    typeData = category;
                    productData = productDataBatterai;
                } else {
                    // Handle other categories or default case
                    productData = []; // No data for unrecognized categories
                }
    
                populateTestProduct(productData);
            }
        });

        dropdown.addEventListener('mouseleave', function () {
            // Delay hiding to avoid flickering when moving from dropdown to testProduct
            setTimeout(() => {
                if (!testProduct.matches(':hover')) {
                    typeData ='';
                    testProduct.style.display = 'none';
                }
            }, 200); // Adjust delay as needed
        });
    });

    // Keep testProduct visible when hovering directly over it
    testProduct.addEventListener('mouseenter', function () {
        testProduct.style.display = 'block';
        typeData ='';
        
    });

    // Hide testProduct when mouse leaves it
    testProduct.addEventListener('mouseleave', function () {
        // Delay hiding to avoid flickering when moving from testProduct to dropdown
        setTimeout(() => {
            if (!document.querySelector('.dropdown-hover.product-hover:hover')) {
                
                testProduct.style.display = 'none';
                typeData ='';
            }
            
        }, 200); // Adjust delay as needed
    });


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



  