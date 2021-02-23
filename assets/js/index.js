console.log("js loaded")

const top_slide =['sunset-4937813_1920.jpg','beach-4914403_1920.jpg','garbage-3745004_1920.jpg','kiss-1489654_1920.jpg,','nature-4202702_1920.jpg','woman-332278_1920.jpg','flowers-1190773_1920.jpg'];

let num = -1;
function slide(){
  if(num === 2){
    num=0;
  } else {
    num++;
  }
  document.getElementById('slide_img').src= top_slide[num];
}

setInterval(slide,2000);

console.log(num);
