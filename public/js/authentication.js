// Hàm gửi request POST
async function postData(url, data) {
    const response = await fetch(url, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams(data).toString()
    });
    return response.json();
}

function renderLogin() {
    document.querySelector('.right').innerHTML = `
      <div class="login-box">
          <div style="display: flex; flex-direction: column; align-items: center; gap: 8px;">
              <h2 style="margin: 0; color: #000; font-family: Roboto; font-size: 35px; font-style: normal; font-weight: 700; line-height: normal; letter-spacing: -1px;">Welcome back</h2>
              <div style="display: flex; align-items: center; justify-content: center; column-gap: 6px;">
                  <p style="color: #878787; font-family: Roboto; font-size: 15px; font-style: normal; font-weight: 400; line-height: normal; margin-bottom: 0;">New to App?</p>
                  <a class="sign-up-ui" style="font-size: 15px; cursor: pointer; color: var(--primary, #3B9AB8); text-decoration-line: underline;">Sign up</a>
              </div>
          </div>

          <form id="login-form">
              <div class="input-group pb-3" style="display: flex; flex-direction: column; align-items: flex-start; gap: 4px;">
                  <p style="color: #000; font-size: 20px; font-weight: 400; margin-bottom: 0;">Email address</p>
                  <input class="email form-control" name="email" placeholder="Email address" style="width: 483px; padding-left: 14px; padding-top: 14px; padding-bottom: 16px; align-items: center; border-radius: 10px; border: 1px solid #B6B6B8;">
                  <div class="email-notification" style="visibility: hidden;">Must contain @gmail.com</div>
              </div>

              <div  style="display: flex; flex-direction: column; align-items: flex-start; gap: 4px;">
                  <p class="input-group" style="color: #000; font-size: 20px; font-weight: 400; margin-bottom: 0;">Your password</p>
                  <div style="position: relative; width: 490px;">
                      <input class="form-control" id="password" name="password" type="password" placeholder="Enter password" style="display: flex; width: 483px; padding-left: 14px; padding-top: 14px; padding-bottom: 16px; align-items: center; gap: 10px; border-radius: 10px; border: 1px solid #B6B6B8;">
                      <button id="togglePassword" type="button" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); background: none; border: none; cursor: pointer;">
                          <img id="eyeIcon" src="https://cdn-icons-png.flaticon.com/512/709/709612.png" alt="Show" style="width: 20px; height: 20px;">
                      </button>
                  </div>
              </div>

              <div class="mt-5" style="display: flex; flex-direction: column; gap: 16px; align-items: center; justify-content: center;">
                  <button type="submit" class="login-button inactive" disabled>Login</button>
                  <div class="tick-box">
                      <a class="forgot-ui" style="font-size: 15px; cursor: pointer; color: var(--primary, #3B9AB8); text-decoration-line: underline;">Forgot password?</a>
                  </div>
                  <div style="display: flex; flex-direction: column; align-items: center; gap: 12px; align-self: stretch;">
                      <p>Or log in with</p>
                      <div class="last-row">
                          <a class=" p-2 border-3 rounded-circle" href="/CV-Hosting-web-main/public/index.php?page=authentication&action=start-google-login"><img style="width: 35px; height:35px; object-fit: contain;" src="images/google.png"></a>
                          <a class=" p-2 border-3 rounded-circle" href="/CV-Hosting-web-main/public/index.php?page=authentication&action=start-facebook-login"><img class ="rounded-circle" style="width: 40px; height:40px; object-fit: contain;" src="images/Facebook.png"></a>
                      </div>
                  </div>
              </div>
          </form>
      </div>
  `;

    const form = document.querySelector('#login-form');
    const emailInput = document.querySelector('.email');
    const passwordInput = document.querySelector('#password');
    const togglePassword = document.querySelector('#togglePassword');
    const eyeIcon = document.querySelector('#eyeIcon');
    const loginButton = document.querySelector('.login-button');
    const emailNotification = document.querySelector('.email-notification');

    // Toggle password visibility
    togglePassword.addEventListener('click', () => {
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        eyeIcon.src = isPassword
            ? 'https://cdn-icons-png.flaticon.com/512/709/709620.png'
            : 'https://cdn-icons-png.flaticon.com/512/709/709612.png';
    });

    // Enable/disable login button
    function checkInputs() {
        if (emailInput.value && passwordInput.value) {
            loginButton.classList.remove('inactive');
            loginButton.disabled = false;
        } else {
            loginButton.classList.add('inactive');
            loginButton.disabled = true;
        }
    }

    emailInput.addEventListener('input', () => {
        if (!emailInput.value.includes('@gmail.com')) {
            emailInput.setCustomValidity('Must contain @gmail.com');
            emailNotification.style.visibility = 'visible';
            emailNotification.style.color = 'red';
        } else {
            emailInput.setCustomValidity('');
            emailNotification.style.visibility = 'hidden';
        }
        checkInputs();
    });

    passwordInput.addEventListener('input', checkInputs);

    // Submit login form
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        if (!emailInput.checkValidity()) {
            emailNotification.textContent = emailInput.validationMessage;
            emailNotification.style.color = 'red';
            return;
        }

        const response = await postData('/cv-hosting-web/public/index.php?page=authentication&action=login', {
            email: emailInput.value,
            password: passwordInput.value
        });

        if (response.success) {
            // Chuyển hướng dựa trên role từ session
            const roleResponse = await fetch('/cv-hosting-web/public/index.php?page=get_role', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({ email: emailInput.value })
            });
            const roleData = await roleResponse.json();
            const role = roleData.role;

            if (role === 'user') {
                window.location.href = '/cv-hosting-web/public/index.php?page=home';
            } else if (role === 'admin') {
                window.location.href = '/cv-hosting-web/public/index.php?page=admin';
            } else {
                alert('Unknown role');
            }
        } else {
            emailNotification.textContent = response.message;
            emailNotification.style.color = 'red';
        }
    });

    // Chuyển sang đăng ký
    document.querySelector('.sign-up-ui').addEventListener('click', () => {
        renderSignUp();
    });

    // Forgot password (placeholder)
    document.querySelector('.forgot-ui').addEventListener('click', () => {
        document.querySelector('.right').innerHTML = '<h1>Forgot Password</h1><p>Feature not implemented yet.</p>';
    });
}

