<?php

include 'connect.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $option=$_POST['role'];
    $recomm=$_POST['ques'];
    $fav=$_POST['feature'];
    $improve=$_POST['improvement'];
    $comm=$_POST['comment'];
    $checkbox=implode(',',$improve);

    $sql="insert into survey (name, email, age, role, recommend, fav, improvement, comments) values ('$name','$email','$age','$option','$recomm','$fav','$checkbox','$comm')";

    $result=mysqli_query($conn,$sql);

    if($result)
    {
        header('location:display.php');
    }
    else
    {
        die(mysqli_error($conn));
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Survey Form</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1 class="text-center">Survey Form</h1>
            <p class="description text-center">Thank you for taking the time to help us improve the platform</p>
        </header>
        <main>
            <form id="survey-form" method="post">
                <div class="form-group">
                    <label for="name" id="name-label">Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="email" id="email-label">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="age" id="number-label">Age <span class="clue">(optional)</span></label>
                    <input type="number" id="age" class="form-control" placeholder="Age" name="age" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Which option best describes your current role?</label>
                    <select name="role" id="dropdown" class="form-control" required>
                        <option disabled selected>Select current role</option>
                        <option value="Student">Student</option>
                        <option value="Full-Time-Job">Full Time Job</option>
                        <option value="Full-Time-Learner">Full Time Learner</option>
                        <option value="Prefer-Not-To-Say">Prefer not to say</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <p class="refer">Would you recommend our platform to a friend?</p>
                        <label>
                            <input type="radio" name="ques" value="Definitely" class="input-radio" required> Definitely
                        </label>
                        <label>
                            <input type="radio" name="ques" value="Maybe" class="input-radio"> Maybe
                        </label>
                        <label>
                            <input type="radio" name="ques" value="Not-Sure" class="input-radio"> Not Sure
                        </label>
                </div>
                <div class="form-group">
                    <p class="refer">What is your favorite feature of our platform?</p>
                        <select name="feature" class="form-control" required>
                            <option disabled selected>Select an option</option>
                            <option value="Challenges">Challenges</option>
                            <option value="Projects">Projects</option>
                            <option value="Community">Community</option>
                            <option value="Open-Source">Open Source</option>
                        </select>
                </div>
                <div class="form-group">
                    <p class="refer">What would you like to see improved? <span class="clue">(Check all that apply)</span></p>
                    <label>
                        <input type="checkbox" name="improvement[]" value="Front-End-Projects" class="input-checkbox"> Front-end Projects
                    </label>
                    <label>
                        <input type="checkbox" value="Back-End-Projects" name="improvement[]" class="input-checkbox"> Back-end Projects
                    </label>
                    <label>
                        <input type="checkbox" name="improvement[]" value="Data-Visualization" class="input-checkbox"> Data Visualization
                    </label>
                    <label>
                        <input type="checkbox" name="improvement[]" value="Challenges" class="input-checkbox"> Challenges
                    </label>
                    <label>
                        <input type="checkbox" name="improvement[]" value="Open-Source-Community" class="input-checkbox"> Open Source Community
                    </label>
                    <label>
                        <input type="checkbox" name="improvement[]" value="Wiki" class="input-checkbox"> Wiki
                    </label>
                    <label>
                        <input type="checkbox" name="improvement[]" value="Videos" class="input-checkbox"> Videos
                    </label>
                    <label>
                        <input type="checkbox" name="improvement[]" value="City Meetups" class="input-checkbox"> City Meetups
                    </label>
                    <label>
                        <input type="checkbox" name="improvement[]" value="Forum" class="input-checkbox"> Forum
                    </label>
                    <label>
                        <input type="checkbox" name="improvement[]" value="Additional-Courses" class="input-checkbox"> Additional Courses
                    </label>
                </div>
                <div class="form-group">
                    <p class="refer">Any comments or suggestions?</p>
                    <textarea class="input-textarea form-control"  autocomplete="off" name="comment" placeholder="Enter your comment here...." required></textarea>
                </div>
                <div class="form-group">
                    <input id="submit" type="submit" name="submit" value="Submit" class="submit-button">
                </div>
            </form>
        </main>
        <footer></footer>
    </div>
</body>

</html>