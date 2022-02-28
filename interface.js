console.log("Привет мир!")
let name = 'Adam';
name = 10
console.log(name);
let secondName = 'Eva';
let age = 28;
let isMarried = true;
let undef = undefined;
let userColor = null;
let people = {
    name: 'Adam',
    age: 28,
}
//console.log(people);
people.age = 45;
console.log(people.age);
people['name'] = 'Nikolay';
console.log(people['name']);
let selectedColors = ['red', 'blue'];
selectedColors[2] = 'green';
console.log(selectedColors);
console.log(selectedColors.length);
function sayHi(name, lastname){
    console.log('Привет '+ name+ ' ' + lastname);
}
sayHi('Адам')
sayHi('Николай')
function square(number){
    return number*number;
}
let number1 = square(4);
let number2 = square(8);
console.log(number1, number2);
//alert($(".block"));
let delay = 500;
$(document).ready(function(){
    $("h2").bind("click", function(event){
        let parent = $(event.target).parent();
        let paragraph = parent.find("p");
        if($(paragraph).is(":visible")){
            $(paragraph).slideUp(delay);
        }
        else{
            $(paragraph).slideDown(delay);
        }
    });
}); 
$(document).ready(function(){
    $("#check_login").bind("click", function(event){
        $.ajax({
            url: "server.php",
            type: "POST",
            data: ("login="+$("#login").val()),
            dataType: "text",
            success: function(result){
                alert(result);
                if (result=="1"){
                    $("#login").after("<span>Логин свободен!</span>");
                }
                else{
                    $("#login").after("<span>Логин занят!</span>");
                }
            }
        });
    });
});