import { nav } from "./nav.js";

export function userLoggedIn(){
  const loginEl = document.getElementById("username")
  if(localStorage.getItem('username')){
    loginEl.innerHTML=`${localStorage.getItem('username')} <button id="logout">logout</button>`;
    const logout = document.getElementById("logout");
    logout.addEventListener('click', function(e){
      e.preventDefault();
      localStorage.clear('username');
      localStorage.clear('email');
      loginEl.innerHTML=``;
      nav('login');
    })
  }else{
    loginEl.innerHTML=``;
  }
}