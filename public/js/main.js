(function() {
"use strict";

var searchRequest;
var searchField = document.querySelector("#str");
var results = document.querySelector("#txtHint");
var humburg = document.querySelector("#hamburg");
var mainNav = document.querySelector("#mainNav");
var test = document.querySelector("#test");

function showResults(e) {
	results.innerHTML = "";
	var str = e.currentTarget.value;

		if(str.length < 2){
				results.innerHTML = '';
				return;
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						if(xmlhttp.responseText == '<p>no results</p>') {
							results.innerHTML = '<p class="searchName">No results</p>';
							return;
						}else {
							results.innerHTML = "";
							var jsondoc = JSON.parse(xmlhttp.responseText);
							console.log(jsondoc);
							jsondoc.forEach(function(cat){
								console.log(cat);
								results.innerHTML += "<div class='srchLi'><img class='searchImg' src='images/"+cat.img+"'><a class='searchName' href='activities/"+cat.id+"'>"+cat.name+"</a></div>";
							});
						}
					}
				}
				xmlhttp.open("GET", "home/livesearch?str="+str, true);
				xmlhttp.send();
			}
}

function toggleMenu() {
	console.log("show");
	mainNav.classList.toggle("show");
}

function testFun () {
	document.querySelector(".test2").classList.toggle('test3');
}

if(test) {
test.addEventListener("click", testFun, false);
}

if(searchField){
searchField.addEventListener("keyup", showResults, false);
}

hamburg.addEventListener("click", toggleMenu, false);		
})();