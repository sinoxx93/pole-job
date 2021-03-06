<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <title>PoleJob</title>
  </head>

  <body>
    <header>
      <h1>PoleJob</h1>
    </header>

    <hr />

    <nav>
      <ul>
        <li>S'inscrire</li>
        <li><a href="login.php">Connexion</a></li>
      </ul>
    </nav>

    <hr />

    <article>
      <h2>S'inscrire à PoleJob</h2>

      <form action="signup-post.php" method="post">
        <div>
          <input name="full_name" type="text" placeholder="Nom complet" required>
        </div>

        <div>
          <input name="email" type="email" placeholder="Courriel" required>
        </div>

        <div>
          <input name="password" type="password" placeholder="Mot de passe" required>
        </div>

        <div>
          <input name="phone" type="tel" placeholder="Téléphone" required>
        </div>

        <div>
          <textarea name="bio" placeholder="Bio" required></textarea>
        </div>

        <div>
          <select name="city_id">
            <option value="1">Ville 1</option>
            <option value="2">Ville 2</option>
            <option value="3">Ville 3</option>
          </select>
        </div>

        <div>
          <input class="btn" type="submit" value="Créer mon compte">
        </div>
      </form>
    </article>
  </body>
</html>
