<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>User</title>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="User/create" role="form">
						<div class="form-group">
							<h2>Create account</h2>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Nom</label>
							<input id="signupName"name="nom" type="text" maxlength="50" class="form-control" required>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupEmail">Prenom</label>
							<input id="signupEmail"name="prnom" type="text" maxlength="50" class="form-control" required>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupEmailagain">Cin</label>
							<input id="signupEmailagain"name="cin" type="text" maxlength="50" class="form-control" required>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPassword">telephone</label>
							<input id="signupPassword" name="tel" type="text" maxlength="25" class="form-control" required >
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPasswordagain">age</label>
							<input id="signupPasswordagain" name="age" type="text" maxlength="25" class="form-control" required>
						</div>
                        <div class="form-group">
							<label class="control-label" for="signupEmailagain">Email</label>
							<input id="signupEmailagain" name="email" type="email" maxlength="50" class="form-control" required>
						</div>
						<div class="form-group">
							<button id="signupSubmit" type="submit" name="sub"class="btn btn-info btn-block">Create your account</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>