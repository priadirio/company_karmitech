document.addEventListener("DOMContentLoaded", () => {
  const colorOptions = [
    {
      name: "25.6V 100Ah",
      imgSrc: "frontend/assets/images/Battery2561004.jpg",
      imgChild: [
      ],
      desc: "Penjelasan tipe Battery",
      href: '/battery-detail256100',
    },
    {
      name: "25.6V 120Ah",
      imgSrc: "frontend/assets/images/Battery2561202.jpg",
      imgChild: [
      ],
      href: '/battery-detail256120',
      desc: "Penjelasan tipe Battery",
    },
    {
      name: "25.6V 200Ah",
      imgSrc: "frontend/assets/images/Battery2562003.jpg",
      imgChild: [

      ],
      href: '/battery-detail256200',
      desc: "Penjelasan tipe Battery",
    },
    {
      name: "25.6V 50Ah",
      imgSrc: "frontend/assets/images/Battery256503.jpg",
      imgChild: [

      ],
      href: '/battery-detail25650',
      desc: "",
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
