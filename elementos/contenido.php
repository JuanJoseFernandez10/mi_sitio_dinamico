<h2 class="text-success text-center mt-4">Productos locales de Camas</h2>

<table class="table table-bordered table-striped w-75 mx-auto mt-4 text-center align-middle">
  <thead class="table-primary">
    <tr>
      <th>Producto</th>
      <th>Precio (€)</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      // Estructura asociativa: producto => precio
      $productos = [
      "Pan de Camas"        => 1.20,
      "Aceitunas aliñadas"  => 2.50,
      "Tortas de aceite"    => 3.00,
      "Gildas de piparra y ancoha" => 5.99
      ];
      $string_keys = array_keys($productos);
      $i = 0;
      while($i < count($productos)){
        echo "<tr>";
        echo "<td>" . $string_keys[$i] . "</td> <td>" . $productos[$string_keys[$i]] . "</td>";
        echo "</tr>";
        $i++;
      }
    ?>
  </tbody>
</table>
