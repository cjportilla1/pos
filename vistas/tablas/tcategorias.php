<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Creada por</th>
                      <th>Nombre</th>
                      <th>Fecha creacion</th>
                      <th>Fecha creacion</th>
                    </tr>
                  </thead>
               
               <tbody>
               <?php 
          if (isset($_GET['eliminar'])) {

            $sqlDelete = "delete from categorias where id_categoria='".$_GET['id']."'";
            $res = $createcon->query($sqlDelete);
          }


          $sql="select * from categorias";

          $exe = $createcon->query($sql);

          if ($exe->num_rows > 0) {

    

            while ($res=$exe->fetch_row()) {
              echo '<tr class="text-center font-weight-bold">
      
                <td>'.$res[1].'</td>
                <td>'.$res[2].'</td>
                <td>'.$res[3].'</td>
                <td>';
              
              echo "<a href='#0' class='btn btn-danger btn-sm' onclick='confirmDelete($res[0]);'>Eliminar categoría</button>
                </td>
              </tr>";
             
            }
            
          }
          else{

            echo "no se encontraron datos";

          }


          ?>


               
               
               </tbody>
                </table>