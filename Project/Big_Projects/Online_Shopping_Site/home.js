
//slide animation
var slides = document.querySelectorAll(".slide");
var index=0;
document.getElementById("next").addEventListener("click",function(){
    index++;
    if(index==slides.length){
        index=0;
    }
    for(i=0;i<slides.length;i++){
        slides[i].classList.remove("active");
    }
    slides[index].classList.add("active");
});
document.getElementById("prev").addEventListener("click",function(){
    index--;
    if(index==-1){
        index=slides.length-1;
    }
    for(i=0;i<slides.length;i++){
        slides[i].classList.remove("active");
    }
    slides[index].classList.add("active");
});
setInterval(
function(){
    index++;
    if(index==slides.length){
        index=0;
    }
    for(i=0;i<slides.length;i++){
        slides[i].classList.remove("active");
    }
    slides[index].classList.add("active");
},5000);


// window.addEventListener("scroll",function(){
//     var vari = document.getElementById("asus_img_cont");
// if (window.pageYOffset > 1900) {
//     vari.style.zIndex=0;
// }   
// else{
//     vari.style.zIndex=-1;
// }
// });
