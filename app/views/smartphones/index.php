<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-2"></div>
    </div>


   
    <!-- begin tabel smartphones -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Merk</th>
                        <th scope="col">Model</th>                       
                        <th scope="col">Prijs (&euro;)</th>                       
                        <th scope="col">Geheugen (GB)</th>                       
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['smartphones'] as $smartphone) : ?>
                        <tr>
                            <td><?= $smartphone->Merk; ?></td>
                            <td><?= $smartphone->Model; ?></td>
                            <td><?= $smartphone->Prijs; ?></td>
                            <td><?= $smartphone->Geheugen; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>">Terug</a>
        </div>
        <div class="col-2"></div>
    </div>
    <!-- einde tabel smartphones -->

<?php require_once APPROOT . '/views/includes/footer.php'; ?> 