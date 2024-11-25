window.addEventListener("scroll", function(){

    let header = document.querySelector('#header')

    // adicionando uma class no header
     header.classList.toggle('rolagem',this.window.scrollY > 0)
})
