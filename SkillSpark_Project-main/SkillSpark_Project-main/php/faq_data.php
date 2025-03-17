
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .faq-item {
            margin-bottom: 20px;
        }

        .faq-question {
            font-weight: bold;
            cursor: pointer;
        }

        .faq-answer {
            display: none;
            margin-top: 10px;
        }

        .faq-question::after {
            content: "+";
            float: right;
        }

        .faq-item.open .faq-question::after {
            content: "-";
        }

        .faq-item.open .faq-answer {
            display: block;
        }

    </style>




</head>
<body >
    <main>
        <header style="background-color: black;" >

            <h1 style="color:#fff;">Frequently Asked Questions</h1>
             <!-- Back to Home Link -->
        </header>
        
             
    </main>
    <div class="container">
        <div class="faq-item">
            <div class="faq-question">What subjects can my child learn on your website?</div>
            <div class="faq-answer">
                Your child can learn a wide range of subjects, including math, science, language arts, history, and more. We offer a variety of interactive lessons and activities tailored to their age group and grade level.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">How can I sign up for an account?</div>
            <div class="faq-answer">
                Signing up is easy! Just click on the "Sign Up" button on our homepage and follow the simple registration steps. You'll need to provide some basic information and create a username and password for your child's account.
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">Is your website safe for kids to use?</div>
            <div class="faq-answer">
                Yes, safety is our top priority. We have strict content moderation and parental control features in place to ensure a safe online learning environment. You can also monitor your child's progress and activity on the platform.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Are there interactive quizzes and games available?</div>
            <div class="faq-answer">
                Absolutely! We offer a variety of fun and engaging quizzes, games, and puzzles that reinforce learning concepts. These activities are designed to make learning enjoyable for kids.
        </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Can I track my child's progress?</div>
            <div class="faq-answer">
                Yes, you can track your child's progress through our parent dashboard. You'll be able to see their completed lessons, quiz scores, and areas where they may need extra help.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Is there a mobile app available?</div>
            <div class="faq-answer">
                No, we have  dont have a mobile app for both iOS and Android devices now. You can download it from the App Store or Google Play Store and access our educational content on the go in future.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question"> Do you offer a free trial?</div>
            <div class="faq-answer">
                Signing up is easy! Just click on the "Sign Up" button on our homepage and follow the simple registration steps. You'll need to provide some basic information and create a username and password for your child's account.
            </div>
        </div>

        

        <div class="faq-item">
            <div class="faq-question">How can I contact customer support?</div>
            <div class="faq-answer">
                Signing up is easy! Just click on the "Sign Up" button on our homepage and follow the simple registration steps. You'll need to provide some basic information and create a username and password for your child's account.
            </div>
        </div>
    </div>
    </div>
    <div class="back-to-home" style="display: flex; justify-content: center; align-items: center;">
        <a href="home.php" style="margin-right: 50px;">Back to Home</a>
        <a href="../Contact_Us.html">Submit a question</a>
    </div>



    


    <script>
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            question.addEventListener('click', () => {
                item.classList.toggle('open');
            });
        });
    </script>
</body>
</html>
