<?php
include 'inc/header.php';
include 'actions/getStudents.php';
include 'actions/bulkDeleteStudents.php';
?>

<div class="flex justify-between items-center bg-gray-200 mx-auto mt-8 mb-2 p-4 rounded-md w-full max-w-5xl font-medium">
  <a href="/php-crud/?page_num=1" class="text-2xl hover:underline">Student list</a>

  <!-- search field -->
  <form name='search' method="post">
    <input type="text" name="searchedText" required
      placeholder="Search by name"
      class="px-2 py-1 rounded ring-2 ring-black">
    <input type="submit" name='search' value="Search"
      class="bg-gray-800 px-3 py-1 rounded-md w-fit text-white">
  </form>

  <a href="addStudent.php" class="bg-gray-800 px-4 py-2 rounded-md text-white">
    Add Student
  </a>
</div>

<?php if ($num > 0) { ?>
  <!-- main table -->
  <!-- action='actions/bulkDeleteStudents.php' -->
  <form name="bulk_delete_submit" method="post">
    <div class='flex justify-between items-center mx-auto max-w-5xl font-medium'>
      <?php
      echo "<p>$statusMessage</p>";
      ?>
      <input type="submit"
        name="bulk_delete_submit"
        value="Delete selected"
        onclick="return confirm('Are you sure you want to delete selected students?')"
        class="bg-red-400 hover:bg-red-600 mr-3 px-3 py-1 rounded-md hover:text-white">
    </div>

    <table class='mx-auto mt-2 mb-8 p-4 [&_td]:p-2 [&_th]:p-3 rounded-md w-full max-w-5xl text-center'>
      <thead>
        <tr class='bg-gray-800 text-white'>
          <th><input type='checkbox' id='checkAll'></th>
          <th>Serial</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody class='[&>tr]:odd:bg-gray-200'>
        <?php while ($row = $result->fetch_assoc()) {
          echo "
        <tr>
          <td>
            <input type='checkbox' name='checked_id[]' value='$row[id]'>
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
        ?>
        <p class='py-4 font-medium text-2xl text-center'>No data found!</p>
      <?php } ?>
      </tbody>
    </table>
  </form>

  <!-- pagination -->
  <?php if ($num > 0 && !$searchedText) { ?>

    <div class='flex justify-between items-center mx-auto w-full max-w-5xl'>
      <?php
      if (!isset($_GET['page_num'])) {
        $current_page = 1;
      } else {
        $current_page = $_GET['page_num'];
      }
      ?>
      <p>Showing <?php echo $current_page; ?> of <?php echo $pages; ?> pages</p>

      <!-- pagination navigation -->
      <p class='flex items-center gap-4 font-bold'>
        <a href='?page_num=1' class='flex justify-center items-center px-1 rounded-md hover:text-blue-800 underline hover:no-underline cursor-pointer'>First</a>

        <?php if (isset($_GET['page_num']) && $_GET['page_num'] > 1) { ?>
          <a href="?page_num=<?php echo $_GET['page_num'] - 1; ?>"
            class='flex justify-center items-center bg-gray-600 hover:bg-gray-800 rounded-md w-6 aspect-square text-white cursor-pointer'>-</a>
        <?php
        }

        for ($i = 1; $i <= $pages; $i++) {
        ?>
          <a href='?page_num=<?php echo $i; ?>'
            class='<?php echo (isset($_GET['page_num']) && $_GET['page_num'] == $i) ? 'bg-gray-800 text-white' : ''; ?> flex justify-center items-center hover:bg-gray-800 border rounded-md w-6 aspect-square hover:text-white cursor-pointer'><?php echo "$i"; ?></a>
        <?php } ?>


        <?php if (isset($_GET['page_num']) && $_GET['page_num'] < $pages) { ?>
          <a href='?page_num=<?php echo $_GET['page_num'] + 1; ?>'
            class='flex justify-center items-center bg-gray-600 hover:bg-gray-800 rounded-md w-6 aspect-square text-white cursor-pointer'>+</a>
        <?php } elseif (!isset($_GET['page_num']) && $pages > 1) { ?>
          <a href='?page_num=2'
            class='flex justify-center items-center bg-gray-600 hover:bg-gray-800 rounded-md w-6 aspect-square text-white cursor-pointer'>+</a>
        <?php } ?>

        <a href='?page_num=<?php echo $pages; ?>' class='flex justify-center items-center px-1 rounded-md hover:text-blue-800 underline hover:no-underline cursor-pointer'>Last</a>
      </p>
    </div>
  <?php } ?>



  <script>
    document.getElementById('checkAll').addEventListener('change',
      function() {
        const checkboxes = document.querySelectorAll('input[name="checked_id[]"]');
        checkboxes.forEach(cb => cb.checked = this.checked);
      });
  </script>
  </body>

  </html>