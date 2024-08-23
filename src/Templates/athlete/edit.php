<form action="/JoController/<?= $athlete->_id ?>" method="POST" class="container mt-4" style="max-width: 500px;">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom"value="<?= $athlete->nom ?>" required>
    </div>

    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom"value="<?= $athlete->prenom ?>" required>
    </div>

    <div class="mb-3">
        <label for="genre" class="form-label">Genre :</label>
        <select class="form-select" id="genre" name="genre" required>
            <option <?php if ($athlete->genre == "Homme") echo "selected" ?> value="Homme">Homme</option>
            <option <?php if ($athlete->genre == "Femme") echo "selected" ?> value="Femme">Femme</option>
            <option <?php if ($athlete->genre == "Autre") echo "selected" ?> value="Autre">Autre</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">Âge :</label>
        <input type="number" class="form-control" id="age" name="age" value="<?= $athlete->age ?>" required>
    </div>

    <div class="mb-3">
        <label for="sport" class="form-label">Sport :</label>
        <input type="text" class="form-control" id="sport" name="sport" value="<?= $athlete->sport ?>" required>
    </div>

    <div class="mb-3">
        <label for="medaille" class="form-label">Médaille :</label>
        <select class="form-control" id="medaille" name="medaille" required>
            <option <?php if ($athlete->medaille == "or") echo "selected" ?> value="or">Or</option>
            <option <?php if ($athlete->medaille == "argent") echo "selected" ?> value="argent">Argent</option>
            <option <?php if ($athlete->medaille == "bronze") echo "selected" ?> value="bronze">Bronze</option>
        </select>
    </div>

    <input type="hidden" name="_method" value="PUT" />
    <button type="submit" class="btn btn-primary w-100">Modifier</button>
</form>