<table class="table">
  <thead>
    <tr>
      <th scope="col">DNI</th>
      <th scope="col">Horario</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $contacs = [
            "47253467F" => "15:00-21:00",
            "27341211X" => "7:00-22:00",
            "11111111S" => "12:00-13:00"
        ];
        foreach($contacs as $dni => $hor) {
            echo "<tr>";
            echo "<td> " . $dni . " </td><td> " . $hor . " </td>";
            echo "</tr>";
        }
    ?>
  </tbody>
</table>