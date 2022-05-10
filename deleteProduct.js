document.getElementById('massDelete').onclick = function() {
  let checkboxes = document.getElementsByName('delete_list');
  let arrToDelete = [];
  for (let checkbox of checkboxes)
  {
      if (checkbox.checked) {
          arrToDelete.push(checkbox.id);
      }
  }

  if (arrToDelete.length) {  
    const deleteMethod = {
      method: 'DELETE',
      headers: {
        'Content-type': 'application/json'
      },
      body: JSON.stringify(arrToDelete)
    }
    
    fetch('inc/delete.inc.php', deleteMethod)
    .then(response => response.json())
    .then(data => data)
    .catch(err => console.log(err))

    arrToDelete = [];
    setTimeout('document.location.reload();', 50);
  }
}