<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Mailgun\Mailgun;

// Obtener todos los clientes
$app->post('/mailer/messages/{accion}',function(Request $request, Response $response){
	$accion = $request->getAttribute('accion');
	$p = $request->getQueryParams();
	$from = 'jqEmprendedorVE - Developer FullStack <postmaster@jqemprendedorve.com>';
	$cc = $p['name'].' <'. $p['email'] .'>';
	$to = 'Julio Quintana <jquintana1801@gmail.com>';
	$text = $p['text'];

	echo $from;
	//return;

	$mgClient = new Mailgun('key-f76c8e9de1f0a5fbb71d7bd7e3bbc742');
	$domain = "jqemprendedorve.com";

	$result = array();
	switch ($accion) {
		case 'descuento':
			$text = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!--[if IE]><html xmlns="http://www.w3.org/1999/xhtml" class="ie-browser" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><![endif]--><html style="margin: 0;padding: 0;" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]--><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
    <title>Template Base</title>
    <!--[if !mso]><!-- -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
	<!--<![endif]-->
    
    <style type="text/css" id="media-query">
      body {
  margin: 0;
  padding: 0; }

table {
  border-collapse: collapse;
  table-layout: fixed; }

* {
  line-height: inherit; }

a[x-apple-data-detectors=true] {
  color: inherit !important;
  text-decoration: none !important; }

.ie-browser .col, [owa] .block-grid .col {
  display: table-cell;
  float: none !important;
  vertical-align: top; }

.ie-browser .corner__x {
  display: none; }

.mso-container .corner__x {
  font-size: 0; }

.ie-browser .col.num12, .ie-browser .block-grid, [owa] .col.num12, [owa] .block-grid {
  width: 500px !important; }

.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
  line-height: 100%; }

.ie-browser .block-grid.mixed-two-up .col.num4, [owa] .block-grid.mixed-two-up .col.num4 {
  width: 164px !important; }

.ie-browser .block-grid.mixed-two-up .col.num8, [owa] .block-grid.mixed-two-up .col.num8 {
  width: 328px !important; }

.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
  width: 250px !important; }

.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
  width: 166px !important; }

.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
  width: 125px !important; }

.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
  width: 100px !important; }

.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
  width: 83px !important; }

.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
  width: 71px !important; }

.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
  width: 62px !important; }

.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
  width: 55px !important; }

.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
  width: 50px !important; }

.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
  width: 45px !important; }

.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
  width: 41px !important; }

@media only screen and (min-width: 520px) {
  .block-grid {
    width: 500px !important; }
  .block-grid .col {
    display: table-cell;
    Float: none !important;
    vertical-align: top; }
    .block-grid .col.num12 {
      width: 500px !important; }
  .block-grid.mixed-two-up .col.num4 {
    width: 164px !important; }
  .block-grid.mixed-two-up .col.num8 {
    width: 328px !important; }
  .block-grid.two-up .col {
    width: 250px !important; }
  .block-grid.three-up .col {
    width: 166px !important; }
  .block-grid.four-up .col {
    width: 125px !important; }
  .block-grid.five-up .col {
    width: 100px !important; }
  .block-grid.six-up .col {
    width: 83px !important; }
  .block-grid.seven-up .col {
    width: 71px !important; }
  .block-grid.eight-up .col {
    width: 62px !important; }
  .block-grid.nine-up .col {
    width: 55px !important; }
  .block-grid.ten-up .col {
    width: 50px !important; }
  .block-grid.eleven-up .col {
    width: 45px !important; }
  .block-grid.twelve-up .col {
    width: 41px !important; } }

@media (max-width: 520px) {
  .block-grid, .col {
    min-width: 320px !important;
    max-width: 100% !important; }
  .block-grid {
    width: calc(100% - 40px) !important; }
  .col {
    width: 100% !important; }
    .col > div {
      margin: 0 auto; }
  img.fullwidth {
    max-width: 100% !important; } }

    </style>
