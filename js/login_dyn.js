//email and password validation
function validateEmail(){
   let email_text = document.getElementById("email_login");
   let email_regexp = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

   if(!email_text.value.match(email_regexp)){
    console.log("Submission failed");
    return false;
   }else{
    console.log("Validation passed");
    return true;
   }
}

//looping images

function loopImages(){
  const current_image = document.getElementById("looping_images");
  const slides = document.querySelector(".image");
   let images = ["../images/loopGym1.jpg", "../images/loopGym2.jpg", "../images/loopGym3.jpg"];
   let i = 0;
   
   function changeImage(){
      current_image.src = images[i];
      i = (i+1) % images.length;
      setTimeout(changeImage, 5000);
   }

   changeImage();
}
