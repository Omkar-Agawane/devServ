/*window.addEventListener("load",()=>{

    const preloader = document.querySelector('.preloader');
    preloader.classList.add('preload-stop');
    document.querySelector('body').style.overflow = 'visible';

}
);*/


var slider = document.getElementsByClassName('slider');
if (slider.length > 0) {
    var n = 0;
    var slide = 0;
    setInterval(function () {
        if (slide == slider.length) {
            slide = 0;
        }

        for (n = 0; n < slider.length; n++) {

            slider[n].style.display = 'none';
        }
        slider[slide].style.display = 'block';
        slide = slide + 1;
    }, 3500);
    for (n = 1; n < slider.length; n++) {

        slider[n].style.display = 'none';
    }
}


const jump = (param)=>{
    window.location.href = `./${param}`;
}

const reload = ()=>{
    window.location.reload();
}


const jsAlert = (msg)=>{
   let  jsAlert = document.getElementById("jsAlert");
   if(document.getElementsByClassName("jsAlert")[0] != undefined){
   let child = document.getElementsByClassName("jsAlert");
   console.log(child[0]);
    jsAlert.removeChild(child[0]);
   }
    let newAlert = document.createElement("p");
    newAlert.innerText = msg;
    newAlert.className = "jsAlert";
    jsAlert.appendChild(newAlert);
}
const clearJsAlert = ()=>{
    let  jsAlert = document.getElementById("jsAlert");
    if(document.getElementsByClassName("jsAlert")[0] != undefined){
    let child = document.getElementsByClassName("jsAlert");
    console.log(child[0]);
     jsAlert.removeChild(child[0]);
    }



 }

 /*/*assign foooter year*/

document.getElementById('thisYear').innerHTML =getThisYear();

