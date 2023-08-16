<?php
$title = 'UserList';
ob_start(); ?>



    <h1>User List</h1>
    <a href="#" class="btn btn-danger">Create User</a>
    <table>
        <thead>
            <tr>
            <tr scope="col">
                #
            </tr>
            <tr scope="col">
                Login
            </tr>
            <tr scope="col">
                Admin
            </tr>
            <tr scope="col">
                Created
            </tr>
            <tr scope="col">
                Actions
            </tr>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <th scope="row"><?php echo $user['id']; ?></th>
                    <td><?php echo $user['login']; ?>/td>
                    <td><?php echo $user['is_admin'] ? 'Yes':'No' ?>/td>
                    <td><?php echo $user['creadted_at']; ?>/td>
                    
                    <td>
                        <a href="#">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
                <?php endforeach;?>
        </tbody>
    </table>


<?php
    $content = ob_get_clean();
    include 'app/view/layout.php';
?>