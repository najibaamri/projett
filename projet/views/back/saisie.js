var myInput = document.getElementById("nom");
var myDiv = document.getElementById("div");
var percent = document.getElementById("pourcentage");
var myDiv2 = document.getElementById("div2");

myInput.onkeypress = function (myInput)
{
	 var charCode = (myInput.which) ? myInput.which : myInput.keyCode
         if (!((charCode > 31 && (charCode < 48 || charCode > 57))))
           {           	myDiv.innerHTML = "veuillez entrer des lettres seulement"; 
           	return false;
           	/*myDiv.style.visibility = 'visible';*/
           }
else 
{
		         myDiv.style.visibility = 'hidden';
         return true;
              }

}


document.getElementById('myForm').onsubmit = function() {
    var valInDecimals = document.getElementById('percent').value / 100;
}
/*myButtton.onhover = function ()
{
	var num = /^[0-9]+$/;

	if (myInput.value.match(num)) 
		{
			myDiv.innerHTML="Veuillez entrer des lettres seulement";

		}
	else
	{
		myDiv.fadeOut();
	}
	*/
}
 customElements.whenDefined('vaadin-date-picker').then(function() {
    var start = document.querySelector('#start');
    var end = document.querySelector('#end');

    start.addEventListener('change', function() {
      end.min = start.value;

      // Open the second date picker when the user has selected a value
      if (start.value) {
        end.open();
      }
    });

    end.addEventListener('change', function() {
      start.max = end.value;
    });
  });