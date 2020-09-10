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
    new Question(" HTML is what type of language ?", ["Scripting Language", "Markup Language","Programming Language", "Network Protocol"], "Markup Language"),
    new Question("What is the full form of HTML?", ["HyperText Markup Language", "Hyper Teach Markup Language", "Hyper Tech Markup Language", "None of these"], "HyperText Markup Language"),    
    new Question("What tag is used to display a picture in a HTML page?", ["picture", "image","img", "src"], "img"),
    new Question("Which HTML tag produces the biggest heading?", ["h6", "h4", "h2", "h1"], "h1"),    
    new Question("HTML tags are surrounded by which type of brackets.", ["Curly", "Round", "Squart", "Angle"], "Angle"),
    new Question("HTML web pages can be read and rendered by _______", ["Compiler", "Server", "Web Browser", "Interpreter"], "Web Browser"),
    new Question("What should be the first tag in any HTML document?", ["head", "title", "html", "document"], "html"),
    new Question("Fundamental HTML Block is known as _______?", ["HTML Body", "HTML Tag", "HTML Attribute", "HTML Element"], "HTML Tag"),
    new Question("What is the correct HTML tag for inserting a line break?", ["br", "break", "lb", "b"], "br"),
    new Question("A radio button used on a web page, would allow a person to select:", ["More than one item", "Only one item", "Two items", "None of these"], "Only one item")
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();





