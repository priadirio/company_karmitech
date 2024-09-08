document.addEventListener("DOMContentLoaded", () => {
  const colorOptions = [
    {
      name: "51.2V 100Ah",
      imgSrc: "frontend/assets/images/BatteryLFP5121001.jpg",
      
      imgChild: [

      ],
      href: '/battery-detailLFP',
      desc: "",
    },
    {
      name: "51.2V 100Ah",
      imgSrc: "frontend/assets/images/Battery5121003.jpg",
      imgChild: [
      ],
      href: '/battery-detail512100',
      desc: "Penjelasan tipe Battery",
    },
    {
      name: "51.2V 150Ah",
      imgSrc: "frontend/assets/images/Battery5121503.jpg",
      imgChild: [
      ],
      href: '/battery-detail512150',
      desc: "Penjelasan tipe Battery",
    },
    {
      name: "51.2V 400Ah",
      imgSrc: "frontend/assets/images/Battery5124001.jpg",
      imgChild: [

      ],
      href: '/battery-detail512400',
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
             <a href="${option.href}"><img style="padding-bottom: 20px;" src="${imgSrc}" alt="Battery image"></a>
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
