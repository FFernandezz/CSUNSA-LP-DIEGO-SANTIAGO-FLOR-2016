$(document).ready(function(){

	$(function(){
        var bgMusic = $('.audio-bg')[0],
            playing = true;

        //to loop the sound
        /*bgMusic.addEventListener('ended', function() {
            this.currentTime = 0;
            if (playing) {
                this.play();
            }
        }, false);*/

        bgMusic.play();
    });

});