document.addEventListener("DOMContentLoaded", () => {
  const colorOptions = [
    {
      name: "409V 100AH",
      imgSrc: "frontend/assets/images/Battery4091001.jpg",
      
      imgChild: [

      ],
      href: '/battery-detail409',
      desc: "",
    },
    {
      name: "768V 280AH",
      imgSrc: "frontend/assets/images/Battery7682802.jpg",
      imgChild: [
      ],
      href: '/battery-detail768',
      desc: "Penjelasan tipe Battery",
    },
    {
      name: "896V 100AH",
      imgSrc: "frontend/assets/images/Battery8961002.jpg",
      imgChild: [
      ],
      href: '/battery-detail869',
      desc: "Penjelasan tipe Battery",
    },
    {
      name: "1331.2V 280AH",
      imgSrc: "frontend/assets/images/Battery133122804.jpg",
      imgChild: [

      ],
      href: '/battery-detail1331',
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
