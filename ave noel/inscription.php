<!DOCTYPE html>
<html>
<head>
	<title>inscription</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body bgcolor="Silver">
	<div class=".container">
  <!-- Content here -->
  <div class="container">
  
    <div class="d-flex justify-content-center">

      <form method="POST" action="inscription_bdd.php"  style="margin-top: 100px !important;">
       
        <div class="form-group">
          <label for="user">Username</label>
          <input type="user" class="form-control" name="user" id="user" style="width: 400px !important;">
        </div>

        <div class="form-group">
          <label for="mail">Mail</label>
          <input type="mail" class="form-control" name="mail" id="mail" style="width: 400px !important;">
          <small id="mail" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="nom" class="form-control" name="nom" id="nom" style="width: 400px !important;">
        </div>

        <div class="form-group">
          <label for="prenom">Prenom</label>
          <input type="prenom" class="form-control" name="prenom" id="prenom" style="width: 400px !important;">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" style="width: 400px !important;">
        </div>

        <button type="submit" value="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  </div>
</body>
</html>