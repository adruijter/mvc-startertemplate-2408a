<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row mt-3" style="display:<?= $data['message']; ?>;">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="alert alert-danger" role="alert">
                Het record is verwijderd
            </div>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row mt-3 mb-2">
        <div class="col-1"></div>
        <div class="col-10">
            <a class="btn btn-outline-danger" href="<?= URLROOT; ?>/zangeressen/create" role="button">Nieuwe zangeres</a>
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
                        <th scope="col">Naam</th>
                        <th scope="col">Nettowaarde</th>                       
                        <th scope="col">Land</th>                       
                        <th scope="col">Mobiel</th>                       
                        <th scope="col">Leeftijd</th>
                        <th></th> 
                        <th></th>                      
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['zangeressen'] as $zangeres) : ?>
                        <tr>
                            <td><?= $zangeres->Naam; ?></td>
                            <td><?= $zangeres->Nettowaarde; ?></td>
                            <td><?= $zangeres->Land; ?></td>
                            <td><?= $zangeres->Mobiel; ?></td>
                            <td><?= $zangeres->Leeftijd; ?></td>
                            <td>
                                <a href="<?= URLROOT; ?>/zangeressen/update/<?= $zangeres->Id; ?>">
                                    <i class="bi bi-pencil-square text-success"></i>
                                </a>
                            </td>
                            <td>
                                <a href="<?= URLROOT; ?>/zangeressen/delete/<?= $zangeres->Id; ?>" onclick="return bevestigDelete();">
                                    <i class="bi bi-trash3-fill text-danger"></i>
                                </a>
                            </td>
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