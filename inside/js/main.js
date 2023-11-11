/*Managment*/


/*Notificaiton*/



/*Notificaiton*/

/*Managment*/



/*header*/
document.getElementById("r").innerHTML =': '+sessionStorage.getItem("rank");
document.getElementById("name").innerText = `${sessionStorage.getItem("username")} ${sessionStorage.getItem("surname")}`

/*header*/



/*auth*/

const logout = ()=>{
    sessionStorage.clear();
    window.location.href = "../";
}
const userSessionId =  sessionStorage.getItem("userid");
console.log(userSessionId);
fetch("../server/userAuth.php?id="+userSessionId).then((res)=>{
    return res.json();
}).then((data)=>{
    if(data.auth == '200'){
    }
    else{
       window.location.href = "../";
    }
})
/*auth*/