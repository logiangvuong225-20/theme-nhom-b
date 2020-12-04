window.onload = function(){
//Form contact validation
const SUBMIT = document.getElementById("submitContact");
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
}

}