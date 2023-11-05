<?php

namespace Database\Seeders;


use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();
        $countries = [
            [
                "name" => "Afghanistan",
                "phone_code" => "+93",
                "code" => "AF",
                "flag" => "🇦🇫"
            ],
            [
                "name" => "Aland Islands",
                "phone_code" => "+358",
                "code" => "AX",
                "flag" => "🇦🇽"
            ],
            [
                "name" => "Albania",
                "phone_code" => "+355",
                "code" => "AL",
                "flag" => "🇦🇱"
            ],
            [
                "name" => "Algeria",
                "phone_code" => "+213",
                "code" => "DZ",
                "flag" => "🇩🇿"
            ],
            [
                "name" => "AmericanSamoa",
                "phone_code" => "+1684",
                "code" => "AS",
                "flag" => "🇦🇸"
            ],
            [
                "name" => "Andorra",
                "phone_code" => "+376",
                "code" => "AD",
                "flag" => "🇦🇩"
            ],
            [
                "name" => "Angola",
                "phone_code" => "+244",
                "code" => "AO",
                "flag" => "🇦🇴"
            ],
            [
                "name" => "Anguilla",
                "phone_code" => "+1264",
                "code" => "AI",
                "flag" => "🇦🇮"
            ],
            [
                "name" => "Antarctica",
                "phone_code" => "+672",
                "code" => "AQ",
                "flag" => "🇦🇶"
            ],
            [
                "name" => "Antigua and Barbuda",
                "phone_code" => "+1268",
                "code" => "AG",
                "flag" => "🇦🇬"
            ],
            [
                "name" => "Argentina",
                "phone_code" => "+54",
                "code" => "AR",
                "flag" => "🇦🇷"
            ],
            [
                "name" => "Armenia",
                "phone_code" => "+374",
                "code" => "AM",
                "flag" => "🇦🇲"
            ],
            [
                "name" => "Aruba",
                "phone_code" => "+297",
                "code" => "AW",
                "flag" => "🇦🇼"
            ],
            [
                "name" => "Australia",
                "phone_code" => "+61",
                "code" => "AU",
                "flag" => "🇦🇺"
            ],
            [
                "name" => "Austria",
                "phone_code" => "+43",
                "code" => "AT",
                "flag" => "🇦🇹"
            ],
            [
                "name" => "Azerbaijan",
                "phone_code" => "+994",
                "code" => "AZ",
                "flag" => "🇦🇿"
            ],
            [
                "name" => "Bahamas",
                "phone_code" => "+1242",
                "code" => "BS",
                "flag" => "🇧🇸"
            ],
            [
                "name" => "Bahrain",
                "phone_code" => "+973",
                "code" => "BH",
                "flag" => "🇧🇭"
            ],
            [
                "name" => "Bangladesh",
                "phone_code" => "+880",
                "code" => "BD",
                "flag" => "🇧🇩"
            ],
            [
                "name" => "Barbados",
                "phone_code" => "+1246",
                "code" => "BB",
                "flag" => "🇧🇧"
            ],
            [
                "name" => "Belarus",
                "phone_code" => "+375",
                "code" => "BY",
                "flag" => "🇧🇾"
            ],
            [
                "name" => "Belgium",
                "phone_code" => "+32",
                "code" => "BE",
                "flag" => "🇧🇪"
            ],
            [
                "name" => "Belize",
                "phone_code" => "+501",
                "code" => "BZ",
                "flag" => "🇧🇿"
            ],
            [
                "name" => "Benin",
                "phone_code" => "+229",
                "code" => "BJ",
                "flag" => "🇧🇯"
            ],
            [
                "name" => "Bermuda",
                "phone_code" => "+1441",
                "code" => "BM",
                "flag" => "🇧🇲"
            ],
            [
                "name" => "Bhutan",
                "phone_code" => "+975",
                "code" => "BT",
                "flag" => "🇧🇹"
            ],
            [
                "name" => "Bolivia, Plurinational State of",
                "phone_code" => "+591",
                "code" => "BO",
                "flag" => "🇧🇴"
            ],
            [
                "name" => "Bosnia and Herzegovina",
                "phone_code" => "+387",
                "code" => "BA",
                "flag" => "🇧🇦"
            ],
            [
                "name" => "Botswana",
                "phone_code" => "+267",
                "code" => "BW",
                "flag" => "🇧🇼"
            ],
            [
                "name" => "Brazil",
                "phone_code" => "+55",
                "code" => "BR",
                "flag" => "🇧🇷"
            ],
            [
                "name" => "British Indian Ocean Territory",
                "phone_code" => "+246",
                "code" => "IO",
                "flag" => "🇮🇴"
            ],
            [
                "name" => "Brunei Darussalam",
                "phone_code" => "+673",
                "code" => "BN",
                "flag" => "🇧🇳"
            ],
            [
                "name" => "Bulgaria",
                "phone_code" => "+359",
                "code" => "BG",
                "flag" => "🇧🇬"
            ],
            [
                "name" => "Burkina Faso",
                "phone_code" => "+226",
                "code" => "BF",
                "flag" => "🇧🇫"
            ],
            [
                "name" => "Burundi",
                "phone_code" => "+257",
                "code" => "BI",
                "flag" => "🇧🇮"
            ],
            [
                "name" => "Cambodia",
                "phone_code" => "+855",
                "code" => "KH",
                "flag" => "🇰🇭"
            ],
            [
                "name" => "Cameroon",
                "phone_code" => "+237",
                "code" => "CM",
                "flag" => "🇨🇲"
            ],
            [
                "name" => "Canada",
                "phone_code" => "+1",
                "code" => "CA",
                "flag" => "🇨🇦"
            ],
            [
                "name" => "Cape Verde",
                "phone_code" => "+238",
                "code" => "CV",
                "flag" => "🇨🇻"
            ],
            [
                "name" => "Cayman Islands",
                "phone_code" => "+ 345",
                "code" => "KY",
                "flag" => "🇰🇾"
            ],
            [
                "name" => "Central African Republic",
                "phone_code" => "+236",
                "code" => "CF",
                "flag" => "🇨🇫"
            ],
            [
                "name" => "Chad",
                "phone_code" => "+235",
                "code" => "TD",
                "flag" => "🇹🇩"
            ],
            [
                "name" => "Chile",
                "phone_code" => "+56",
                "code" => "CL",
                "flag" => "🇨🇱"
            ],
            [
                "name" => "China",
                "phone_code" => "+86",
                "code" => "CN",
                "flag" => "🇨🇳"
            ],
            [
                "name" => "Christmas Island",
                "phone_code" => "+61",
                "code" => "CX",
                "flag" => "🇨🇽"
            ],
            [
                "name" => "Cocos (Keeling) Islands",
                "phone_code" => "+61",
                "code" => "CC",
                "flag" => "🇨🇨"
            ],
            [
                "name" => "Colombia",
                "phone_code" => "+57",
                "code" => "CO",
                "flag" => "🇨🇴"
            ],
            [
                "name" => "Comoros",
                "phone_code" => "+269",
                "code" => "KM",
                "flag" => "🇰🇲"
            ],
            [
                "name" => "Congo",
                "phone_code" => "+242",
                "code" => "CG",
                "flag" => "🇨🇬"
            ],
            [
                "name" => "Congo, The Democratic Republic of the Congo",
                "phone_code" => "+243",
                "code" => "CD",
                "flag" => "🇨🇩"
            ],
            [
                "name" => "Cook Islands",
                "phone_code" => "+682",
                "code" => "CK",
                "flag" => "🇨🇰"
            ],
            [
                "name" => "Costa Rica",
                "phone_code" => "+506",
                "code" => "CR",
                "flag" => "🇨🇷"
            ],
            [
                "name" => "Cote d'Ivoire",
                "phone_code" => "+225",
                "code" => "CI",
                "flag" => "🇨🇮"
            ],
            [
                "name" => "Croatia",
                "phone_code" => "+385",
                "code" => "HR",
                "flag" => "🇭🇷"
            ],
            [
                "name" => "Cuba",
                "phone_code" => "+53",
                "code" => "CU",
                "flag" => "🇨🇺"
            ],
            [
                "name" => "Cyprus",
                "phone_code" => "+357",
                "code" => "CY",
                "flag" => "🇨🇾"
            ],
            [
                "name" => "Czech Republic",
                "phone_code" => "+420",
                "code" => "CZ",
                "flag" => "🇨🇿"
            ],
            [
                "name" => "Denmark",
                "phone_code" => "+45",
                "code" => "DK",
                "flag" => "🇩🇰"
            ],
            [
                "name" => "Djibouti",
                "phone_code" => "+253",
                "code" => "DJ",
                "flag" => "🇩🇯"
            ],
            [
                "name" => "Dominica",
                "phone_code" => "+1767",
                "code" => "DM",
                "flag" => "🇩🇲"
            ],
            [
                "name" => "Dominican Republic",
                "phone_code" => "+1849",
                "code" => "DO",
                "flag" => "🇩🇴"
            ],
            [
                "name" => "Ecuador",
                "phone_code" => "+593",
                "code" => "EC",
                "flag" => "🇪🇨"
            ],
            [
                "name" => "Egypt",
                "phone_code" => "+20",
                "code" => "EG",
                "flag" => "🇪🇬"
            ],
            [
                "name" => "El Salvador",
                "phone_code" => "+503",
                "code" => "SV",
                "flag" => "🇸🇻"
            ],
            [
                "name" => "Equatorial Guinea",
                "phone_code" => "+240",
                "code" => "GQ",
                "flag" => "🇬🇶"
            ],
            [
                "name" => "Eritrea",
                "phone_code" => "+291",
                "code" => "ER",
                "flag" => "🇪🇷"
            ],
            [
                "name" => "Estonia",
                "phone_code" => "+372",
                "code" => "EE",
                "flag" => "🇪🇪"
            ],
            [
                "name" => "Ethiopia",
                "phone_code" => "+251",
                "code" => "ET",
                "flag" => "🇪🇹"
            ],
            [
                "name" => "Falkland Islands (Malvinas)",
                "phone_code" => "+500",
                "code" => "FK",
                "flag" => "🇫🇰"
            ],
            [
                "name" => "Faroe Islands",
                "phone_code" => "+298",
                "code" => "FO",
                "flag" => "🇫🇴"
            ],
            [
                "name" => "Fiji",
                "phone_code" => "+679",
                "code" => "FJ",
                "flag" => "🇫🇯"
            ],
            [
                "name" => "Finland",
                "phone_code" => "+358",
                "code" => "FI",
                "flag" => "🇫🇮"
            ],
            [
                "name" => "France",
                "phone_code" => "+33",
                "code" => "FR",
                "flag" => "🇫🇷"
            ],
            [
                "name" => "French Guiana",
                "phone_code" => "+594",
                "code" => "GF",
                "flag" => "🇬🇫"
            ],
            [
                "name" => "French Polynesia",
                "phone_code" => "+689",
                "code" => "PF",
                "flag" => "🇵🇫"
            ],
            [
                "name" => "Gabon",
                "phone_code" => "+241",
                "code" => "GA",
                "flag" => "🇬🇦"
            ],
            [
                "name" => "Gambia",
                "phone_code" => "+220",
                "code" => "GM",
                "flag" => "🇬🇲"
            ],
            [
                "name" => "Georgia",
                "phone_code" => "+995",
                "code" => "GE",
                "flag" => "🇬🇪"
            ],
            [
                "name" => "Germany",
                "phone_code" => "+49",
                "code" => "DE",
                "flag" => "🇩🇪"
            ],
            [
                "name" => "Ghana",
                "phone_code" => "+233",
                "code" => "GH",
                "flag" => "🇬🇭"
            ],
            [
                "name" => "Gibraltar",
                "phone_code" => "+350",
                "code" => "GI",
                "flag" => "🇬🇮"
            ],
            [
                "name" => "Greece",
                "phone_code" => "+30",
                "code" => "GR",
                "flag" => "🇬🇷"
            ],
            [
                "name" => "Greenland",
                "phone_code" => "+299",
                "code" => "GL",
                "flag" => "🇬🇱"
            ],
            [
                "name" => "Grenada",
                "phone_code" => "+1473",
                "code" => "GD",
                "flag" => "🇬🇩"
            ],
            [
                "name" => "Guadeloupe",
                "phone_code" => "+590",
                "code" => "GP",
                "flag" => "🇬🇵"
            ],
            [
                "name" => "Guam",
                "phone_code" => "+1671",
                "code" => "GU",
                "flag" => "🇬🇺"
            ],
            [
                "name" => "Guatemala",
                "phone_code" => "+502",
                "code" => "GT",
                "flag" => "🇬🇹"
            ],
            [
                "name" => "Guernsey",
                "phone_code" => "+44",
                "code" => "GG",
                "flag" => "🇬🇬"
            ],
            [
                "name" => "Guinea",
                "phone_code" => "+224",
                "code" => "GN",
                "flag" => "🇬🇳"
            ],
            [
                "name" => "Guinea-Bissau",
                "phone_code" => "+245",
                "code" => "GW",
                "flag" => "🇬🇼"
            ],
            [
                "name" => "Guyana",
                "phone_code" => "+595",
                "code" => "GY",
                "flag" => "🇬🇾"
            ],
            [
                "name" => "Haiti",
                "phone_code" => "+509",
                "code" => "HT",
                "flag" => "🇭🇹"
            ],
            [
                "name" => "Holy See (Vatican City State)",
                "phone_code" => "+379",
                "code" => "VA",
                "flag" => "🇻🇦"
            ],
            [
                "name" => "Honduras",
                "phone_code" => "+504",
                "code" => "HN",
                "flag" => "🇭🇳"
            ],
            [
                "name" => "Hong Kong",
                "phone_code" => "+852",
                "code" => "HK",
                "flag" => "🇭🇰"
            ],
            [
                "name" => "Hungary",
                "phone_code" => "+36",
                "code" => "HU",
                "flag" => "🇭🇺"
            ],
            [
                "name" => "Iceland",
                "phone_code" => "+354",
                "code" => "IS",
                "flag" => "🇮🇸"
            ],
            [
                "name" => "India",
                "phone_code" => "+91",
                "code" => "IN",
                "flag" => "🇮🇳"
            ],
            [
                "name" => "Indonesia",
                "phone_code" => "+62",
                "code" => "ID",
                "flag" => "🇮🇩"
            ],
            [
                "name" => "Iran, Islamic Republic of Persian Gulf",
                "phone_code" => "+98",
                "code" => "IR",
                "flag" => "🇮🇷"
            ],
            [
                "name" => "Iraq",
                "phone_code" => "+964",
                "code" => "IQ",
                "flag" => "🇮🇶"
            ],
            [
                "name" => "Ireland",
                "phone_code" => "+353",
                "code" => "IE",
                "flag" => "🇮🇪"
            ],
            [
                "name" => "Isle of Man",
                "phone_code" => "+44",
                "code" => "IM",
                "flag" => "🇮🇲"
            ],
            [
                "name" => "Israel",
                "phone_code" => "+972",
                "code" => "IL",
                "flag" => "🇮🇱"
            ],
            [
                "name" => "Italy",
                "phone_code" => "+39",
                "code" => "IT",
                "flag" => "🇮🇹"
            ],
            [
                "name" => "Jamaica",
                "phone_code" => "+1876",
                "code" => "JM",
                "flag" => "🇯🇲"
            ],
            [
                "name" => "Japan",
                "phone_code" => "+81",
                "code" => "JP",
                "flag" => "🇯🇵"
            ],
            [
                "name" => "Jersey",
                "phone_code" => "+44",
                "code" => "JE",
                "flag" => "🇯🇪"
            ],
            [
                "name" => "Jordan",
                "phone_code" => "+962",
                "code" => "JO",
                "flag" => "🇯🇴"
            ],
            [
                "name" => "Kazakhstan",
                "phone_code" => "+77",
                "code" => "KZ",
                "flag" => "🇰🇿"
            ],
            [
                "name" => "Kenya",
                "phone_code" => "+254",
                "code" => "KE",
                "flag" => "🇰🇪"
            ],
            [
                "name" => "Kiribati",
                "phone_code" => "+686",
                "code" => "KI",
                "flag" => "🇰🇮"
            ],
            [
                "name" => "Korea, Democratic People's Republic of Korea",
                "phone_code" => "+850",
                "code" => "KP",
                "flag" => "🇰🇵"
            ],
            [
                "name" => "Korea, Republic of South Korea",
                "phone_code" => "+82",
                "code" => "KR",
                "flag" => "🇰🇷"
            ],
            [
                "name" => "Kuwait",
                "phone_code" => "+965",
                "code" => "KW",
                "flag" => "🇰🇼"
            ],
            [
                "name" => "Kyrgyzstan",
                "phone_code" => "+996",
                "code" => "KG",
                "flag" => "🇰🇬"
            ],
            [
                "name" => "Laos",
                "phone_code" => "+856",
                "code" => "LA",
                "flag" => "🇱🇦"
            ],
            [
                "name" => "Latvia",
                "phone_code" => "+371",
                "code" => "LV",
                "flag" => "🇱🇻"
            ],
            [
                "name" => "Lebanon",
                "phone_code" => "+961",
                "code" => "LB",
                "flag" => "🇱🇧"
            ],
            [
                "name" => "Lesotho",
                "phone_code" => "+266",
                "code" => "LS",
                "flag" => "🇱🇸"
            ],
            [
                "name" => "Liberia",
                "phone_code" => "+231",
                "code" => "LR",
                "flag" => "🇱🇷"
            ],
            [
                "name" => "Libyan Arab Jamahiriya",
                "phone_code" => "+218",
                "code" => "LY",
                "flag" => "🇱🇾"
            ],
            [
                "name" => "Liechtenstein",
                "phone_code" => "+423",
                "code" => "LI",
                "flag" => "🇱🇮"
            ],
            [
                "name" => "Lithuania",
                "phone_code" => "+370",
                "code" => "LT",
                "flag" => "🇱🇹"
            ],
            [
                "name" => "Luxembourg",
                "phone_code" => "+352",
                "code" => "LU",
                "flag" => "🇱🇺"
            ],
            [
                "name" => "Macao",
                "phone_code" => "+853",
                "code" => "MO",
                "flag" => "🇲🇴"
            ],
            [
                "name" => "Macedonia",
                "phone_code" => "+389",
                "code" => "MK",
                "flag" => "🇲🇰"
            ],
            [
                "name" => "Madagascar",
                "phone_code" => "+261",
                "code" => "MG",
                "flag" => "🇲🇬"
            ],
            [
                "name" => "Malawi",
                "phone_code" => "+265",
                "code" => "MW",
                "flag" => "🇲🇼"
            ],
            [
                "name" => "Malaysia",
                "phone_code" => "+60",
                "code" => "MY",
                "flag" => "🇲🇾"
            ],
            [
                "name" => "Maldives",
                "phone_code" => "+960",
                "code" => "MV",
                "flag" => "🇲🇻"
            ],
            [
                "name" => "Mali",
                "phone_code" => "+223",
                "code" => "ML",
                "flag" => "🇲🇱"
            ],
            [
                "name" => "Malta",
                "phone_code" => "+356",
                "code" => "MT",
                "flag" => "🇲🇹"
            ],
            [
                "name" => "Marshall Islands",
                "phone_code" => "+692",
                "code" => "MH",
                "flag" => "🇲🇭"
            ],
            [
                "name" => "Martinique",
                "phone_code" => "+596",
                "code" => "MQ",
                "flag" => "🇲🇶"
            ],
            [
                "name" => "Mauritania",
                "phone_code" => "+222",
                "code" => "MR",
                "flag" => "🇲🇷"
            ],
            [
                "name" => "Mauritius",
                "phone_code" => "+230",
                "code" => "🇲🇺"
            ],
            [
                "name" => "Mayotte",
                "phone_code" => "+262",
                "code" => "YT",
                "flag" => "🇾🇹"
            ],
            [
                "name" => "Mexico",
                "phone_code" => "+52",
                "code" => "MX",
                "flag" => "🇲🇽"
            ],
            [
                "name" => "Micronesia, Federated States of Micronesia",
                "phone_code" => "+691",
                "code" => "FM",
                "flag" => "🇫🇲"
            ],
            [
                "name" => "Moldova",
                "phone_code" => "+373",
                "code" => "MD",
                "flag" => "🇲🇩"
            ],
            [
                "name" => "Monaco",
                "phone_code" => "+377",
                "code" => "MC",
                "flag" => "🇲🇨"
            ],
            [
                "name" => "Mongolia",
                "phone_code" => "+976",
                "code" => "MN",
                "flag" => "🇲🇳"
            ],
            [
                "name" => "Montenegro",
                "phone_code" => "+382",
                "code" => "ME",
                "flag" => "🇲🇪"
            ],
            [
                "name" => "Montserrat",
                "phone_code" => "+1664",
                "code" => "MS",
                "flag" => "🇲🇸"
            ],
            [
                "name" => "Morocco",
                "phone_code" => "+212",
                "code" => "MA",
                "flag" => "🇲🇦"
            ],
            [
                "name" => "Mozambique",
                "phone_code" => "+258",
                "code" => "MZ",
                "flag" => "🇲🇿"
            ],
            [
                "name" => "Myanmar",
                "phone_code" => "+95",
                "code" => "MM",
                "flag" => "🇲🇲"
            ],
            [
                "name" => "Namibia",
                "phone_code" => "+264",
                "code" => "NA",
                "flag" => "🇳🇦"
            ],
            [
                "name" => "Nauru",
                "phone_code" => "+674",
                "code" => "NR",
                "flag" => "🇳🇷"
            ],
            [
                "name" => "Nepal",
                "phone_code" => "+977",
                "code" => "NP",
                "flag" => "🇳🇵"
            ],
            [
                "name" => "Netherlands",
                "phone_code" => "+31",
                "code" => "NL",
                "flag" => "🇳🇱"
            ],
            [
                "name" => "Netherlands Antilles",
                "phone_code" => "+599",
                "code" => "AN",
                "flag" => "🇳🇱"
            ],
            [
                "name" => "New Caledonia",
                "phone_code" => "+687",
                "code" => "NC",
                "flag" => "🇳🇨"
            ],
            [
                "name" => "New Zealand",
                "phone_code" => "+64",
                "code" => "NZ",
                "flag" => "🇳🇿"
            ],
            [
                "name" => "Nicaragua",
                "phone_code" => "+505",
                "code" => "NI",
                "flag" => "🇳🇮"
            ],
            [
                "name" => "Niger",
                "phone_code" => "+227",
                "code" => "NE",
                "flag" => "🇳🇪"
            ],
            [
                "name" => "Nigeria",
                "phone_code" => "+234",
                "code" => "NG",
                "flag" => "🇳🇬"
            ],
            [
                "name" => "Niue",
                "phone_code" => "+683",
                "code" => "NU",
                "flag" => "🇳🇺"
            ],
            [
                "name" => "Norfolk Island",
                "phone_code" => "+672",
                "code" => "NF",
                "flag" => "🇳🇫"
            ],
            [
                "name" => "Northern Mariana Islands",
                "phone_code" => "+1670",
                "code" => "MP",
                "flag" => "🏳"
            ],
            [
                "name" => "Norway",
                "phone_code" => "+47",
                "code" => "NO",
                "flag" => "🇳🇴"
            ],
            [
                "name" => "Oman",
                "phone_code" => "+968",
                "code" => "OM",
                "flag" => "🇴🇲"
            ],
            [
                "name" => "Pakistan",
                "phone_code" => "+92",
                "code" => "PK",
                "flag" => "🇵🇰"
            ],
            [
                "name" => "Palau",
                "phone_code" => "+680",
                "code" => "PW",
                "flag" => "🇵🇼"
            ],
            [
                "name" => "Palestinian Territory, Occupied",
                "phone_code" => "+970",
                "code" => "PS",
                "flag" => "🇵🇸"
            ],
            [
                "name" => "Panama",
                "phone_code" => "+507",
                "code" => "PA",
                "flag" => "🇵🇦"
            ],
            [
                "name" => "Papua New Guinea",
                "phone_code" => "+675",
                "code" => "PG",
                "flag" => "🇵🇬"
            ],
            [
                "name" => "Paraguay",
                "phone_code" => "+595",
                "code" => "PY",
                "flag" => "🇵🇾"
            ],
            [
                "name" => "Peru",
                "phone_code" => "+51",
                "code" => "PE",
                "flag" => "🇵🇪"
            ],
            [
                "name" => "Philippines",
                "phone_code" => "+63",
                "code" => "PH",
                "flag" => "🇵🇭"
            ],
            [
                "name" => "Pitcairn",
                "phone_code" => "+872",
                "code" => "PN",
                "flag" => "🇵🇳"
            ],
            [
                "name" => "Poland",
                "phone_code" => "+48",
                "code" => "PL",
                "flag" => "🇵🇱"
            ],
            [
                "name" => "Portugal",
                "phone_code" => "+351",
                "code" => "PT",
                "flag" => "🇵🇹"
            ],
            [
                "name" => "Puerto Rico",
                "phone_code" => "+1939",
                "code" => "PR",
                "flag" => "🇵🇷"
            ],
            [
                "name" => "Qatar",
                "phone_code" => "+974",
                "code" => "QA",
                "flag" => "🇶🇦"
            ],
            [
                "name" => "Romania",
                "phone_code" => "+40",
                "code" => "RO",
                "flag" => "🇷🇴"
            ],
            [
                "name" => "Russia",
                "phone_code" => "+7",
                "code" => "RU",
                "flag" => "🇷🇺"
            ],
            [
                "name" => "Rwanda",
                "phone_code" => "+250",
                "code" => "RW",
                "flag" => "🇷🇼"
            ],
            [
                "name" => "Reunion",
                "phone_code" => "+262",
                "code" => "RE",
                "flag" => "🇷🇪"
            ],
            [
                "name" => "Saint Barthelemy",
                "phone_code" => "+590",
                "code" => "BL",
                "flag" => "🇧🇱"
            ],
            [
                "name" => "Saint Helena, Ascension and Tristan Da Cunha",
                "phone_code" => "+290",
                "code" => "SH",
                "flag" => "🇸🇭"
            ],
            [
                "name" => "Saint Kitts and Nevis",
                "phone_code" => "+1869",
                "code" => "KN",
                "flag" => "🇰🇳"
            ],
            [
                "name" => "Saint Lucia",
                "phone_code" => "+1758",
                "code" => "LC",
                "flag" => "🇱🇨"
            ],
            [
                "name" => "Saint Martin",
                "phone_code" => "+590",
                "code" => "MF",
                "flag" => "🇲🇫"
            ],
            [
                "name" => "Saint Pierre and Miquelon",
                "phone_code" => "+508",
                "code" => "PM",
                "flag" => "🇵🇲"
            ],
            [
                "name" => "Saint Vincent and the Grenadines",
                "phone_code" => "+1784",
                "code" => "VC",
                "flag" => "🇻🇨"
            ],
            [
                "name" => "Samoa",
                "phone_code" => "+685",
                "code" => "WS",
                "flag" => "🇼🇸"
            ],
            [
                "name" => "San Marino",
                "phone_code" => "+378",
                "code" => "SM",
                "flag" => "🇸🇲"
            ],
            [
                "name" => "Sao Tome and Principe",
                "phone_code" => "+239",
                "code" => "ST",
                "flag" => "🇸🇹"
            ],
            [
                "name" => "Saudi Arabia",
                "phone_code" => "+966",
                "code" => "SA",
                "flag" => "🇸🇩"
            ],
            [
                "name" => "Senegal",
                "phone_code" => "+221",
                "code" => "SN",
                "flag" => "🇸🇳"
            ],
            [
                "name" => "Serbia",
                "phone_code" => "+381",
                "code" => "RS",
                "flag" => "🇷🇸"
            ],
            [
                "name" => "Seychelles",
                "phone_code" => "+248",
                "code" => "SC",
                "flag" => "🇸🇨"
            ],
            [
                "name" => "Sierra Leone",
                "phone_code" => "+232",
                "code" => "SL",
                "flag" => "🇸🇱"
            ],
            [
                "name" => "Singapore",
                "phone_code" => "+65",
                "code" => "SG",
                "flag" => "🇸🇬"
            ],
            [
                "name" => "Slovakia",
                "phone_code" => "+421",
                "code" => "SK",
                "flag" => "🇸🇰"
            ],
            [
                "name" => "Slovenia",
                "phone_code" => "+386",
                "code" => "SI",
                "flag" => "🇸🇮"
            ],
            [
                "name" => "Solomon Islands",
                "phone_code" => "+677",
                "code" => "SB",
                "flag" => "🇸🇧"
            ],
            [
                "name" => "Somalia",
                "phone_code" => "+252",
                "code" => "SO",
                "flag" => "🇸🇴"
            ],
            [
                "name" => "South Africa",
                "phone_code" => "+27",
                "code" => "ZA",
                "flag" => "🇿🇦"
            ],
            [
                "name" => "South Sudan",
                "phone_code" => "+211",
                "code" => "SS",
                "flag" => "🇸🇸"
            ],
            [
                "name" => "South Georgia and the South Sandwich Islands",
                "phone_code" => "+500",
                "code" => "GS",
                "flag" => "🇬🇸"
            ],
            [
                "name" => "Spain",
                "phone_code" => "+34",
                "code" => "ES",
                "flag" => "🇪🇸"
            ],
            [
                "name" => "Sri Lanka",
                "phone_code" => "+94",
                "code" => "LK",
                "flag" => "🇱🇰"
            ],
            [
                "name" => "Sudan",
                "phone_code" => "+249",
                "code" => "SD",
                "flag" => "🇸🇩"
            ],
            [
                "name" => "Suriname",
                "phone_code" => "+597",
                "code" => "SR",
                "flag" => "🇸🇷"
            ],
            [
                "name" => "Svalbard and Jan Mayen",
                "phone_code" => "+47",
                "code" => "SJ",
                "flag" => "🇸🇯"
            ],
            [
                "name" => "Swaziland",
                "phone_code" => "+268",
                "code" => "SZ",
                "flag" => "🇸🇿"
            ],
            [
                "name" => "Sweden",
                "phone_code" => "+46",
                "code" => "SE",
                "flag" => "🇸🇪"
            ],
            [
                "name" => "Switzerland",
                "phone_code" => "+41",
                "code" => "CH",
                "flag" => "🇨🇭"
            ],
            [
                "name" => "Syrian Arab Republic",
                "phone_code" => "+963",
                "code" => "SY",
                "flag" => "🇸🇾"
            ],
            [
                "name" => "Taiwan",
                "phone_code" => "+886",
                "code" => "TW",
                "flag" => "🇹🇼"
            ],
            [
                "name" => "Tajikistan",
                "phone_code" => "+992",
                "code" => "TJ",
                "flag" => "🇹🇯"
            ],
            [
                "name" => "Tanzania, United Republic of Tanzania",
                "phone_code" => "+255",
                "code" => "TZ",
                "flag" => "🇹🇿"
            ],
            [
                "name" => "Thailand",
                "phone_code" => "+66",
                "code" => "TH",
                "flag" => "🇹🇭"
            ],
            [
                "name" => "Timor-Leste",
                "phone_code" => "+670",
                "code" => "TL",
                "flag" => "🇹🇱"
            ],
            [
                "name" => "Togo",
                "phone_code" => "+228",
                "code" => "TG",
                "flag" => "🇹🇬"
            ],
            [
                "name" => "Tokelau",
                "phone_code" => "+690",
                "code" => "TK",
                "flag" => "🇹🇰"
            ],
            [
                "name" => "Tonga",
                "phone_code" => "+676",
                "code" => "TO",
                "flag" => "🇹🇴"
            ],
            [
                "name" => "Trinidad and Tobago",
                "phone_code" => "+1868",
                "code" => "TT",
                "flag" => "🇹🇹"
            ],
            [
                "name" => "Tunisia",
                "phone_code" => "+216",
                "code" => "TN",
                "flag" => "🇹🇳"
            ],
            [
                "name" => "Turkey",
                "phone_code" => "+90",
                "code" => "TR",
                "flag" => "🇹🇷"
            ],
            [
                "name" => "Turkmenistan",
                "phone_code" => "+993",
                "code" => "TM",
                "flag" => "🇹🇲"
            ],
            [
                "name" => "Turks and Caicos Islands",
                "phone_code" => "+1649",
                "code" => "TC",
                "flag" => "🇹🇨"
            ],
            [
                "name" => "Tuvalu",
                "phone_code" => "+688",
                "code" => "TV",
                "flag" => "🇹🇻"
            ],
            [
                "name" => "Uganda",
                "phone_code" => "+256",
                "code" => "UG",
                "flag" => "🇺🇬"
            ],
            [
                "name" => "Ukraine",
                "phone_code" => "+380",
                "code" => "UA",
                "flag" => "🇺🇦"
            ],
            [
                "name" => "United Arab Emirates",
                "phone_code" => "+971",
                "code" => "AE",
                "flag" => "🇦🇪"
            ],
            [
                "name" => "United Kingdom",
                "phone_code" => "+44",
                "code" => "GB",
                "flag" => "🇬🇧"
            ],
            [
                "name" => "United States",
                "phone_code" => "+1",
                "code" => "US",
                "flag" => "🇺🇸"
            ],
            [
                "name" => "Uruguay",
                "phone_code" => "+598",
                "code" => "UY",
                "flag" => "🇺🇾"
            ],
            [
                "name" => "Uzbekistan",
                "phone_code" => "+998",
                "code" => "UZ",
                "flag" => "🇺🇿"
            ],
            [
                "name" => "Vanuatu",
                "phone_code" => "+678",
                "code" => "VU",
                "flag" => "🇻🇺"
            ],
            [
                "name" => "Venezuela, Bolivarian Republic of Venezuela",
                "phone_code" => "+58",
                "code" => "VE",
                "flag" => "🇻🇪"
            ],
            [
                "name" => "Vietnam",
                "phone_code" => "+84",
                "code" => "VN",
                "flag" => "🇻🇳"
            ],
            [
                "name" => "Virgin Islands, British",
                "phone_code" => "+1284",
                "code" => "VG",
                "flag" => "🇻🇬"
            ],
            [
                "name" => "Virgin Islands, U.S.",
                "phone_code" => "+1340",
                "code" => "VI",
                "flag" => "🇻🇮"
            ],
            [
                "name" => "Wallis and Futuna",
                "phone_code" => "+681",
                "code" => "WF",
                "flag" => "🇼🇫"
            ],
            [
                "name" => "Yemen",
                "phone_code" => "+967",
                "code" => "YE",
                "flag" => "🇾🇪"
            ],
            [
                "name" => "Zambia",
                "phone_code" => "+260",
                "code" => "ZM",
                "flag" => "🇿🇲"
            ],
            [
                "name" => "Zimbabwe",
                "phone_code" => "+263",
                "code" => "ZW",
                "flag" => "🇿🇼"
            ]
        ];
        foreach ($countries as $country) {
            $country['public_id']  = uuid();
            $country['flag_icon']  = $country['flag'] ?? null;
            $country['country_key']  = $country['code'] ?? null;
            Country::create($country);
        }
        $this->addCountriesSvgFlags();
    }

    private function addCountriesSvgFlags()
    {
        $flags = [
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1e8.svg",
                "country" => "Ascension Island",
                "code" => "ac"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1e9.svg",
                "country" => "Andorra",
                "code" => "ad"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ea.svg",
                "country" => "United Arab Emirates",
                "code" => "ae"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1eb.svg",
                "country" => "Afghanistan",
                "code" => "af"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ec.svg",
                "country" => "Antigua & Barbuda",
                "code" => "ag"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ee.svg",
                "country" => "Anguilla",
                "code" => "ai"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f1.svg",
                "country" => "Albania",
                "code" => "al"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f2.svg",
                "country" => "Armenia",
                "code" => "am"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f4.svg",
                "country" => "Angola",
                "code" => "ao"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f6.svg",
                "country" => "Antarctica",
                "code" => "aq"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f7.svg",
                "country" => "Argentina",
                "code" => "ar"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f8.svg",
                "country" => "American Samoa",
                "code" => "as"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f9.svg",
                "country" => "Austria",
                "code" => "at"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1fa.svg",
                "country" => "Australia",
                "code" => "au"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1fc.svg",
                "country" => "Aruba",
                "code" => "aw"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1fd.svg",
                "country" => "Åland Islands",
                "code" => "ax"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ff.svg",
                "country" => "Azerbaijan",
                "code" => "az"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1e6.svg",
                "country" => "Bosnia & Herzegovina",
                "code" => "ba"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1e7.svg",
                "country" => "Barbados",
                "code" => "bb"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1e9.svg",
                "country" => "Bangladesh",
                "code" => "bd"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ea.svg",
                "country" => "Belgium",
                "code" => "be"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1eb.svg",
                "country" => "Burkina Faso",
                "code" => "bf"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ec.svg",
                "country" => "Bulgaria",
                "code" => "bg"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ed.svg",
                "country" => "Bahrain",
                "code" => "bh"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ee.svg",
                "country" => "Burundi",
                "code" => "bi"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ef.svg",
                "country" => "Benin",
                "code" => "bj"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f1.svg",
                "country" => "St. Barthélemy",
                "code" => "bl"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f2.svg",
                "country" => "Bermuda",
                "code" => "bm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f3.svg",
                "country" => "Brunei",
                "code" => "bn"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f4.svg",
                "country" => "Bolivia",
                "code" => "bo"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f6.svg",
                "country" => "Caribbean Netherlands",
                "code" => "00"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f7.svg",
                "country" => "Brazil",
                "code" => "br"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f8.svg",
                "country" => "Bahamas",
                "code" => "bs"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f9.svg",
                "country" => "Bhutan",
                "code" => "bt"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1fb.svg",
                "country" => "Bouvet Island",
                "code" => "bv"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1fc.svg",
                "country" => "Botswana",
                "code" => "bw"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1fe.svg",
                "country" => "Belarus",
                "code" => "by"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ff.svg",
                "country" => "Belize",
                "code" => "bz"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1e6.svg",
                "country" => "Canada",
                "code" => "ca"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1e8.svg",
                "country" => "Cocos (Keeling) Islands",
                "code" => "cc"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1e9.svg",
                "country" => "Congo - Kinshasa",
                "code" => "cg"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1eb.svg",
                "country" => "Central African Republic",
                "code" => "cf"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ec.svg",
                "country" => "Congo - Brazzaville",
                "code" => "cd"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ed.svg",
                "country" => "Switzerland",
                "code" => "ch"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ee.svg",
                "country" => "Côte d’Ivoire",
                "code" => "ci"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f0.svg",
                "country" => "Cook Islands",
                "code" => "ck"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f1.svg",
                "country" => "Chile",
                "code" => "cl"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f2.svg",
                "country" => "Cameroon",
                "code" => "cm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f3.svg",
                "country" => "China",
                "code" => "cn"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f4.svg",
                "country" => "Colombia",
                "code" => "co"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f5.svg",
                "country" => "Clipperton Island",
                "code" => "cp"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f7.svg",
                "country" => "Costa Rica",
                "code" => "cr"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fa.svg",
                "country" => "Cuba",
                "code" => "cu"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fb.svg",
                "country" => "Cape Verde",
                "code" => "cv"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fc.svg",
                "country" => "Curaçao",
                "code" => "cw"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fd.svg",
                "country" => "Christmas Island",
                "code" => "cx"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fe.svg",
                "country" => "Cyprus",
                "code" => "cy"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ff.svg",
                "country" => "Czechia",
                "code" => "cz"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1ea.svg",
                "country" => "Germany",
                "code" => "de"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1ec.svg",
                "country" => "Diego Garcia",
                "code" => "dg"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1ef.svg",
                "country" => "Djibouti",
                "code" => "dj"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1f0.svg",
                "country" => "Denmark",
                "code" => "dk"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1f2.svg",
                "country" => "Dominica",
                "code" => "dm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1f4.svg",
                "country" => "Dominican Republic",
                "code" => "do"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1ff.svg",
                "country" => "Algeria",
                "code" => "dz"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1e6.svg",
                "country" => "Ceuta & Melilla",
                "code" => "ea"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1e8.svg",
                "country" => "Ecuador",
                "code" => "ec"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1ea.svg",
                "country" => "Estonia",
                "code" => "ee"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1ec.svg",
                "country" => "Egypt",
                "code" => "eg"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1ed.svg",
                "country" => "Western Sahara",
                "code" => "eh"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1f7.svg",
                "country" => "Eritrea",
                "code" => "er"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1f8.svg",
                "country" => "Spain",
                "code" => "es"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1f9.svg",
                "country" => "Ethiopia",
                "code" => "et"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1fa.svg",
                "country" => "European Union",
                "code" => "eu"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1ee.svg",
                "country" => "Finland",
                "code" => "fi"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1ef.svg",
                "country" => "Fiji",
                "code" => "fj"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f0.svg",
                "country" => "Falkland Islands",
                "code" => "fk"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f2.svg",
                "country" => "Micronesia",
                "code" => "fm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f4.svg",
                "country" => "Faroe Islands",
                "code" => "fo"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f7.svg",
                "country" => "France",
                "code" => "fr"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1e6.svg",
                "country" => "Gabon",
                "code" => "ga"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1e7.svg",
                "country" => "United Kingdom",
                "code" => "gb"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1e9.svg",
                "country" => "Grenada",
                "code" => "gd"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ea.svg",
                "country" => "Georgia",
                "code" => "ge"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1eb.svg",
                "country" => "French Guiana",
                "code" => "gf"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ec.svg",
                "country" => "Guernsey",
                "code" => "gg"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ed.svg",
                "country" => "Ghana",
                "code" => "gh"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ee.svg",
                "country" => "Gibraltar",
                "code" => "gi"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f1.svg",
                "country" => "Greenland",
                "code" => "gl"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f2.svg",
                "country" => "Gambia",
                "code" => "gm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f3.svg",
                "country" => "Guinea",
                "code" => "gn"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f5.svg",
                "country" => "Guadeloupe",
                "code" => "gp"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f6.svg",
                "country" => "Equatorial Guinea",
                "code" => "gq"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f7.svg",
                "country" => "Greece",
                "code" => "gr"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f8.svg",
                "country" => "South Georgia & South', Sandwich Islands",
                "code" => "gs"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f9.svg",
                "country" => "Guatemala",
                "code" => "gt"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1fa.svg",
                "country" => "Guam",
                "code" => "gu"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1fc.svg",
                "country" => "Guinea-Bissau",
                "code" => "gw"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1fe.svg",
                "country" => "Guyana",
                "code" => "gy"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f0.svg",
                "country" => "Hong Kong SAR China",
                "code" => "hk"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f2.svg",
                "country" => "Heard & McDonald Islands",
                "code" => "hm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f3.svg",
                "country" => "Honduras",
                "code" => "hn"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f7.svg",
                "country" => "Croatia",
                "code" => "hr"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f9.svg",
                "country" => "Haiti",
                "code" => "ht"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1fa.svg",
                "country" => "Hungary",
                "code" => "hu"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1e8.svg",
                "country" => "Canary Islands",
                "code" => "ic"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1e9.svg",
                "country" => "Indonesia",
                "code" => "id"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1ea.svg",
                "country" => "Ireland",
                "code" => "ie"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f1.svg",
                "country" => "Israel",
                "code" => "il"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f2.svg",
                "country" => "Isle of Man",
                "code" => "im"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f3.svg",
                "country" => "India",
                "code" => "in"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f4.svg",
                "country" => "British Indian Ocean Territory",
                "code" => "io"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f6.svg",
                "country" => "Iraq",
                "code" => "iq"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f7.svg",
                "country" => "Iran",
                "code" => "ir"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f8.svg",
                "country" => "Iceland",
                "code" => "is"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f9.svg",
                "country" => "Italy",
                "code" => "it"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ef-1f1ea.svg",
                "country" => "Jersey",
                "code" => "je"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ef-1f1f2.svg",
                "country" => "Jamaica",
                "code" => "jm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ef-1f1f4.svg",
                "country" => "Jordan",
                "code" => "jo"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ef-1f1f5.svg",
                "country" => "Japan",
                "code" => "jp"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ea.svg",
                "country" => "Kenya",
                "code" => "ke"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ec.svg",
                "country" => "Kyrgyzstan",
                "code" => "kg"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ed.svg",
                "country" => "Cambodia",
                "code" => "kh"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ee.svg",
                "country" => "Kiribati",
                "code" => "ki"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f2.svg",
                "country" => "Comoros",
                "code" => "km"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f3.svg",
                "country" => "St. Kitts & Nevis",
                "code" => "kn"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f5.svg",
                "country" => "North Korea",
                "code" => "kp"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f7.svg",
                "country" => "South Korea",
                "code" => "kr"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1fc.svg",
                "country" => "Kuwait",
                "code" => "kw"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1fe.svg",
                "country" => "Cayman Islands",
                "code" => "ky"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ff.svg",
                "country" => "Kazakhstan",
                "code" => "kz"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1e6.svg",
                "country" => "Laos",
                "code" => "la"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1e7.svg",
                "country" => "Lebanon",
                "code" => "lb"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1e8.svg",
                "country" => "St. Lucia",
                "code" => "lc"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1ee.svg",
                "country" => "Liechtenstein",
                "code" => "li"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f0.svg",
                "country" => "Sri Lanka",
                "code" => "lk"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f7.svg",
                "country" => "Liberia",
                "code" => "lr"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f8.svg",
                "country" => "Lesotho",
                "code" => "ls"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f9.svg",
                "country" => "Lithuania",
                "code" => "lt"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1fa.svg",
                "country" => "Luxembourg",
                "code" => "lu"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1fb.svg",
                "country" => "Latvia",
                "code" => "lv"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1fe.svg",
                "country" => "Libya",
                "code" => "ly"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1e6.svg",
                "country" => "Morocco",
                "code" => "ma"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1e8.svg",
                "country" => "Monaco",
                "code" => "mc"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1e9.svg",
                "country" => "Moldova",
                "code" => "md"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ea.svg",
                "country" => "Montenegro",
                "code" => "me"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1eb.svg",
                "country" => "St. Martin",
                "code" => "mf"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ec.svg",
                "country" => "Madagascar",
                "code" => "mg"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ed.svg",
                "country" => "Marshall Islands",
                "code" => "mh"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f0.svg",
                "country" => "North Macedonia",
                "code" => "mk"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f1.svg",
                "country" => "Mali",
                "code" => "ml"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f2.svg",
                "country" => "Myanmar (Burma)",
                "code" => "mm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f3.svg",
                "country" => "Mongolia",
                "code" => "mn"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f4.svg",
                "country" => "Macao Sar China",
                "code" => "mo"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f5.svg",
                "country" => "Northern Mariana Islands",
                "code" => "mp"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f6.svg",
                "country" => "Martinique",
                "code" => "mq"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f7.svg",
                "country" => "Mauritania",
                "code" => "mr"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f8.svg",
                "country" => "Montserrat",
                "code" => "ms"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f9.svg",
                "country" => "Malta",
                "code" => "mt"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fa.svg",
                "country" => "Mauritius",
                "code" => "mu"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fb.svg",
                "country" => "Maldives",
                "code" => "mv"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fc.svg",
                "country" => "Malawi",
                "code" => "mw"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fd.svg",
                "country" => "Mexico",
                "code" => "mx"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fe.svg",
                "country" => "Malaysia",
                "code" => "my"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ff.svg",
                "country" => "Mozambique",
                "code" => "mz"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1e6.svg",
                "country" => "Namibia",
                "code" => "na"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1e8.svg",
                "country" => "New Caledonia",
                "code" => "nc"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ea.svg",
                "country" => "Niger",
                "code" => "ne"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1eb.svg",
                "country" => "Norfolk Island",
                "code" => "nf"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ec.svg",
                "country" => "Nigeria",
                "code" => "ng"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ee.svg",
                "country" => "Nicaragua",
                "code" => "ni"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f1.svg",
                "country" => "Netherlands",
                "code" => "nl"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f4.svg",
                "country" => "Norway",
                "code" => "no"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f5.svg",
                "country" => "Nepal",
                "code" => "np"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f7.svg",
                "country" => "Nauru",
                "code" => "nr"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1fa.svg",
                "country" => "Niue",
                "code" => "nu"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ff.svg",
                "country" => "New Zealand",
                "code" => "nz"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f4-1f1f2.svg",
                "country" => "Oman",
                "code" => "om"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1e6.svg",
                "country" => "Panama",
                "code" => "pa"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1ea.svg",
                "country" => "Peru",
                "code" => "pe"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1eb.svg",
                "country" => "French Polynesia",
                "code" => "pf"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1ec.svg",
                "country" => "Papua New Guinea",
                "code" => "pg"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1ed.svg",
                "country" => "Philippines",
                "code" => "ph"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f0.svg",
                "country" => "Pakistan",
                "code" => "pk"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f1.svg",
                "country" => "Poland",
                "code" => "pl"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f2.svg",
                "country" => "St. Pierre & Miquelon",
                "code" => "pm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f3.svg",
                "country" => "Pitcairn Islands",
                "code" => "pn"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f7.svg",
                "country" => "Puerto Rico",
                "code" => "pr"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f8.svg",
                "country" => "Palestinian Territories",
                "code" => "ps"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f9.svg",
                "country" => "Portugal",
                "code" => "pt"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1fc.svg",
                "country" => "Palau",
                "code" => "pw"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1fe.svg",
                "country" => "Paraguay",
                "code" => "py"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f6-1f1e6.svg",
                "country" => "Qatar",
                "code" => "qa"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f7-1f1ea.svg",
                "country" => "Réunion",
                "code" => "re"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f7-1f1f4.svg",
                "country" => "Romania",
                "code" => "ro"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f7-1f1f8.svg",
                "country" => "Serbia",
                "code" => "rs"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f7-1f1fa.svg",
                "country" => "Russia",
                "code" => "ru"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f7-1f1fc.svg",
                "country" => "Rwanda",
                "code" => "rw"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e6.svg",
                "country" => "Saudi Arabia",
                "code" => "sa"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e7.svg",
                "country" => "Solomon Islands",
                "code" => "sb"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e8.svg",
                "country" => "Seychelles",
                "code" => "sc"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e9.svg",
                "country" => "Sudan",
                "code" => "sd"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ea.svg",
                "country" => "Sweden",
                "code" => "se"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ec.svg",
                "country" => "Singapore",
                "code" => "sg"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ed.svg",
                "country" => "St. Helena",
                "code" => "sh"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ee.svg",
                "country" => "Slovenia",
                "code" => "si"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ef.svg",
                "country" => "Svalbard & Jan Mayen",
                "code" => "sj"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f0.svg",
                "country" => "Slovakia",
                "code" => "sk"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f1.svg",
                "country" => "Sierra Leone",
                "code" => "sl"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f2.svg",
                "country" => "San Marino",
                "code" => "sm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f3.svg",
                "country" => "Senegal",
                "code" => "sn"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f4.svg",
                "country" => "Somalia",
                "code" => "so"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f7.svg",
                "country" => "Suriname",
                "code" => "sr"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f8.svg",
                "country" => "South Sudan",
                "code" => "ss"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f9.svg",
                "country" => "São Tomé & Príncipe",
                "code" => "st"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1fb.svg",
                "country" => "El Salvador",
                "code" => "sv"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1fd.svg",
                "country" => "Sint Maarten",
                "code" => "sx"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1fe.svg",
                "country" => "Syria",
                "code" => "sy"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ff.svg",
                "country" => "Eswatini",
                "code" => "sz"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1e6.svg",
                "country" => "Tristan Da Cunha",
                "code" => "sh"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1e8.svg",
                "country" => "Turks & Caicos Islands",
                "code" => "tc"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1e9.svg",
                "country" => "Chad",
                "code" => "td"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1eb.svg",
                "country" => "French Southern Territories",
                "code" => "tf"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ec.svg",
                "country" => "Togo",
                "code" => "tg"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ed.svg",
                "country" => "Thailand",
                "code" => "th"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ef.svg",
                "country" => "Tajikistan",
                "code" => "tj"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f0.svg",
                "country" => "Tokelau",
                "code" => "tk"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f1.svg",
                "country" => "Timor-Leste",
                "code" => "tl"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f2.svg",
                "country" => "Turkmenistan",
                "code" => "tm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f3.svg",
                "country" => "Tunisia",
                "code" => "tn"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f4.svg",
                "country" => "Tonga",
                "code" => "to"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f7.svg",
                "country" => "Turkey",
                "code" => "tr"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f9.svg",
                "country" => "Trinidad & Tobago",
                "code" => "tt"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1fb.svg",
                "country" => "Tuvalu",
                "code" => "tv"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1fc.svg",
                "country" => "Taiwan",
                "code" => "tw"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ff.svg",
                "country" => "Tanzania",
                "code" => "tz"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1e6.svg",
                "country" => "Ukraine",
                "code" => "ua"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1ec.svg",
                "country" => "Uganda",
                "code" => "ug"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1f2.svg",
                "country" => "U.S. Outlying Islands",
                "code" => "um"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1f3.svg",
                "country" => "United Nations",
                "code" => "un"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1f8.svg",
                "country" => "United States",
                "code" => "us"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1fe.svg",
                "country" => "Uruguay",
                "code" => "uy"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1ff.svg",
                "country" => "Uzbekistan",
                "code" => "uz"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1e6.svg",
                "country" => "Vatican City",
                "code" => "va"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1e8.svg",
                "country" => "St. Vincent & Grenadines",
                "code" => "vc"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1ea.svg",
                "country" => "Venezuela",
                "code" => "ve"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1ec.svg",
                "country" => "British Virgin Islands",
                "code" => "vg"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1ee.svg",
                "country" => "U.S. Virgin Islands",
                "code" => "vi"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1f3.svg",
                "country" => "Vietnam",
                "code" => "vn"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1fa.svg",
                "country" => "Vanuatu",
                "code" => "vu"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fc-1f1eb.svg",
                "country" => "Wallis & Futuna",
                "code" => "wf"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fc-1f1f8.svg",
                "country" => "Samoa",
                "code" => "ws"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fd-1f1f0.svg",
                "country" => "Kosovo",
                "code" => "xk"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fe-1f1ea.svg",
                "country" => "Yemen",
                "code" => "ye"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fe-1f1f9.svg",
                "country" => "Mayotte",
                "code" => "yt"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ff-1f1e6.svg",
                "country" => "South Africa",
                "code" => "za"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ff-1f1f2.svg",
                "country" => "Zambia",
                "code" => "zm"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ff-1f1fc.svg",
                "country" => "Zimbabwe",
                "code" => "zw"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f3f4-e0067-e0062-e0065-e006e-e0067-e007f.svg",
                "country" => "England",
                "code" => "uk"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f3f4-e0067-e0062-e0073-e0063-e0074-e007f.svg",
                "country" => "Scotland",
                "code" => "uk"
            ],
            [
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f3f4-e0067-e0062-e0077-e006c-e0073-e007f.svg",
                "country" => "Wales",
                "code" => "uk"
            ]
        ];
        foreach ($flags as $flag) {
            if ($country = getCountry(strtoupper($flag['code']))) {
                $country->flag  = $flag['flag'];
                $country->save();
            }
        }
    }
}
