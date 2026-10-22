const sentence = document.getElementById("sentence").textContent;
const input = document.getElementById("input");
const accuracyDisplay = document.getElementById("accuracy");

input.addEventListener("keyup", function() {
    let typedText = input.value;
    let correct = 0;

    for (let i = 0; i < typedText.length; i++) {
        if (typedText[i] === sentence[i]) {
            correct++;
        }
    }

    let accuracy = 0;

    if (typedText.length > 0) {
        accuracy = Math.round((correct / typedText.length) * 100);
    }

    accuracyDisplay.textContent = accuracy;
});