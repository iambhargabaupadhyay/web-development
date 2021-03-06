function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = "<h1>Result</h1>";
    gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// create questions
var questions = [
    new Question(" Which of the following is a server-side Java Script object?", ["Function", "File", "FileUpload"," Date"], " File"),
    new Question(" To insert a JavaScript into an HTML page, which tag is used?", ["< script=’java’>", "< javascript>","< script>", "< js>"], "<script>"),
    new Question("Which of the following is the correct syntax to display “GeeksforGeeks” in an alert box using JavaScript?", [ " alertbox(“GeeksforGeeks”);", "msg(“GeeksforGeeks”);", " msgbox(“GeeksforGeeks”);", "alert(“GeeksforGeeks”);"], "alert(“GeeksforGeeks”);"),    
    new Question("Which CSS property is used to control the text size of an element ?", ["font-style", "text-size","font-size", "text-style"], "font-size"),
    new Question("The default value of position attribute is _____", ["fixed", "absolute", "inherit", "relative"], "relative"),    
    new Question("If we want to show an Arrow as cursor, then which value we will use ?", ["pointer", "default", "arrow", "arr"], "default"),
    new Question("Which is the correct CSS syntax?", ["body:color=black", "{body;color:black}", "{body:color=black(body}", "body {color: black}"], "body {color: black}"),
    new Question(" In css what does h1 can be called as", ["Selector", "Attribute", " Value", "Tag"], "Selector"),
    new Question("vWhich of the following function defines a linear gradient as a CSS image?", ["grayscale()", "gradient()", " image()", "linear-gradient()"], "linear-gradient()"),
    new Question("In css what does font-size can be called as", ["Selector", "Rule", "Property", "Property-Name"], "Property-Namer")
    
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();





