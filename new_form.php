<!DOCTYPE html>

<html>
    <head>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title> New Form </title>
    </head>
    <body>
<script>
function addQuestion(){
        newForm = document.getElementById("questions");
        newQuestion = document.createElement("input");
        newQuestion.type = "text";
        newQuestion.name = "new_question[]";
        newQuestion.align = "center";
        newQuestion.className = "username";
        newForm.appendChild(newQuestion);
}
</script>
<div class="head" align="center">New Form</div>
<div class="main">
        <form id="new_form" class="form1" action="save_new_form.php" method="post">
                <div id="questions">
                    <input class="username" align="center" type="text" name = "new_question[]">
                </div>
                <input type="submit" value="Submit" class="signup" align="center">
<br>
                <button type="button" onclick="addQuestion()" class="signup" align="center"> + </button>
        </form>
</div>
    </body>
</html>
