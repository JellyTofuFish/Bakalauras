<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('da', array (
  'validators' => 
  array (
    'This value should be false.' => 'Værdien skal være falsk.',
    'This value should be true.' => 'Værdien skal være sand.',
    'This value should be of type {{ type }}.' => 'Værdien skal være af typen {{ type }}.',
    'This value should be blank.' => 'Værdien skal være blank.',
    'The value you selected is not a valid choice.' => 'Den valgte værdi er ikke gyldig.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du skal vælge mindst én mulighed.|Du skal vælge mindst {{ limit }} muligheder.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan højst vælge én mulighed.|Du kan højst vælge {{ limit }} muligheder.',
    'One or more of the given values is invalid.' => 'En eller flere af de angivne værdier er ugyldige.',
    'This field was not expected.' => 'Feltet blev ikke forventet.',
    'This field is missing.' => 'Dette felt mangler.',
    'This value is not a valid date.' => 'Værdien er ikke en gyldig dato.',
    'This value is not a valid datetime.' => 'Værdien er ikke et gyldigt tidspunkt.',
    'This value is not a valid email address.' => 'Værdien er ikke en gyldig e-mailadresse.',
    'The file could not be found.' => 'Filen kunne ikke findes.',
    'The file is not readable.' => 'Filen kan ikke læses.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor ({{ size }} {{ suffix }}). Maksimale tilladte størrelse er {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Filens MIME-type er ugyldig ({{ type }}). Tilladte MIME-typer er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Værdien skal være {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Værdien er for lang. Den må højst indeholde {{ limit }} tegn.',
    'This value should be {{ limit }} or more.' => 'Værdien skal være {{ limit }} eller mere.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Værdien er for kort. Den skal indeholde mindst {{ limit }} tegn.',
    'This value should not be blank.' => 'Værdien må ikke være blank.',
    'This value should not be null.' => 'Værdien må ikke være tom (null).',
    'This value should be null.' => 'Værdien skal være tom (null).',
    'This value is not valid.' => 'Værdien er ikke gyldig.',
    'This value is not a valid time.' => 'Værdien er ikke et gyldigt klokkeslæt.',
    'This value is not a valid URL.' => 'Værdien er ikke en gyldig URL.',
    'The two values should be equal.' => 'De to værdier skal være ens.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor. Den maksimale størrelse er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen er for stor.',
    'The file could not be uploaded.' => 'Filen kunne ikke blive uploadet.',
    'This value should be a valid number.' => 'Værdien skal være et gyldigt tal.',
    'This file is not a valid image.' => 'Filen er ikke gyldigt billede.',
    'This is not a valid IP address.' => 'Dette er ikke en gyldig IP-adresse.',
    'This value is not a valid language.' => 'Værdien er ikke et gyldigt sprog.',
    'This value is not a valid locale.' => 'Værdien er ikke en gyldig lokalitet.',
    'This value is not a valid country.' => 'Værdien er ikke et gyldigt land.',
    'This value is already used.' => 'Værdien er allerede i brug.',
    'The size of the image could not be detected.' => 'Størrelsen på billedet kunne ikke detekteres.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Billedet er for bredt ({{ width }}px). Største tilladte bredde er {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Billedet er for smalt ({{ width }}px). Mindste forventede bredde er {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Billedet er for højt ({{ height }}px). Største tilladte højde er {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Billedet er for lavt ({{ height }}px). Mindste forventede højde er {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Værdien skal være brugerens nuværende adgangskode.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Værdien skal være på præcis {{ limit }} tegn.',
    'The file was only partially uploaded.' => 'Filen blev kun delvist uploadet.',
    'No file was uploaded.' => 'Ingen fil blev uploadet.',
    'No temporary folder was configured in php.ini.' => 'Ingen midlertidig mappe er konfigureret i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikke skrive midlertidig fil til disk.',
    'A PHP extension caused the upload to fail.' => 'En PHP-udvidelse forårsagede fejl i upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samling skal indeholde mindst ét element.|Denne samling skal indeholde mindst {{ limit }} elementer.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samling skal indeholde højst ét element.|Denne samling skal indeholde højst {{ limit }} elementer.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samling skal indeholde præcis ét element.|Denne samling skal indeholde præcis {{ limit }} elementer.',
    'Invalid card number.' => 'Ugyldigt kortnummer.',
    'Unsupported card type or invalid card number.' => 'Ikke-understøttet korttype eller ugyldigt kortnummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Det er ikke et gyldigt International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'Værdien er ikke en gyldig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Værdien er ikke en gyldig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Værdien er hverken en gyldig ISBN-10 eller en gyldig ISBN-13.',
    'This value is not a valid ISSN.' => 'Værdien er ikke en gyldig ISSN.',
    'Error' => 'Fejl',
    'This form should not contain extra fields.' => 'Feltgruppen må ikke indeholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den uploadede fil var for stor. Upload venligst en mindre fil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-token er ugyldig.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En fejl indtraf ved godkendelse.',
    'Authentication credentials could not be found.' => 'Loginoplysninger kan findes.',
    'Authentication request could not be processed due to a system problem.' => 'Godkendelsesanmodning kan ikke behandles på grund af et systemfejl.',
    'Invalid credentials.' => 'Ugyldige loginoplysninger.',
    'Cookie has already been used by someone else.' => 'Cookie er allerede brugt af en anden.',
    'Not privileged to request the resource.' => 'Ingen adgang til at forespørge ressourcen.',
    'Invalid CSRF token.' => 'Ugyldig CSRF-token.',
    'No authentication provider found to support the authentication token.' => 'Ingen godkendelsesudbyder er fundet til understøttelsen af godkendelsestoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session tilgængelig, sessionen er enten udløbet eller cookies er ikke aktiveret.',
    'No token could be found.' => 'Ingen token kan findes.',
    'Username could not be found.' => 'Brugernavn kan ikke findes.',
    'Account has expired.' => 'Brugerkonto er udløbet.',
    'Credentials have expired.' => 'Loginoplysninger er udløbet.',
    'Account is disabled.' => 'Brugerkonto er deaktiveret.',
    'Account is locked.' => 'Brugerkonto er låst.',
  ),
));

