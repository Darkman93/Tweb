/**
 Sezione che acquisci le informazioni dell'utente dopo la registrazione e chiama, tramite una POST,
 la pagina php in cui si andranno ad aggiungere nel database i dati appena inseriti.
 Unica validazione sull'età inserita, siccome gli altri campi sono scelte multiple tra quelle
 disponibili.
 */

$('document').ready(function()
{
  $('#btn-info').click(function(event)
  {
    event.preventDefault();

    var gender  = $("input[name='Gender']:checked").val();
    var age     = $('#age').val();
    var bike    = $('#bike-model option:selected').attr('data-name');

    var ageNumericVal = +age;
    if (ageNumericVal < 0 || ageNumericVal > 170) {
      $("#error_info").fadeIn(1000, function(){
          $("#error_info").html('<div class="alert alert-danger"> '+response+' !</div>');
      });
    }

    else{
      var object  = {gender: gender, age: age, bike: bike};
      console.log(object)

      $.post( '../php/insert-info.php', object, function(response) {
      if(response == 'ok'){
        window.location.href = 'user.php';
      }
      else{
        $("#error_info").fadeIn(1000, function(){
          $("#error_info").html('<div class="alert alert-danger"> '+response+' !</div>');
          });
        }
      });
    }
  });
});