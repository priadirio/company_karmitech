document.addEventListener("DOMContentLoaded", () => {
  const colorOptions = [
    {
      name: " 3.7V 350mAh rechargeable polymer lithium-ion battery",
      imgSrc: "frontend/assets/images/cs5.png",
      
      imgChild: [

      ],
      href: '/battery-detailcustom1',
      desc: "",
    },
    {
      name: "3.7V 650mAh rechargeable polymer lithium-ion battery",
      imgSrc: "frontend/assets/images/cs21.jpg",
      imgChild: [
      ],
      href: '/battery-detailcustom2',
      desc: "Penjelasan tipe Battery",
    },

    {
      name: "32700-6000mAh lithium iron phosphate battery cell",
      imgSrc: "frontend/assets/images/cs33.png",
      imgChild: [
      ],
      href: '/battery-detailcustom3',
      desc: "Penjelasan tipe Battery",
    },

    {
      name: "51147-115Ah lithium iron phosphate battery cell",
      imgSrc: "frontend/assets/images/cs43.png",
      imgChild: [
      ],
      href: '/battery-detailcustom4',
      desc: "Penjelasan tipe Battery",
    },

    {
      name: "Portable Power Station 300W",
      imgSrc: "frontend/assets/images/cs56.jpg",
      imgChild: [
      ],
      href: '/battery-detailcustom5',
      desc: "Penjelasan tipe Battery",
    },

    {
      name: "Portable Power Station 600W",
      imgSrc: "frontend/assets/images/cs66.jpg",
      imgChild: [
      ],
      href: '/battery-detailcustom6',
      desc: "Penjelasan tipe Battery",
    },
  
  ];

  const colorGridContainer = document.querySelector(".product-group");
  const filterSelect = document.getElementById("filterSelect");
  const filterTitle = document.getElementById("filterTitle");

  // Function to display images based on the selected filter
  function displayImages(filter) {
    colorGridContainer.innerHTML = ""; // Clear previous images

    colorOptions.forEach((option) => {
      if (filter === "all" || filter === option.name) {
        const allImages = [option.imgSrc, ...option.imgChild];
        allImages.forEach((imgSrc) => {
          const imgBox = document.createElement("div");
          imgBox.classList.add("image-item");
          imgBox.innerHTML = `
            <a href="${option.href}"> <img style="padding-bottom: 20px;" src="${imgSrc}" alt="Battery image"></a>
            <p>${option.name}</p>
          `;
          colorGridContainer.appendChild(imgBox);
        });
      }
    });
  }

  // Function to update the title based on the selected filter
  function updateTitle(filter) {
    filterTitle.textContent = filter === "all" ? "All Batteries" : filter;
    filterTitle.classList.remove("hidden");
  }

  // Display all images initially
  displayImages("all");

  // Add event listener for filter selection
  filterSelect.addEventListener("change", (event) => {
    const selectedValue = event.target.value;
    displayImages(selectedValue);
    updateTitle(selectedValue);
  });
});
