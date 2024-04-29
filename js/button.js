var count = 0;
document.getElementById("myButton").onclick = function () {
    count++;
	if (count % 2 == 0) { //проверка на четность
		document.getElementById("demo").innerHTML = "" 
        
	} else {
		var img = document.createElement("img");
        img.src = "https://i.pinimg.com/originals/a9/bc/08/a9bc0805113ec1e08f668004a055512b.jpg"
        img.classList.add("demoIMG");
        document.getElementById("demo").appendChild(img) //добавление дочернего элемента
	}
}

