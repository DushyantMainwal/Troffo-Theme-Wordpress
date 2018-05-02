<?php
get_header();
?>

    <div class="main-div">
        <div id="first_div" class="first-div">
            <h2 id="heading_first">First</h2>
        </div>
        <div id="second_div" class="second-div">
            <h2>Second</h2>
        </div>
    </div>

    <div class="buttons-div">
        <input id="edit_text" type="text" name="Enter text.." title="EditText">
        <button id="button_first" onclick="firstButton()">First</button>
        <button id="button_second" onclick="secondButton()">Second</button>
    </div>

<?php
get_footer();