async function renderSignUp() {
    document.querySelector('.right').innerHTML = `
      <form class="login-box" id="signup-form">
          <div style="display: flex; flex-direction: column; align-items: center; gap: 8px;">
              <h2 style="margin: 0; color: #000; font-family: Roboto; font-size: 35px; font-style: normal; font-weight: 700; line-height: normal; letter-spacing: -1px;">Hey there</h2>
              <div style="display: flex; align-items: center; justify-content: center; column-gap: 6px;">
                  <p style="color: #878787; font-family: Roboto; font-size: 15px; font-style: normal; font-weight: 400; line-height: normal;">Already know App?</p>
                  <a class="log-in-ui" style="font-size: 15px; cursor: pointer; color: var(--primary, #3B9AB8); text-decoration-line: underline;">Log In</a>
              </div>
          </div>

          <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 4px;">
              <p style="color: #000; font-size: 20px; font-weight: 400;">Email address</p>
              <input required class="email" name="email" placeholder="Email address" style="width: 483px; padding-left: 14px; padding-top: 14px; padding-bottom: 16px; align-items: center; border-radius: 10px; border: 1px solid #B6B6B8;">
              <div class="email-notification" style="visibility: hidden;">Must contain @gmail.com</div>
          </div>

          <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 4px;">
              <p style="color: #000; font-size: 20px; font-weight: 400;">Your password</p>
              <div style="position: relative; width: 490px;">
                  <input required id="password1" name="password" type="password" placeholder="Enter password" style="display: flex; width: 483px; padding-left: 14px; padding-top: 14px; padding-bottom: 16px; align-items: center; gap: 10px; border-radius: 10px; border: 1px solid #B6B6B8;">
                  <button id="togglePassword1" type="button" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); background: none; border: none; cursor: pointer;">
                      <img id="eyeIcon1" src="https://cdn-icons-png.flaticon.com/512/709/709612.png" alt="Show" style="width: 20px; height: 20px;">
                  </button>
              </div>
              <ul>
                <li>Password must has lenght 10-20 characters</li>
                <li>Must contains at least 1 Number and 1 Uppercase letter</li>
            
              </ul>
          </div>

          <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 4px;">
              <p style="color: #000; font-size: 20px; font-weight: 400;">Confirm your password</p>
              <div style="position: relative; width: 490px;">
                  <input required id="password2" type="password" placeholder="Enter password" style="display: flex; width: 483px; padding-left: 14px; padding-top: 14px; padding-bottom: 16px; align-items: center; gap: 10px; border-radius: 10px; border: 1px solid #B6B6B8;">
                  <button id="togglePassword2" type="button" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); background: none; border: none; cursor: pointer;">
                      <img id="eyeIcon2" src="https://cdn-icons-png.flaticon.com/512/709/709612.png" alt="Show" style="width: 20px; height: 20px;">
                  </button>
              </div>
              <p class="display-message" style="color: red; font-size: 14px; margin: 4px 0 0;"></p>
          </div>

          <div style="display: flex; flex-direction: column; gap: 16px; align-items: center; justify-content: center;">
              <button type="submit" class="login-button">Continue</button>
              <div style="display: flex; flex-direction: column; align-items: center; gap: 12px; align-self: stretch;">
                  <p>Or log in with</p>
                  <div class="last-row">
                      <a href="/cv-hosting-web/public/index.php?page=authentication&action=start-google-login"><img style="width: 22px;" src="images/google.png"></a>
                      <a href="/cv-hosting-web/public/index.php?page=authentication&action=start-facebook-login"><img style="width: 22px;" src="images/Facebook.png"></a>
                  </div>
              </div>
          </div>
      </form>
  `;

    const form = document.querySelector('#signup-form');
    const emailInput = document.querySelector('.email');
    const passwordInput1 = document.querySelector('#password1');
    const passwordInput2 = document.querySelector('#password2');
    const togglePassword1 = document.querySelector('#togglePassword1');
    const togglePassword2 = document.querySelector('#togglePassword2');
    const eyeIcon1 = document.querySelector('#eyeIcon1');
    const eyeIcon2 = document.querySelector('#eyeIcon2');
    const displayMessage = document.querySelector('.display-message');
    const emailNotification = document.querySelector('.email-notification');

    // Toggle password visibility
    togglePassword1.addEventListener('click', () => {
        const isPassword = passwordInput1.type === 'password';
        passwordInput1.type = isPassword ? 'text' : 'password';
        eyeIcon1.src = isPassword
            ? 'https://cdn-icons-png.flaticon.com/512/709/709620.png'
            : 'https://cdn-icons-png.flaticon.com/512/709/709612.png';
    });

    togglePassword2.addEventListener('click', () => {
        const isPassword = passwordInput2.type === 'password';
        passwordInput2.type = isPassword ? 'text' : 'password';
        eyeIcon2.src = isPassword
            ? 'https://cdn-icons-png.flaticon.com/512/709/709620.png'
            : 'https://cdn-icons-png.flaticon.com/512/709/709612.png';
    });

    // Validate password
    function checkPasswordValid() {
        const password = passwordInput1.value;
        const lengthValid = password.length >= 10 && password.length <= 20;
        const hasNumber = /\d/.test(password);
        const hasUpperCase = /[A-Z]/.test(password);
        if (!lengthValid) {
            passwordInput1.setCustomValidity('Length must be 10-20 characters');
            displayMessage.textContent = 'Length must be 10-20 characters';
        } else if (!hasNumber) {
            passwordInput1.setCustomValidity('Must contain at least 1 number');
            displayMessage.textContent = 'Must contain at least 1 number';
        } else if (!hasUpperCase) {
            passwordInput1.setCustomValidity('Must contain at least 1 uppercase letter');
            displayMessage.textContent = 'Must contain at least 1 uppercase letter';
        } else {
            passwordInput1.setCustomValidity('');
            displayMessage.textContent = '';
        }
    }

    function checkPasswordMatch() {
        if (passwordInput1.value && passwordInput2.value) {
            if (passwordInput1.value === passwordInput2.value) {
                passwordInput2.setCustomValidity('');
                displayMessage.textContent = '';
            } else {
                passwordInput2.setCustomValidity('Passwords do not match');
                displayMessage.textContent = 'Passwords do not match';
            }
        } else {
            displayMessage.textContent = '';
        }
    }

    passwordInput1.addEventListener('input', checkPasswordValid);
    passwordInput2.addEventListener('input', checkPasswordMatch);

    // Validate email
    emailInput.addEventListener('input', async () => {
        if (!emailInput.value.includes('@gmail.com')) {
            emailInput.setCustomValidity('Must contain @gmail.com');
            emailNotification.textContent = 'Must contain @gmail.com';
            emailNotification.style.color = 'red';
        } else {
            emailInput.setCustomValidity('');
            emailNotification.textContent = '';
        }
        checkPasswordMatch();
    });

    // Submit signup form
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        if (!emailInput.checkValidity() || !passwordInput1.checkValidity() || !passwordInput2.checkValidity()) {
            displayMessage.textContent = 'Please fix the errors above';
            return;
        }

        renderInformationInput(emailInput.value, passwordInput1.value);
    });

    // Chuyển sang đăng nhập
    document.querySelector('.log-in-ui').addEventListener('click', () => {
        renderLogin();
    });
}

