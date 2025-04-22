import { nav } from "./functions/nav.js";
import { userLoggedIn } from "./functions/isLoggedIn.js";

//On page load 
function loadSession(){
  let load;
  if(localStorage.getItem('username')){
    load = 'test';
  }else{
    load = 'login';
  }
  window.onload = nav(load);
  userLoggedIn();  
}
loadSession();

//Handle register from
if(!localStorage.getItem('username')){
  const registerForm = document.getElementById("register-form");
  registerForm.addEventListener("submit", function(e){
    e.preventDefault();
    const fd = new FormData(registerForm);
    for(let obj of fd){
      localStorage.setItem(obj[0], obj[1]);
    }
    registerForm.reset();
    //GOTO page
    nav('test');
    userLoggedIn();
  })
}