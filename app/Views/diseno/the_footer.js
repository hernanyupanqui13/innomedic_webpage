let already_liked = false;
// Vuelve el carrusel de clientes automatico
function automaticSlide() {
    setInterval(function () {
        const clients_cards = document.getElementById("testimonialsSection");
        clients_cards.querySelector(".slick-next").click();
    }, 5000);

    

}

$(document).ready(function() {

    const like_button = document.getElementById("like_button");

    like_button.addEventListener("click", () => {
        
        if (!already_liked) {
            fetch(`${window.location.origin}/Inicio/countLike`)
            .then( () => {
                already_liked = true;
                like_button.classList.remove("like_button-active");
                like_button.classList.add("retire_button");
                like_button.addEventListener("animationend", () => {
                    like_button.style.display= "none"; 
                })
            });
        } else {
            console.log("Alreay liked");
        }
        
    });

    automaticSlide();
});