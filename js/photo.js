(function(){
    var video = document.getElementById('video'),
    canvas = document.getElementById('canvas'),
    context = canvas.getContext('2d'),
    photo = document.getElementById('photo'),
    link = document.getElementById('img-text');
    vendorUrl = window.URL || window.webkitURL;

    navigator.getMedia = navigator.getUserMedia || navigator.webkitgetUserMedia || navigator.mozgetUserMedia || navigator.msgetUserMedia ;

    navigator.getMedia({
        video : true,
        audio : false
    },function(stream){
        video.src = vendorUrl.createObjectURL(stream);
        video.play();
    },function(error){});

    document.getElementById('capture').addEventListener('click',function(){
        context.drawImage(video,0,0,400,300);
        var img = canvas.toDataURL('img/png') ;
        photo.setAttribute('src', img);
        link.innerHTML=img;
        // link.setAttribute('placeholder',img);
    });

})();