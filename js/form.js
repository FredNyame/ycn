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
   for(var i = 0; i < data.length; i++){
     //var errorName = data[i].names;
     var errorEmail = data[i].emails;
     //var errorMsg = data[i].messages;
   }

   return document.getElementById('nameerr').innerHTML = errorName;
   return document.getElementById('emailerr').innerHTML = errorEmail;
   return document.getElementById('messageerr').innerHTML = errorMsg;
}

//add event listener
form.addEventListener('submit',sendForm)
