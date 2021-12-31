let body = document.getElementById("body");
let app = document.getElementById("app");

if (window.innerWidth <= 990) {
    console.log("esta en 990")
    body.style.overflowX = "hidden"
    //body.style.overflow = "hidden"
}

//if($('window').innerWidth <= 990) {
 //   body.style.overflow = "hidden";
//} else {
//    body.style.overflow = "inherit";
//}