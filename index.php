<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


$clientSoap = new SoapClient("https://apphom.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl");
$cep = '31840220';
$xml = "<soapenv:Envelope xmlns:soapenv='http://schemas.xmlsoap.org/soap/envelope/' xmlns:cli='http://cliente.bean.master.sigep.bsb.correios.com.br/'>
<soapenv:Header/>
<soapenv:Body>
   <cli:consultaCEP>
      <!--Optional:-->
      <cep>$cep</cep>
   </cli:consultaCEP>
</soapenv:Body>
</soapenv:Envelope>";

//$listaEtiquetas = array('SO00064196BR', 'SL99922179BR');
$params = array('xml' => $xml, 'cep'=>$cep); 
 $result = $clientSoap->consultaCEP($params);
 echo'<pre>';
 print_r($result);