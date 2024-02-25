var loginform = document.getElementById("loginform");
var regform = document.getElementById("regform");
var intor = document.getElementById("intor");
var nav_search = document.getElementById("nav_search");
var search_box = document.getElementById("search_box");
function reg(){
    regform.style.transform = "translateX(0px)";
    loginform.style.transform = "translateX(0px)";
    intor.style.transform = "translateX(60px)";
}
function login(){
    regform.style.transform = "translateX(300px)";
    loginform.style.transform = "translateX(300px)";   
    intor.style.transform = "translateX(-20px)"; 
}


//search animation
search_box.addEventListener("mouseover",function(){
    nav_search.style.width = "200px";
});
search_box.addEventListener("mouseleave",function(){
    setInterval(() => {
        if(nav_search.value == ""){
            nav_search.style.width = "0px";
        }
    }, 30000);
});


// login animation
var login_textbox = document.getElementById("login_textbox");
var tn1 = document.getElementById("login_label_username");
textani(login_textbox,tn1);

var login_pswd = document.getElementById("login_pswd");
var tn2 = document.getElementById("login_label_pswd");
textani(login_pswd,tn2);

var reg_textbox = document.getElementById("reg_textbox");
var tn3 = document.getElementById("reg_label_username");
textani(reg_textbox,tn3);

var reg_pswd = document.getElementById("reg_pswd");
var tn4 = document.getElementById("reg_label_pswd");
textani(reg_pswd,tn4);

var reg_eml = document.getElementById("reg_eml");
var tn5 = document.getElementById("reg_label_eml");
textani(reg_eml,tn5);

var reg_textbox = document.getElementById
function textani(textbox,label){
        textbox.addEventListener("focus",function(){
            label.style.fontSize = "10px";
            label.style.transform = "translate(-30px,-20px)";
        }); 
        if(textbox.value != ""){
            textbox.addEventListener("focusout",function(){
                label.style.fontSize = "20px";
                label.style.transform = "translate(0px,0px)";
            });
        }
}


// shawpswd or viewpswd
function lshawpswd(){
    if(login_pswd.type == "password"){
        login_pswd.type = "text";
    }
    else{
        login_pswd.type = "password";
    }
}
function rshawpswd(){
    if(reg_pswd.type == "password"){
        reg_pswd.type = "text";
    }
    else{
        reg_pswd.type = "password";
    }
}

//form validation

function urnmvalidation(){

}
function validation(){
    var login_username = document.getElementById("login_textbox");
    var pswd = document.getElementById("login_pswd");
    if(login_username.value ==""){
        console.log("This field required");
        return false;
    }
    else if(login_username.value.length<3){
        console.log("user name must be aleast 3 character");
        return false;
    }
    else if(pswd.value ==""){
        console.log("This field required");
        return false;
    }
    else{
        return true;
    }
}

//form animation
function form_ani(){
    var formani = document.getElementById("login_container");
    var close = document.getElementById("form_close_icon");
    // formani.style.transform = "translate(-400px,200px)";
    // formani.style.height = "400px";
    // formani.style.width = "300px";
    // close.style.transform = "translate(200px,-150px)";
    // close.style.display = "block";
    formani.style.height = "400px";
    formani.style.width = "300px";
    // formani.style.display = "block";
    close.style.display = "block";
    close.style.transform = "translate(200px,-250px)";
}

function closeform(){
    var formani = document.getElementById("login_container");
    var close = document.getElementById("form_close_icon");
    // close.style.transform = "translate(-200px,150px)";
    close.style.display = "none";
    // formani.style.transform = "translate(400px,-200px)";
    // formani.style.height = "50px";
    // formani.style.width = "30px";
    close.style.transform = "translate(-200px,250px)";
    formani.style.height = "0px";
    formani.style.width = "0px";
}


//speech to text
const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

const recognition = new SpeechRecognition();

function talking(speak){
    speak.addEventListener('click',function(){
        recognition.start();
    });
}    

function speechtotext(location){
    recognition.onresult = function (event) {
    const current = event.resultIndex;

    const transcript = event.results[current][0].transcript;
    location.value = transcript;
};
}


