window.addEventListener("DOMContentLoaded",init);

var blackpanel,
images;
function closeLightbox(){
    blackpanel.innerHTML="";
    blackpanel.style.display='none';
    blackpanel.removeEventListener("click",closeLightbox);//Отписка
  }
  
function init(){
    //HTMLElement
    blackpanel=document.getElementById("blackpanel");
    //HTMLCollection
    images=document.getElementsByClassName('my-images');
  

   for(var i=0;i<images.length;i++){
       images[i].addEventListener('click',function(){
           blackpanel.style.display='flex';
          // console.log(this).src;
          var bigImg=document.createElement("img");
          bigImg.src=this.src;
          bigImg.style.width='30vw';
          bigImg.style.margin='auto';
          bigImg.style.borderRadius="4px";
     bigImg.title="рисунок";
          blackpanel.appendChild(bigImg);
        blackpanel.addEventListener('click',closeLightbox);
      
       });
   }
    
 
}