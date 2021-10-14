var sbc = document.querySelector('.search_box_container');
var fil_con = document.querySelector('.filter_container');

document.querySelector('.fasa').addEventListener('click',function(){
    sbc.style.height = "13vh";
    // fil_con.style.transform = "translateY(85vh)";
    fil_con.style.transform = "translateX(-100%)";

    setTimeout(() => {
        fil_con.style.display = "none";
    }, 1000);
    setTimeout(()=>{
        let card_cont = document.querySelector('.card_container_actual');
        card_cont.style.display = "block";
    },1000);
    
});


var talk = document.querySelector('.talk');
//speech to text
const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

const recognition = new SpeechRecognition();

function talking(){
        recognition.start();
};    
recognition.onresult = function (event) {
    const current = event.resultIndex;

    const transcript = event.results[current][0].transcript;
    talk.value = transcript;
};

