console.log("js loaded")
/* 配列に画像 */
const setImage =[
'./dist/images/sunset-4937813_1920.jpg',
'./dist/images/beach-4914403_1920.jpg',
'./dist/images/garbage-3745004_1920.jpg',
'./dist/images/nature-4202702_1920.jpg',
'./dist/images/flowers-1190773_1920.jpg'];

let num = -1;


function slideimage(){

    if( num === 4){

        num = 0;
    } else{


      num ++
    }
    document.getElementById( "slideshow" ).style.backgroundImage = "url(" + setImage[num];


}
setInterval(slideimage,3500);
