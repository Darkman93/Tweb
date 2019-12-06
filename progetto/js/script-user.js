/**
 Questa sezione è usata per reperire le informazioni dell'utente. Al suo caricamento vengono prese tutte le informazioni
 dal database attraverso una chiamata GET al file php che gestisci le restituzionde dei dati, ed inseirite
 negli appositi spazi. In più si trova la gestione per il bottone di logout.
 */

$('document').ready(function()
{
  $.get( "../php/get-data.php", function( data ) {
    $('#name').append(data.name);
    $('#surname').append(data.surname);
    $('#gender').append(data.gender);
    $('#age').append(data.age);
    $('#bike').append(data.bike);
  });

  $('#btn-logout').click(function(event)
  {
    event.preventDefault();

    $.get('../php/logout.php', function(data){
      window.location.href = data;
    });
  });
});