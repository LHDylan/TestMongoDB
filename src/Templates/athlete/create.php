<form action="/JoController/store" method="POST" class="container mt-4" style="max-width: 500px;">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
    </div>

    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
    </div>

    <div class="mb-3">
        <label for="genre" class="form-label">Genre :</label>
        <select class="form-select" id="genre" name="genre" required>
            <option value="" selected disabled>Choisissez votre genre</option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="Autre">Autre</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">Âge :</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="Entrez votre âge" required>
    </div>

    <div class="mb-3">
        <label for="sport" class="form-label">Sport :</label>
        <input type="text" class="form-control" id="sport" name="sport" placeholder="Entrez votre sport" required>
    </div>

    <div class="mb-3">
        <label for="medaille" class="form-label">Médaille :</label>
        <select class="form-control" id="medaille" name="medaille" required>
            <option value="">Sélectionnez le type de médaille</option>
            <option value="or">Or</option>
            <option value="argent">Argent</option>
            <option value="bronze">Bronze</option>
        </select>
    </div>

    <input type="hidden" name="_method" value="POST" />
    <button type="submit" class="btn btn-primary w-100">Ajouter</button>
    
</form>