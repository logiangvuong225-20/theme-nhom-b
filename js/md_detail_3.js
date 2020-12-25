window.onload = function(){
    //Display rating list
    const RATING_LIST = document.getElementById('ratingList');
    const RATING_DATA = document.getElementsByTagName('li');
    const SELECT_VALUE = document.getElementById('selectValue');
    const RATING_BUTTON = document.getElementById('ratingButton');
    window.addEventListener('click', function(e){
        if (!RATING_LIST.contains(e.target)){
            RATING_LIST.classList.remove('displayVisible');
        }
        if(RATING_BUTTON.contains(e.target)){
            RATING_LIST.classList.add('displayVisible');
        }
        if(RATING_LIST.contains(e.target)){
            RATING_LIST.classList.remove('displayVisible');
            SELECT_VALUE.innerText = e.target.text;
        }
    })
}