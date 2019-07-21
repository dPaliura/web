var Object1 = {
	"valid":
	{"Олия": true, "Вода": true, "Пиво": true, "Сок": true, "Чай": true,
 	"Сироп": true, "Бензин": true, "Чернило": true, "Рассольчик": true, 
 	"Молоко": true, "Уксус": true, "Кофе": true},

	"invalid":
	{"Апельсин": false, "Дерево": false, "Мотор": false, "Логарифм": false, 
	"Соль": false, "Пальма": false,
 	"Шишки": false, "Коллоквиум": false, "Океан": false, "Пунктир": false, 
 	"Примат": false, "Бонсай": false, 
 	"Север": false, "Баллиста": false},

 	"question": "Проверка на бота: выбери все, что можно налить в чашку"
},
Object2 = {
	"valid":
	{"Mazda": true, "Opel": true, "Honda": true, "Hundai": true, "Mercedes-Benz": true, "Renault": true, "Jeep": true, "Ford": true,
	"BMW": true, "Bentley": true, "Lamborghini": true, "Ferrari": true, "Porsche": true, "Volkswagen": true, "Rolls-Royce": true, "Peugeot": true,
	"Scania": true, "Maserati": true
	},

	"invalid":
	{"Panasonic": false, "Фрекен Бок": false, "Провансаль": false, "Google inc.": false, "Хлібний дар": false, "Coca-Cola": false, "Snickers": false,
	"Meizu": false, "Xiaomi": false, "Bic": false, "Caterpillar": false, "JCB": false, "Github": false, "Bizzard": false, "Lewi's": false, "Lacoste": false,
	"Greenday": false, "Naruto": false, "Parliament": false, "Davidoff": false, "Жигулевское": false, "Море пива": false, "Nurofen": false, "Contex": false,
	"KPI": false, "Eminem": false, "Bonduelle": false},
	
	"question": "Проверка на бота: выбери из всех пунктов только марки машин"
},
Object3 = {
	valid:
	{"Израиль": true, "Россия": true, "США": true, "Франция": true, "Боливия": true, "Бразилия": true, "Аргентина": true, "Марокко": true, "Канада": true,
	"Чад": true, "Греция": true, "Польша": true, "Великобритания": true, "Дания": true, "Швеция": true, "Норвегия": true, "Индия": true, "Китай": true,
	"Япония": true, "Кения": true, "Корея": true, "Пакистан": true, "Украина": true, "Словакия": true, "Чехия": true
	},

	invalid:
	{"Катовицу": false, "Краснодар": false, "Египет": false, "Житомир": false, "Рим": false, "Берн": false, "Калифорния": false, "Техас": false,
	"Бордо": false, "Ливерпуль": false, "Дублин": false, "Папии": false, "Саскачеван": false, "Киото": false, "Пхеньян": false, "Шицзячжуань": false,
	"Хух-Хото": false, "Лондон": false, "Цэцэрлэг": false, "Ташкент": false, "Тбилиси": false, "Анкара": false, "Стамбул": false, "Афины": false,
	"Загреб": false, "Прага": false, "Лейпциг": false, "Женева": false, "Лиссабон": false, "Мадрид": false, "Гибралтар": false, "Сан-Педро-Сула": false,
	"Гвадалахара": false, "Осло": false
	},

	question: "Проверка на бота: выбери все пункты где указаны страны, а не города"
};

var ARRAY_OF_CAPTCHA_PROTOTYPES = [Object1, Object2, Object3];

//Возвращает случайное целое число из диапазона от min до max
function RandomInt(min, max){
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
//Данная функция возвращает "встряхнутый массив" array
function arrayShake(array){
	array.sort(function(a, b){return Math.random()-Math.random()});
	//Math.random()-Math.random() по какой-то причине дает
	//более приемлемый результат, нежели Math.random()-0.5
	return array;
}

function ArrayChooseRands(arr, amount){
	var len = arr.length, innerArray, result = [];
	if (!len) return result;
	else if (len == 1) return arr;
	innerArray = arr.slice();
	amount = amount>0 && amount<=len ? amount : RandomInt(1, len);
	for (var i = 1; i <= amount; i++) {
		result.push(innerArray.splice(RandomInt(0, --len), 1));
	}
	return result;
}

function GenCaptchaHTML(CaptchaObject, size, valid_amount){
	var valid = Object.keys(CaptchaObject["valid"]);
	var invalid = Object.keys(CaptchaObject["invalid"]);
	valid_amount = Math.min(valid_amount, valid.length);
	size = Math.min(size, valid.length + invalid.length);
	//
	var texts = arrayShake(ArrayChooseRands(valid, valid_amount)
	.concat(ArrayChooseRands(invalid, size - valid_amount)));
	//Генерируем код HTML-разметки нашей капчи
	//(обрамляем нужными тегами все что нужно)
	var CaptchaHTMLcode = '<input type="hidden" id="validation" \
	name="captcha" value="not started">' + "<p>" +
	CaptchaObject.question + "</p>" + '<div>';

	for (var i=0; i<size; i++){
		CaptchaHTMLcode +="<label><input type='checkbox' value = 'false' \
		onclick='changeCheckBox(" + i +")' id='CaptchaFieldIdentifier" + 
		i + "' name = 'N" + texts[i] +"'>"+ texts[i] + '</label>' + "<br>\n";
	}
	CaptchaHTMLcode += '</div>';
	return {code: CaptchaHTMLcode, "size": size};
}

function checkCaptcha(CaptchaObject, Size){
	var all = {}, elem;
	Object.assign(all, CaptchaObject.valid, CaptchaObject.invalid);
	
	for (var i=0; i < Size; i++){
		elem = document.getElementById("CaptchaFieldIdentifier" + i);
		if (elem.value != String(all[elem.name.slice(1)])) {
			return false;
		}
	}
	return true;
}

function changeCheckBox(position){
	var box = document.getElementById('CaptchaFieldIdentifier' + position);
	if (box.value == "true") box.value = 'false';
	else box.value = 'true';
}


var CurrentCaptchaObject = ARRAY_OF_CAPTCHA_PROTOTYPES[RandomInt(0, ARRAY_OF_CAPTCHA_PROTOTYPES.length-1)];
var capt = GenCaptchaHTML(CurrentCaptchaObject, RandomInt(7, 9), RandomInt(3, 5));
d3.select('#captcha').html(capt.code);


function validate_log(){
	if (checkCaptcha(CurrentCaptchaObject, capt.size)){
		document.forms[0].elements['captcha'].value = 'OK';
	}
	else{
		document.forms[0].elements['captcha'].value = 'uncorrect';
	}
}
