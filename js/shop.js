// Tri
const buttonsTri = document.querySelectorAll('.sort-controls button');

// Pour chaque bouton de tri
for (let buttonTri of buttonsTri) {

    // Ajouyte gestionnaire d'évènement
    buttonTri.addEventListener('click', function (ev) {

        // Récupère le critère de tri
        let critere = ev.target.dataset.sort;

        // Gestion classe active
        let activeBtn = document.querySelector('.sort-controls .active')
        activeBtn.classList.remove('active');
        ev.target.classList.add('active');

        console.log(critere)
        tinysort('.product', { selector: critere, natural:true });
    });
}

//FILTRES__________________________________________

// Pour cacher un élément
function hide(element) {
    element.classList.add('hidden');
}

// Pour montrer un élément
function show(element) {
    element.classList.remove('hidden');
}

// Boutons de filtrage
const buttonsFiltre = document.querySelectorAll('.filter-controls button');


// Eléments à filtrer
const elements = document.querySelectorAll('.filter-list > .product')


for (let buttonFiltre of buttonsFiltre) {
    buttonFiltre.addEventListener('click', function (ev) {

        // Critère de filtre
        let critere = ev.target.dataset.filter;
        console.log(critere);

        // Gestion de la classe active
        let activeBtn = document.querySelector('.filter-controls .active')
        activeBtn.classList.remove('active');
        ev.target.classList.add('active');

        // Ne montrer que les éléments filtérs
        for (elt of elements) {
            if ((critere === "*") || (elt.classList.contains(critere))) {
                show(elt);
            }
            else {
                hide(elt);
            }
        }

    });
}

//Bouton panier


let btns = document.getElementsByClassName('btn-shop');

for (let btn of btns){
    btn.addEventListener('click',function(){
        Swal.fire({
            title: 'Article ajouté au panier!',
            text: 'Voulez vous voir votre panier ?',
            icon: 'success',
            showCancelButton: true,
            cancelButtonText: 'Non, merci.',
            confirmButtonText: '<a href="./panier.php">Oui voir mon panier !</a>',
            confirmButtonColor: ' #f2f2f2',
        })
    });
}
