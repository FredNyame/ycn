//variables
var form = document.getElementById('formsubmit');

//function to create XHR
function sendForm(e){
  e.preventDefault();

  //store values
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var message = document.getElementById('message').value;
  var submit = document.getElementById('submit').value;
  var sendValue = 'name='+name+'&email='+email+'&message='+message+'&submit='+submit;

  //create a XHR object
  var xhr = new XMLHttpRequest();

  //establish a connection
  xhr.open('POST', 'processForm.php', true);

  //set content type
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  //onload function
  xhr.onload = function() {
    if(this.status == 200){
      var ourData = JSON.parse(this.responseText);
      renderMsg(ourData);
    }
  }

  //sends request
  xhr.send(sendValue);
}

function renderMsg(data){
   var errorName = '';
   var errorEmail = '';
   var errorMsg = '';
   var msgSuccess = '';

  for (var i = 0; i < data.length; i++) {
    var errorName += data[i].name;
    var errorEmail += data[i].email;
    var errorMsg += data[i].message;
    var msgSuccess += data[i].success;
  }
    document.getElementById('nameerr').innerHTML =  errorName;
    document.getElementById('emailerr').innerHTML = errorEmail;
    document.getElementById('messageerr').innerHTML = errorMsg;
    document.getElementById('success').innerHTML = msgSuccess;
}

//add event listener
form.addEventListener('submit',sendForm)
