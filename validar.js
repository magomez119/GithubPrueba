$(function() {
  let edit = false;
  console.log('Funciona :D');
  fetchListar();
  $('#result').hide();
  $('#search').keyup(function() {
   if ($('#search').val()) {
    let  search = $('#search').val();
    console.log(search);
    $.ajax({
        url: 'Search.php',
        type: 'POST',
        data: {search},
        success: function(response) {
           let list = JSON.parse(response);
           let template = '';
           list.forEach(list => {
              template += `<li>
              ${list.Nombre}               
              </li>`
           });
           $('#container').html(template);
           $('#result').show();
        }

    });
   }
  });
  $('#form-datos').submit(function(e) {
    const datos = {
      Nombre: $('#Nombre').val(),
      Apellido: $('#Apellido').val(),
      Id: $('#Id').val(),
    };
    let url = edit == false ? 'Register.php' : 'Editar.php';
    console.log(url);
    $.post(url , datos, function(response) {
         console.log(response);
         fetchListar();
         $('#form-datos').trigger('reset');
         alert('Los datos se guardaron correctamente');
    }); 
    e.preventDefault();
    
  });

function fetchListar() {
    $.ajax({
    url: 'List.php',
    type: 'GET',
    success: function(response) {
     let lista = JSON.parse(response);
     let template = '';
     lista.forEach(list => {
       template += `
       <tr listId="${list.Id}">
       <td>${list.Id}</td>
       <td>
       <a href="#" class="Edit-item">${list.Nombre}</a>
       </td>
       <td>${list.Apellido}</td>
       <td>
       <button class="list-delete btn btn-danger">Eliminar</button>
       </td>
       </tr>
       `});
     $('#datos').html(template);
    }

  });
}
$(document).on('click','.list-delete', function(){
 if(confirm('¿Seguro deseas eliminar el registro?')) {
  let element =  $(this)[0].parentElement.parentElement;
  let id = $(element).attr('listId');
   $.post('Delete.php', {id}, function (response) {
     alert('Registro eliminado.');
    fetchListar(); 
   })
 }
});
$(document).on('click', '.Edit-item', function() {
  let element =$(this)[0].parentElement.parentElement;
  let id =$(element).attr('listId');
  $.post('Edit.php', {id}, function (response) {
    const list = JSON.parse(response);
    $('#Nombre').val(list.Nombre);
    $('#Apellido').val(list.Apellido);
    $('#Id').val(list.Id);
    edit = true;
  });
 
 

  
});

});
