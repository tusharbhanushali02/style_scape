<?php

    session_start();

    if(!(isset($_SESSION['user_email']))){
        header("Location: register.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="./css/root.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/quiz.css">
</head>
<body>

    <nav>
        <div class="bar">
            <div class="logo" id="logo"><img src="./Assets/stylescape_logo.png"></div>
            <a href="logout.php" class="primary-btn">Logout</a>
        </div>
    </nav>

    <section id="intro">
        <h1>Quiz</h1>
        <p>Welcome to our personalized styling service! This quiz is designed to help our stylist team curate outfits tailored to your preferences. There are no right or wrong answers—just choose what resonates with you. We'll ask about your style, colors you love, what you feel comfortable in, and any specific occasions or activities you're dressing for. The more we know about you, the better we can personalize your selections. Enjoy the process, and know that our team is here to assist you every step of the way. Let's get started on creating your ideal wardrobe!</p>
        <div class="take"><a href="#" class="primary-btn" id="take-quiz">Take Quiz</a></div>
    </section>

    <section id="quiz">
        <form action="submitquiz.php" method="post">

            <div class="q q1">
                <h2>Question 1</h2>
                <h4>What is your Age ?</h4>
                <input type="number" name="age" placeholder="Enter your Age ?" id="age">
                <div class="next"><a href="#" class="primary-btn" id="q1btn">Next</a></div>
            </div>

            <div class="q q2">
                <h2>Question 2</h2>
                <h4>What is your Gender ?</h4>
                <div class="options">
                    <div class="opt">
                        <input type="radio" name="gender" id="q2o1" value="male">
                        <label for="q2o1"><img src="./Assets/man.jpg"></label>
                        <span>Male</span>
                    </div>
                    <div class="opt">
                        <input type="radio" name="gender" id="q2o2" value="female">
                        <label for="q2o2"><img src="./Assets/woman.jpg"></label>
                        <span>Female</span>
                    </div>
                </div>
                <div class="prev"><a href="#" class="primary-btn" id="q2btn">Previous</a></div>
            </div>

            <div class="q q3">
                <h2>Question 3</h2>
                <h4>How do you dress for work ?</h4>
                <div class="options">
                    <div class="opt">
                        <input type="radio" name="q3" id="q3o1" value="Business Casual">
                        <label for="q3o1"><img src="./Assets/q3o1.jpg"></label>
                        <span>Business Casual</span>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q3" id="q3o2" value="Business and Casual">
                        <label for="q3o2"><img src="./Assets/q3o2.jpg"></label>
                        <span>Business and Casual</span>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q3" id="q3o3" value="Casual">
                        <label for="q3o3"><img src="./Assets/q3o3.jpg"></label>
                        <span>Casual</span>
                    </div>
                </div>
                <div class="prev"><a href="#" class="primary-btn" id="q3btn">Previous</a></div>
            </div>

            <div class="q q4">
                <h2>Question 4</h2>
                <h4>How about on the weekend ?</h4>
                <div class="options">
                    <div class="opt">
                        <input type="radio" name="q4" id="q4o1" value="Classic Casual">
                        <label for="q4o1"><img src="./Assets/q4o1.jpg"></label>
                        <span>Classic Casual</span>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q4" id="q4o2" value="Stylish Casual">
                        <label for="q4o2"><img src="./Assets/q4o2.jpg"></label>
                        <span>Stylish Casual</span>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q4" id="q4o3" value="Athelitic Comfort">
                        <label for="q4o3"><img src="./Assets/q4o3.jpg"></label>
                        <span>Athelitic Comfort</span>
                    </div>
                </div>
                <div class="prev"><a href="#" class="primary-btn" id="q4btn">Previous</a></div>
            </div>

            <div class="q q5">
                <h2>Question 5</h2>
                <h4>Would you like to receive more work or weekend attire ?</h4>
                <div class="options">
                    <div class="opt">
                        <input type="radio" name="q5" id="q5o1" value="A mix of both work and weekend attire">
                        <label for="q5o1"><img src="./Assets/q5o1.png"></label>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q5" id="q5o2" value="Mostly Weekend Attire">
                        <label for="q5o2"><img src="./Assets/q5o2.png"></label>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q5" id="q5o3" value="Mostly Work Attire">
                        <label for="q5o3"><img src="./Assets/q5o3.png"></label>
                    </div>
                </div>
                <div class="prev"><a href="#" class="primary-btn" id="q5btn">Previous</a></div>
            </div>

            <div class="q q6">
                <h2>Question 6</h2>
                <h4>What size of tops do you wear ?</h4>
                <div class="options">
                    <div class="opt">
                        <input type="radio" name="q6" id="q6o1" value="SMALL">
                        <label for="q6o1"><img src="./Assets/q6o1.png"></label>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q6" id="q6o2" value="MEDIUM">
                        <label for="q6o2"><img src="./Assets/q6o2.png"></label>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q6" id="q6o3" value="LARGE">
                        <label for="q6o3"><img src="./Assets/q6o3.png"></label>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q6" id="q6o4" value="XL">
                        <label for="q6o4"><img src="./Assets/q6o4.png"></label>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q6" id="q6o5" value="XXL">
                        <label for="q6o5"><img src="./Assets/q6o5.png"></label>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q6" id="q6o6" value="3XL">
                        <label for="q6o6"><img src="./Assets/q6o6.png"></label>
                    </div>
                </div>
                <div class="prev"><a href="#" class="primary-btn" id="q6btn">Previous</a></div>
            </div>

            <div class="q q7">
                <h2>Question 7</h2>
                <h4>How do you like your shirts to fit ?</h4>
                <div class="options">
                    <div class="opt">
                        <input type="radio" name="q7" id="q7o1" value="MODERN FIT">
                        <label for="q7o1"><img src="./Assets/q7o1.jpg"></label>
                        <span style="width: 40%;">MODERN FIT (NARROWER CUT AND A TIGHTER FIT ACROSS THE CHEST, ARMS AND WAIST.)</span>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q7" id="q7o2" value="CLASSIC FIT">
                        <label for="q7o2"><img src="./Assets/q7o2.jpg"></label>
                        <span style="width: 40%;">CLASSIC FIT (STRAIGHT CUT WITH A LOOSER FIT ACROSS THE CHEST, ARMS, AND WAIST.)</span>
                    </div>
                </div>
                <div class="prev"><a href="#" class="primary-btn" id="q7btn">Previous</a></div>
            </div>

            <div class="q q8">
                <h2>Question 8</h2>
                <h4>What is your pants size ?</h4>
                <div class="qopt">
                    <div class="options">
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o1" value="28">
                            <label for="q8o1"><img src="./Assets/q8o1.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o2" value="29">
                            <label for="q8o2"><img src="./Assets/q8o2.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o3" value="30">
                            <label for="q8o3"><img src="./Assets/q8o3.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o4" value="31">
                            <label for="q8o4"><img src="./Assets/q8o4.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o5" value="32">
                            <label for="q8o5"><img src="./Assets/q8o5.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o6" value="33">
                            <label for="q8o6"><img src="./Assets/q8o6.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o7" value="34">
                            <label for="q8o7"><img src="./Assets/q8o7.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o8" value="36">
                            <label for="q8o8"><img src="./Assets/q8o8.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o9" value="38">
                            <label for="q8o9"><img src="./Assets/q8o9.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o10" value="40">
                            <label for="q8o10"><img src="./Assets/q8o10.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o11" value="42">
                            <label for="q8o11"><img src="./Assets/q8o11.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q8" id="q8o12" value="44">
                            <label for="q8o12"><img src="./Assets/q8o12.png"></label>
                        </div>
                    </div>
                </div>
                <div class="prev"><a href="#" class="primary-btn" id="q8btn">Previous</a></div>
            </div>            

            <div class="q q9">
                <h2>Question 9</h2>
                <h4>How do you like your pants to fit ?</h4>
                <div class="options">
                    <div class="opt">
                        <input type="radio" name="q9" id="q9o1" value="SLIM FIT">
                        <label for="q9o1"><img src="./Assets/q9o1.jpg"></label>
                        <span style="width: 40%;">SLIM FIT</span>
                    </div>
                    <div class="opt">
                        <input type="radio" name="q9" id="q9o2" value="STRAIGHT FIT">
                        <label for="q9o2"><img src="./Assets/q9o2.jpg"></label>
                        <span style="width: 40%;">STRAIGHT FIT</span>
                    </div>
                </div>
                <div class="prev"><a href="#" class="primary-btn" id="q9btn">Previous</a></div>
            </div>

            <div class="q q10">
                <h2>Question 10</h2>
                <h4>What is your pants size ?</h4>
                <div class="qopt">
                    <div class="options">
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o1" value="28">
                            <label for="q10o1"><img src="./Assets/q10o1.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o2" value="29">
                            <label for="q10o2"><img src="./Assets/q10o2.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o3" value="30">
                            <label for="q10o3"><img src="./Assets/q10o3.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o4" value="31">
                            <label for="q10o4"><img src="./Assets/q10o4.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o5" value="32">
                            <label for="q10o5"><img src="./Assets/q10o5.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o6" value="33">
                            <label for="q10o6"><img src="./Assets/q10o6.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o7" value="34">
                            <label for="q10o7"><img src="./Assets/q10o7.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o10" value="36">
                            <label for="q10o10"><img src="./Assets/q10o8.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o9" value="310">
                            <label for="q10o9"><img src="./Assets/q10o9.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o10" value="40">
                            <label for="q10o10"><img src="./Assets/q10o10.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o11" value="42">
                            <label for="q10o11"><img src="./Assets/q10o11.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o12" value="44">
                            <label for="q10o12"><img src="./Assets/q10o12.png"></label>
                        </div>
                        <div class="opt">
                            <input type="radio" name="q10" id="q10o13" value="No Shoes">
                            <label for="q10o13"><img src="./Assets/q10o13.png"></label>
                        </div>
                    </div>
                </div>
                <div class="next submit">
                    <a href="#" class="primary-btn" id="prevbtn">Previous</a>
                    <input type="submit" value="Submit" name="submit" class="primary-btn">
                </div>
            </div>

        </form>
    </section>

    <script src="./Scripts/quiz.js"></script>
    <script src="./Scripts/main.js"></script>

</body>
</html>