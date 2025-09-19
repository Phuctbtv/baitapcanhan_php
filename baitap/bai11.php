<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Bài 11 - Form Login & Signup</title>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <link rel="stylesheet" href="assets/style2.css">
</head>
<body>

  
  <div class="fb-login">
    <i class="fab fa-facebook-f"></i> Login with Facebook
  </div>

 
  <div class="form-container">

    
    <div class="form-box">
      <h3>Login</h3>
      <form>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password">
        </div>
        <div class="form-group">
          <input type="checkbox" id="remember"> <label for="remember">Remember Me</label>
        </div>
        <button class="btn">Log In</button>
      </form>
    </div>

    <!-- Signup -->
    <div class="form-box">
      <h3>Signup for New Account?</h3>
      <form>
        <div class="form-group">
          <label>User Name</label>
          <input type="text" name="new_username">
        </div>
        <div class="form-group">
          <label>User Email *</label>
          <input type="email" name="email">
        </div>
        <div class="form-group">
          <label>Select Title</label>
          <select name="title">
            <option>Mr.</option>
            <option>Ms.</option>
            <option>Mrs.</option>
          </select>
        </div>
        <div class="form-group">
          <label>Full name</label>
          <input type="text" name="fullname">
        </div>

        <h4>Company detail</h4>
        <div class="form-group">
          <label>Company name</label>
          <input type="text" name="company">
        </div>
        <div class="form-group">
          <input type="checkbox" id="agree"> 
          <label for="agree">I am agree with registration</label>
        </div>
        <button class="btn btn-primary">Register</button>
      </form>
    </div>

  </div>

</body>
</html>
