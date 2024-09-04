const colorOptions = [
  {
    name: "Solar Panel 1",
    imgSrc: "frontend/assets/images/solar1.jpg",
    imgChild: [""],
    desc: "Penjelasan tipe Battery"
  },
  {
    name: "Solar Panel 2",
    imgSrc: "frontend/assets/images/solar2.jpg",
    imgChild: [""],
    desc: "Penjelasan tipe Battery"
  },
  {
    name: "Solar Panel 3",
    imgSrc: "frontend/assets/images/solar3.jpg",
    imgChild: [""],
    desc: "Penjelasan tipe Battery"
  },

];
document.addEventListener("DOMContentLoaded", () => {
  console.log("Hello World!");
  const colorGridContainer = document.querySelector('.product-group');


// Generating the HTML for each color option
colorOptions.forEach(option => {
  const colorBox = document.createElement('div');
  
  colorBox.classList.add('color-box', 'group');
  var imgChildString =''
  if (option.imgChild){
    imgChildString = JSON.stringify(option.imgChild).replace(/"/g, '&quot;');
    
  }
  
  colorBox.innerHTML = `
    <div>
      <img src="${option.imgSrc}"
          alt="Summer Travel Bag image"
          class="min-[400px]:h-[100px] aspect-square border-2 border-gray-100 rounded-xl transition-all duration-500 group-hover:border-indigo-600 border border-gray-300 rounded-lg"
          onclick="handleImageClick('${option.name}', '${option.imgSrc}', '${imgChildString}')">
      <p class="font-normal text-sm leading-6 text-gray-400 text-center mt-2 group-hover:text-indigo-600">
          ${option.name}</p>
    </div>
  `;

  colorGridContainer.appendChild(colorBox);
});

});
// Function to handle image click
function handleImageClick(name, imgSrc, imgChildString) {
  console.log(name);
  const colorGridContainer = document.querySelector('.title-battery');
  const textTitle = document.querySelector('.text-title');
  const textDesc = document.querySelector('.text-desc');
  const colorBox = document.createElement('div');
  if(textTitle){
  textTitle.remove();
  }
  if(textDesc){
    textDesc.remove();
    }
  colorBox.innerHTML = `
    <h2 class="text-title font-manrope font-bold text-3xl leading-10 text-gray-900 mb-2">${name}
                                </h2>
                                <p class="text-desc font-normal text-base text-gray-500">Penjelasan Tipe Solar</p>
  `;

  colorGridContainer.appendChild(colorBox);

  const mainPict = document.querySelector('.main-pict');
  const pictRmv = document.querySelector('.pict-rmv');
  if(pictRmv){
    pictRmv.remove();
  }
  console.log(pictRmv);
  const pictBox = document.createElement('div');
  
  pictBox.classList.add('swiper-slide', 'thumbs-slide', 'pict-rmv');

  pictBox.innerHTML =`
<img src="${imgSrc}"
                                    alt="Summer Travel Bag image"
                                    class="cursor-pointer rounded-xl transition-all duration-500 ">

  `
mainPict.appendChild(pictBox);




const swiperBox = document.querySelector('.swiper-box');
const imgRvs = document.querySelectorAll('.img-child');
imgRvs.forEach(imgRmv => {
  imgRmv.remove();
});
const imgChild = JSON.parse(imgChildString);
imgChild.forEach(childImg => {
  const swiperPicture = document.createElement('div');
  swiperPicture.classList.add('swiper-slide', 'img-child');
  swiperPicture.innerHTML = `
    <div class="block">
      <img src="${childImg}"
        alt="Child Battery image"
        class="cursor-pointer max-lg:mx-auto rounded-2xl" onclick="handleImageChild('${childImg}')">
        
    </div>
  `;
  swiperBox.appendChild(swiperPicture);
});

}
function handleImageChild(childImg){
  const mainPict = document.querySelector('.main-pict');
  const pictRmv = document.querySelector('.pict-rmv');
  if(pictRmv){
    pictRmv.remove();
  }
  console.log(pictRmv);
  const pictBox = document.createElement('div');
  
  pictBox.classList.add('swiper-slide', 'thumbs-slide', 'pict-rmv');

  pictBox.innerHTML =`
<img src="${childImg}"
                                    alt="Summer Travel Bag image"
                                    class=" rounded-xl transition-all duration-500 ">

  `
mainPict.appendChild(pictBox);

}

