<?php
include 'inc/header.php';
include 'actions/getStudents.php';
include 'actions/pagination.php';
?>

<div class="flex justify-between items-center bg-gray-200 mx-auto my-8 p-4 rounded-md w-full max-w-5xl font-medium">
  <span class="text-2xl">Student list</span>

  <!-- search field -->
  <form method="post">
    <input type="text" name="searchedText"
      placeholder="Search by name"
      class="px-2 py-1 rounded ring-2 ring-black">
    <input onsubmit="" type="submit" value="Search"
      class="bg-gray-800 px-3 py-1 rounded-md w-fit text-white">
  </form>

  <a href="addStudent.php" class="bg-gray-800 px-4 py-2 rounded-md text-white">Add Student</a>
</div>

<!-- main table -->
<?php
if ($num > 0) {
  echo "<table class='mx-auto my-8 p-4 [&_td]:p-2 [&_th]:p-3 rounded-md w-full max-w-5xl text-center'>
  <thead>
    <tr class='bg-gray-800 text-white'>
      <th><input type='checkbox' value=''></th>
      <th>Serial</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Action</th>
    </tr>
  </thead>";

  echo "<tbody class='[&>tr]:odd:bg-gray-200'>";
  while ($row = $result->fetch_assoc()) {
    echo "
            <tr>
              <td>
                <input type='checkbox' name='checkbox' value='$row[id]'>
              </td>
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
} else {
  echo " 
        <p class='py-4 font-medium text-2xl text-center'>
          No data found!
        </p>
        ";
}
?>
</tbody>
</table>

<?php
if ($num > 0) {
  echo "
  <!-- pagination -->
  <div class='flex justify-between items-center mx-auto w-full max-w-5xl'>
  <p>Showing 1 of $pages pages</p>
  <p class='flex items-center gap-4 font-bold'>
    <a href='?page-num=1' class='flex justify-center items-center rounded-md cursor-pointer'>First</a>

    <a href='' class='flex justify-center items-center bg-gray-800 rounded-md w-6 aspect-square text-white cursor-pointer'>-</a>

    <span>1</span>
    <span>2</span>
    <span>3</span>
    <span>...</span>
    <button class='flex justify-center items-center bg-gray-800 rounded-md w-6 aspect-square text-white cursor-pointer'>+</button>
    <a href='?page-num=$pages' class='flex justify-center items-center rounded-md cursor-pointer'>Last</a>
  </p>
</div>
  ";
}
?>

</body>

</html>