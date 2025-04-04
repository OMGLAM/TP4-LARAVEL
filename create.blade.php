<h1>Ajouter un Livre</h1>

<form action="/livre" method="POST">
    @csrf
    <label>Titre :</label><br>
    <input type="text" name="title"><br>
    
    <label>Auteur :</label><br>
    <input type="text" name="author"><br>
    
    <label>Genre :</label><br>
    <input type="text" name="genre"><br>
    
    <label>Année de publication :</label><br>
    <input type="number" name="published_year"><br>
    
    <label>Disponible :</label><br>
    <select name="available">
        <option value="1">Oui</option>
        <option value="0">Non</option>
    </select><br><br>
    
    <button type="submit">Ajouter</button>
</form>
