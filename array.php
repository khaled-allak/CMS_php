<?php


$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];

?>
<html>
  <head>

<h1>Application name: PHP class registratioin</h1>

  </head>
<table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Status</th>
    </tr>
    <?php foreach ($students as $s): ?>
      <?php $Color = $s['status'] == 'CMS' ? 'red' : 'black'; ?>
      <tr style="color: <?php echo $Color; ?>">
        <td><?php echo $s['name']; ?></td>
        <td><?php echo $s['email']; ?></td>
        <td><?php echo $s['status']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  </html>