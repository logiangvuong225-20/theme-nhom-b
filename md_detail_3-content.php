<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="md_detail_3">
    <div class="detail-tabs">
        <a href="#" class="active">DESCRIPTION</a>
        <a href="#">REVIEWS (0)</a>
    </div>

    <hr>
    <h4>reviews</h4>
    <p class="detail-no-review">There are no review yet.</p>
    <h3 class="reply-title">BE THE FIRST TO REVIEW “BOATS”</h3>
    <div class="comment-rating">
        <label for="rating">Your 
            rating:</label>
        <p class="rating-stars">
            <span class="stars">
                <a class="star1" href="#"><i class="fas fa-star"></i></a>
                <a class="star2" href="#"><i class="fas fa-star"></i></a>
                <a class="star3" href="#"><i class="fas fa-star"></i></a>
                <a class="star4" href="#"><i class="fas fa-star"></i></a>
                <a class="star5" href="#"><i class="fas fa-star"></i></a>
            </span>
        </p>
        <span class="rating-select">
            <div class="rating-select-box" id="ratingButton">
                <span id="selectValue" class="select-title">Rate</span>
                <span class="select-arrow"><i class="fas fa-chevron-down"></i></span>
            </div>
                <ul id="ratingList">
                    <li>
                        <a href="#">rate</a>
                    </li>
                    <li>
                        <a href="#">perfect</a>
                    </li>
                    <li>
                        <a href="#">good</a>
                    </li>
                    <li>
                        <a href="#">average</a>
                    </li>
                    <li>
                        <a href="#">not that bad</a>
                    </li>
                    <li>
                        <a href="#">very poor</a>
                    </li>
                </ul>
            </span>
    </div>
    <div class="review-form">
        <label for="your-review">Your 
                review:</label>
        <textarea name="your-review" id="yourReview" cols="45" rows="3"></textarea>
    </div>
    <div class="review-form">
        <label for="yourname">Name*</label>
        <input type="text" name="yourname" id="name">
    </div>
    <div class="review-form">
        <label for="youremail">Email*</label>
        <input type="text" name="youremail" id="email">
    </div>
    <div class="review-form">
        <input type="checkbox" name="remember" id="remberMe">
        <label class="remember-label" for="remember">SAVE MY
            NAME,
            EMAIL,
            AND
            WEBSITE
            IN THIS
            BROWSER
            FOR THE
            NEXT 
            TIME I
            COMMENT.</label>
    </div>
    <div class="form-submit">
        <button class="btn-default ml-auto" type="submit" >
            Post review
        </button>
    </div>
    <script>
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
    </script>
</section>