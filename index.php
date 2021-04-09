<?php
if (isset($_POST['BTEnvia'])) {
 
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone']; 
 $mensagem = $_POST['mensagem'];
 //====================================================
 
 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //==================================================== 
 $email_remetente = "contato@winethree.com.br"; // deve ser uma conta de email do seu dominio 
 //====================================================
 
 //Configurações do email, ajustar conforme necessidade
 //==================================================== 
 $email_destinatario = "contato@winethree.com.br"; // pode ser qualquer email que receberá as mensagens
 $email_reply = "$email"; 
 $email_assunto = "Contato pelo site"; // Este será o assunto da mensagem
 //====================================================
 
 //Monta o Corpo da Mensagem
 //====================================================
 $email_conteudo = "Nome = $nome \n"; 
 $email_conteudo .= "Email = $email \n";
 $email_conteudo .= "Telefone = $telefone \n"; 
 $email_conteudo .= "Mensagem = $mensagem \n"; 
 //====================================================
 
 //Seta os Headers (Alterar somente caso necessario) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "</b>E-Mail enviado com sucesso!</b>"; 
 } 
 else{ 
 echo "</b>Falha no envio do E-Mail!</b>"; } 
 //====================================================
} 
?> 
 <head>
    <title>Wine Three</title>
    <meta name="copyright" content="Copyright 1999-2018. Plesk International GmbH. All rights reserved.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
  <meta charset="utf-8"></meta> <title>Página em Construção</title> <link rel="stylesheet" type="text/css" href="style.css"></link> 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
  </script>
  <script type="text/javascript">$(function() {
			$('#tipsy').tipsy({fade: true, gravity: 's'});
		});
  </script> <!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]--> 
  
  <script type="text/javascript" src="inc/TimeCircles.js"></script>
  <link rel="stylesheet" href="inc/TimeCircles.css">  

  <center>
    <div class="wrapper"> <img alt="winethree" title="winethree" height=25% width=25% src="./img/LOGO_B.png" /> 

    <div>
      <br />
      <br />
      <br />
      <br />
    </div>

    <div class="hr"><h1>Desculpe, estamos construindo nosso novo ecommerce.</h1> 
      <p>É rapidinho, em quanto nosso ecommercer não é lançado entre em contato através do nosso whatsapp.</p> </div> 
	  </div>

    <div class="container">
            <div id="DateCountdown" data-date="2021-06-15 15:00:00" style="width: 500px; height: 125px; padding: 0px; box-sizing: border-box;"></div>
    </div>
    <script>
            $("#DateCountdown").TimeCircles();
            $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
            $("#PageOpenTimer").TimeCircles();
            
            var updateTime = function(){
                var date = $("#date").val();
                var time = $("#time").val();
                var datetime = date + ' ' + time + ':00';
                $("#DateCountdown").data('date', datetime).TimeCircles().start();
            }
            $("#date").change(updateTime).keyup(updateTime);
            $("#time").change(updateTime).keyup(updateTime);
            
            // Start and stop are methods applied on the public TimeCircles instance
            $(".startTimer").click(function() {
                $("#CountDownTimer").TimeCircles().start();
            });
            $(".stopTimer").click(function() {
                $("#CountDownTimer").TimeCircles().stop();
            });

            // Fade in and fade out are examples of how chaining can be done with TimeCircles
            $(".fadeIn").click(function() {
                $("#PageOpenTimer").fadeIn();
            });
            $(".fadeOut").click(function() {
                $("#PageOpenTimer").fadeOut();
            });

        </script>

<div class="wrapper"> 
<table>
  <tr>
  <td align="center" valign="top">
      <a href=" https://api.whatsapp.com/send?phone=5511930207080&text=Prezados,%20gostaria%20de%20solicitar%20alguns%20vinhos">
      <img alt="Karol Joves" title="Karol Joves" height=35px width=35px src="./img/whatsapp.png" /> Karol Joves
      </a>
    </td>
    <td>&nbsp;|&nbsp;</td>
    <td align="center" valign="top">
      <a href=" https://api.whatsapp.com/send?phone=5511930207080&text=Prezados,%20gostaria%20de%20solicitar%20alguns%20vinhos">
      <img alt="Micaely" title="Micaely" height=35px width=35px src="./img/whatsapp.png" /> Micaely
      </a>
    </td>
    <td>&nbsp;|&nbsp;</td>
    <td align="center" valign="top">
      <a href=" https://api.whatsapp.com/send?phone=5511930207080&text=Prezados,%20gostaria%20de%20solicitar%20alguns%20vinhos">
      <img alt="Sandra Santos" title="Sandra" height=35px width=35px src="./img/whatsapp.png" /> Sandra Santos
      </a>
    </td>
    <td>&nbsp;|&nbsp;</td>
      <td>
      <a href="https://instagram.com/winethree">
      <img alt="Winethree" title="winetrhee" height=35px width=35px src="./img/instagram.png" /> Winethree
      </a>    
      </td>
    </tr>
</table>
</div>
  </center>
</body>