</head>
<!--[if mso]>
<body class="mso-container" style="background-color:#FFFFFF;">
<![endif]-->
<!--[if !mso]><!-->
<body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF">
<!--<![endif]-->
  <div class="nl-container" style="min-widht: 320px;Margin: 0 auto;background-color: #FFFFFF">

    <div style="background-color:#f8f8f8;">
      <div rel="col-num-container-box" style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 320px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td bgcolor=&quot;f8f8f8&quot; style="background-color:#f8f8f8;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><td class="corner__x">&nbsp;</td><![endif]-->

              <!--[if (mso)|(IE)]><td align="center"  width="500" style=" width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent;  border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <!--[if !mso]><!--><div rel="col-num-container-box" class="col num12" style="min-width: 320px;max-width: 500px;width: 320px;width: calc(18000% - 89500px);background-color: transparent;">
               <div style="background-color: transparent; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"><!--<![endif]-->
                  <div style="line-height: 20px; font-size:1px">&nbsp;</div>
                
                  
<div align="center" style="Margin-right: 0px;Margin-left: 0px;">
  <a href="https://jqemprendedorve.com" target="_blank">
    <img class="center" align="center" border="0" src="https://jqemprendedorve.com/static/images/logo.png" alt="jqEmprendedorVE" title="jqEmprendedorVE" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;width: 100%;max-width: 200px" width="200">
  </a>

</div>
                  
                  
<div style="Margin-right: 10px; Margin-left: 10px;">
  <div style="line-height: 10px; font-size: 1px">&nbsp;</div>
	<div style="font-size:12px;line-height:14px;color:#0194A9;font-family:Ubuntu, Tahoma, Verdana, Segoe, sans-serif;text-align:left;"><p style="margin: 0;font-size: 12px;line-height: 14px"><span style="font-size: 26px; line-height: 31px;">jqEmprendedorVE</span></p></div>

</div>
                  
                  
<div style="Margin-right: 10px; Margin-left: 10px;">
  <div style="line-height: 5px; font-size: 1px">&nbsp;</div>
	<div style="font-size:12px;line-height:14px;color:#888888;font-family:Ubuntu, Tahoma, Verdana, Segoe, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px">Transformando ideas en&nbsp;valor</p></div>

  <div style="line-height: 10px; font-size: 1px">&nbsp;</div>
</div>
                  
                                  <div style="line-height: 20px; font-size: 1px">&nbsp;</div>
              <!--[if !mso]><!--></div>
            </div><!--<![endif]-->
          <!--[if (mso)|(IE)]></td><td class="corner__x">&nbsp;</td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:transparent;">
      <div rel="col-num-container-box" style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 320px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td  style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><td class="corner__x">&nbsp;</td><![endif]-->

              <!--[if (mso)|(IE)]><td align="center"  width="500" style=" width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent;  border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <!--[if !mso]><!--><div rel="col-num-container-box" class="col num12" style="min-width: 320px;max-width: 500px;width: 320px;width: calc(18000% - 89500px);background-color: transparent;">
               <div style="background-color: transparent; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"><!--<![endif]-->
                  <div style="line-height: 30px; font-size:1px">&nbsp;</div>
                
                  
<div style="Margin-right: 10px; Margin-left: 10px;">
  <div style="line-height: 10px; font-size: 1px">&nbsp;</div>
	<div style="font-size:12px;line-height:14px;color:#555555;font-family:Ubuntu, Tahoma, Verdana, Segoe, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px"><span style="font-size: 24px; line-height: 28px;"><strong><span style="line-height: 28px; font-size: 24px;">30% de Descuento en su proximo proyecto</span></strong></span></p></div>

