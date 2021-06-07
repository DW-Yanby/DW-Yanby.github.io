<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
        <label for="prénom">Prénom :</label>
        <input type="text" id="prénom" name="user_firstName">
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
        <label  for="téléphone">Téléphone :</label>
        <input  type="text"  id="téléphone"  name="user_telephone">
    </div>
    <div>
        <label for="sujet">Object :</label>
        <select id="sujet" name="user_subject">
        <option>- Choisir dans la liste -</option>
        <option value="Quête">Quête</option>
        <option value="Personnel">Personnel</option>
        <option value="Autre">Autre</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
