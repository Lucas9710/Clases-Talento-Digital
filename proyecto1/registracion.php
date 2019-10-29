html> 
    <head>
      <meta charset = "uft-8">
    </head>
    
    <body>

    		<form method = "POST" action = "registracionLogica.php">
    		Registra un usuario:
    	
    		<div>		
    			<label>Nombre de usuario</label>
    			<input name ="nombreDeUsuario"/>
    		</div>
    		
    		<div>		
    			<label>Password</label>
    			<input TYPE="password" name="password"/>
    		</div>
    		
    		<div>		
    			<label>E-mail</label>
    			<input name ="email"/>
    		</div>

    		<div>		
    			<label>Nombre completo</label>
    			<input name ="nombreCompleto"/>
    		</div>

				 <button type="submit" name ="enviar">Enviar</button>
    </form>
   </body>
   </html> 