 $(document).ready(function () {
     $(function () {
         $('.button-collapse').sideNav();
         $('.parallax').parallax();
     });
     $('select').material_select();
     $('.modal-trigger').leanModal();
     $('#errolog').hide();
     $('#erroreg').hide();
     $('#prog_log').hide();
     $('#prog_reg').hide();
     $('#materia').hide();
     $('#log').hide();
     $('#logm').hide();
     $('#login').hide();
     $('#register').hide();
     $('#logo-container').click(function () {
         $('#login').hide();
         $('#register').hide();
         $('#principal').show();
         $('#footer').removeClass('fixa');
         $('#footer2').removeClass('fixa1');
     });
     $('#troca_p_registro').click(function () {
         $('#login').hide();
         $('#register').show();
         $('#footer').removeClass('fixa');
         $('#footer2').removeClass('fixa1');
     });
     $('#troca_p_login').click(function () {
         $('#login').show();
         $('#register').hide();
         $('#footer').addClass('fixa');
         $('#footer2').addClass('fixa1');
     });
     $('#abrelogin').click(function () {
         $('#principal').hide();
         $('#footer').addClass('fixa');
         $('#footer2').addClass('fixa1');
         $('#login').show();
         $('#register').hide();
     });
     $('#abrelogin1').click(function () {
         $('#principal').hide();
         $('#footer').addClass('fixa');
         $('#footer2').addClass('fixa1');
         $('#login').show();
         $('#register').hide();
     });
     $('#abrelogin2').click(function () {
         $('.button-collapse').sideNav('hide');
         $('#principal').hide();
         $('#footer').addClass('fixa');
         $('#footer2').addClass('fixa1');
         $('#login').show();
         $('#register').hide();
     });
     $('#formlogin').submit(function () { //Ao submeter formulário
         $('#prog_log').show();
         var email = $('#email').val(); //Pega valor do campo email
         var senha = $('#senha').val(); //Pega valor do campo senha
         $.ajax({ //Função AJAX
             url: "login.php", //Arquivo php
             type: "post", //Método de envio
             data: "email=" + email + "&senha=" + senha, //Dados
             success: function (result) { //Sucesso no AJAX
                 if (result == 1) {
                     //Redireciona
                     $('#login').hide();
                     $('#materia').show();
                     $('#nlog').hide();
                     $('#log').show();
                     $('#footer').removeClass('fixa');
                     $('#footer2').removeClass('fixa1');
                 } else {
                     $('#errolog').show(); //Informa o erro
                     $('#prog_log').hide();
                 }
             }
         })
         return false; //Evita que a página seja atualizada
     })
     $('#formregister').submit(function () { //Ao submeter formulário
         $('#prog_reg').show();
         var nome = $('#rnome').val(); //Pega valor do campo email
         var email = $('#remail').val(); //Pega valor do campo senha
         var senha = $('#rsenha').val(); //Pega valor do campo senha
         var csenha = $('#rcsenha').val(); //Pega valor do campo senha
         var ano = $('#rano').val(); //Pega valor do campo senha
         var code = $('#rcode').val(); //Pega valor do campo senha
         $.ajax({ //Função AJAX
             url: "register.php", //Arquivo php
             type: "post", //Método de envio
             data: "nome=" + nome + "&senha=" + senha + "&email=" + email + "&csenha=" + csenha + "&ano=" + ano + "&code=" + code,
             success: function (result) { //Sucesso no AJAX
                 if (result == 1) {
                     //Redireciona
                     $('prog_reg').hide();
                     $('#register').hide();
                     $('#login').show();
                 } else if (result == 3) {
                     $('#prog_reg').hide();
                     $('#erroreg').html("As senhas não coincidem!");
                     $('#erroreg').show();
                 } else if (result == 2) {
                     $('#erroreg').html('Este e-mail já está em uso!');
                     $('#erroreg').show();
                     $('#prog_reg').hide();
                 }
             }
         })
         return false; //Evita que a página seja atualizada
     })
 });
