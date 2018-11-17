<?php 
$koneksi = mysqli_connect("localhost","root","","arka");
 
// Check connection
if (mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
<center>
  <table border="1">
   <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Products</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
    $data = mysqli_query($koneksi,"SELECT product_categories.id, product_categories.name, GROUP_CONCAT(products.name) as product FROM product_categories LEFT JOIN products ON product_categories.id = products.category_id GROUP BY product_categories.id");
    while($d = mysqli_fetch_array($data)){
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['name']; ?></td>
          <td><?php echo $d['product']; ?></td>
        </tr>
        <?php 
    }
    ?>
      </tbody>
</table>
</center>