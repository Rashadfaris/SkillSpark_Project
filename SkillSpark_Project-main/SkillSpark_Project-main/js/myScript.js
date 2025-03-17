

// Validate password
function checkPassword() {
    var Password = document.getElementById("pwd").value;
    var cPassword = document.getElementById("repwd").value;

    if (Password != cPassword) {
        alert("Password Mismatch..");
    } else {
        alert("Success");
    }
}

// Validate Privacy policy checkbox
function enableButton() {
    if (document.getElementById("checkBox").checked) {
        document.getElementById("submitBtn").disabled = false;
    } else {
        document.getElementById("submitBtn").disabled = true;
    }
}

// Get all the "Play Now" buttons
const playNowButtons = document.querySelectorAll(".play-now-button");

// Function to handle the play button click
function playGame() {
    alert("Get ready to play the game!");
    // You can add more game-related functionality here
}

// Attach a click event listener to each "Play Now" button
playNowButtons.forEach((button) => {
    button.addEventListener("click", playGame);
});

// Define a function to start a game
function startGame() {
    // Add code to initialize and start the game
    // This can include setting up game elements, timers, etc.
    alert('Let the game begin!');
}


var heartIconClicked = false; // Variable to keep track of the heart icon's state

function Toggle1() {
    var heartIcon = document.querySelector("#btnh1 i"); // Select the heart icon inside the button

    if (heartIconClicked) {
        heartIcon.style.color = "grey"; // Change heart icon color to grey
    } else {
        heartIcon.style.color = "red"; // Change heart icon color to red
    }

    heartIconClicked = !heartIconClicked; // Toggle the state
}


















