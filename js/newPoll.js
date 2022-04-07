document.getElementById('addOption').addEventListener('click', addNewOption);

function addNewOption(event){

    event.preventDefault();

    // Create new div
    const div = document.createElement('div');
    div.classList.add('form-group');

    // Create new label
    const label = document.createElement('label');
    const forAttribute = document.createAttribute('for');
    const labelText = document.createTextNode("Option 3");
    forAttribute.value = "option3";
    label.setAttributeNode(forAttribute);
    label.appendChild(labelText);

    // Create new input
    const input = document.createElement('input');

    input.classList.add('form-control');

    const inputType = document.createAttribute('type');
    inputType.value = "text";
    input.setAttributeNode(inputType);

    const inputName = document.createAttribute('name');
    inputName.value = "option3";
    input.setAttributeNode(inputName);

    const inputPlaceHolder = document.createAttribute('placeHolder');
    inputPlaceHolder.value = "option3";
    input.setAttributeNode(inputPlaceHolder);

    div.appendChild(label);
    div.appendChild(input);

    console.log(div);




}