<?php if (session()->has('gagal')) : ?>
    <div id="alert-danger" class="alert alert-danger">
        <?= session()->get('gagal'); ?>
    </div>
<?php endif; ?>

<?php if (session()->has('sukses')) : ?>
    <div id="alert-success" class="alert alert-success">
        <?= session()->get('sukses'); ?>
    </div>
<?php endif; ?>

<script>
    setTimeout(function() {
        var alertDanger = document.getElementById('alert-danger');
        var alertSuccess = document.getElementById('alert-success');

        if (alertDanger) {
            alertDanger.remove();
        }

        if (alertSuccess) {
            alertSuccess.remove();
        }
    }, 3000);
</script>