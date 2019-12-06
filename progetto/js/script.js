/**
 Sezione usata solo nella pagina di index. Si trovano i controlli dei dati in fase di login e registrazione,
 questo dopo il click dell'apposito bottone. Si effettuano inoltre le varie chiamate POST alle pagine php
 interessate.
 */


$('document').ready(function()
{
  $('#btn-login').click(function(event)
  {
    event.preventDefault();

    //epressioni regolari
    var email = $('#email').val();
    var pwd   = $('#password').val();

    var regex_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
    var regex_pwd = /^([A-Za-zéàë]{8,} ?)+$/;

    if( !regex_email.test(email) || email === null || email === '' || pwd === '' || pwd === null || !regex_pwd.test(pwd)){
      $("#error_login").fadeIn(1000, function(){
          $("#error_login").html('<div class="alert alert-danger"> '+"Password or email not correct"+' !</div>');
        });
    }
    else{
      var obj = {email: email, pwd: pwd};

      $.post( 'php/login.php', obj, function(response) {
      if(response == 'ok'){ // log in process
        window.location.href = 'index.php';
      }
      else{
        $("#error_login").fadeIn(1000, function(){
          $("#error_login").html('<div class="alert alert-danger"> '+response+' !</div>');
          });
      }
      });
    }

  });

  $('#btn-register').click(function(event)
  {
    event.preventDefault();

    var name     = $('#name').val();
    var surname  = $('#surname').val();
    var email    = $('#email_reg').val();
    var pwd      = $('#password_reg').val();
    var cpwd     = $('#cpassword').val();

    //espressioni regolari
    var regex_name  = /^([A-Za-zéàë]{2,40} ?)+$/;
    var regex_surname  = /^([A-Za-zéàë]{2,40} ?)+$/;
    var regex_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
    var regex_pwd = /^([A-Za-zéàë]{8,} ?)+$/;

    if (!regex_name.test(name) || name === null || name === '' || !regex_surname.test(name) || surname === null || surname === ''  || !regex_email.test(email) || email === null || email === '' || pwd != cpwd || pwd === '' || pwd === null || !regex_pwd.test(pwd)) {
       $("#error_register").fadeIn(1000, function(){
          $("#error_register").html('<div class="alert alert-danger"> '+"Credentials not valid"+' !</div>');
       });
    }
    else {
      var obj = {name: name, surname: surname, email: email, pwd: pwd};

      $.post( 'php/registration.php', obj, function(response) {
      if(response == 'ok'){
        window.location.href = 'user/information.php';
      }
      else{
        $("#error_register").fadeIn(1000, function(){
          $("#error_register").html('<div class="alert alert-danger"> '+response+' !</div>');
          });
        }
      });
    }
  });
});
