(()=>{console.log("js loaded");const e=["./dist/images/sunset-4937813_1920.jpg","./dist/images/beach-4914403_1920.jpg","./dist/images/garbage-3745004_1920.jpg","./dist/images/nature-4202702_1920.jpg","./dist/images/flowers-1190773_1920.jpg"];let s=-1;setInterval((function(){4===s?s=0:s++,document.getElementById("slideshow").style.backgroundImage="url("+e[s]}),3500)})();