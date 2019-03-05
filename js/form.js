//FORM VALIDATION
validateForm();


//validate form input
function validateForm() {
  let nameInput = document.querySelector('.name-input');
  let emailInput = document.querySelector('.email-input');
  let subjectInput = document.querySelector('.subject-input');
  let message = document.querySelector('.message')
  let allInputs = document.querySelectorAll('.input');
  let nameRegEx = new RegExp('^[a-zA-Z ]*$');
  let emailRegEx = new RegExp('^[a-zA-Z0-9\@\.\_\-]*$')
  let i;
  let allInputsLength = allInputs.length;

  nameInput.addEventListener('focusout', function() {
    if (!nameRegEx.test(this.value) && this.value != '') {
      this.style.backgroundColor = 'hsl(0, 100%, 90%)';
    } else {
      this.style.backgroundColor = 'hsl(0, 0%, 100%)';
    }
  });

  emailInput.addEventListener('focusout', function() {
    if (!emailRegEx.test(this.value) && this.value != '') {
      this.style.backgroundColor = 'hsl(0, 100%, 90%)';
    } else {
      this.style.backgroundColor = 'hsl(0, 0%, 100%)';
    }
  });

  subjectInput.addEventListener('focusout', function() {
    if (this.value == '') {
      this.style.backgroundColor = 'hsl(0, 100%, 90%)';
    } else {
      this.style.backgroundColor = 'hsl(0, 0%, 100%)';
    }
  });

  message.addEventListener('focusout', function() {
    if (this.value == '') {
      this.style.backgroundColor = 'hsl(0, 100%, 90%)';
    } else {
      this.style.backgroundColor = 'hsl(0, 0%, 100%)';
    }
  });
}


//check values on submit
function submitForm() {
  let inputs = document.querySelectorAll('.input');
  let submitButton = document.querySelector('.submit');
  let inputsLength = inputs.length;
  let i;

  for (i = 0; i < inputsLength; i++) {
    if (inputs[i].value == '') {
      inputs[i].style.backgroundColor = 'hsl(0, 100%, 90%)';
      return false;
    }
  }
}






























//
