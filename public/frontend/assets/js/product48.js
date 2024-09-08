document.addEventListener("DOMContentLoaded", () => {
  const colorOptions = [
    {
      name: "48V 50Ah",
      imgSrc: "frontend/assets/images/Battery48503.jpg",
      imgChild: [

      ],
      href: '/battery-detail4850',
      desc: "",
    },
    {
      name: "48V 100Ah",
      imgSrc: "frontend/assets/images/Battery481001.jpg",
      imgChild: [
      ],
      href: '/battery-detail48100',
      desc: "Penjelasan tipe Battery",
    },
    {
      name: "LFP48V 100Ah",
      imgSrc: "frontend/assets/images/BatteryLFP481001.jpg",
      imgChild: [
      ],
      href: '/battery-detail48LFP',
      desc: "Penjelasan tipe Battery",
    },
    {
      name: "48V 200Ah",
      imgSrc: "frontend/assets/images/Battery482003.jpg",
      imgChild: [

      ],
      href: '/battery-detail48200',
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
