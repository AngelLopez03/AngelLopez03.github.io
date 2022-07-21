<html>
    <head>
        <title><?= $titulo ?></title>
      


        <!--        esto es para las tablas -->        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">  
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">  
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>


        <!--esto es para bootstrap -->
       
       
    </head>

    <body>
    <center> 
        <script type="text/javascript">//  esto es para todas las tablas de los ABM  

            function formatearTabla(tabla ) {
                $(tabla).DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        {extend: 'pageLength', text: '<b>Registros a mostrar</b>'},
                        
                    ],
                    
                    "aLengthMenu": [[5, 10, 20, 50, -1], [5, 10, 20, 50, "Todos"]], "iDisplayLength": 10
                });
            }  
            
        </script>  
     </center>
    </body>
 </html>