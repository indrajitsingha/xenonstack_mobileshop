let m =setInterval(img,3000)
var images=[];

images[0]="https://i02.appmifile.com/552_operator_in/26/08/2022/2002d9a2885378b8bcf684419af17c63.jpg";
images[1]="https://i02.appmifile.com/5_operator_in/19/08/2022/438bce3f6344b2ce44db5c495b4227f2.jpg";
images[2]="https://i02.appmifile.com/82_operator_in/01/02/2022/43ddb357e5451d4285810e1825af1fbd.jpg";
images[3]="https://i02.appmifile.com/766_operator_in/05/10/2021/4ab870b6c1049f344eccc050290486dd.jpg";
images[5]="https://oasis.opstatics.com/content/dam/oasis/page/2022/new-homepage/in/homepage/HeroBanner_desktop1920.jpg";
images[4]="https://i02.appmifile.com/89_operator_in/26/08/2022/35fb730cd6020dfaff7c4614e5ae06a6.jpg";
var i=0;
function img(){
    document.slide.src=images[i];
 

    if(i<images.length-1){
        i++;
    }
    else{
        i=0;
    }
    
   
}

window.onload=img;











//     let x =setInterval(imgfun,3000)
// var image=[];

// image[0]="https://cdn.vox-cdn.com/thumbor/jUjLZl0oP3SUeZQI6G4E4UKhRCs=/0x60:640x420/1600x900/cdn.vox-cdn.com/assets/3729295/logo.jpg";
// image[1]="https://i02.appmifile.com/5_operator_in/19/08/2022/438bce3f6344b2ce44db5c495b4227f2.jpg";
// image[2]="https://i02.appmifile.com/82_operator_in/01/02/2022/43ddb357e5451d4285810e1825af1fbd.jpg";
// image[3]="https://i02.appmifile.com/766_operator_in/05/10/2021/4ab870b6c1049f344eccc050290486dd.jpg";
// image[5]="https://oasis.opstatics.com/content/dam/oasis/page/2022/new-homepage/in/homepage/HeroBanner_desktop1920.jpg";
// image[4]="https://i02.appmifile.com/89_operator_in/26/08/2022/35fb730cd6020dfaff7c4614e5ae06a6.jpg";
// var y=0;
// function imgfun(){
//     document.newslide.src=image[y];
 

//     if(y<image.length-1){
//         y++;
//     }
//     else{
//         y=0;
//     }
    
   
// }

// window.onload=imgfun;









































