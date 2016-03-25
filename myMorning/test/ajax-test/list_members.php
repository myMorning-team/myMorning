<?php
/*
* Author : Ali Aboussebaba
* Email : bewebdeveloper@gmail.com
* Website : http://www.bewebdeveloper.com
* Subject : Using Ajax with PHP/MySQL
*/
?>

<table class="table_list" cellspacing="2" cellpadding="0">
    <tr class="bg_h">
        <th>Full name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Delete member</th>
    </tr>
    <?php
		// display the list of all members in table view
        $sql = "SELECT * FROM myMorning ORDER BY id ASC";
        $query = $pdo->prepare($sql);
        $query->execute();
        $list = $query->fetchAll();
        $bg = 'bg_1';
        foreach ($list as $rs) {
            ?>
            <tr class="<?php echo $bg; ?>">
                <td><?php echo $rs['name']; ?></td>
                <td><?php echo $rs['mail']; ?></td>
                <td><?php echo $rs['pass']; ?></td>
                <td><a href="#" class="delete_m" onclick="delete_member(<?php echo $rs['id']; ?>)"><img src="images/delete.png"> Delete</a></td>
            </tr>
            <?php
            if ($bg == 'bg_1') {
                $bg = 'bg_2';
            } else {
                $bg = 'bg_1';
            }
        }
    ?>
</table>