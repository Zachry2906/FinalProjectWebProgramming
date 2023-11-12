var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 220; 
} 

function makeSmall() { 
    myVideo.width = 160; 
} 

function makeNormal() { 
    myVideo.width = 185; 
} 