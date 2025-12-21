<?php include 'inc/header.php'; ?>

<p class="flex justify-between items-center bg-gray-200 mx-auto my-8 p-4 rounded-md w-full max-w-5xl font-medium">
  <span class="text-2xl">Student list</span>
  <a href="addStudent.php" class="bg-gray-800 px-4 py-2 rounded-md text-white">Add Student</a>
</p>

<table class="mx-auto my-8 p-4 [&_td]:p-2 [&_th]:p-3 rounded-md w-full max-w-5xl text-center">
  <thead>
    <tr>
      <th>Serial</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody class="[&>tr]:odd:bg-gray-200">
    <?php
    require_once "config/db.php";

    // check connection 
    if ($connection->connect_error) {
      die("connection failed: " . $connection->connect_error);
    }

    // read all row from db table
    $sql = "SELECT * FROM tbl_students";
    $result = $connection->query($sql);

    if (!$result) {
      die("Invalid query: " . $connection->error);
    }

    // read data of each row
    while ($row = $result->fetch_assoc()) {
      echo "
            <tr>
              <td>$row[id]</td>
              <td>$row[name]</td>
              <td>$row[email]</td>
              <td>$row[phone]</td>
              <td class='text-white'>
                <a 
                  href='editStudent.php?id=$row[id]' 
                  class='bg-indigo-600 px-2 py-1 rounded-md cursor-pointer'>Edit</a>
                <a
                  href='actions/deleteStudent.php?id=$row[id]'
                  class='bg-red-600 px-2 py-1 rounded-md cursor-pointer'>Delete</a>
              </td>
            </tr>
          ";
    }
    ?>
  </tbody>
</table>
</body>

</html>