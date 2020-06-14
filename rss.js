/* code by David M. Turner */

site = 'http://www.mychurchevents.com/Calendar/RSS.ashx?days=7&ci=L6F0H2M7G1H2O9L6I3';

var yql = 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent('select * from xml where url="' + site + '"') + '&format=xml&callback=?';
	
// Request that YSQL string, and run a callback function.
// Pass a defined function to prevent cache-busting.
$.getJSON(yql, function(data){
   // console.log(data.results[0]);
   	//console.log(stringdata);

	
	var stringdata = JSON.stringify(data.results[0]);
	var length = stringdata.length;
	
	var title = "";
	var link = "";
	var date = "";
	var char1;
	var char2;
	var eventString = "<table>";

	
	//parse the stringdata (rss feed) for events, sandwhiched
	//inbetween <item>...</item>'s
	for (var i = 0; i < length; i++){
			char2 = char1;
			char1 = stringdata[i];

			if (char2 == "<" && char1 == "i"){ //found an <item>
				i+=20; // advances to the title
				//scan the title
				title = "";
				char1 = stringdata[i];
				while (char1 !="<"){
					title = title + char1;
					char2 = char1;
					i++;
					char1 = stringdata[i];
					if (char1 == "&"){
					i+=5;
					}
				}
				
				while (char1 != "-"){ // advances to the date
					i++;
					char1 = stringdata[i];
				}
				i+=1;
				char1 = stringdata[i];
				//scan the date
				while (char1 !="<" && char1 !="&"){
				//	char2 = char1;
					date = date + char1;
					i++;
					char1 = stringdata[i];
				//	if (char1 == "&"){
				//		i+=5;
				//	}
				}
				
				var comb ="";
				comb+=char2;
				comb+=char1;
				while (comb != "<l"){  //advance to the link;
					comb = "";
					i++;
					char2 = char1;
					char1 = stringdata[i];
					comb+= char2;
					comb+= char1;
				}
				i+= 4; 
				//scan the link
				while (char1 != "<"){  
					i++;
					char1 = stringdata[i];
					link+=char1;
				}
				
					//set up the table for event entries
				
				eventString +="<tr style='border-bottom:1px solid #ddd;'><td style = ' padding: 8px;'><div class='blog-widget-post-title'><a href = '" + link + "'target = 'blank'>" + title 
					+ "</a><br></div><div class = 'blog-widget-post-date'>" + date + "</div></td></tr>";
				title="";
				date="";
				link = "";
	}
	   }
	   	document.getElementById("rss").innerHTML += eventString + "</table>";
});
	   
