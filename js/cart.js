let openShopping = document.querySelector(".shopping");
let closeShopping = document.querySelector(".closeShopping");
let list = document.querySelector(".list");
let listCard = document.querySelector(".listCart"); // Cambiado de .listCard a .listCart
let body = document.querySelector("body");
let total = document.querySelector(".total");
let quantity = document.querySelector(".quantity");

openShopping.addEventListener("click", () => {
  body.classList.add("active");
});
closeShopping.addEventListener("click", () => {
  body.classList.remove("active");
});

let products = [
  {
    id: 1,
    name: "Almuerzo en paris",
    description: "Frappe de caramelo acompañado de un croissant preparado con huevo",
    image: "CroissantFrappe.jpeg",
    price: 230,
  },
  {
    id: 2,
    name: "Desayuno gran manzana",
    description: "Malteada de vainilla acompañado de un bagel de huevo revuelto",
    image: "EggBagelMilkshake.jpeg",
    price: 215,
  },
  {
    id: 3,
    name: "Brunch mediterraneo",
    description: "Chapata preparada acompañada por una mimosa",
    image: "CiabattaMimosa.jpeg",
    price: 225,
  },
];

let listCards = [];
function initApp() {
  products.forEach((value, key) => {
    let newDiv = document.createElement("div");
    newDiv.classList.add("item");
    newDiv.innerHTML = `
            <div class="col">
            <div class="card text-bg-dark">
              <img src="../img/promos/${value.image}" class="card-img" alt="..." />
              <div class="card-img-overlay d-flex align-items-end">
                <a
                  class="card-title fs-2 p-2"
                  data-bs-toggle="collapse"
                  href="#card${key}"
                  role="button"
                  aria-expanded="false"
                  aria-controls="collapseExample">
                  ${value.name}
                </a>
              </div>
            </div>
            <div class="collapse col-12 vt" id="card${key}">
              <div class="card card-body">
                <p class="m-0 fs-5">${value.description}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button onclick="addToCard(${key})" class="btn btn-primary fs-4">Añadir <i class="bi bi-bag-plus-fill"></i></button>
                </div>
              </div>
            </div>
          </div>`;
    list.appendChild(newDiv);
  });
}

initApp();

function addToCard(key) {
  if (listCards[key] == null) {
    // copy product form list to list card
    listCards[key] = JSON.parse(JSON.stringify(products[key]));
    listCards[key].quantity = 1;
  }
  reloadCard();
}

function reloadCard() {
  listCard.innerHTML = "";
  let count = 0;
  let totalPrice = 0;
  listCards.forEach((value, key) => {
    totalPrice = totalPrice + value.price;
    count = count + value.quantity;
    if (value != null) {
      let newDiv = document.createElement("li");
      newDiv.innerHTML = `
                  <div><img src="../img/promos/${value.image}"/></div>
                  <div>${value.name}</div>
                  <div>${value.price.toLocaleString()}</div>
                  <div>
                      <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                      <div class="count">${value.quantity}</div>
                      <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                  </div>`;
      listCard.appendChild(newDiv);
    }
  });
  total.innerText = totalPrice.toLocaleString();
  quantity.innerText = count;
}

function changeQuantity(key, quantity) {
  if (quantity == 0) {
    delete listCards[key];
  } else {
    listCards[key].quantity = quantity;
    listCards[key].price = quantity * products[key].price;
  }
  reloadCard();
}
