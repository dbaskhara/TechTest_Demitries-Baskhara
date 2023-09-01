<?php
include 'connection.php';
$sql = "SELECT * FROM tabel1 order by no desc";
$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2><a href="login.php">LOGOUT</a></h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:10%;">No</th>
    <th style="width:20%;">Aksi</th>
    <th style="width:35%;">Instansi</th>
    <th style="width:35%;">Deskripsi</th>
  </tr>
<?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $row["no"] ?></td>
                    <td><?php echo $row["aksi"] ?></td>
                    <td><?php echo $row["instansi"] ?></td>
                    <td><?php echo $row["deskripsi"] ?></td>
                </tr>
        <?php
            }
        }
        ?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
