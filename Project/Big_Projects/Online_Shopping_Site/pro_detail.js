var big_img = document.getElementById("big_img");
var sml_img = document.getElementsByClassName("sml_img");
for(let i=0;i<sml_img.length;i++){
    sml_img[i].onmouseover = function(){
        big_img.src = sml_img[i].src;
    }  
}

//quantity 

let minus = document.getElementById("minus");
let plus = document.getElementById("plus");
let qlty_no = document.getElementById("qlty_no");

qlty_no.value = 1;
plus.addEventListener("click",function(){
    qlty_no.innerHTML = ++qlty_no.value;
});
minus.addEventListener("click",function(){
    if(qlty_no.value == 1){
        qlty_no.innerHTML = qlty_no.value;
    }
    else{
        qlty_no.innerHTML = --qlty_no.value;
    }
});

//image animation
VanillaTilt.init(document.querySelectorAll(".col-2 img"), {
    max: 10,
    speed: 400
});


    
