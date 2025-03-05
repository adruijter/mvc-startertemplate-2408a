<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>


   
    <!-- begin tabel smartphones -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Merk</th>
                        <th scope="col">Model</th>                       
                        <th scope="col">Prijs (&euro;)</th>                       
                        <th scope="col">Geheugen (GB)</th>                       
                        <th scope="col">Besturingssysteem</th>     
                        <th scope="col">Schermgrootte</th>
                        <th scope="col">ReleaseDatum</th>
                        <th scope="col">MegaPixels</th>
                        <th scope="col">Gewicht (gr)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['smartphones'] as $smartphone) : ?>
                        <tr>
                            <td><?= $smartphone->Merk; ?></td>
                            <td><?= $smartphone->Model; ?></td>
                            <td><?= $smartphone->Prijs; ?></td>
                            <td><?= $smartphone->Geheugen; ?></td>
                            <td><?= $smartphone->Besturingssysteem; ?></td>
                            <td><?= $smartphone->Schermgrootte; ?></td>
                            <td><?= $smartphone->Releasedatum; ?></td>
                            <td><?= $smartphone->MegaPixels; ?></td>
                            <td><?= $smartphone->Gewicht; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">home</a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- einde tabel smartphones -->

<?php require_once APPROOT . '/views/includes/footer.php'; ?> 