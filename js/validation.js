window.onload = function(){
//Form contact validation
const SUBMIT = document.getElementById("submitContact");
const EMAIL_VALUE = document.getElementById('contactEmail').value;
let forms = document.getElementsByClassName('contact_field');
SUBMIT.onclick = function(){
      for(let i = 0; i < forms.length; i++){
        let input = forms.item(i).getElementsByClassName('form-control');
        let alert = forms.item(i).getElementsByClassName('invalid-feedback');
        if(!input[0].value){
         alert[0].style.display = "unset";
         input[0].classList.add('danger-alert');
        }else{
          alert[0].style.display = "none";
          input[0].classList.remove('danger-alert');
        }
      }
      //Check email
      let regExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      let test = regExp.test(String(EMAIL_VALUE).toLowerCase());
      console.log(test);
}

}