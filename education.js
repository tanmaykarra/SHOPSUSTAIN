function handleLoad(){
    console.log("Loading");
    document.querySelector('.main-container').style.display = "block";
    document.querySelector('.loader').style.display = "none";
}

window.addEventListener("DOMContentLoaded",handleLoad)
