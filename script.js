function modelCalc(){
    var hypertension;
    var heartd;
    var age=document.getElementById('age').value;
    var sugar=document.getElementById('sugar').value;
    
    heartd = document.querySelector('input[name="heart"]:checked').value;
    hypertension = document.querySelector('input[name="hypertension"]:checked').value;
    
    var result = parseFloat(age)*0.00289+parseFloat(sugar)*0.0002+parseFloat(heartd)*0.02034+parseFloat(hypertension)*0.02323;
    alert(result);
}