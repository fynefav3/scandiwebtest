// Display options with DOM
const myOptions = document.querySelector("#productType");

const formMap = {
  default: () => resetVisibilityOfForms(),
  DVD: () => (document.getElementById("DVD").style.display = "flex"),
  Furniture: () =>
    (document.getElementById("Furniture").style.display = "flex"),
  Book: () => (document.getElementById("Book").style.display = "flex"),
};

myOptions.onchange = (e) => {
  const selectedForm = myOptions.options[myOptions.selectedIndex].value;

  document.getElementById("DVD").style.display = "none";
  document.getElementById("Furniture").style.display = "none";
  document.getElementById("Book").style.display = "none";

  formMap[selectedForm]();
};

// Form validation
let id = (id) => document.getElementById(id);

let size = id("size"),
  height = id("height"),
  width = id("width"),
  length = id("length"),
  weight = id("weight"),
  form = id("product-form"),
  label = id("labelForm"),
  pt = id("productType");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const ptype = pt.value;

  if (ptype === "DVD") {
    engine(size, "Please Submit required Data(Size)");
  } else if (ptype === "Furniture") {
    engine(height, "Please Submit required Data(Height)");
    engine(width, "Please Submit required Data(Width)");
    engine(length, "Please Submit required Data(Length)");
  } else if (ptype === "Book") {
    engine(weight, "Please Submit required Data(Weight)");
  } 
});

let engine = (id, message) => {
  if (id.value.trim() === "") {
    label.innerHTML = message;
  } else {
    form.submit();
  }
};