// navigation search speak
// const talk = document.querySelector('.talk');
// talking(talk);
// speechtotext(nav_search);

// chatbot speak



//displaying the chats
let crel = document.createElement('p');
let bot = document.createElement('p');
let chatdis = document.querySelector('.display_chats');

document.getElementById('send_msg').addEventListener('click',function(){
    let chat_input = document.getElementById('chat_input');
    
    if(chat_input.value == ''){
    }
    else{
        crel.classList.add('right_chat','chat');
        bot.classList.add('left_chat','chat');
        crel.textContent = chat_input.value;
        chatdis.appendChild(crel);
        
        if(chat_input.value.includes("hello") || chat_input.value.includes("hi")){
            bot.textContent = "hello sir, how can i help you?";
            readoutloud(bot.textContent);
            chatdis.appendChild(bot);
        }
        else if(chat_input.value.includes("who are you")){
            bot.textContent = "I'm your Assistant";
            readoutloud(bot.textContent);
            chatdis.appendChild(bot);
        }
        else if(chat_input.value.includes("your robot") || chat_input.value.includes("your human")){
            bot.textContent = "mind your business";
            readoutloud(bot.textContent);
            chatdis.appendChild(bot);
        }
        else if(chat_input.value.includes("your annoying") || chat_input.value.includes('you suck') || chat_input.value.includes('your boring') || chat_input.value.includes('bad') || chat_input.value.includes('crazy')){
            bot.textContent = "you deserve it, hehe!";
            readoutloud(bot.textContent);
            chatdis.appendChild(bot);
        }
        else if(chat_input.value.includes("cloth") || chat_input.value.includes('cloths') || chat_input.value.includes('dress')){
            let a = document.createElement('a');
            a.textContent = "here's link";
            a.href = 'http://localhost/online_shoping_site/search_result.php?product=cloth';
            a.classList.add('left_chat','chat');
            chatdis.appendChild(a);
            readoutloud(a.textContent);
        }
        else if(chat_input.value.includes("laptop") || chat_input.value.includes('laptops')){
            let a = document.createElement('a');
            a.textContent = "here's link";
            a.href = 'http://localhost/online_shoping_site/search_result.php?product=laptop';
            a.classList.add('left_chat','chat');
            chatdis.appendChild(a);
            readoutloud(a.textContent);
        }
        else if(chat_input.value.includes("mobile") || chat_input.value.includes('mobiles') || chat_input.value.includes('smartphone') ||chat_input.value.includes('smartphones') || chat_input.value.includes('phones') || chat_input.value.includes('phone')){
            let a = document.createElement('a');
            a.textContent = "here's link";
            a.href = 'http://localhost/online_shoping_site/search_result.php?product=phone';
            a.classList.add('left_chat','chat');
            chatdis.appendChild(a);
            readoutloud(a.textContent);
        }
        else{
            bot.textContent = "sorry, try other words";
            chatdis.appendChild(bot);
            readoutloud(bot.textContent);
        }
        chat_input.value = '';
    }
    
});


const talk2 = document.querySelector('.talk2');


talking(talk2);
speechtotext(chat_input);


function readoutloud(msg) {
    const speech = new SpeechSynthesisUtterance();
    speech.text = msg;
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 1;

    window.speechSynthesis.speak(speech);
};

let delet = document.getElementById('bot_open');
let delet1 = document.getElementById('bot_close');
let chatbot = document.querySelector('.chat_bot');
let chattitle = document.querySelector('.chat_bot_title');
let chbotinpt = document.querySelector('.chat_input_field');
delet.addEventListener('click',function(){
    console.log('hello world');
    delet1.style.display = 'block';
    delet.style.display = "none";
    chatbot.style.height = '65vh';
    chattitle.style.display = "block";
    setTimeout(() => {
        chbotinpt.style.display = 'block';
    }, 400); 
});

delet1.addEventListener('click',function(){
    console.log('hello world');
    delet.style.display = 'block';
    delet1.style.display = "none";
    chatbot.style.height = '0';
    chbotinpt.style.display = 'none';
    setTimeout(function(){ chattitle.style.display = "none"; }, 600);
});
