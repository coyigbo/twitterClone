<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<style>
		body {
			background-color: #d7d7d7;
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}

		nav {
			background-color: #54a8f9;
			color: #ffffff;
			padding: 1em;
			text-align: center;
			margin: 0;
			top: 0;
			position: fixed;
			width: 100%;
			box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
		}

		nav ul {
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			list-style: none;
		}

		nav li {
			margin-left: 1em;
			margin-right: 1em;
		}

		nav li a {
			color: #ffffff;
			text-decoration: none;
			text-transform: uppercase;
			font-weight: bold;
		}

		.form-class {
			width: 30%;
			margin: 0 auto;
			background-color: #f1f1f1;
			padding: 2em;
			box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
			margin-top: 5em;
		}

		.form-class h1 {
			text-align: center;
			margin-bottom: 1em;
		}

		.form-class input {
			width: 100%;
			margin-bottom: 1em;
			padding: 0.5em;
			border: none;
			border-bottom: 2px solid #54a8f9;
			outline: none;
			font-size: 18px;
		}

		.form-class input[type="submit"] {
			background-color: #54a8f9;
			color: #ffffff;
			padding: 0.5em;
			border: none;
			outline: none;
			font-size: 18px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		.form-class input[type="submit"]:hover {
			background-color: #3d8ae2;
		}
	</style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</nav>
	<div class="form-class">
		<h1>Sign Up</h1>
		<form>
			<input type="text" placeholder="Name">
			<input type="text" placeholder="Email">
			<input type="password" placeholder="Password">
			<input type="submit" value="Sign Up">
		</form>
	</div>
</body>
</html>
