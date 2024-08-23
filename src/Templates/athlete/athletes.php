<table class="table">
<thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Genre</th>
        <th>Âge</th>
        <th>Sport</th>
        <th>Médaille</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($athletes as $athlete) : ?>
        <tr>
            <td><?= $athlete->nom ?></td>
            <td><?= $athlete->prenom ?></td>
            <td><?= $athlete->genre ?></td>
            <td><?= $athlete->age ?></td>
            <td><?= $athlete->sport ?></td>
            <td><?= $athlete->medaille ?></td>
            <td>
                <a class="btn" href="/JoController/edit/<?= $athlete->_id ?>">edit</a>
                <form action="/JoController/<?= $athlete->_id ?>" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>