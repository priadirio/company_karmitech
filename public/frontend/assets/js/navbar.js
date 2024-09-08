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
    


    // Select the product hover dropdown and the test product div
    const productHover = document.querySelectorAll('.dropdown-hover.product-hover');
    const testProduct = document.querySelector('#test-product');
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

    // Loop through each product hover element and add event listeners
    productHover.forEach((dropdown) => {
        // Show testProduct on hover
        dropdown.addEventListener('mouseenter', function () {
            const category = dropdown.querySelector('a').textContent.trim();
        
            // Choose the product data based on category
            let productData;
            if (category === 'Solar Panel') {
                productData = solarPanelData;
            } else if (category === 'SmartPole') {
                productData = smartpoleProductData;
            } else if (category === 'Application') {
                productData = productDataApplication;
            } else if (category === 'Battery') {
                productData = productDataBatterai;
            } else {
                // Handle other categories or default case
                productData = []; // No data for unrecognized categories
            }
    
            // Populate the test product with the selected category data
            populateTestProduct(productData);
        });

        // Hide testProduct when the mouse leaves both the dropdown and the testProduct
        dropdown.addEventListener('mouseleave', function () {
            testProduct.style.display = "none";
        });

        // Optional: Keep testProduct visible when hovering over it directly
        testProduct.addEventListener('mouseenter', function () {
            testProduct.style.display = "block";
        });

        // Hide testProduct when mouse leaves the testProduct area
        testProduct.addEventListener('mouseleave', function () {
            testProduct.style.display = "none";
        });
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



  