const form = document.getElementById('crud-form');
const tableBody = document.getElementById('table-body');

form.addEventListener('submit', function(event) {
  event.preventDefault();

  const identification = document.getElementById('identification').value;

  // Verificar si ya existe una fila con la misma identificación
  const existingRows = document.querySelectorAll('#table-body td:first-child');
  for (let i = 0; i < existingRows.length; i++) {
    if (existingRows[i].textContent === identification) {
      alert('Ya existe un registro con esta identificación.');
      return; // Salir de la función si ya existe un registro con la misma identificación
    }
  }

  const firstName = document.getElementById('first-name').value;
  const lastName = document.getElementById('last-name').value;
  const income = document.getElementById('income').value;
  const franchise = document.getElementById('franchise').value;
  const amount = document.getElementById('amount').value;
  const cardType = document.getElementById('card-type').value;

  const newRow = document.createElement('tr');
  newRow.innerHTML = `
    <td>${identification}</td>
    <td>${firstName}</td>
    <td>${lastName}</td>
    <td>${income}</td>
    <td>${franchise}</td>
    <td>${amount}</td>
    <td>${cardType}</td>
    <td>
      <button onclick="editRow(this)">Editar</button>
      <button onclick="deleteRow(this)">Eliminar</button>
    </td>
  `;
  tableBody.appendChild(newRow);

  form.reset();
});

function deleteRow(button) {
  const row = button.closest('tr');
  row.parentNode.removeChild(row);
}

function editRow(button) {
  const row = button.closest('tr');
  const cells = row.querySelectorAll('td');

  const identification = cells[0].textContent;
  const firstName = cells[1].textContent;
  const lastName = cells[2].textContent;
  const income = cells[3].textContent;
  const franchise = cells[4].textContent;
  const amount = cells[5].textContent;
  const cardType = cells[6].textContent;

  document.getElementById('identification').value = identification;
  document.getElementById('first-name').value = firstName;
  document.getElementById('last-name').value = lastName;
  document.getElementById('income').value = income;
  document.getElementById('franchise').value = franchise;
  document.getElementById('amount').value = amount;
  document.getElementById('card-type').value = cardType;

  deleteRow(button);
}
