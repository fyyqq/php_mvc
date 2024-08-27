<h2>About Page</h2>
<table>
    <tr>
        <th>name</th>
        <th>passion</th>
    </tr>
    <tr>
        <td><?php echo isset($data['name']) ? $data["name"] : ""; ?></td>
        <td><?php echo isset($data['passion']) ? $data["passion"] : ""; ?></td>
    </tr>
</table>