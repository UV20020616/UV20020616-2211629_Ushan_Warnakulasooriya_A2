// Array to Store Login Credentials
let Login_Credentials_ = getCredentials();

// Create a Fuction for the login Process
function LogIn() {

  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (!username || !password) {
    alert("Please enter your username and password.");
    return;
  }

  for (count = 0; count < Login_Credentials_.length; count++) {

    if (username == Login_Credentials_[count].username && password == Login_Credentials_[count].password) {

      localStorage.setItem('name_with_initials', Login_Credentials_[count].name_with_initials);
      localStorage.setItem('email', Login_Credentials_[count].email);
      localStorage.setItem('city', Login_Credentials_[count].city);
      localStorage.setItem('academic_year', Login_Credentials_[count].academic_year);
      localStorage.setItem('fullname', Login_Credentials_[count].fullname);
      localStorage.setItem('profile_picture', Login_Credentials_[count].profile_picture);

      window.location.href = "profile.html";
      return;
    }
  }
  alert("Incorrect login credentials. Please try again.");
}


// Create a Fuction to display the Name with initials 
function displayNameWithInitials() {
  let name_with_initials = localStorage.getItem('name_with_initials');
  if (name_with_initials) {
    let elements = document.getElementsByClassName('name_with_initials');
    for (let i = 0; i < elements.length; i++) {
      elements[i].textContent = name_with_initials;
    }
  }
}

// Create a Fuction to display the Email
function displayEmail() {
  let email = localStorage.getItem('email');
  if (email) {
    document.getElementById('email').textContent = email;
  }
}

// Create a Fuction to display the City
function displayCity() {
  let city = localStorage.getItem('city');
  if (city) {
    document.getElementById('city').textContent = city;
  }
}

// Create a Fuction to display the Academic Year
function displayAcademic_year() {
  let academic_year = localStorage.getItem('academic_year');
  if (academic_year) {
    document.getElementById('academic_year').textContent = academic_year;
  }
}

// Create a Fuction to display the Full Name
function displayFullName() {
  let fullname = localStorage.getItem('fullname');
  if (fullname) {
    document.getElementById('fullname').textContent = fullname;
  }
}

// Create a Fuction to display the Profile Picture
function displayProfilePic() {
  let profile_picture = localStorage.getItem('profile_picture');
  if (profile_picture) {
    // Create a new <img> element
    let imgElement = document.createElement('img');
    // Set the src attribute to the file path stored in localStorage
    imgElement.src = profile_picture;
    // Append the <img> element to the first HTML element with the ID "profile_picture"
    document.getElementById('profile_picture').appendChild(imgElement);
    // Create a clone of the <img> element and append it to the HTML element with the ID "mini_image_preview"
    document.getElementById('mini_image_preview').appendChild(imgElement.cloneNode(true));
  }
}



// Create a Fuction to Log into Form.Html
function CreateAcLogin() {
  window.location.href = "form.html";
}

// Create a Fuction to LogOut from Form.Html
function LogoutFromForm() {
  window.location.href = "index.html";
}


/**
 This is a JavaScript code for handling form submission and saving user credentials to local 
 storage. The process involves getting form input values, checking if the username already 
 exists in the stored credentials, creating a new object with form values, adding it to the 
 stored credentials, and saving the updated credentials to local storage. If the username
  already exists, an error message is displayed, and if the credentials are successfully 
  updated, the user is redirected to the index.html page.
 */

// Helper function to save Login_Credentials_ array to localStorage
function saveCredentials() {
  localStorage.setItem('Login_Credentials_', JSON.stringify(Login_Credentials_));
}

// Helper function to get Login_Credentials_ array from localStorage
function getCredentials() {
  const storedCredentials = localStorage.getItem('Login_Credentials_');
  if (storedCredentials) {
    return JSON.parse(storedCredentials);
  } else {
    return [];
  }
}




// Handle form submission
function handleSubmit(event) {
  event.preventDefault(); // prevent form from submitting

  // Get values from form input fields
  const username = document.getElementById('username-input').value;
  const email = document.getElementById('email-input').value;
  const password = document.getElementById('password-input').value;
  const name_with_initials = document.getElementById('name-input').value;
  const city = document.getElementById('city-input').value;
  const academic_year = document.getElementById('academic-year-input').value;
  const fullname = document.getElementById('full-name-input').value;

  // Read the file from the image input and convert to data URL
  const imgInput = document.getElementById('img-input');
  const file = imgInput.files[0];
  const reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onload = function () {
    const profile_picture = reader.result;

    // Check if username already exists in Login_Credentials_ array
    const existingCredential = Login_Credentials_.find(credential => credential.username === username);
    if (existingCredential) {
      // If username already exists, display error message and return
      alert('Username already taken!');
      return;
    }

    // Create new object with form values
    const newCredentials = {
      username,
      email,
      password,
      name_with_initials,
      profile_picture,
      city,
      academic_year,
      fullname
    };

    // Add new object to Login_Credentials_ array
    Login_Credentials_.push(newCredentials);

    // Save updated Login_Credentials_ array to localStorage
    saveCredentials();

    // Log updated Login_Credentials_ array to console
    console.log(Login_Credentials_);

    // Check if Logout function needs to be called
    if (!existingCredential) {
      Logout();
    }
  };
}

function Logout() {
  window.location.href = "index.html";
}