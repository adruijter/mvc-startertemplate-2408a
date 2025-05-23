<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row mb-3">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row mb-3" style="display:<?= $data['message']; ?>;">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="alert alert-success" role="alert">
                Het record is toegevoegd
            </div>
        </div>
        <div class="col-3"></div>
    </div>

       
    <!-- begin tabel smartphones -->
    <div class="row mb-3">
        <div class="col-3"></div>
        <div class="col-6">
                
            <form action="<?= URLROOT; ?>/zangeressen/create" method="post">
                <div class="mb-3">
                    <label for="naam" class="form-label">Naam:</label>
                    <input name="naam" type="text" class="form-control" id="naam" value="<?= $_POST['naam'] ?? ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nettowaarde" class="form-label">Nettowaarde (miljoen):</label>
                    <input name="nettowaarde" type="number" min="0" max="10000" class="form-control" id="nettowaarde" value="<?= $_POST['nettowaarde'] ?? ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="land" class="form-label">Land</label>
                    <input name="land" type="text" class="form-control" id="land" value="<?= $_POST['land'] ?? ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="mobiel" class="form-label">Mobiel:</label>
                    <input name="mobiel" type="tel" pattern="\+31 6 \d{4} \d{2} \d{2}" title="Neem exact het format over" placeholder="+31 6 1234 12 13"  class="form-control" id="mobiel" value="<?= $_POST['mobiel'] ?? ''; ?>" required>
                    <div class="form-text">Geef hier het nummer van de Nederlandse impresario</div>
                </div>
                <div class="mb-3">
                    <label for="leeftijd" class="form-label">Leeftijd:</label>
                    <input name="leeftijd" type="number" min="0" max="130" class="form-control" id="leeftijd" value="<?= $_POST['leeftijd'] ?? ''; ?>" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Sla op</button>
                </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>

    <!-- einde tabel smartphones -->

<?php require_once APPROOT . '/views/includes/footer.php'; ?> 