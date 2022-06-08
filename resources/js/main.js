window.addEventListener('DOMContentLoaded',()=>{
    let theMusicPlay = screen.width
    let logo = document.getElementById('logo')
    if(theMusicPlay <= 425){
        logo.setAttribute('src','/img/presto-logo-rid.svg')
    }
    console.log(theMusicPlay);
})