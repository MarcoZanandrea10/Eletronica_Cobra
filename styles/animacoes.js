console.log("Animacoes funcionam");

const sobre = document.querySelector(".sobre");

if(sobre){
    
    const observer = new IntersectionObserver((entries)=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){
                console.log("seção sobre visível");
                entry.target.classList.add("animar");
            }
        });
        
    },{
        threshold:0.3
    });
    observer.observe(sobre);
}