function renderInformationInput(savedEmail, savedPassword) {
    document.querySelector('.right').innerHTML = `
      <form class="login-box" id="info-form">
          <div style="display: flex; flex-direction: column; align-items: center; gap: 8px;">
              <h2 style="margin: 0; color: #000; font-family: Roboto; font-size: 35px; font-style: normal; font-weight: 700; line-height: normal; letter-spacing: -1px;">Hey there</h2>
              <div style="display: flex; align-items: center; justify-content: center; column-gap: 6px;">
                  <p style="color: #878787; font-family: Roboto; font-size: 15px; font-style: normal; font-weight: 400; line-height: normal;">Already know App?</p>
                  <a class="log-in-ui" style="font-size: 15px; cursor: pointer; color: var(--primary, #3B9AB8); text-decoration-line: underline;">Log In</a>
                  <a class="go-back" style="font-size: 15px; cursor: pointer; margin-left: 10px; color: var(--primary, #3B9AB8); text-decoration-line: underline;">Go back</a>
              </div>
          </div>

          <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 4px;">
              <p style="color: #000; font-size: 20px; font-weight: 400;">Full name</p>
              <input required class="name" name="name" placeholder="Name" style="width: 483px; padding-left: 14px; padding-top: 14px; padding-bottom: 16px; align-items: center; border-radius: 10px; border: 1px solid #B6B6B8;">
              <div class="name-notification"></div>
          </div>

          <div style="display: flex; flex-direction: column; gap: 16px; align-items: center; justify-content: center;">
              <button type="submit" class="login-button">Sign Up</button>
          </div>
      </form>
  `;

    const form = document.querySelector('#info-form');
    const nameInput = form.querySelector('.name');
    const nameNotification = form.querySelector('.name-notification');

    // Validate name
    nameInput.addEventListener('input', () => {
        if (nameInput.value.trim().length < 2) {
            nameInput.setCustomValidity('Name must be at least 2 characters');
            nameNotification.textContent = 'Name must be at least 2 characters';
            nameNotification.style.color = 'red';
        } else {
            nameInput.setCustomValidity('');
            nameNotification.textContent = '';
        }
    });

    // Submit info form
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        if (!nameInput.checkValidity()) {
            nameNotification.textContent = nameInput.validationMessage;
            nameNotification.style.color = 'red';
            return;
        }

        // Tách first_name và last_name từ full name
        const fullName = nameInput.value.trim();
        const nameParts = fullName.split(' ');
        const firstName = nameParts[0];
        const lastName = nameParts.length > 1 ? nameParts.slice(1).join(' ') : '';

        const response = await postData('/cv-hosting-web/public/index.php?page=authentication&action=register', {
            email: savedEmail,
            password: savedPassword,
            first_name: firstName,
            last_name: lastName
        });

        if (response.success) {
            alert('Sign up successful');
            renderLogin();
        } else {
            nameNotification.textContent = response.message;
            nameNotification.style.color = 'red';
        }
    });

    // Chuyển sang đăng nhập
    document.querySelector('.log-in-ui').addEventListener('click', () => {
        renderLogin();
    });

    // Quay lại bước trước
    document.querySelector('.go-back').addEventListener('click', () => {
        renderSignUp();
    });
}

renderLogin();