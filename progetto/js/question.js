/**
 Codice Javascript per la raccolta delle risposte sul questionario. Tre contatori, ognuno aumenta non appena
 viene selezionate la relativa risposta. Viene inserita in una variabile il valore della risposta con più preferenza
 ed in base al risultato si viene reindirizzata alla pagina HTML di competenza.
 */

$('document').ready(function()
{
  $('#btn-result').click(function(event)
  {
    event.preventDefault();
  var c1score = 0;
  var c2score = 0;
  var c3score = 0;

  var choices = document.getElementsByTagName('input');
  for (i=0; i<choices.length; i++) {

      if (choices[i].checked) {

        if (choices[i].value == 'c1') {
          c1score = c1score + 1;
        }
        if (choices[i].value == 'c2') {
          c2score = c2score + 1;
        }
        if (choices[i].value == 'c3') {
          c3score = c3score + 1;
        }
      }
    }

  var maxscore = Math.max(c1score,c2score,c3score);


  var answerbox = document.getElementById('answer');
  if (c1score == maxscore) {
    window.location.href = '../html/15xc.html';
  }
  if (c2score == maxscore) {
    window.location.href = '../html/15al.html';
  }
  if (c3score == maxscore) {
    window.location.href = '../html/15dh.html';
  }

  });
});