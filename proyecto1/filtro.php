<html>
      
     <head></head>
    
    <body>
    
        <form action ="filtroLogica.php" method="GET">
        <label>Filtro
            <input type="text" name="tarea" required>
        </label>
            <br>
        
            <input type="checkbox" name="todas" value="1">todas

            <br>

            <input type="checkbox" name="realizadas" value="2">realizadas
            
          <br>

            <input type="checkbox" name="no realizadas" value="3">No realizadas
        <button type="submit">Filtrar</button>
        </form>    
    </body>