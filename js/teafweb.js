
/*dropdown*/

const closeModal= ()=>{
   let temp = document.querySelectorAll('.modal-container');
   for(let element of temp){
        element.style.display ='none';
   }
}
const openModal = (x)=>{
    document.getElementById(x).style.display = 'block';
}


const dropDown = (event,y) => {
    let x= document.getElementById(y);
     if ( x.style.visibility == "visible" ) {
         x.style.visibility ='hidden';
     }
     else {
         x.style.visibility ='visible';
     }
 }
/*dropdown*/

function modalClick(event) { 
    console.log(event.target.id);
    let x = event.target;
    if(x.className !== "modal-click" && x.id !== "option-id"){   
        var mod = document.getElementsByClassName('modal-element');
        for(var i=0; i< mod.length; i++){
            mod[i].style.visibility = "hidden";
        }   
    }
}                      
const sidebar = ()=>{
    let sidebar1 =document.querySelector('#sidebar');
    console.log("sd");
    if(sidebar1.style.display == "none" ){
        sidebar1.style.display = "block";
    }
    else{
        sidebar1.style.display = "none";  
    }   
}
 document.querySelector('#close').addEventListener('click',sidebar); 
 document.querySelector('#menu-mob').addEventListener('click',sidebar); 


/*toggle*/
const toggle_submenu = (x,y,event)=>{
    let toggle_content = document.getElementsByClassName(x);
    let toggle_submenu = document.getElementsByClassName('toggle-submenu');
    for(var i = 0; i<toggle_content.length; i++){
        toggle_content[i].style.display = "none";
    }
    for( i = 0; i<toggle_submenu.length; i++){
        toggle_submenu[i].classList.remove('active');
    }
    document.getElementById(y).style.display = "block";
    event.target.classList.add("active");
}

/*toggle*/




/* generate random id*/
/* paass paramaner as int to define lenghth of id */
const generateId = (lengthOfId)=>{
  let charaArr = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  let i =0;
  let CharId = "";
 
  while(i < lengthOfId ) {
     let randomInteger = Math.floor(Math.random()*25);
      CharId += charaArr[randomInteger]; 
      i++;
  }
  return CharId;
}


/*get this year */
const getThisYear = ()=>{
    const DateInstances = new Date();
    let ThisYear = DateInstances.getFullYear();
    return ThisYear;

}

