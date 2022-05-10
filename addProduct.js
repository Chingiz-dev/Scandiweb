const dynamic = document.getElementById('dynamic');
const typeSwitch = document.getElementById('productType');

const typeSwitcher = () => {
  dynamic.innerHTML = "";
  switch (typeSwitch.value) {
    case "Dvd":
      addDvd();
      break;
    case "Book":
      addBook();
      break;        
    case "Furniture":
      addFurniture();
      break;  
    default:
      break;
  }
}
typeSwitch.addEventListener("change", typeSwitcher);

const addDvd = () => {
  let label = document.createElement('label');
  label.htmlFor = "size";
  label.innerHTML = "Size (MB) ";
  let input = document.createElement('input');
  input.id = 'size';
  input.name = 'property1';
  input.type = "number";
  input.setAttribute('required', '');
  input.placeholder = "Size";
  const customInputs = document.createElement('div');
  customInputs.appendChild(label);
  customInputs.appendChild(input);
  dynamic.appendChild(customInputs);
}

const addBook = () => {
  let label = document.createElement('label');
  label.htmlFor = "weight";
  label.innerHTML = "Weight (KG) ";
  let input = document.createElement('input');
  input.id = 'weight';
  input.name = 'property1';
  input.type = "number";
  input.setAttribute('required', '');
  input.placeholder = "weight";
  const customInputs = document.createElement('div');
  customInputs.appendChild(label);
  customInputs.appendChild(input);
  dynamic.appendChild(customInputs);
}

const addFurniture = () => {
  let labelHeight = document.createElement('label');
  labelHeight.htmlFor = "height";
  labelHeight.innerHTML = "Height (CM) ";
  let inputHeight = document.createElement('input');
  inputHeight.name = 'property1';
  inputHeight.type = "number";
  inputHeight.setAttribute('required', '');
  inputHeight.id = 'height';
  inputHeight.placeholder = "height";
  
  const customInputs = document.createElement('div');

  customInputs.appendChild(labelHeight);
  customInputs.appendChild(inputHeight);
  
  let labelWidth = document.createElement('label');
  labelWidth.htmlFor = "width";
  labelWidth.innerHTML = "Width (CM) ";
  let inputWidth = document.createElement('input');
  inputWidth.name = 'property2';
  inputWidth.type = "number";
  inputWidth.setAttribute('required', '');
  inputWidth.id = 'width';
  inputWidth.placeholder = "width";

  customInputs.appendChild(labelWidth);
  customInputs.appendChild(inputWidth);
  
  let labelLength = document.createElement('label');
  labelLength.htmlFor = "length";
  labelLength.innerHTML = "Length (SM) ";
  let inputLength = document.createElement('input');
  inputLength.name = 'property3';
  inputLength.type = "number";
  inputLength.setAttribute('required', '');
  inputLength.id = 'length';
  inputLength.placeholder = "length";

  customInputs.appendChild(labelLength);
  customInputs.appendChild(inputLength);

  dynamic.appendChild(customInputs);
}

addDvd();