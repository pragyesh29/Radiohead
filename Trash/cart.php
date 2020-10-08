<?php include 'navigation.php'; ?>
<?php session_start(); ?>
<section class="cart">
  <h1 class="text-center">CART</h1>
  <table class="table" id="myTableRow">
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
    </thead>
    <!-- <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody> -->
  </table>
</section>
<script>
function addRow() {
  var table=document.getElementById('myTableRow');
  var row=table.insertRow(1)
  var cell1=row.insertCell(0);
  var cell2=row.insertCell(1);
  var cell3=row.insertCell(2);
  var cell4=row.insertCell(3);
  cell1.innerHTML="tee";
  cell2.innerHTML="599";
  cell3.innerHTML="1";
  cell4.innerHTML="599";
}
addRow();
</script>
