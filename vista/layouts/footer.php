       <!-- /contenido-->
       </div>
       </div>
       <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

       <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
       <script>
              $(document).ready(function() {
                     $('#Listar').DataTable();
              });
       </script>
       <script type="text/javascript">
              var table = $('#Listar').DataTable({
                     language: {
                            "decimal": "",
                            "emptyTable": "No hay información",
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                            "infoEmpty": "Mostrando 0 de 0 de 0 Registros",
                            "infoFiltered": "(Filtrado de _MAX_ total Registros)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Mostrar _MENU_ Registros",
                            "loadingRecords": "Cargando...",
                            "processing": "Procesando...",
                            "search": "Buscar:",
                            "zeroRecords": "Sin resultados encontrados",
                            "paginate": {
                                   "first": "Primero",
                                   "last": "Ultimo",
                                   "next": "Siguiente",
                                   "previous": "Anterior"
                            }
                     },
              });
       </script>
       </body>

       </html>