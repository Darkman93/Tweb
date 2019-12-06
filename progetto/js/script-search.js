/**
 Sezione rigurdante la ricerca dell'utente. Anche in questo caso abbiamo la validazione dei dati
 in input, per poi inserirli nell'apposita sezione.
 */

$('document').ready(function()
{
  $('#btn-search').click(function(event)
  {
    event.preventDefault();

    var name     = $('#enter_name').val();
    var surname  = $('#surname').val();

    var regex_name  = /^([A-Za-zéàë]{2,40} ?)+$/;
    var regex_surname  = /^([A-Za-zéàë]{2,40} ?)+$/;

    if (!regex_name.test(name) || name === null || name === '' || !regex_surname.test(name) || surname === null || surname === ''){
      $("#error_src").fadeIn(1000, function(){
          $("#error_src").html('<div class="alert alert-danger"> '+"Name or Surname not correct"+' !</div>');
        });
    }

    else{
      var obj = {name: name, surname: surname};

      $.post( "../php/search-user.php", obj , function( data ){
      if(data != false){
        $('#sname').show();//funzione JQuery per mostrare la textbox nascosta attraverso il tag HTML hidden
        $('#sname').append(data.name);//inserisce nella textbox, ora in chiaro, il risultato della ricerca.

        $('#ssurname').show();
        $('#ssurname').append(data.surname);

        $('#sgender').show();
        $('#sgender').append(data.gender);

        $('#sage').show();
        $('#sage').append(data.age);

        $('#sbike').show();
        $('#sbike').append(data.bike);
        }
        else{
          $("#error_src").fadeIn(1000, function(){
          $("#error_src").html('<div class="alert alert-danger"> '+"No user"+' !</div>');
        });
        }
      });
    }



  });
});