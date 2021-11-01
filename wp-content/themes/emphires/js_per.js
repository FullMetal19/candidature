const currentLocation=location.href;
const menuItem=document.querySelectorAll('a');
const menuLenght=menuItem.length;
let i=0;
for(i=0; i<menuLenght; i++){
    if(menuItem[i].href===currentLocation){
        menuItem[i].className="active nav-link";
    }

}
