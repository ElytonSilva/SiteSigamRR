<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
			"http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        h2 {
            background-color: #3b3b3b;
            color: white;
            padding-left: 15px;
            margin: 0 0 0 -15px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: normal;
            text-align: center;
        }
    </style>
</head>

<body>
    <caption>
        <h1>Comprovante Realização da Pré-Matrícula</h1>
    </caption>


    <div class="h1">
        <caption>
            <h2>Dados Cadastrados </h2>
        </caption>

        <div id="hcard-Ademir-Mazer-Jr" class="vcard">

            <p>
                <strong>Nome do pai: </strong>{{$prematricula->nomepai}}</p>
            <p>
                <strong>Contato do Pai: </strong>{{$prematricula->contatopai}} </p>
            <p>
                <strong>Nome da Mãe: </strong> {{$prematricula->nomemae}}</p>
            <p>
                <strong>Contato do Mãe: </strong>{{$prematricula->contatomae}} </p>
            <p>
                <strong>Nome do Filho(a): </strong>{{$prematricula->nomealuno}} </p>
				
			<p>
                <strong>Senha Gerada: </strong> {{$prematricula->senha}}</p>	
            

        </div>

    </div>
	
	 <div class="secao">
        <caption>
            <h2>Documentos para Realização da Matrícula</h2>
        </caption>
       
		<p>
            <strong>• Xérox do Histórico Escola ou Declaração com notas; </strong> </p>	
			
		<p>
            <strong>• Xérox do RG ou Certidão de Nascimento e CPF; </strong> </p>	
			
		<p>
    
			<strong>• Xérox do comprovante de residência;</strong> </p>	
			
		<p>
            
			<strong>• Xérox do cartão de vacina;</strong> </p>	
	
		<p>
            <strong>• 01 Foto 3x4;</strong> </p>
		
		
		<p>
            <strong>• Xérox do RG do responsável pelo aluno;</strong> </p>
		
		
		<p>
            <strong>• Xérox do Laudo do comprobatório de Defiência do aluno, se for o caso; </strong> 
		
		</p>	
		
		<p>
            <strong>• Xérox do Cartão do Programa Bolsa Família e RG do titular do cartão;</strong> 
		
		</p>
     

        

    </div>

</body>

</html>