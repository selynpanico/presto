window.addEventListener('DOMContentLoaded',()=>{
    let theMusicPlay = screen.width
    let logo = document.getElementById('logo')
    if(theMusicPlay <= 425){
        logo.setAttribute('src','path')
    }
    console.log(theMusicPlay);
})