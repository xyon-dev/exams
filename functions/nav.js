import { Views } from "../views.js";

//nav acts as a router;
//Receives: a string
//Returns: nothing
export function nav(view){
  //view = the name of the view;  
  //view a template literal pulled from the Views.js object
  let template = Views[view];

  //change page view to template
  document.getElementById('main').innerHTML=template;
}