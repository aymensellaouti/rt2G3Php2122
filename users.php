<?php
require_once 'utilities/isAuthenticated.php';
require_once 'classes/autoloader.php';
$pageTitle = 'Users List';
$userRepository = new UserRepository();
//$newUser = ['name' => 'Mohamed', 'email' => 'med@gmail.com', 'username' => 'mohamed'];
//$userRepository->insert($newUser);
$users = $userRepository->findAll();
?>
<?php
require_once 'fragmenrts/header.php';
?>

<table class="table">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>username</th>
        <th>email</th>
        <th>actions</th>
    </tr>
    <?php foreach($users as $user): ?>
    <tr>
        <td><?=$user->id ?></td>
        <td><?=$user->name ?></td>
        <td><?=$user->username ?></td>
        <td><?=$user->email ?></td>
        <td><a href="deleteUser.php?id=<?= $user->id?>">X</a>  </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'fragmenrts/footer.php';
?>
