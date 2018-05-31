<?php foreach($dados as $dado): ?>

    <hr>
    Nome: <?php echo $dado->nome; ?>
    <br>
    <a href="<?php echo base_url('public/upload/') . $dado->arquivo; ?>">
        <button class='btn btn-success'>Download</button>
    </a>
    <br>
    <a href="<?php echo base_url('public/upload/') . $dado->zip; ?>">
        <button class='btn btn-info'>Download Zip</button>
    </a>
    <br>
    <hr>

<?php endforeach; ?>