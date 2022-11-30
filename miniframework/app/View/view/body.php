<div class="content">
        <h1> </h1>
        <table border="1px">
            <tr style="text-align: center; background-color: aqua;">
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
            </tr>
        <?php foreach($data as $row){?>
            <tr>
                <td><?= $row->id?></td>
                <td><?= $row->name?></td>
                <td><?= $row->email?></td>
                <td><?= $row->password?></td>
            </tr>
        <?php } ?>
