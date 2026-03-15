document.addEventListener("DOMContentLoaded", () => {
    const elementosAnimados = document.querySelectorAll(".animar");

    if (!elementosAnimados.length) return;

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("ativo");
                obs.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.05,
        rootMargin: "0px 0px -60px 0px"
    });

    elementosAnimados.forEach(elemento => {
        observer.observe(elemento);
    });
});