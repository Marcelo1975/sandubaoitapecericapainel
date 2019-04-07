<?php foreach($annotationsAll as $an): ?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Nº</th>
        <th scope="col">Título</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"><?php echo $an['id']; ?></th>
        <td><?php echo $an['title']; ?></td>
        <td><a href="<?php echo BASE_URL.'home/viewAnnotation/'.$an['id']; ?>" class="btn btn-success">Visualizar</a></td>
    </tr>
    </tbody>
</table>
<?php endforeach; ?>