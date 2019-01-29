// const player = document.getElementById('player')
// function(e){
//     e.preventDefault
// if (play = true) {
// player.pause()
// play = false }
// else { 
//     player.play()
//     play = true
// }
// }
var play = false;
var myAudio = document.getElementById("player");

function onKeyDown(event) {
        switch (event.keyCode) {
            case 32: //SpaceBar                    
                if (play) {
                    myAudio.pause();
                    play = false;
            
                } else {
                    myAudio.play(); 
                    play = true;
                }
                break;
        }
  return false;
}
window.addEventListener("keydown", onKeyDown, false);