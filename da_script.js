

function updateClock ( )
{
  var currentTime = new Date ( );

  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  // Choose either "AM" or "PM" as appropriate
  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

  // Convert the hours component to 12-hour format if needed
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  // Convert an hours component of "0" to "12"
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;

  // Compose the string for display
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

  // Update the time display
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}

function yes(){
document.getElementById("secret").value="true";
document.more.submit();

}

var pics = new Array();
pics[1] = "life/goodlookin.jpg";
pics[2] = "life/ny7.jpg";
pics[3] = "life/ny6.jpg";
pics[4] = "life/ny5.jpg";
pics[5] = "life/ny4.jpg";
pics[6] = "life/ny3.jpg";
pics[7] = "life/ny2.jpg";
pics[8] = "life/ny.jpg";
pics[9] = "life/homecomming3.jpg";
pics[10] = "life/homecomming2.jpg";
pics[11] = "life/homecomming1.jpg";
pics[12] = "life/lol2.jpg";
pics[13] = "life/lol.jpg";
pics[14] = "life/camping15.jpg";
pics[15] = "life/camping14.jpg";
pics[16] = "life/camping13.jpg";
pics[17] = "life/camping12.jpg";
pics[18] = "life/camping11.jpg";
pics[19] = "life/camping10.jpg";
pics[20] = "life/camping9.jpg";
pics[21] = "life/camping8.jpg";
pics[22] = "life/camping7.jpg";
pics[23] = "life/camping6.jpg";
pics[24] = "life/camping5.jpg";
pics[25] = "life/camping4.jpg";
pics[26] = "life/camping3.jpg";
pics[27] = "life/camping2.jpg";
pics[28] = "life/camping1.jpg";
pics[29] = "life/mall7.jpg";
pics[30] = "life/mall6.jpg";
pics[31] = "life/mall5.jpg";
pics[32] = "life/mall4.jpg";
pics[33] = "life/mall3.jpg";
pics[34] = "life/mall2.jpg";
pics[35] = "life/mall.jpg";
pics[36] = "life/dance10.jpg";
pics[37] = "life/dance9.jpg";
pics[38] = "life/dance8.jpg";
pics[39] = "life/dance7.jpg";
pics[40] = "life/dance6.jpg";
pics[41] = "life/dance5.jpg";
pics[42] = "life/dinner1.jpg";
pics[43] = "life/dinner2.jpg";
pics[44] = "life/dinner3.jpg";
pics[45] = "life/carlsbad1.jpg";
pics[46] = "life/carlsbad2.jpg";
pics[47] = "life/carlsbad3.jpg";
pics[48] = "life/carlsbad4.jpg";
pics[49] = "life/mountain1.jpg";
pics[50] = "life/mountain2.jpg";
pics[51] = "life/mountain3.jpg";
pics[52] = "life/4th1.jpg";
pics[53] = "life/4th2.jpg";
pics[54] = "life/4th3.jpg";
pics[55] = "life/4th4.jpg";
pics[56] = "life/siblings.jpg";
pics[57] = "life/temple.jpg";
pics[58] = "life/cuzzins.jpg";
pics[59] = "life/fishing1.jpg";
pics[60] = "life/fishing2.jpg";
pics[61] = "life/project1.jpg";
pics[62] = "life/project2.jpg";
pics[63] = "life/project3.jpg";
pics[64] = "life/church1.jpg";
pics[65] = "life/church2.jpg";
pics[66] = "life/church3.jpg";
pics[67] = "life/efy1.jpg";
pics[68] = "life/gameboy.jpg";
pics[69] = "life/truck.jpg";
pics[70] = "life/party.jpg";
pics[71] = "life/pumpkin.jpg";
pics[72] = "life/compsci1.jpg";
pics[73] = "life/compsci2.jpg";
pics[74] = "life/compsci3.jpg";
pics[75] = "life/corpus.jpg";
pics[76] = "life/corpus2.jpg";
pics[77] = "life/corpus3.jpg";
pics[78] = "life/corpus4.jpg";
pics[79] = "life/football1.jpg";
pics[80] = "life/football2.jpg";
pics[81] = "life/football3.jpg";
pics[82] = "life/football4.jpg";
pics[83] = "life/band1.jpg";
pics[84] = "life/band2.jpg";
pics[85] = "life/band3.jpg";
pics[86] = "life/band4.jpg";
pics[87] = "life/band5.jpg";
pics[88] = "life/band6.jpg";
pics[89] = "life/band7.jpg";
pics[90] = "life/band8.jpg";
pics[91] = "life/band9.jpg";
pics[92] = "life/band10.jpg";
pics[93] = "life/band11.jpg";
pics[94] = "life/band12.jpg";
pics[95] = "life/band13.jpg";
pics[96] = "life/band14.jpg";
pics[97] = "life/band15.jpg";
pics[98] = "life/band16.jpg";
pics[99] = "life/band17.jpg";
pics[100] = "life/fam1.jpg";
pics[101] = "life/fam2.jpg";
pics[102] = "life/fam3.jpg";
pics[103] = "life/fam4.jpg";
pics[104] = "life/fam5.jpg";
pics[105] = "life/fam6.jpg";
pics[106] = "life/fam7.jpg";
pics[107] = "life/fam8.jpg";
pics[108] = "life/prom.jpg";
pics[109] = "life/prom2.jpg";
pics[110] = "life/seminary.jpg";
pics[111] = "life/cake1.jpg";
pics[112] = "life/cake2.jpg";
pics[113] = "life/cake3.jpg";
pics[114] = "life/cake4.jpg";
pics[115] = "life/grad1.jpg";
pics[116] = "life/grad2.jpg";
pics[117] = "life/grad3.jpg";
pics[118] = "life/grad4.jpg";
pics[119] = "life/grad5.jpg";
pics[120] = "life/grad6.jpg";
pics[121] = "life/grad7.jpg";
pics[122] = "life/grad8.jpg";
pics[123] = "life/summer.jpg";
pics[124] = "life/summer2.jpg";
pics[125] = "life/wedding.jpg";
pics[126] = "life/dorm1.jpg";
pics[127] = "life/dorm2.jpg";
pics[128] = "life/dorm3.jpg";
pics[129] = "life/dorm4.jpg";
pics[130] = "life/shooting4.jpg";
pics[131] = "life/tx.jpg";
pics[132] = "life/college1.jpg";
pics[133] = "life/college2.jpg";
pics[134] = "life/college3.jpg";
pics[135] = "life/innout.jpg";
pics[136] = "life/microwave.jpg";
pics[137] = "life/shower.jpg";
pics[138] = "life/shooting1.jpg";
pics[139] = "life/shooting2.jpg";
pics[140] = "life/shooting3.jpg";
pics[141] = "life/work.jpg";
pics[142] = "life/dance.jpg";
pics[143] = "life/dance2.jpg";
pics[144] = "life/dance3.jpg";
pics[145] = "life/dance4.jpg";
pics[146] = "life/college4.jpg";
pics[147] = "life/college5.jpg";

function next(){
	var num = parseInt(document.getElementById("val").value)+1;

	if(num<148){
	document.getElementById("pic").src="../"+pics[num];
	document.getElementById("val").value=num;
	}
	else{
	num = 1;
	document.getElementById("val").value=num;
	document.getElementById("pic").src="../"+pics[num];
	}

}

function prev(){
	var num = parseInt(document.getElementById("val").value)-1;

	if(num>0){
	document.getElementById("pic").src="../"+pics[num];
	document.getElementById("val").value=num;
	}
	else{
	num = 147;
	document.getElementById("val").value=num;
	document.getElementById("pic").src="../"+pics[num];
	}

}
	
function go(){
	var num = parseInt(document.getElementById("val").value);
	document.getElementById("pic").src="../"+pics[num];
}