</div>
                  
                  
<div style="Margin-right: 10px; Margin-left: 10px;">
  <div style="line-height: 5px; font-size: 1px">&nbsp;</div>
	<div style="font-size:12px;line-height:14px;color:#777777;font-family:Ubuntu, Tahoma, Verdana, Segoe, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px"><span style="font-size: 16px; line-height: 19px;">Estoy feliz, de haber despertado su interés.&nbsp;En lo pronto posible estaré escribiéndole.</span></p></div>

  <div style="line-height: 5px; font-size: 1px">&nbsp;</div>
</div>
                  
                                  <div style="line-height: 30px; font-size: 1px">&nbsp;</div>
              <!--[if !mso]><!--></div>
            </div><!--<![endif]-->
          <!--[if (mso)|(IE)]></td><td class="corner__x">&nbsp;</td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:#f8f8f8;">
      <div rel="col-num-container-box" style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 320px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td bgcolor=&quot;f8f8f8&quot; style="background-color:#f8f8f8;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><td class="corner__x">&nbsp;</td><![endif]-->

              <!--[if (mso)|(IE)]><td align="center"  width="500" style=" width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent;  border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <!--[if !mso]><!--><div rel="col-num-container-box" class="col num12" style="min-width: 320px;max-width: 500px;width: 320px;width: calc(18000% - 89500px);background-color: transparent;">
               <div style="background-color: transparent; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"><!--<![endif]-->
                  <div style="line-height: 25px; font-size:1px">&nbsp;</div>
                
                  

<div align="center" style="Margin-right: 10px; Margin-left: 10px; Margin-bottom: 10px;">
  <div style="line-height:10px;font-size:1px">&nbsp;</div>
  <div style="display: table; max-width:94px;">
  <!--[if (mso)|(IE)]><table width="94" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:94px;"><tr><td width="37" style="width:37px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-spacing: 0;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;Margin-right: 5px">
      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="https://twitter.com/jqEmprendedorVE" title="Twitter" target="_blank">
          <img src="images/twitter.png" alt="Twitter" title="Twitter" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;max-width: 32px !important">
        </a>
      <div style="line-height:5px;font-size:1px">&nbsp;</div>
      </td></tr>
    </tbody></table>
      <!--[if (mso)|(IE)]></td><td width="37" style="width:37px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-spacing: 0;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;Margin-right: 0">
      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="https://www.linkedin.com/in/jqemprendedorve/" title="LinkedIn" target="_blank">
          <img src="images/linkedin@2x.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;max-width: 32px !important">
        </a>
      <div style="line-height:5px;font-size:1px">&nbsp;</div>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td></tr></table><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td>&nbsp;</td></tr></table><![endif]-->
  </div>
</div>
                  
                  
<div style="Margin-right: 10px; Margin-left: 10px;">
  <div style="line-height: 10px; font-size: 1px">&nbsp;</div>
	<div style="font-size:12px;line-height:14px;color:#bbbbbb;font-family:Ubuntu, Tahoma, Verdana, Segoe, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 14px; line-height: 16px;">Julio Quintaba - Budista - Emprendedor y Desarrollador de soluciones.</span><br></p></div>

  <div style="line-height: 10px; font-size: 1px">&nbsp;</div>
</div>
                  
                                  <div style="line-height: 25px; font-size: 1px">&nbsp;</div>
              <!--[if !mso]><!--></div>
            </div><!--<![endif]-->
          <!--[if (mso)|(IE)]></td><td class="corner__x">&nbsp;</td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>  </div>


</body></html>';

			$result = $mgClient->sendMessage($domain, array(
			    'from'    => $from,
			    'to'      => $to,
			    'cc'	  => $cc,
			    'subject' => 'Gracias, ud ha recibido un 30% en su proximo proyecto',
			    'html'    => $text
			));
			break;
		case 'contactame':
			//$result = array('Mensaje' => 'Datos de prueba');
			$result = $mgClient->sendMessage($domain, array(
			    'from'    => $from,
			    'to'      => $to,
			    'cc'	  => $cc,
			    'subject' => 'Consulta para jqEmprendedorVE',
			    'text'    => $text
			));
			break;		
	}

	echo json_encode($result);
});