$catalogueLt = new MessageCatalogue('lt', array (
  'validators' => 
  array (
    'This value should be false.' => 'Reikšmė turi būti neigiama.',
    'This value should be true.' => 'Reikšmė turi būti teigiama.',
    'This value should be of type {{ type }}.' => 'Šios reikšmės tipas turi būti {{ type }}.',
    'This value should be blank.' => 'Ši reikšmė turi būti tuščia.',
    'The value you selected is not a valid choice.' => 'Neteisingas pasirinkimas.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Turite pasirinkti bent {{ limit }} variantą.|Turite pasirinkti bent {{ limit }} variantus.|Turite pasirinkti bent {{ limit }} variantų.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Turite pasirinkti ne daugiau kaip {{ limit }} variantą.|Turite pasirinkti ne daugiau kaip {{ limit }} variantus.|Turite pasirinkti ne daugiau kaip {{ limit }} variantų.',
    'One or more of the given values is invalid.' => 'Viena ar daugiau įvestų reikšmių yra netinkamos.',
    'This field was not expected.' => 'Nebuvo tikimasi Šis laukas.',
    'This field is missing.' => 'Šiame lauke yra dingęs.',
    'This value is not a valid date.' => 'Ši reikšmė nėra data.',
    'This value is not a valid datetime.' => 'Ši reikšmė nera data ir laikas.',
    'This value is not a valid email address.' => 'Ši reikšmė nėra tinkamas el. pašto adresas.',
    'The file could not be found.' => 'Byla nerasta.',
    'The file is not readable.' => 'Negalima nuskaityti bylos.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Byla yra per didelė ({{ size }} {{ suffix }}). Maksimalus dydis {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Netinkamas bylos tipas (mime type) ({{ type }}). Galimi bylų tipai {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Reikšmė turi būti {{ limit }} arba mažiau.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.|Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.|Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.',
    'This value should be {{ limit }} or more.' => 'Reikšmė turi būti {{ limit }} arba daugiau.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.|Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.|Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.',
    'This value should not be blank.' => 'Ši reikšmė negali būti tuščia.',
    'This value should not be null.' => 'Ši reikšmė negali būti null.',
    'This value should be null.' => 'Ši reikšmė turi būti null.',
    'This value is not valid.' => 'Netinkama reikšmė.',
    'This value is not a valid time.' => 'Ši reikšmė nėra laikas.',
    'This value is not a valid URL.' => 'Ši reikšmė nėra tinkamas interneto adresas.',
    'The two values should be equal.' => 'Abi reikšmės turi būti identiškos.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Byla yra per didelė. Maksimalus dydis yra {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Byla per didelė.',
    'The file could not be uploaded.' => 'Byla negali būti įkelta.',
    'This value should be a valid number.' => 'Ši reikšmė turi būti skaičius.',
    'This value is not a valid country.' => 'Ši reikšmė nėra tinkama šalis.',
    'This file is not a valid image.' => 'Byla nėra paveikslėlis.',
    'This is not a valid IP address.' => 'Ši reikšmė nėra tinkamas IP adresas.',
    'This value is not a valid language.' => 'Ši reikšmė nėra tinkama kalba.',
    'This value is not a valid locale.' => 'Ši reikšmė nėra tinkama lokalė.',
    'This value is already used.' => 'Ši reikšmė jau yra naudojama.',
    'The size of the image could not be detected.' => 'Nepavyko nustatyti nuotraukos dydžio.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Nuotraukos plotis per didelis ({{ width }}px). Maksimalus leidžiamas plotis yra {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Nuotraukos plotis per mažas ({{ width }}px). Minimalus leidžiamas plotis yra {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Nuotraukos aukštis per didelis ({{ height }}px). Maksimalus leidžiamas aukštis yra {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Nuotraukos aukštis per mažas ({{ height }}px). Minimalus leidžiamas aukštis yra {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ši reikšmė turi sutapti su dabartiniu naudotojo slaptažodžiu.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ši reikšmė turi turėti lygiai {{ limit }} simbolį.|Ši reikšmė turi turėti lygiai {{ limit }} simbolius.|Ši reikšmė turi turėti lygiai {{ limit }} simbolių.',
    'The file was only partially uploaded.' => 'Failas buvo tik dalinai įkeltas.',
    'No file was uploaded.' => 'Nebuvo įkelta jokių failų.',
    'No temporary folder was configured in php.ini.' => 'Nėra sukonfiguruoto jokio laikino katalogo php.ini faile.',
    'Cannot write temporary file to disk.' => 'Nepavyko išsaugoti laikino failo.',
    'A PHP extension caused the upload to fail.' => 'PHP plėtinys sutrukdė failo įkėlimą ir jis nepavyko.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Sąraše turi būti {{ limit }} arba daugiau įrašų.|Sąraše turi būti {{ limit }} arba daugiau įrašų.|Sąraše turi būti {{ limit }} arba daugiau įrašų.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Sąraše turi būti {{ limit }} arba mažiau įrašų.|Sąraše turi būti {{ limit }} arba mažiau įrašų.|Sąraše turi būti {{ limit }} arba mažiau įrašų.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Sąraše turi būti lygiai {{ limit }} įrašas.|Sąraše turi būti lygiai {{ limit }} įrašai.|Sąraše turi būti lygiai {{ limit }} įrašų.',
    'Invalid card number.' => 'Klaidingas kortelės numeris.',
    'Unsupported card type or invalid card number.' => 'Kortelės tipas nepalaikomas arba klaidingas kortelės numeris.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ši reišmė neatitinka tarptautinio banko sąskaitos numerio formato (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ši reikšmė neatitinka ISBN-10 formato.',
    'This value is not a valid ISBN-13.' => 'Ši reikšmė neatitinka ISBN-13 formato.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ši reikšmė neatitinka nei ISBN-10, nei ISBN-13 formato.',
    'This value is not a valid ISSN.' => 'Ši reišmė neatitinka ISSN formato.',
    'This value is not a valid currency.' => 'Netinkamas valiutos formatas.',
    'This value should be equal to {{ compared_value }}.' => 'Ši reikšmė turi būti lygi {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ši reikšmė turi būti didesnė už {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ši reikšmė turi būti didesnė už arba lygi {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ši reikšmė turi būti identiška {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ši reikšmė turi būti mažesnė už {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ši reikšmė turi būti mažesnė už arba lygi {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ši reikšmė neturi būti lygi {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ši reikšmė neturi būti identiška {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Nuotraukos santykis yra per didelis ({{ ratio }}). Didžiausias leistinas santykis yra {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Nuotraukos santykis yra per mažas ({{ ratio }}). Mažiausias leistinas santykis yra {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Nuotrauka yra kvadratinė ({{ width }}x{{ height }}px). Kvadratinės nuotraukos nėra leistinos.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Nuotrauka orientuota į plotį ({{ width }}x{{ height }}px). Nuotraukos orientuotos į plotį nėra leistinos.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Nuotrauka orientuota į aukštį ({{ width }}x{{ height }}px). Nuotraukos orientuotos į aukštį nėra leistinos.',
    'An empty file is not allowed.' => 'Failas negali būti tuščias.',
    'Error' => 'Klaida',
    'This form should not contain extra fields.' => 'Forma negali turėti papildomų laukų.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Įkelta byla yra per didelė. bandykite įkelti mažesnę.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF kodas nepriimtinas. Bandykite siųsti formos užklausą dar kartą.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Įvyko autentifikacijos klaida.',
    'Authentication credentials could not be found.' => 'Nepavyko rasti autentifikacijos duomenų.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikacijos užklausos nepavyko įvykdyti dėl sistemos klaidų.',
    'Invalid credentials.' => 'Klaidingi duomenys.',
    'Cookie has already been used by someone else.' => 'Slapukas buvo panaudotas kažkam kitam.',
    'Not privileged to request the resource.' => 'Neturite teisių pasiektį resursą.',
    'Invalid CSRF token.' => 'Neteisingas CSRF raktas.',
    'No authentication provider found to support the authentication token.' => 'Nerastas autentifikacijos tiekėjas, kuris palaikytų autentifikacijos raktą.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija yra nepasiekiama, pasibaigė galiojimo laikas arba slapukai yra išjungti.',
    'No token could be found.' => 'Nepavyko rasti rakto.',
    'Username could not be found.' => 'Tokio naudotojo vardo nepavyko rasti.',
    'Account has expired.' => 'Paskyros galiojimo laikas baigėsi.',
    'Credentials have expired.' => 'Autentifikacijos duomenų galiojimo laikas baigėsi.',
    'Account is disabled.' => 'Paskyra yra išjungta.',
    'Account is locked.' => 'Paskyra yra užblokuota.',
  ),
  'messages' => 
  array (
    'open' => 'Atviras',
    'one' => 'Vieno pasirinkimo',
    'multi' => 'Kelių pasirinkimų',
    'presentation' => 'Pateikties',
    'button.question.new' => 'Sukurti klausimą',
    'button.question.back' => 'Atgal į sąrašą',
    'button.edit' => 'Redaguoti',
    'button.show' => 'Peržiūrėti',
    'button.question.show.nav' => 'Klausimai',
    'button.question.show.sidenav' => 'Klausimų sąrašas',
    'button.delete' => 'Ištrinti',
    'question.id' => 'Numeracija',
    'question.question.label' => 'Klausimas',
    'question.description.label' => 'Aprašas',
    'question.type.label' => 'Tipas',
    'question.type.placeholder' => 'Pasirinkite tipą',
    'question.type.open' => 'Atviras',
    'question.type.one' => 'Vieno pasirinkimo',
    'question.type.multi' => 'Kelių pasirinkimų',
    'question.type.presentation' => 'Pateikties',
    'question.fk_test.label' => 'Testas',
    'question.fk_test.placeholder' => 'Pasirinkite testą',
    'question.fk_group.label' => 'Grupė',
    'question.fk_group.placeholder' => 'Pasirinkite grupę',
    'question.active' => 'Veiksmai',
  ),
));
$catalogue->addFallbackCatalogue($catalogueLt);

return $catalogue;
