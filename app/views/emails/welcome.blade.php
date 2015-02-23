<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
        <style>
            .titulo{
                color: magenta;
            }
            .texto{
                border: 1px dashed blue; 
                border-radius: 3px;
                padding: 1em;
            }
            .btn{
                padding: 1.5em; 
                backgroud-color: silver;
            }
        </style>
        
	</head>
	<body>
		<h2 class="titulo">Saludo sr(a): {{ $nombre }}</h2>

        <div class="texto">
            Este correo le ha sido enviado porque lo queremos saludar indicandole que ya podemos enviar 
            correos por mailgun, por favor no responda a menos q yo le diga.
            <p><a href="#" class="btn">Ya estoy activo y feliz</a></p>
        </div>
        <ul>
            <li>SIga la instruccion 1</li>
            <li>ahora en usuario: <pre>12365478</pre></li>
            <li>ahora en pwd: <pre>Dwki?650</pre></li>
            <li>ahora en pwd: <pre>Dwki+650</pre></li>
            <li>ahora en pwd: <pre>Dwki!547</pre></li>
            <li>ahora en pwd: <pre style="font-family: monospace;">Dwki.650</pre></li>
        </ul>
		
	</body>
</html>
