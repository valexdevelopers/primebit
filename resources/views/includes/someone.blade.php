<script type="text/javascript">
    var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'Turkey', 'Australia', 'Brazil', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'China', 'Mexico', 'Venezuela', 'USA', 'Sweden', 'Italy', 'South Africa', 'Italy', 'USA', 'United Kingdom', 'Italy', 'Greece', 'Cuba', 'USA', 'Portugal', 'Austria', 'Spain', 'Panama', 'South Africa', 'China', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
    var listPlans = ['$51,000', '$14,500', '$40,000', '$41,000', '$10,000', '$50,000', '$52,300', '$9,700', '$10,000', '$4,500', '$9,500', '$34,000', '$42,000', '$4,600', '$3,700', '$27,500','$58,623','$31,600'];
    var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];
    var names = ["Toby","Adham","Zakariyah","Zack","Yuri","Fergus","Arthur","Alistair","Sheldon","Nolan","Elijah","Caden","Gianluca","Antonio","Niall","Orlando","Hayes","Tymoteusz","Joaquin","Antonyo","Zaine","Diego","Colton","Joshua","Tyler","Kris","Aman","Brendan","Aryan","Harris","Tariq","Isa","Sebastian","Abraham","Joel","Joey-Jack","Jacob","Kaine","Gus","Husnain","Jacob-Jay","Ray","Darach","Ieuan","Kaine","Ayaan","Brian","Declan","Ruaridh","Rafael","Marshall","Christopher","Abdul-Aziz","Malachy","Kurt","Edwin","Dylan-James","Jacques","Kyran","T-jay","Nathaniel","Mustafa","Bjorn","Aayan","Troy","Ashton","Dara","Finbar","Kyron","Eryk","Carlo","Alasdair","Ruairidh","Jasper","Harold","Tyrese","Malachai","Amir","Charlie","Hugh","Blaise","Stuart","Terrence","Elyan","Euan","Cameron","Rory","Giorgio","Amos","Vijay","Conor","Arda","Karim","Ciaran","Ismail","Eren","Odhran","Mustafa","Alexei","Francesco","Orlando","Dara","Parker","Reuben","Ricky","Ryder","Ibrahim","Eamon","Kenzie","Zach","Chris","Liam","Archie","James-Paul","Misha","Shane","Cameron","Daniele","Lee","Filip","Freddie","Euan","Keir","Andrei","Herman","Nelson","Nathan","Kailin","Johnnie","Lucien","Ezekiel","Ruaridh","Jonas","Shawn","Barney","Yuvraj","Noel","Jamie","Barney","Aedan","Seth","Rhys","Olly","Shay","Sam","Antoni","Teddy","Eisa","Oli","Filip","Jamie","Tate","Marc","Lincoln","Eren","Ryley","Alfred","Arun","Braiden","Jeevan","Maximilian","Luca","Arjun","Ronnie","Bentley","Ted","Daanyaal","Tom","Aron","Vlad","Eduards","Kasper","Leroy","Nathaniel","Sami","Piers","Billy","Bilal","Kenan","Eliot","Aidan","Jak","Roman","Riley","Noel","Jenson","Rene","Luca","Jeremy","Alex","Cole","Zachariah","Kylan","Khalil","Yahya","Shay","Aston","Rafael","Sergei","Karam","Carlo","Brody","Frank","Caelan","Chase","Eshan","Maxwell","Viktor","Dominik","Oscar","Harri","Tomos","Hadi","Jensen","Nathan","Andrej","Chad","Tyrone","Cillian","Declan","Isa","Harold","Timothy","Anish","Aleksander","Bilal","Caelan","Damian","Theo","Caleb","Ayrton","Gabriel","Eamon","Jake","Caelan","Teddy","Chad","Dominik","Logan","Ronnie","Hadi","Kurtis","Jak","Bastian","Aled","Harvey","Amit","Johan","Bjorn","Cade","Sam","Karim","Cory","Reece","Archie","Peter","Andrej","Albie","Matteo","Patrick","Sammy","Oisin","Jenson","Christian","Nikodem","Dominik","Bastian","Marco","Luis","Fergus","Devon","Umar","Nathaniel","Trey","Zayan","Jake","Johnathan","Dean","Simeon","Finlay","Damian","Joshua","Jakub","Alex","Ali","Frankie","Bradley","Jake","Frankie","Caelan","Conor","Frank","Chris","Carl","Malakai","Harry","Lewis","Kash","Dominik","Mateusz","Devin","Nolan","Carlo","Kai","Yasir","Ibrahim","Nelson","Abbas","Ewan","Ciaran","Gurdeep","Robert","Viktor","Paddy","Abdul-Aziz","Aidan","Finlay","Eoin","Denny","Tobias","Tyler","Rahul","Conor","Yusuf","Anas","Braiden","Myles","Alistair","Xander","Rahul","Yasin"]

    
    /*var listCountries = ['UK', 'UK', 'Germany', 'France', 'Italy', 'UK', 'South Africa', 'UK', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'UK', 'UK', 'UK', 'UK', 'Sweden', 'South Africa', 'UK', 'Italy', 'UK', 'United Kingdom', 'UK', 'Greece', 'Cuba', 'UK', 'Portugal', 'Austria', 'South Africa', 'Panama', 'UK', 'UK', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
    var listPlans = ['£51,000', '£14,500', '£40,000', '£41,000', '£10,000', '£50,000', '£52,300', '£9,700', '£10,000', '£4,500', '£9,500', '£34,000', '£42,000', '£4,600', '£3,700', '£27,500','£58,623','£31,600'];
    var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];*/
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var run = setInterval(request, interval);
    
        function request() {
            clearInterval(run);
            interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
            var personName = names[Math.floor(Math.random() * names.length)];
            var country = listCountries[Math.floor(Math.random() * listCountries.length)];
            var transtype = transarray[Math.floor(Math.random() * transarray.length)];
            var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
            var msg = personName +' from <b>' + country + '</b> ' + transtype + ' <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + '</a>';
            $(".mgm .txt").html(msg);
            $(".mgm").stop(true).fadeIn(300);
            window.setTimeout(function() {
                $(".mgm").stop(true).fadeOut(300);
            }, 10000);
            run = setInterval(request, interval);
        }
</script>