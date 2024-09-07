document.addEventListener("DOMContentLoaded", () => {
  const colorOptions = [
    {
      name: "12.8V 100Ah",
      imgSrc: "frontend/assets/images/Battery1281002.jpg",
      imgChild: [
        "frontend/assets/images/Battery1281001.jpg",
        "frontend/assets/images/Battery1281004.jpg",
      ],
      desc: "Penjelasan tipe Battery",
    },
    {
      name: "12.8V 120Ah",
      imgSrc: "frontend/assets/images/Battery1281202.jpg",
      imgChild: [
        "frontend/assets/images/Battery1281201.jpg",
        "frontend/assets/images/Battery1281203.jpg",
      ],
      desc: "Penjelasan tipe Battery",
    },
    {
      name: "12.8V 200Ah",
      imgSrc: "frontend/assets/images/Battery1282003.jpg",
      imgChild: [
        "frontend/assets/images/Battery1282001.jpg",
        "frontend/assets/images/Battery1282002.jpg",
        "frontend/assets/images/Battery1282004.jpg",
      ],
      desc: "Penjelasan tipe Battery",
    },
    {
      name: "12.8V 50Ah",
      imgSrc: "frontend/assets/images/Battery12502.jpg",
      imgChild: [
        "frontend/assets/images/Battery12501.jpg",
        "frontend/assets/images/Battery12503.jpg",
        "frontend/assets/images/Battery12504.jpg",
        "frontend/assets/images/Battery12505.jpg",
      ],
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
            <img style="padding-bottom: 20px;" src="${imgSrc}" alt="Battery image">
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
