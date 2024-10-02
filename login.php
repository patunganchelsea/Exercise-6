<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    
</head>

<style>
body {
  background: linear-gradient(to bottom, #fcc6f5, #9eabd6); 
  font-family: Arial, sans-serif;
  height: 100vh;
  margin: 0;
  
}

H1{
    text-align: center;
    color: #b67faf;

}

.container {
  width: 350px; 
  margin: 40px auto; 
  padding: 50px;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: rgb(212, 183, 238);
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#loginForm {
  text-align: center;
}

#loginForm label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: #b67faf;
}

#loginForm input[type="text"], #loginForm input[type="password"] {
  width: 100%;
  height: 40px;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 18px;
  font-weight: bold;
}

#loginForm input[type="text"]:focus, #loginForm input[type="password"]:focus {
  border-color: #aaa;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#loginForm button[type="submit"] {
  width: 50%;
  height: 50px;
  background-color: #15c3cf;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
  font-weight: bold;
}

#loginForm button[type="submit"]:hover {
  background-color: #159ea8;

}

#error {
  color: red;
  font-size: 14px;
  margin-bottom: 20px;
}

.container {
  transition: box-shadow 0.3s;
}

.container:hover {
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

#loginForm input[type="text"], #loginForm input[type="password"] {
  transition: border-color 0.3s;
}

#loginForm input[type="text"]:focus, #loginForm input[type="password"]:focus {
  border-color: #aaa;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>

<body>
    <div class="container">
        <h1>GROUP SEVEN</h1>
    <form id="loginForm">
        <label>Username:</label>
        <input type="text" id="username" name="username" ><br><br>
        <label>Password:</label>
        <input type="password" id="password" name="password" ><br><br>
        <button type="submit" id="loginButton">Login</button>
        <div id="error"></div>
    </form>
    </div>
</body>
</html>
