<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Currency;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::beginTransaction();
        try {
            Currency::truncate();
            $currencies = [
                [
                    "name" => "Andorra",
                    "code" => "AD",
                    "capital" => "Andorra la Vella",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "United Arab Emirates",
                    "code" => "AE",
                    "capital" => "Abu Dhabi",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "AED",
                        "name" => "United Arab Emirates Dirham",
                        "name_plural" => "UAE dirhams",
                        "symbol" => "AED",
                        "symbol_native" => "د.إ.‏",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Afghanistan",
                    "code" => "AF",
                    "capital" => "Kabul",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "AFN",
                        "name" => "Afghan Afghani",
                        "name_plural" => "Afghan Afghanis",
                        "symbol" => "Af",
                        "symbol_native" => "؋",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Antigua and Barbuda",
                    "code" => "AG",
                    "capital" => "St. John's",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "XCD",
                        "name" => "Eastern Caribbean Dollar",
                        "name_plural" => "Eastern Caribbean Dollars",
                        "symbol" => "EC$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Anguilla",
                    "code" => "AI",
                    "capital" => "The Valley",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "XCD",
                        "name" => "Eastern Caribbean Dollar",
                        "name_plural" => "Eastern Caribbean Dollars",
                        "symbol" => "EC$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Albania",
                    "code" => "AL",
                    "capital" => "Tirana",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "ALL",
                        "name" => "Albanian Lek",
                        "name_plural" => "Albanian lekë",
                        "symbol" => "ALL",
                        "symbol_native" => "Lek",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Armenia",
                    "code" => "AM",
                    "capital" => "Yerevan",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "AMD",
                        "name" => "Armenian Dram",
                        "name_plural" => "Armenian drams",
                        "symbol" => "AMD",
                        "symbol_native" => "դր.",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Angola",
                    "code" => "AO",
                    "capital" => "Luanda",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "AOA",
                        "name" => "Angolan Kwanza",
                        "name_plural" => "Angolan Kwanza",
                        "symbol" => "Kz",
                        "symbol_native" => "Kz",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Argentina",
                    "code" => "AR",
                    "capital" => "Buenos Aires",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "ARS",
                        "name" => "Argentine Peso",
                        "name_plural" => "Argentine pesos",
                        "symbol" => "AR$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "American Samoa",
                    "code" => "AS",
                    "capital" => "Pago Pago",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Austria",
                    "code" => "AT",
                    "capital" => "Vienna",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Australia",
                    "code" => "AU",
                    "capital" => "Canberra",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "AUD",
                        "name" => "Australian Dollar",
                        "name_plural" => "Australian dollars",
                        "symbol" => "AU$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Aruba",
                    "code" => "AW",
                    "capital" => "Oranjestad",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "AWG",
                        "name" => "Aruban Florin",
                        "name_plural" => "Aruban Florin",
                        "symbol" => "Afl.",
                        "symbol_native" => "Afl.",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Åland",
                    "code" => "AX",
                    "capital" => "Mariehamn",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Azerbaijan",
                    "code" => "AZ",
                    "capital" => "Baku",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "AZN",
                        "name" => "Azerbaijani Manat",
                        "name_plural" => "Azerbaijani manats",
                        "symbol" => "man.",
                        "symbol_native" => "ман.",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Bosnia and Herzegovina",
                    "code" => "BA",
                    "capital" => "Sarajevo",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "BAM",
                        "name" => "Bosnia-Herzegovina Convertible Mark",
                        "name_plural" => "Bosnia-Herzegovina convertible marks",
                        "symbol" => "KM",
                        "symbol_native" => "KM",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Barbados",
                    "code" => "BB",
                    "capital" => "Bridgetown",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "BBD",
                        "name" => "Barbadian dollar",
                        "name_plural" => "Barbadian dollars",
                        "symbol" => "Bds$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Bangladesh",
                    "code" => "BD",
                    "capital" => "Dhaka",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "BDT",
                        "name" => "Bangladeshi Taka",
                        "name_plural" => "Bangladeshi takas",
                        "symbol" => "Tk",
                        "symbol_native" => "৳",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Belgium",
                    "code" => "BE",
                    "capital" => "Brussels",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Burkina Faso",
                    "code" => "BF",
                    "capital" => "Ouagadougou",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XOF",
                        "name" => "CFA Franc BCEAO",
                        "name_plural" => "CFA francs BCEAO",
                        "symbol" => "CFA",
                        "symbol_native" => "CFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Bulgaria",
                    "code" => "BG",
                    "capital" => "Sofia",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "BGN",
                        "name" => "Bulgarian Lev",
                        "name_plural" => "Bulgarian leva",
                        "symbol" => "BGN",
                        "symbol_native" => "лв.",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Bahrain",
                    "code" => "BH",
                    "capital" => "Manama",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "BHD",
                        "name" => "Bahraini Dinar",
                        "name_plural" => "Bahraini dinars",
                        "symbol" => "BD",
                        "symbol_native" => "د.ب.‏",
                        "decimal_digits" => 3,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Burundi",
                    "code" => "BI",
                    "capital" => "Bujumbura",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "BIF",
                        "name" => "Burundian Franc",
                        "name_plural" => "Burundian francs",
                        "symbol" => "FBu",
                        "symbol_native" => "FBu",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Benin",
                    "code" => "BJ",
                    "capital" => "Porto-Novo",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XOF",
                        "name" => "CFA Franc BCEAO",
                        "name_plural" => "CFA francs BCEAO",
                        "symbol" => "CFA",
                        "symbol_native" => "CFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Saint Barthélemy",
                    "code" => "BL",
                    "capital" => "Gustavia",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Bermuda",
                    "code" => "BM",
                    "capital" => "Hamilton",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "BMD",
                        "name" => "Bermudian dollar",
                        "name_plural" => "Bermudian dollars",
                        "symbol" => "BD$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Brunei",
                    "code" => "BN",
                    "capital" => "Bandar Seri Begawan",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "BND",
                        "name" => "Brunei Dollar",
                        "name_plural" => "Brunei dollars",
                        "symbol" => "BN$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Bolivia",
                    "code" => "BO",
                    "capital" => "Sucre",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "BOB",
                        "name" => "Bolivian Boliviano",
                        "name_plural" => "Bolivian bolivianos",
                        "symbol" => "Bs",
                        "symbol_native" => "Bs",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Bonaire",
                    "code" => "BQ",
                    "capital" => "Kralendijk",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Brazil",
                    "code" => "BR",
                    "capital" => "Brasília",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "BRL",
                        "name" => "Brazilian Real",
                        "name_plural" => "Brazilian reals",
                        "symbol" => "R$",
                        "symbol_native" => "R$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Bahamas",
                    "code" => "BS",
                    "capital" => "Nassau",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "BSD",
                        "name" => "Bahamian dollar",
                        "name_plural" => "Bahamian dollars",
                        "symbol" => "B$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Bhutan",
                    "code" => "BT",
                    "capital" => "Thimphu",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "BTN",
                        "name" => "Bhutanese ngultrum",
                        "name_plural" => "Bhutanese ngultrum",
                        "symbol" => "Nu.",
                        "symbol_native" => "Nu.",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Bouvet Island",
                    "code" => "BV",
                    "capital" => "",
                    "continent" => "Antarctica",
                    "currency" => [
                        "code" => "NOK",
                        "name" => "Norwegian Krone",
                        "name_plural" => "Norwegian kroner",
                        "symbol" => "Nkr",
                        "symbol_native" => "kr",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Botswana",
                    "code" => "BW",
                    "capital" => "Gaborone",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "BWP",
                        "name" => "Botswanan Pula",
                        "name_plural" => "Botswanan pulas",
                        "symbol" => "BWP",
                        "symbol_native" => "P",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Belarus",
                    "code" => "BY",
                    "capital" => "Minsk",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "BYN",
                        "name" => "Belarusian Ruble",
                        "name_plural" => "Belarusian rubles",
                        "symbol" => "Br",
                        "symbol_native" => "руб.",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Belize",
                    "code" => "BZ",
                    "capital" => "Belmopan",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "BZD",
                        "name" => "Belize Dollar",
                        "name_plural" => "Belize dollars",
                        "symbol" => "BZ$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Canada",
                    "code" => "CA",
                    "capital" => "Ottawa",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "CAD",
                        "name" => "Canadian Dollar",
                        "name_plural" => "Canadian dollars",
                        "symbol" => "CA$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Cocos [Keeling] Islands",
                    "code" => "CC",
                    "capital" => "West Island",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "AUD",
                        "name" => "Australian Dollar",
                        "name_plural" => "Australian dollars",
                        "symbol" => "AU$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Democratic Republic of the Congo",
                    "code" => "CD",
                    "capital" => "Kinshasa",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "CDF",
                        "name" => "Congolese Franc",
                        "name_plural" => "Congolese francs",
                        "symbol" => "CDF",
                        "symbol_native" => "FrCD",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Central African Republic",
                    "code" => "CF",
                    "capital" => "Bangui",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XAF",
                        "name" => "CFA Franc BEAC",
                        "name_plural" => "CFA francs BEAC",
                        "symbol" => "FCFA",
                        "symbol_native" => "FCFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Republic of the Congo",
                    "code" => "CG",
                    "capital" => "Brazzaville",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XAF",
                        "name" => "CFA Franc BEAC",
                        "name_plural" => "CFA francs BEAC",
                        "symbol" => "FCFA",
                        "symbol_native" => "FCFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Switzerland",
                    "code" => "CH",
                    "capital" => "Bern",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "CHF",
                        "name" => "Swiss Franc",
                        "name_plural" => "Swiss francs",
                        "symbol" => "CHF",
                        "symbol_native" => "CHF",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Ivory Coast",
                    "code" => "CI",
                    "capital" => "Yamoussoukro",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XOF",
                        "name" => "CFA Franc BCEAO",
                        "name_plural" => "CFA francs BCEAO",
                        "symbol" => "CFA",
                        "symbol_native" => "CFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Cook Islands",
                    "code" => "CK",
                    "capital" => "Avarua",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "NZD",
                        "name" => "New Zealand Dollar",
                        "name_plural" => "New Zealand dollars",
                        "symbol" => "NZ$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Chile",
                    "code" => "CL",
                    "capital" => "Santiago",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "CLP",
                        "name" => "Chilean Peso",
                        "name_plural" => "Chilean pesos",
                        "symbol" => "CL$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Cameroon",
                    "code" => "CM",
                    "capital" => "Yaoundé",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XAF",
                        "name" => "CFA Franc BEAC",
                        "name_plural" => "CFA francs BEAC",
                        "symbol" => "FCFA",
                        "symbol_native" => "FCFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "China",
                    "code" => "CN",
                    "capital" => "Beijing",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "CNY",
                        "name" => "Chinese Yuan",
                        "name_plural" => "Chinese yuan",
                        "symbol" => "CN¥",
                        "symbol_native" => "CN¥",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Colombia",
                    "code" => "CO",
                    "capital" => "Bogotá",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "COP",
                        "name" => "Colombian Peso",
                        "name_plural" => "Colombian pesos",
                        "symbol" => "CO$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Costa Rica",
                    "code" => "CR",
                    "capital" => "San José",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "CRC",
                        "name" => "Costa Rican Colón",
                        "name_plural" => "Costa Rican colóns",
                        "symbol" => "₡",
                        "symbol_native" => "₡",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Cuba",
                    "code" => "CU",
                    "capital" => "Havana",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "CUP",
                        "name" => "Cuban peso",
                        "name_plural" => "Cuban pesoes",
                        "symbol" => '$MN',
                        "symbol_native" => "₱",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Cape Verde",
                    "code" => "CV",
                    "capital" => "Praia",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "CVE",
                        "name" => "Cape Verdean Escudo",
                        "name_plural" => "Cape Verdean escudos",
                        "symbol" => "CV$",
                        "symbol_native" => "CV$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Curacao",
                    "code" => "CW",
                    "capital" => "Willemstad",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "ANG",
                        "name" => "Netherlands Antillean guilder",
                        "name_plural" => "Netherlands Antillean guilders",
                        "symbol" => "NAƒ",
                        "symbol_native" => "ƒ",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Christmas Island",
                    "code" => "CX",
                    "capital" => "Flying Fish Cove",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "AUD",
                        "name" => "Australian Dollar",
                        "name_plural" => "Australian dollars",
                        "symbol" => "AU$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Cyprus",
                    "code" => "CY",
                    "capital" => "Nicosia",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Czechia",
                    "code" => "CZ",
                    "capital" => "Prague",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "CZK",
                        "name" => "Czech Republic Koruna",
                        "name_plural" => "Czech Republic korunas",
                        "symbol" => "Kč",
                        "symbol_native" => "Kč",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Germany",
                    "code" => "DE",
                    "capital" => "Berlin",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Djibouti",
                    "code" => "DJ",
                    "capital" => "Djibouti",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "DJF",
                        "name" => "Djiboutian Franc",
                        "name_plural" => "Djiboutian francs",
                        "symbol" => "Fdj",
                        "symbol_native" => "Fdj",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Denmark",
                    "code" => "DK",
                    "capital" => "Copenhagen",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "DKK",
                        "name" => "Danish Krone",
                        "name_plural" => "Danish kroner",
                        "symbol" => "Dkr",
                        "symbol_native" => "kr",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Dominica",
                    "code" => "DM",
                    "capital" => "Roseau",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "XCD",
                        "name" => "Eastern Caribbean Dollar",
                        "name_plural" => "Eastern Caribbean Dollars",
                        "symbol" => "EC$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Dominican Republic",
                    "code" => "DO",
                    "capital" => "Santo Domingo",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "DOP",
                        "name" => "Dominican Peso",
                        "name_plural" => "Dominican pesos",
                        "symbol" => "RD$",
                        "symbol_native" => "RD$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Algeria",
                    "code" => "DZ",
                    "capital" => "Algiers",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "DZD",
                        "name" => "Algerian Dinar",
                        "name_plural" => "Algerian dinars",
                        "symbol" => "DA",
                        "symbol_native" => "د.ج.‏",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Ecuador",
                    "code" => "EC",
                    "capital" => "Quito",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Estonia",
                    "code" => "EE",
                    "capital" => "Tallinn",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Egypt",
                    "code" => "EG",
                    "capital" => "Cairo",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "EGP",
                        "name" => "Egyptian Pound",
                        "name_plural" => "Egyptian pounds",
                        "symbol" => "EGP",
                        "symbol_native" => "ج.م.‏",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Western Sahara",
                    "code" => "EH",
                    "capital" => "Laâyoune / El Aaiún",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "MAD",
                        "name" => "Moroccan Dirham",
                        "name_plural" => "Moroccan dirhams",
                        "symbol" => "MAD",
                        "symbol_native" => "د.م.‏",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Eritrea",
                    "code" => "ER",
                    "capital" => "Asmara",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "ERN",
                        "name" => "Eritrean Nakfa",
                        "name_plural" => "Eritrean nakfas",
                        "symbol" => "Nfk",
                        "symbol_native" => "Nfk",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Spain",
                    "code" => "ES",
                    "capital" => "Madrid",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Ethiopia",
                    "code" => "ET",
                    "capital" => "Addis Ababa",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "ETB",
                        "name" => "Ethiopian Birr",
                        "name_plural" => "Ethiopian birrs",
                        "symbol" => "Br",
                        "symbol_native" => "Br",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Finland",
                    "code" => "FI",
                    "capital" => "Helsinki",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Fiji",
                    "code" => "FJ",
                    "capital" => "Suva",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "FJD",
                        "name" => "Fijian dollar",
                        "name_plural" => "Fijian dollars",
                        "symbol" => "FJ$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Falkland Islands",
                    "code" => "FK",
                    "capital" => "Stanley",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "FKP",
                        "name" => "Falkland Islands pound",
                        "name_plural" => "Falkland Islands pound",
                        "symbol" => "FK£",
                        "symbol_native" => "£",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Micronesia",
                    "code" => "FM",
                    "capital" => "Palikir",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Faroe Islands",
                    "code" => "FO",
                    "capital" => "Tórshavn",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "DKK",
                        "name" => "Danish Krone",
                        "name_plural" => "Danish kroner",
                        "symbol" => "Dkr",
                        "symbol_native" => "kr",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "France",
                    "code" => "FR",
                    "capital" => "Paris",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Gabon",
                    "code" => "GA",
                    "capital" => "Libreville",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XAF",
                        "name" => "CFA Franc BEAC",
                        "name_plural" => "CFA francs BEAC",
                        "symbol" => "FCFA",
                        "symbol_native" => "FCFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "United Kingdom",
                    "code" => "GB",
                    "capital" => "London",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "GBP",
                        "name" => "British Pound Sterling",
                        "name_plural" => "British pounds sterling",
                        "symbol" => "£",
                        "symbol_native" => "£",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Grenada",
                    "code" => "GD",
                    "capital" => "St. George's",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "XCD",
                        "name" => "Eastern Caribbean Dollar",
                        "name_plural" => "Eastern Caribbean Dollars",
                        "symbol" => "EC$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Georgia",
                    "code" => "GE",
                    "capital" => "Tbilisi",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "GEL",
                        "name" => "Georgian Lari",
                        "name_plural" => "Georgian laris",
                        "symbol" => "GEL",
                        "symbol_native" => "GEL",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "French Guiana",
                    "code" => "GF",
                    "capital" => "Cayenne",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Guernsey",
                    "code" => "GG",
                    "capital" => "St Peter Port",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "GBP",
                        "name" => "British Pound Sterling",
                        "name_plural" => "British pounds sterling",
                        "symbol" => "£",
                        "symbol_native" => "£",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Ghana",
                    "code" => "GH",
                    "capital" => "Accra",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "GHS",
                        "name" => "Ghanaian Cedi",
                        "name_plural" => "Ghanaian cedis",
                        "symbol" => "GH₵",
                        "symbol_native" => "GH₵",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Gibraltar",
                    "code" => "GI",
                    "capital" => "Gibraltar",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "GIP",
                        "name" => "Gibraltar pound",
                        "name_plural" => "Gibraltar pounds",
                        "symbol" => "£",
                        "symbol_native" => "£",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Greenland",
                    "code" => "GL",
                    "capital" => "Nuuk",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "DKK",
                        "name" => "Danish Krone",
                        "name_plural" => "Danish kroner",
                        "symbol" => "Dkr",
                        "symbol_native" => "kr",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Gambia",
                    "code" => "GM",
                    "capital" => "Bathurst",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "GMD",
                        "name" => "Gambian dalasi",
                        "name_plural" => "Gambian dalasis",
                        "symbol" => "D",
                        "symbol_native" => "D",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Guinea",
                    "code" => "GN",
                    "capital" => "Conakry",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "GNF",
                        "name" => "Guinean Franc",
                        "name_plural" => "Guinean francs",
                        "symbol" => "FG",
                        "symbol_native" => "FG",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Guadeloupe",
                    "code" => "GP",
                    "capital" => "Basse-Terre",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Equatorial Guinea",
                    "code" => "GQ",
                    "capital" => "Malabo",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XAF",
                        "name" => "CFA Franc BEAC",
                        "name_plural" => "CFA francs BEAC",
                        "symbol" => "FCFA",
                        "symbol_native" => "FCFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Greece",
                    "code" => "GR",
                    "capital" => "Athens",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "South Georgia and the South Sandwich Islands",
                    "code" => "GS",
                    "capital" => "Grytviken",
                    "continent" => "Antarctica",
                    "currency" => [
                        "code" => "GBP",
                        "name" => "British Pound Sterling",
                        "name_plural" => "British pounds sterling",
                        "symbol" => "£",
                        "symbol_native" => "£",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Guatemala",
                    "code" => "GT",
                    "capital" => "Guatemala City",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "GTQ",
                        "name" => "Guatemalan Quetzal",
                        "name_plural" => "Guatemalan quetzals",
                        "symbol" => "GTQ",
                        "symbol_native" => "Q",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Guam",
                    "code" => "GU",
                    "capital" => "Hagåtña",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Guinea-Bissau",
                    "code" => "GW",
                    "capital" => "Bissau",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XOF",
                        "name" => "CFA Franc BCEAO",
                        "name_plural" => "CFA francs BCEAO",
                        "symbol" => "CFA",
                        "symbol_native" => "CFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Guyana",
                    "code" => "GY",
                    "capital" => "Georgetown",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "GYD",
                        "name" => "Guyanese dollar",
                        "name_plural" => "Guyanese dollars",
                        "symbol" => "GY$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Hong Kong",
                    "code" => "HK",
                    "capital" => "Hong Kong",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "HKD",
                        "name" => "Hong Kong Dollar",
                        "name_plural" => "Hong Kong dollars",
                        "symbol" => "HK$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Heard Island and McDonald Islands",
                    "code" => "HM",
                    "capital" => "",
                    "continent" => "Antarctica",
                    "currency" => [
                        "code" => "AUD",
                        "name" => "Australian Dollar",
                        "name_plural" => "Australian dollars",
                        "symbol" => "AU$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Honduras",
                    "code" => "HN",
                    "capital" => "Tegucigalpa",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "HNL",
                        "name" => "Honduran Lempira",
                        "name_plural" => "Honduran lempiras",
                        "symbol" => "HNL",
                        "symbol_native" => "L",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Croatia",
                    "code" => "HR",
                    "capital" => "Zagreb",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "HRK",
                        "name" => "Croatian Kuna",
                        "name_plural" => "Croatian kunas",
                        "symbol" => "kn",
                        "symbol_native" => "kn",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Haiti",
                    "code" => "HT",
                    "capital" => "Port-au-Prince",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "HTG",
                        "name" => "Haitian gourde",
                        "name_plural" => "Haitian gourde",
                        "symbol" => "G",
                        "symbol_native" => "G",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Hungary",
                    "code" => "HU",
                    "capital" => "Budapest",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "HUF",
                        "name" => "Hungarian Forint",
                        "name_plural" => "Hungarian forints",
                        "symbol" => "Ft",
                        "symbol_native" => "Ft",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Indonesia",
                    "code" => "ID",
                    "capital" => "Jakarta",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "IDR",
                        "name" => "Indonesian Rupiah",
                        "name_plural" => "Indonesian rupiahs",
                        "symbol" => "Rp",
                        "symbol_native" => "Rp",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Ireland",
                    "code" => "IE",
                    "capital" => "Dublin",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Israel",
                    "code" => "IL",
                    "capital" => "",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "ILS",
                        "name" => "Israeli New Sheqel",
                        "name_plural" => "Israeli new sheqels",
                        "symbol" => "₪",
                        "symbol_native" => "₪",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Isle of Man",
                    "code" => "IM",
                    "capital" => "Douglas",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "GBP",
                        "name" => "British Pound Sterling",
                        "name_plural" => "British pounds sterling",
                        "symbol" => "£",
                        "symbol_native" => "£",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "India",
                    "code" => "IN",
                    "capital" => "New Delhi",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "INR",
                        "name" => "Indian Rupee",
                        "name_plural" => "Indian rupees",
                        "symbol" => "Rs",
                        "symbol_native" => "₹",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "British Indian Ocean Territory",
                    "code" => "IO",
                    "capital" => "",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Iraq",
                    "code" => "IQ",
                    "capital" => "Baghdad",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "IQD",
                        "name" => "Iraqi Dinar",
                        "name_plural" => "Iraqi dinars",
                        "symbol" => "IQD",
                        "symbol_native" => "د.ع.‏",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Iran",
                    "code" => "IR",
                    "capital" => "Tehran",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "IRR",
                        "name" => "Iranian Rial",
                        "name_plural" => "Iranian rials",
                        "symbol" => "IRR",
                        "symbol_native" => "﷼",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Iceland",
                    "code" => "IS",
                    "capital" => "Reykjavik",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "ISK",
                        "name" => "Icelandic Króna",
                        "name_plural" => "Icelandic krónur",
                        "symbol" => "Ikr",
                        "symbol_native" => "kr",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Italy",
                    "code" => "IT",
                    "capital" => "Rome",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Jersey",
                    "code" => "JE",
                    "capital" => "Saint Helier",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "GBP",
                        "name" => "British Pound Sterling",
                        "name_plural" => "British pounds sterling",
                        "symbol" => "£",
                        "symbol_native" => "£",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Jamaica",
                    "code" => "JM",
                    "capital" => "Kingston",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "JMD",
                        "name" => "Jamaican Dollar",
                        "name_plural" => "Jamaican dollars",
                        "symbol" => "J$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Jordan",
                    "code" => "JO",
                    "capital" => "Amman",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "JOD",
                        "name" => "Jordanian Dinar",
                        "name_plural" => "Jordanian dinars",
                        "symbol" => "JD",
                        "symbol_native" => "د.أ.‏",
                        "decimal_digits" => 3,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Japan",
                    "code" => "JP",
                    "capital" => "Tokyo",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "JPY",
                        "name" => "Japanese Yen",
                        "name_plural" => "Japanese yen",
                        "symbol" => "¥",
                        "symbol_native" => "￥",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Kenya",
                    "code" => "KE",
                    "capital" => "Nairobi",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "KES",
                        "name" => "Kenyan Shilling",
                        "name_plural" => "Kenyan shillings",
                        "symbol" => "Ksh",
                        "symbol_native" => "Ksh",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Kyrgyzstan",
                    "code" => "KG",
                    "capital" => "Bishkek",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "KGS",
                        "name" => "Kyrgyzstani som",
                        "name_plural" => "Kyrgyzstani som",
                        "symbol" => "С̲ ",
                        "symbol_native" => "С̲ ",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Cambodia",
                    "code" => "KH",
                    "capital" => "Phnom Penh",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "KHR",
                        "name" => "Cambodian Riel",
                        "name_plural" => "Cambodian riels",
                        "symbol" => "KHR",
                        "symbol_native" => "៛",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Kiribati",
                    "code" => "KI",
                    "capital" => "Tarawa",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "AUD",
                        "name" => "Australian Dollar",
                        "name_plural" => "Australian dollars",
                        "symbol" => "AU$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Comoros",
                    "code" => "KM",
                    "capital" => "Moroni",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "KMF",
                        "name" => "Comorian Franc",
                        "name_plural" => "Comorian francs",
                        "symbol" => "CF",
                        "symbol_native" => "FC",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Saint Kitts and Nevis",
                    "code" => "KN",
                    "capital" => "Basseterre",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "XCD",
                        "name" => "Eastern Caribbean Dollar",
                        "name_plural" => "Eastern Caribbean Dollars",
                        "symbol" => "EC$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "North Korea",
                    "code" => "KP",
                    "capital" => "Pyongyang",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "KPW",
                        "name" => "North Korean won",
                        "name_plural" => "North Korean won",
                        "symbol" => "₩",
                        "symbol_native" => "₩",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "South Korea",
                    "code" => "KR",
                    "capital" => "Seoul",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "KRW",
                        "name" => "South Korean Won",
                        "name_plural" => "South Korean won",
                        "symbol" => "₩",
                        "symbol_native" => "₩",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Kuwait",
                    "code" => "KW",
                    "capital" => "Kuwait City",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "KWD",
                        "name" => "Kuwaiti Dinar",
                        "name_plural" => "Kuwaiti dinars",
                        "symbol" => "KD",
                        "symbol_native" => "د.ك.‏",
                        "decimal_digits" => 3,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Cayman Islands",
                    "code" => "KY",
                    "capital" => "George Town",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "KYD",
                        "name" => "Cayman Islands dollar",
                        "name_plural" => "Cayman Islands dollars",
                        "symbol" => "CI$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Kazakhstan",
                    "code" => "KZ",
                    "capital" => "Astana",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "KZT",
                        "name" => "Kazakhstani Tenge",
                        "name_plural" => "Kazakhstani tenges",
                        "symbol" => "KZT",
                        "symbol_native" => "тңг.",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Laos",
                    "code" => "LA",
                    "capital" => "Vientiane",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "LAK",
                        "name" => "Lao kip",
                        "name_plural" => "Lao kip",
                        "symbol" => "₭N",
                        "symbol_native" => "₭",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Lebanon",
                    "code" => "LB",
                    "capital" => "Beirut",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "LBP",
                        "name" => "Lebanese Pound",
                        "name_plural" => "Lebanese pounds",
                        "symbol" => "LB£",
                        "symbol_native" => "ل.ل.‏",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Saint Lucia",
                    "code" => "LC",
                    "capital" => "Castries",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "XCD",
                        "name" => "Eastern Caribbean Dollar",
                        "name_plural" => "Eastern Caribbean Dollars",
                        "symbol" => "EC$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Liechtenstein",
                    "code" => "LI",
                    "capital" => "Vaduz",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "CHF",
                        "name" => "Swiss Franc",
                        "name_plural" => "Swiss francs",
                        "symbol" => "CHF",
                        "symbol_native" => "CHF",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Sri Lanka",
                    "code" => "LK",
                    "capital" => "Colombo",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "LKR",
                        "name" => "Sri Lankan Rupee",
                        "name_plural" => "Sri Lankan rupees",
                        "symbol" => "SLRs",
                        "symbol_native" => "SL Re",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Liberia",
                    "code" => "LR",
                    "capital" => "Monrovia",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "LRD",
                        "name" => "Liberian dollar",
                        "name_plural" => "Liberian dollars",
                        "symbol" => "LD$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Lesotho",
                    "code" => "LS",
                    "capital" => "Maseru",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "LSL",
                        "name" => "Lesotho loti",
                        "name_plural" => "Lesotho maloti",
                        "symbol" => "L",
                        "symbol_native" => "L",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Lithuania",
                    "code" => "LT",
                    "capital" => "Vilnius",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Luxembourg",
                    "code" => "LU",
                    "capital" => "Luxembourg",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Latvia",
                    "code" => "LV",
                    "capital" => "Riga",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Libya",
                    "code" => "LY",
                    "capital" => "Tripoli",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "LYD",
                        "name" => "Libyan Dinar",
                        "name_plural" => "Libyan dinars",
                        "symbol" => "LD",
                        "symbol_native" => "د.ل.‏",
                        "decimal_digits" => 3,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Morocco",
                    "code" => "MA",
                    "capital" => "Rabat",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "MAD",
                        "name" => "Moroccan Dirham",
                        "name_plural" => "Moroccan dirhams",
                        "symbol" => "MAD",
                        "symbol_native" => "د.م.‏",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Monaco",
                    "code" => "MC",
                    "capital" => "Monaco",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Moldova",
                    "code" => "MD",
                    "capital" => "Chişinău",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "MDL",
                        "name" => "Moldovan Leu",
                        "name_plural" => "Moldovan lei",
                        "symbol" => "MDL",
                        "symbol_native" => "MDL",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Montenegro",
                    "code" => "ME",
                    "capital" => "Podgorica",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Saint Martin",
                    "code" => "MF",
                    "capital" => "Marigot",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Madagascar",
                    "code" => "MG",
                    "capital" => "Antananarivo",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "MGA",
                        "name" => "Malagasy Ariary",
                        "name_plural" => "Malagasy Ariaries",
                        "symbol" => "MGA",
                        "symbol_native" => "MGA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Marshall Islands",
                    "code" => "MH",
                    "capital" => "Majuro",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Macedonia",
                    "code" => "MK",
                    "capital" => "Skopje",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "MKD",
                        "name" => "Macedonian Denar",
                        "name_plural" => "Macedonian denari",
                        "symbol" => "MKD",
                        "symbol_native" => "MKD",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Mali",
                    "code" => "ML",
                    "capital" => "Bamako",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XOF",
                        "name" => "CFA Franc BCEAO",
                        "name_plural" => "CFA francs BCEAO",
                        "symbol" => "CFA",
                        "symbol_native" => "CFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Myanmar [Burma]",
                    "code" => "MM",
                    "capital" => "Naypyitaw",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "MMK",
                        "name" => "Myanma Kyat",
                        "name_plural" => "Myanma kyats",
                        "symbol" => "MMK",
                        "symbol_native" => "K",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Mongolia",
                    "code" => "MN",
                    "capital" => "Ulan Bator",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "MNT",
                        "name" => "Mongolian tögrög",
                        "name_plural" => "Mongolian tögrög",
                        "symbol" => "₮",
                        "symbol_native" => "₮",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Macao",
                    "code" => "MO",
                    "capital" => "Macao",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "MOP",
                        "name" => "Macanese Pataca",
                        "name_plural" => "Macanese patacas",
                        "symbol" => "MOP$",
                        "symbol_native" => "MOP$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Northern Mariana Islands",
                    "code" => "MP",
                    "capital" => "Saipan",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Martinique",
                    "code" => "MQ",
                    "capital" => "Fort-de-France",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Mauritania",
                    "code" => "MR",
                    "capital" => "Nouakchott",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "MRO",
                        "name" => null,
                        "name_plural" => null,
                        "symbol" => null,
                        "symbol_native" => null,
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Montserrat",
                    "code" => "MS",
                    "capital" => "Plymouth",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "XCD",
                        "name" => "Eastern Caribbean Dollar",
                        "name_plural" => "Eastern Caribbean Dollars",
                        "symbol" => "EC$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Malta",
                    "code" => "MT",
                    "capital" => "Valletta",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Mauritius",
                    "code" => "MU",
                    "capital" => "Port Louis",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "MUR",
                        "name" => "Mauritian Rupee",
                        "name_plural" => "Mauritian rupees",
                        "symbol" => "MURs",
                        "symbol_native" => "MURs",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Maldives",
                    "code" => "MV",
                    "capital" => "Malé",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "MVR",
                        "name" => "Maldivian rufiyaa",
                        "name_plural" => "Maldivian rufiyaa",
                        "symbol" => "Rf",
                        "symbol_native" => "ރ",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Malawi",
                    "code" => "MW",
                    "capital" => "Lilongwe",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "MWK",
                        "name" => "Malawian kwacha",
                        "name_plural" => "Malawian kwachas",
                        "symbol" => "K",
                        "symbol_native" => "K",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Mexico",
                    "code" => "MX",
                    "capital" => "Mexico City",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "MXN",
                        "name" => "Mexican Peso",
                        "name_plural" => "Mexican pesos",
                        "symbol" => "MX$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Malaysia",
                    "code" => "MY",
                    "capital" => "Kuala Lumpur",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "MYR",
                        "name" => "Malaysian Ringgit",
                        "name_plural" => "Malaysian ringgits",
                        "symbol" => "RM",
                        "symbol_native" => "RM",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Mozambique",
                    "code" => "MZ",
                    "capital" => "Maputo",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "MZN",
                        "name" => "Mozambican Metical",
                        "name_plural" => "Mozambican meticals",
                        "symbol" => "MTn",
                        "symbol_native" => "MTn",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Namibia",
                    "code" => "NA",
                    "capital" => "Windhoek",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "NAD",
                        "name" => "Namibian Dollar",
                        "name_plural" => "Namibian dollars",
                        "symbol" => "N$",
                        "symbol_native" => "N$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "New Caledonia",
                    "code" => "NC",
                    "capital" => "Noumea",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "XPF",
                        "name" => "CFP Franc",
                        "name_plural" => "CFP franc",
                        "symbol" => "F",
                        "symbol_native" => "F",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Niger",
                    "code" => "NE",
                    "capital" => "Niamey",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XOF",
                        "name" => "CFA Franc BCEAO",
                        "name_plural" => "CFA francs BCEAO",
                        "symbol" => "CFA",
                        "symbol_native" => "CFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Norfolk Island",
                    "code" => "NF",
                    "capital" => "Kingston",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "AUD",
                        "name" => "Australian Dollar",
                        "name_plural" => "Australian dollars",
                        "symbol" => "AU$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Nigeria",
                    "code" => "NG",
                    "capital" => "Abuja",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "NGN",
                        "name" => "Nigerian Naira",
                        "name_plural" => "Nigerian nairas",
                        "symbol" => "₦",
                        "symbol_native" => "₦",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Nicaragua",
                    "code" => "NI",
                    "capital" => "Managua",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "NIO",
                        "name" => "Nicaraguan Córdoba",
                        "name_plural" => "Nicaraguan córdobas",
                        "symbol" => "C$",
                        "symbol_native" => "C$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Netherlands",
                    "code" => "NL",
                    "capital" => "Amsterdam",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Norway",
                    "code" => "NO",
                    "capital" => "Oslo",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "NOK",
                        "name" => "Norwegian Krone",
                        "name_plural" => "Norwegian kroner",
                        "symbol" => "Nkr",
                        "symbol_native" => "kr",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Nepal",
                    "code" => "NP",
                    "capital" => "Kathmandu",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "NPR",
                        "name" => "Nepalese Rupee",
                        "name_plural" => "Nepalese rupees",
                        "symbol" => "NPRs",
                        "symbol_native" => "नेरू",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Nauru",
                    "code" => "NR",
                    "capital" => "Yaren",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "AUD",
                        "name" => "Australian Dollar",
                        "name_plural" => "Australian dollars",
                        "symbol" => "AU$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Niue",
                    "code" => "NU",
                    "capital" => "Alofi",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "NZD",
                        "name" => "New Zealand Dollar",
                        "name_plural" => "New Zealand dollars",
                        "symbol" => "NZ$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "New Zealand",
                    "code" => "NZ",
                    "capital" => "Wellington",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "NZD",
                        "name" => "New Zealand Dollar",
                        "name_plural" => "New Zealand dollars",
                        "symbol" => "NZ$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Oman",
                    "code" => "OM",
                    "capital" => "Muscat",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "OMR",
                        "name" => "Omani Rial",
                        "name_plural" => "Omani rials",
                        "symbol" => "OMR",
                        "symbol_native" => "ر.ع.‏",
                        "decimal_digits" => 3,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Panama",
                    "code" => "PA",
                    "capital" => "Panama City",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "PAB",
                        "name" => "Panamanian Balboa",
                        "name_plural" => "Panamanian balboas",
                        "symbol" => "B/.",
                        "symbol_native" => "B/.",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Peru",
                    "code" => "PE",
                    "capital" => "Lima",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "PEN",
                        "name" => "Peruvian Nuevo Sol",
                        "name_plural" => "Peruvian nuevos soles",
                        "symbol" => "S/.",
                        "symbol_native" => "S/.",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "French Polynesia",
                    "code" => "PF",
                    "capital" => "Papeete",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "XPF",
                        "name" => "CFP Franc",
                        "name_plural" => "CFP franc",
                        "symbol" => "F",
                        "symbol_native" => "F",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Papua New Guinea",
                    "code" => "PG",
                    "capital" => "Port Moresby",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "PGK",
                        "name" => "Papua New Guinean kina",
                        "name_plural" => "Papua New Guinean kina",
                        "symbol" => "K",
                        "symbol_native" => "K",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Philippines",
                    "code" => "PH",
                    "capital" => "Manila",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "PHP",
                        "name" => "Philippine Peso",
                        "name_plural" => "Philippine pesos",
                        "symbol" => "₱",
                        "symbol_native" => "₱",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Pakistan",
                    "code" => "PK",
                    "capital" => "Islamabad",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "PKR",
                        "name" => "Pakistani Rupee",
                        "name_plural" => "Pakistani rupees",
                        "symbol" => "PKRs",
                        "symbol_native" => "₨",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Poland",
                    "code" => "PL",
                    "capital" => "Warsaw",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "PLN",
                        "name" => "Polish Zloty",
                        "name_plural" => "Polish zlotys",
                        "symbol" => "zł",
                        "symbol_native" => "zł",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Saint Pierre and Miquelon",
                    "code" => "PM",
                    "capital" => "Saint-Pierre",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Pitcairn Islands",
                    "code" => "PN",
                    "capital" => "Adamstown",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "NZD",
                        "name" => "New Zealand Dollar",
                        "name_plural" => "New Zealand dollars",
                        "symbol" => "NZ$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Puerto Rico",
                    "code" => "PR",
                    "capital" => "San Juan",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Palestine",
                    "code" => "PS",
                    "capital" => "",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "ILS",
                        "name" => "Israeli New Sheqel",
                        "name_plural" => "Israeli new sheqels",
                        "symbol" => "₪",
                        "symbol_native" => "₪",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Portugal",
                    "code" => "PT",
                    "capital" => "Lisbon",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Palau",
                    "code" => "PW",
                    "capital" => "Melekeok",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Paraguay",
                    "code" => "PY",
                    "capital" => "Asunción",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "PYG",
                        "name" => "Paraguayan Guarani",
                        "name_plural" => "Paraguayan guaranis",
                        "symbol" => "₲",
                        "symbol_native" => "₲",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Qatar",
                    "code" => "QA",
                    "capital" => "Doha",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "QAR",
                        "name" => "Qatari Rial",
                        "name_plural" => "Qatari rials",
                        "symbol" => "QR",
                        "symbol_native" => "ر.ق.‏",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Réunion",
                    "code" => "RE",
                    "capital" => "Saint-Denis",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Romania",
                    "code" => "RO",
                    "capital" => "Bucharest",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "RON",
                        "name" => "Romanian Leu",
                        "name_plural" => "Romanian lei",
                        "symbol" => "RON",
                        "symbol_native" => "RON",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Serbia",
                    "code" => "RS",
                    "capital" => "Belgrade",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "RSD",
                        "name" => "Serbian Dinar",
                        "name_plural" => "Serbian dinars",
                        "symbol" => "din.",
                        "symbol_native" => "дин.",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Russia",
                    "code" => "RU",
                    "capital" => "Moscow",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "RUB",
                        "name" => "Russian Ruble",
                        "name_plural" => "Russian rubles",
                        "symbol" => "RUB",
                        "symbol_native" => "₽.",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Rwanda",
                    "code" => "RW",
                    "capital" => "Kigali",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "RWF",
                        "name" => "Rwandan Franc",
                        "name_plural" => "Rwandan francs",
                        "symbol" => "RWF",
                        "symbol_native" => "FR",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Saudi Arabia",
                    "code" => "SA",
                    "capital" => "Riyadh",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "SAR",
                        "name" => "Saudi Riyal",
                        "name_plural" => "Saudi riyals",
                        "symbol" => "SR",
                        "symbol_native" => "ر.س.‏",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Solomon Islands",
                    "code" => "SB",
                    "capital" => "Honiara",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "SBD",
                        "name" => "Solomon Islands dollar",
                        "name_plural" => "Solomon Islands dollars",
                        "symbol" => "SI$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Seychelles",
                    "code" => "SC",
                    "capital" => "Victoria",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "SCR",
                        "name" => "Seychellois rupee",
                        "name_plural" => "Seychellois rupee",
                        "symbol" => "SRe",
                        "symbol_native" => "SR",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Sudan",
                    "code" => "SD",
                    "capital" => "Khartoum",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "SDG",
                        "name" => "Sudanese Pound",
                        "name_plural" => "Sudanese pounds",
                        "symbol" => "SDG",
                        "symbol_native" => "SDG",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Sweden",
                    "code" => "SE",
                    "capital" => "Stockholm",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "SEK",
                        "name" => "Swedish Krona",
                        "name_plural" => "Swedish kronor",
                        "symbol" => "Skr",
                        "symbol_native" => "kr",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Singapore",
                    "code" => "SG",
                    "capital" => "Singapore",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "SGD",
                        "name" => "Singapore Dollar",
                        "name_plural" => "Singapore dollars",
                        "symbol" => "S$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Saint Helena",
                    "code" => "SH",
                    "capital" => "Jamestown",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "SHP",
                        "name" => "Saint Helena pound",
                        "name_plural" => "Saint Helena pound",
                        "symbol" => "SH£",
                        "symbol_native" => "£",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Slovenia",
                    "code" => "SI",
                    "capital" => "Ljubljana",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Svalbard and Jan Mayen",
                    "code" => "SJ",
                    "capital" => "Longyearbyen",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "NOK",
                        "name" => "Norwegian Krone",
                        "name_plural" => "Norwegian kroner",
                        "symbol" => "Nkr",
                        "symbol_native" => "kr",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Slovakia",
                    "code" => "SK",
                    "capital" => "Bratislava",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Sierra Leone",
                    "code" => "SL",
                    "capital" => "Freetown",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "SLL",
                        "name" => "Sierra Leonean leone",
                        "name_plural" => "Sierra Leonean leones",
                        "symbol" => "Le",
                        "symbol_native" => "Le",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "San Marino",
                    "code" => "SM",
                    "capital" => "San Marino",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Senegal",
                    "code" => "SN",
                    "capital" => "Dakar",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XOF",
                        "name" => "CFA Franc BCEAO",
                        "name_plural" => "CFA francs BCEAO",
                        "symbol" => "CFA",
                        "symbol_native" => "CFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Somalia",
                    "code" => "SO",
                    "capital" => "Mogadishu",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "SOS",
                        "name" => "Somali Shilling",
                        "name_plural" => "Somali shillings",
                        "symbol" => "Ssh",
                        "symbol_native" => "Ssh",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Suriname",
                    "code" => "SR",
                    "capital" => "Paramaribo",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "SRD",
                        "name" => "Surinamese dollar",
                        "name_plural" => "Surinamese dollars",
                        "symbol" => "Sr$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "South Sudan",
                    "code" => "SS",
                    "capital" => "Juba",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "SSP",
                        "name" => "South Sudanese pound",
                        "name_plural" => "South Sudanese pounds",
                        "symbol" => "SS£",
                        "symbol_native" => "£",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "São Tomé and Príncipe",
                    "code" => "ST",
                    "capital" => "São Tomé",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "STD",
                        "name" => null,
                        "name_plural" => null,
                        "symbol" => null,
                        "symbol_native" => null,
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "El Salvador",
                    "code" => "SV",
                    "capital" => "San Salvador",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Sint Maarten",
                    "code" => "SX",
                    "capital" => "Philipsburg",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "ANG",
                        "name" => "Netherlands Antillean guilder",
                        "name_plural" => "Netherlands Antillean guilders",
                        "symbol" => "NAƒ",
                        "symbol_native" => "ƒ",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Syria",
                    "code" => "SY",
                    "capital" => "Damascus",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "SYP",
                        "name" => "Syrian Pound",
                        "name_plural" => "Syrian pounds",
                        "symbol" => "SY£",
                        "symbol_native" => "ل.س.‏",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Swaziland",
                    "code" => "SZ",
                    "capital" => "Mbabane",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "SZL",
                        "name" => "Swazi lilangeni",
                        "name_plural" => "Swazi emalangeni",
                        "symbol" => "L",
                        "symbol_native" => "L",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Turks and Caicos Islands",
                    "code" => "TC",
                    "capital" => "Cockburn Town",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Chad",
                    "code" => "TD",
                    "capital" => "N'Djamena",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XAF",
                        "name" => "CFA Franc BEAC",
                        "name_plural" => "CFA francs BEAC",
                        "symbol" => "FCFA",
                        "symbol_native" => "FCFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "French Southern Territories",
                    "code" => "TF",
                    "capital" => "Port-aux-Français",
                    "continent" => "Antarctica",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Togo",
                    "code" => "TG",
                    "capital" => "Lomé",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "XOF",
                        "name" => "CFA Franc BCEAO",
                        "name_plural" => "CFA francs BCEAO",
                        "symbol" => "CFA",
                        "symbol_native" => "CFA",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Thailand",
                    "code" => "TH",
                    "capital" => "Bangkok",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "THB",
                        "name" => "Thai Baht",
                        "name_plural" => "Thai baht",
                        "symbol" => "฿",
                        "symbol_native" => "฿",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Tajikistan",
                    "code" => "TJ",
                    "capital" => "Dushanbe",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "TJS",
                        "name" => "Tajikistani somoni",
                        "name_plural" => "Tajikistani somoni",
                        "symbol" => "SM",
                        "symbol_native" => "SM",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Tokelau",
                    "code" => "TK",
                    "capital" => "",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "NZD",
                        "name" => "New Zealand Dollar",
                        "name_plural" => "New Zealand dollars",
                        "symbol" => "NZ$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "East Timor",
                    "code" => "TL",
                    "capital" => "Dili",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Turkmenistan",
                    "code" => "TM",
                    "capital" => "Ashgabat",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "TMT",
                        "name" => "Turkmenistan manat",
                        "name_plural" => "Turkmenistan manat",
                        "symbol" => "T",
                        "symbol_native" => "T",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Tunisia",
                    "code" => "TN",
                    "capital" => "Tunis",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "TND",
                        "name" => "Tunisian Dinar",
                        "name_plural" => "Tunisian dinars",
                        "symbol" => "DT",
                        "symbol_native" => "د.ت.‏",
                        "decimal_digits" => 3,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Tonga",
                    "code" => "TO",
                    "capital" => "Nuku'alofa",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "TOP",
                        "name" => "Tongan Paʻanga",
                        "name_plural" => "Tongan paʻanga",
                        "symbol" => "T$",
                        "symbol_native" => "T$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Turkey",
                    "code" => "TR",
                    "capital" => "Ankara",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "TRY",
                        "name" => "Turkish Lira",
                        "name_plural" => "Turkish Lira",
                        "symbol" => "TL",
                        "symbol_native" => "TL",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Trinidad and Tobago",
                    "code" => "TT",
                    "capital" => "Port of Spain",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "TTD",
                        "name" => "Trinidad and Tobago Dollar",
                        "name_plural" => "Trinidad and Tobago dollars",
                        "symbol" => "TT$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Tuvalu",
                    "code" => "TV",
                    "capital" => "Funafuti",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "AUD",
                        "name" => "Australian Dollar",
                        "name_plural" => "Australian dollars",
                        "symbol" => "AU$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Taiwan",
                    "code" => "TW",
                    "capital" => "Taipei",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "TWD",
                        "name" => "New Taiwan Dollar",
                        "name_plural" => "New Taiwan dollars",
                        "symbol" => "NT$",
                        "symbol_native" => "NT$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Tanzania",
                    "code" => "TZ",
                    "capital" => "Dodoma",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "TZS",
                        "name" => "Tanzanian Shilling",
                        "name_plural" => "Tanzanian shillings",
                        "symbol" => "TSh",
                        "symbol_native" => "TSh",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Ukraine",
                    "code" => "UA",
                    "capital" => "Kiev",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "UAH",
                        "name" => "Ukrainian Hryvnia",
                        "name_plural" => "Ukrainian hryvnias",
                        "symbol" => "₴",
                        "symbol_native" => "₴",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Uganda",
                    "code" => "UG",
                    "capital" => "Kampala",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "UGX",
                        "name" => "Ugandan Shilling",
                        "name_plural" => "Ugandan shillings",
                        "symbol" => "USh",
                        "symbol_native" => "USh",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "U.S. Minor Outlying Islands",
                    "code" => "UM",
                    "capital" => "",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "United States",
                    "code" => "US",
                    "capital" => "Washington",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Uruguay",
                    "code" => "UY",
                    "capital" => "Montevideo",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "UYU",
                        "name" => "Uruguayan Peso",
                        "name_plural" => "Uruguayan pesos",
                        "symbol" => '$U',
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Uzbekistan",
                    "code" => "UZ",
                    "capital" => "Tashkent",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "UZS",
                        "name" => "Uzbekistan Som",
                        "name_plural" => "Uzbekistan som",
                        "symbol" => "UZS",
                        "symbol_native" => "UZS",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Vatican City",
                    "code" => "VA",
                    "capital" => "Vatican City",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Saint Vincent and the Grenadines",
                    "code" => "VC",
                    "capital" => "Kingstown",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "XCD",
                        "name" => "Eastern Caribbean Dollar",
                        "name_plural" => "Eastern Caribbean Dollars",
                        "symbol" => "EC$",
                        "symbol_native" => "$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Venezuela",
                    "code" => "VE",
                    "capital" => "Caracas",
                    "continent" => "South America",
                    "currency" => [
                        "code" => "VEF",
                        "name" => "Venezuelan Bolívar",
                        "name_plural" => "Venezuelan bolívars",
                        "symbol" => "Bs.F.",
                        "symbol_native" => "Bs.F.",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "British Virgin Islands",
                    "code" => "VG",
                    "capital" => "Road Town",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "U.S. Virgin Islands",
                    "code" => "VI",
                    "capital" => "Charlotte Amalie",
                    "continent" => "North America",
                    "currency" => [
                        "code" => "USD",
                        "name" => "US Dollar",
                        "name_plural" => "US dollars",
                        "symbol" => "$",
                        "symbol_native" => "$",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Vietnam",
                    "code" => "VN",
                    "capital" => "Hanoi",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "VND",
                        "name" => "Vietnamese Dong",
                        "name_plural" => "Vietnamese dong",
                        "symbol" => "₫",
                        "symbol_native" => "₫",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Vanuatu",
                    "code" => "VU",
                    "capital" => "Port Vila",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "VUV",
                        "name" => "Vanuatu vatu",
                        "name_plural" => "Vanuatu vatu",
                        "symbol" => "VT",
                        "symbol_native" => "VT",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Wallis and Futuna",
                    "code" => "WF",
                    "capital" => "Mata-Utu",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "XPF",
                        "name" => "CFP Franc",
                        "name_plural" => "CFP franc",
                        "symbol" => "F",
                        "symbol_native" => "F",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Samoa",
                    "code" => "WS",
                    "capital" => "Apia",
                    "continent" => "Oceania",
                    "currency" => [
                        "code" => "WST",
                        "name" => "Samoan tālā",
                        "name_plural" => "Samoan tālā",
                        "symbol" => "WS$",
                        "symbol_native" => "ST",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Kosovo",
                    "code" => "XK",
                    "capital" => "Pristina",
                    "continent" => "Europe",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Yemen",
                    "code" => "YE",
                    "capital" => "Sanaa",
                    "continent" => "Asia",
                    "currency" => [
                        "code" => "YER",
                        "name" => "Yemeni Rial",
                        "name_plural" => "Yemeni Rials",
                        "symbol" => "YR",
                        "symbol_native" => "ر.ي.‏",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Mayotte",
                    "code" => "YT",
                    "capital" => "Mamoudzou",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "EUR",
                        "name" => "Euro",
                        "name_plural" => "euros",
                        "symbol" => "€",
                        "symbol_native" => "€",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "South Africa",
                    "code" => "ZA",
                    "capital" => "Pretoria",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "ZAR",
                        "name" => "South African Rand",
                        "name_plural" => "South African Rand",
                        "symbol" => "R",
                        "symbol_native" => "R",
                        "decimal_digits" => 2,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Zambia",
                    "code" => "ZM",
                    "capital" => "Lusaka",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "ZMW",
                        "name" => "Zambian Kwacha",
                        "name_plural" => "Zambian Kwachas",
                        "symbol" => "ZK",
                        "symbol_native" => "ZK",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ],
                [
                    "name" => "Zimbabwe",
                    "code" => "ZW",
                    "capital" => "Harare",
                    "continent" => "Africa",
                    "currency" => [
                        "code" => "ZWL",
                        "name" => "Zimbabwean Dollar",
                        "name_plural" => "Zimbabwean Dollars",
                        "symbol" => "ZWL$",
                        "symbol_native" => "ZWL$",
                        "decimal_digits" => 0,
                        "rounding" => 0
                    ]
                ]
            ];
            foreach ($currencies as $currency) {
                $country = Country::where('code', $currency['code'])->first();
                if ($country) {
                    $country->continent = $currency['continent'];
                    $country->capital = $currency['capital'];
                    $save = $country->save();

                    if ($save) {
                        $new_currency = new Currency();
                        $new_currency->country_id = $country->id;
                        $new_currency->public_id = uuid();
                        $new_currency->country_code = $country->code;
                        $new_currency->name = $currency['currency']['name'];
                        $new_currency->code = $currency['currency']['code'];
                        $new_currency->name_plural = $currency['currency']['name_plural'];
                        $new_currency->symbol = $currency['currency']['symbol'];
                        $new_currency->symbol_native = $currency['currency']['symbol_native'];
                        $new_currency->decimal_digits = $currency['currency']['decimal_digits'];
                        $new_currency->rounding = $currency['currency']['rounding'];
                        $new_currency->active = $country->active;
                        $new_currency->save();
                    }
                }
            }
            // DB::commit();
        } catch (\Throwable $th) {
            // DB::rollback();
            dd($th->getMessage());
        }
    }
}
