document.addEventListener("DOMContentLoaded", () => {
  const colorOptions = [
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

  const largeImageContainer = document.querySelector("#large-image-container");
  const smallImagesContainer = document.querySelector("#small-images-container");
  

  // Function to display images
  function displayImages(filter) {
      largeImageContainer.innerHTML = ""; // Clear previous large image
      smallImagesContainer.innerHTML = ""; // Clear previous small images

      colorOptions.forEach((option) => {
          if (filter === "all" || filter === option.name) {
              // Add large image
              const largeImage = document.createElement("img");
              largeImage.src = option.imgSrc;
              largeImage.alt = "Battery image";
              largeImage.style = `
                border-width: 1px;
                width: 450px;
                height: 450px;
                padding: 15px;
                cursor: pointer;
              `;
              largeImageContainer.appendChild(largeImage);

              // Add click event to show the modal
              largeImage.addEventListener("click", () => {
                 console.log("masuk");
              });

              // Add small images
              option.imgChild.forEach((imgSrc) => {
                  const smallImage = document.createElement("img");
                  smallImage.src = imgSrc;
                  smallImage.alt = "Battery image";
                  smallImage.style = `
                    border-width: 1px;
                    width: 150px;
                    height: 150px;
                    padding: 15px;
                    cursor: pointer;
                  `;
                  // Add click event to update the large image
                  smallImage.addEventListener("click", () => {
                      largeImage.src = imgSrc;
                  });
                  smallImagesContainer.appendChild(smallImage);
              });
          }
      });
  }

  // Display all images initially
  displayImages("all");
 
 
   
});
 