bleu = document.getElementById('blue');
rose = document.getElementById('rose');
vert = document.getElementById('vert');
jaune = document.getElementById('jaune');
orange = document.getElementById('orange');
title = document.getElementById('title');

bleu.addEventListener('click', bleuChange)
rose.addEventListener('click', roseChange)
vert.addEventListener('click', vertChange)
jaune.addEventListener('click', jauneChange)
orange.addEventListener('click', orangeChange)

function bleuChange(){
    document.getElementById('circle').setAttribute('class', 'blue-color');
    document.getElementById('circle2').setAttribute('class', 'blue-color');
    document.getElementById('circle3').setAttribute('class', 'blue-color');
    document.getElementById('circle4').setAttribute('class', 'blue-color');
    document.getElementById('circle5').setAttribute('class', 'blue-color');
    document.getElementById('circle6').setAttribute('class', 'blue-color');
    document.getElementById('circle7').setAttribute('class', 'blue-color');
    title.setAttribute('class', 'blue-text');
};

function roseChange(){
    document.getElementById('circle').setAttribute('class', 'rose-color');
    document.getElementById('circle2').setAttribute('class', 'rose-color');
    document.getElementById('circle3').setAttribute('class', 'rose-color');
    document.getElementById('circle4').setAttribute('class', 'rose-color');
    document.getElementById('circle5').setAttribute('class', 'rose-color');
    document.getElementById('circle6').setAttribute('class', 'rose-color');
    document.getElementById('circle7').setAttribute('class', 'rose-color');
    title.setAttribute('class', 'rose-text');
}

function vertChange(){
    document.getElementById('circle').setAttribute('class', 'vert-color');
    document.getElementById('circle2').setAttribute('class', 'vert-color');
    document.getElementById('circle3').setAttribute('class', 'vert-color');
    document.getElementById('circle4').setAttribute('class', 'vert-color');
    document.getElementById('circle5').setAttribute('class', 'vert-color');
    document.getElementById('circle6').setAttribute('class', 'vert-color');
    document.getElementById('circle7').setAttribute('class', 'vert-color');
    title.setAttribute('class', 'vert-text');
}

function jauneChange(){
    document.getElementById('circle').setAttribute('class', 'jaune-color');
    document.getElementById('circle2').setAttribute('class', 'jaune-color');
    document.getElementById('circle3').setAttribute('class', 'jaune-color');
    document.getElementById('circle4').setAttribute('class', 'jaune-color');
    document.getElementById('circle5').setAttribute('class', 'jaune-color');
    document.getElementById('circle6').setAttribute('class', 'jaune-color');
    document.getElementById('circle7').setAttribute('class', 'jaune-color');
    title.setAttribute('class', 'jaune-text');
}

function orangeChange(){
    document.getElementById('circle').setAttribute('class', 'orange-color');
    document.getElementById('circle2').setAttribute('class', 'orange-color');
    document.getElementById('circle3').setAttribute('class', 'orange-color');
    document.getElementById('circle4').setAttribute('class', 'orange-color');
    document.getElementById('circle5').setAttribute('class', 'orange-color');
    document.getElementById('circle6').setAttribute('class', 'orange-color');
    document.getElementById('circle7').setAttribute('class', 'orange-color');
    title.setAttribute('class', 'orange-text');
}