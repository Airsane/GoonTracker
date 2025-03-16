@extends('layouts.app')

@section('content')
<section id="privacy" class="paralax">
    <h1>Privacy Policy / Zásady ochrany osobných údajov</h1>
    <hr>

    <h2>EN</h2>
    <p>GoonRADAR (App) is community made web application that collects users' email addresses when registering to App.
        Because of that our App is not currently HTTPS hosted, we are not taking any responsibilities of your loss of credentials.
        Please use different password for our App.</p>

    <h3>Data collection | Security</h3>
    <p>Our App is collecting data about users' email addresses that are used in registrations. Passwords used in our App are encrypted. However as our site is not HTTPS encrypted, we can not assure that somebody could not potentially track and get access credentials entered while using our App. Because of this we recommend you to use another password for our App to prevent loss of credentials and or having stolen access to your accounts.</p>
    <p>We are not responsible for Data collected by 3rd Party Software (Frameworks) that runs our App.</p>
    <p>Our App is collecting the time you are visiting and for how much time you spend on our App. This data is used for App visit statistics.</p>

    <h3>Contact the staff</h3>
    <p>If you want to contact us, you can find contact details in our App at the bottom.</p>

    <h3>Privacy Policy Agreement</h3>
    <p>By registrating in our App you are agreeing to this Privacy Policy and so you consent with all previously mentioned informations about our App.</p>
    <hr>

    <h2>SK</h2>
    <p>GoonRADAR (Aplikácia) je komunitne vytvorená webová aplikácia, ktorá zbiera použivateľské emailové adresy po zaregistrovaní do aplikácie.</p>

    <h3>Zber dát | Bezpečnosť</h3>
    <p>Naša Aplikácia zbiera dáta o emailových adresách používateľov, ktoré sú použité pri registrácii. Heslá použité v našej aplikácii sú zašifrované. Avšak keďže naša stránka nie je HTTPS šifrovaná, nemôžeme uistiť, že niekto môže sledovať vašu komunikáciu a získať prístupové údaje zadané počas používania našej Aplikácie. Preto odporúčame použiť iné heslo, pre zabránenie stráty údajov a možnosti krádeže účtov.</p>
    <p>Nie sme zodpovední za zber dát spôsobený Softvérom tretích strán (Frameworkov), pomocou ktorých funguje naša Aplikácia.</p>
    <p>Naša Aplikácia zbiera dáta o čase a dlžke pobytu v našej Aplikácii. Tieto dáta sú použité pre štatistiku návštevnosti.</p>

    <h3>Kontaktovanie tímu</h3>
    <p>Ak nás chcete kontaktovať, v našej Aplikácii môžete nájsť kontaktné údaje na spodku.</p>

    <h3>Súhlas so Zásadami ochrany osobných údajov</h3>
    <p>Registrovaním v našej Aplikácii súhlasíte so Zásadami ochrany osobných údajov a teda súhlasíte so všetkými spomenutými informáciami o našej Aplikácii.</p>
</section>
@endsection
@section('scripts')
<script src="https://kit.fontawesome.com/f0061bc482.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/headerApp.js') }}"></script>
<script src="{{ asset('assets/js/goonsAboutApp.js') }}"></script>
<script src="{{ asset('assets/js/goonsSpawnApp.js') }}"></script>
@endsection