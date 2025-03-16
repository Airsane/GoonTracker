@extends('layouts.app')

@section('content')
    <section id="home" class="paralax">
        <!-- <div id="imagineThisIsAnLogo">imagineThisIsAnLogo :))</div> -->
        <div>
            <h1 id="h1-title">Goons Radar</h1>
            <h3 class="alt-font">by Escape From Tarkov CZ/SK Discord Team</h3>
        </div>

        <div class="goons-radar-infoset">
            <h1>Current Info</h1>
            <div>
                <h2>Map</h2>
                <h3>{{ $lastReport->location->name ?? '' }}</h3>
            </div>
            <div>
                <h2>Reported</h2>
                <h3>{{ $lastReport->reported_when ?? '' }}</h3>
            </div>
        </div>
        @if (Auth::check())
            @if ($canReport)
            <form action="{{ route('report') }}" method="post" id="frm-report-reportForm">
                @csrf
                <table>
                    <tbody>
                        <tr>
                            <th><label for="frm-report-reportForm-report_location"></label></th>
                            <td><select name="report_location" id="frm-report-reportForm-report_location">
                                    @foreach ($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select></td>
                        </tr>

                        <tr>
                            <th></th>

                            <td><button type="submit" name="report_submit" id="report-goons"><i
                                        class="fa-solid fa-bullhorn" aria-hidden="true"></i> REPORT GOONS <i
                                        class="fa-solid fa-bullhorn" aria-hidden="true"></i></button></td>
                        </tr>
                    </tbody>
                </table>

                <input type="hidden" name="_do"
                    value="report-reportForm-submit"><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
                </form>
            @else
                <p>You can report goons every 5 minutes</p>
            @endif
        @else
            <a href="{{ route('login') }}" id="report-goons"><i class="fa-solid fa-bullhorn"></i> REPORT GOONS <i
                    class="fa-solid fa-bullhorn"></i></a>
        @endif
        <!-- Add Report Goons button -->
        <!-- Add some button at the bottom with down arrow to scroll to next section. -->
    </section>

    <section id="goons-radar-prev">
        <div class="goons-radar-infoset">
            <h1>Previous Info</h1>
            <div>
                <h2>Map</h2>
                <h3>{{ $previousReport->location->name ?? '' }}</h3>
            </div>
            <div>
                <h2>Last Reported</h2>
                <h3>{{ $previousReport->reported_when ?? '' }}</h3>
            </div>
        </div>
    </section>

    <section id="goons-about" class="paralax">
        <h1>About Goons</h1>
        <p><b>The Goons</b> are squad of <b>Rogue Bosses</b> consisting of the three following members</p>

        <div id="goon-toggle">
            <p id="gtBigPipe">Big Pipe</p>
            <p id="gtBirdEye">Bird Eye</p>
            <p id="gtKnight">Knight</p>
        </div>

        <div id="goons-about-wrap">
            <div class="goons-about-boss" id="BigPipeInfo">
                <h2>Big Pipe</h2>
                <div class="boss-info">
                    <img src="{{ asset('assets/img/goons/bigpipe.webp') }}" alt="BigPipe" title="Big Pipe"
                        class="info_img">
                    <div class="boss-info-text">
                        <p>Rogue Boss member of squad 'The Goons'.</p>
                        <h3>HP</h3>
                        <div class="boss-info-text-hp">
                            <p>Head</p>
                            <p><b>70</b></p>
                            <p>Thorax</p>
                            <p><b>220</b></p>
                            <p>Stomach</p>
                            <p><b>200</b></p>
                            <p>Arms</p>
                            <p><b>2x 110</b></p>
                            <p>Legs</p>
                            <p><b>2x 100</b></p>
                            <p>Total</p>
                            <p><b>910</b></p>
                        </div>
                        <h3>Equipment</h3>
                        <div class="boss-info-text-equip">
                            <p>SOON SOON</p>
                            <!-- <p>Milkor M32A1 MSGL 40mm grenade launcher</p>
                                <p>FN40GL Mk2 40mm grenade launcher</p>
                                <p>SIG MCX .300 Blackout assault rifle</p>
                                <p>Remington Model 870 12ga pump-action shotgun</p>
                                <p>Colt M45A1 .45 ACP pistol</p>
                                <p>Big Pipe's bandana</p>
                                <p>S&S Precision PlateFrame plate carrier (Goons Edition)</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="goons-about-boss" id="BirdEyeInfo">
                <h2>Bird Eye</h2>
                <div class="boss-info">
                    <img src="{{ asset('assets/img/goons/birdeye.webp') }}" alt="BirdEye" title="Bird Eye"
                        class="info_img">
                    <div class="boss-info-text">
                        <p>Rogue Boss member of squad 'The Goons'.</p>
                        <h3>HP</h3>
                        <div class="boss-info-text-hp">
                            <p>Head</p>
                            <p><b>70</b></p>
                            <p>Thorax</p>
                            <p><b>175</b></p>
                            <p>Stomach</p>
                            <p><b>150</b></p>
                            <p>Arms</p>
                            <p><b>2x 100</b></p>
                            <p>Legs</p>
                            <p><b>2x 100</b></p>
                            <p>Total</p>
                            <p><b>795</b></p>
                        </div>
                        <h3>Equipment</h3>
                        <div class="boss-info-text-equip">
                            <p>SOON SOON</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="goons-about-boss" id="KnightInfo">
                <h2>Knight</h2>
                <div class="boss-info">
                    <img src="{{ asset('assets/img/goons/knight.webp') }}" alt="Knight" title="Knight" class="info_img">
                    <div class="boss-info-text">
                        <p>Also known as '<b>Death Knight</b>'</p>
                        <p>Rogue Boss commander of squad 'The Goons'.</p>
                        <h3>HP</h3>
                        <div class="boss-info-text-hp">
                            <p>Head</p>
                            <p><b>80</b></p>
                            <p>Thorax</p>
                            <p><b>220</b></p>
                            <p>Stomach</p>
                            <p><b>220</b></p>
                            <p>Arms</p>
                            <p><b>2x 150</b></p>
                            <p>Legs</p>
                            <p><b>2x 150</b></p>
                            <p>Total</p>
                            <p><b>1120</b></p>
                        </div>
                        <h3>Equipment</h3>
                        <div class="boss-info-text-equip">
                            <p>SOON SOON</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="goons-spawns">
        <h1>Spawns of Goons</h1>

        <div id="spawn-toggle">
            <p id="stCustoms">Customs</p>
            <p id="stLighthouse">Lighthouse</p>
            <p id="stShoreline">Shoreline</p>
            <p id="stWoods">Woods</p>
        </div>

        <div id="spawn-info-wrap">
            <div id="customs-info" class="spawn-info-map">
                <h2>Customs</h2>
                <div class="spawn-info-map-details">
                    <img src="{{ asset('assets/img/spawns/customs.webp') }}" alt="Customs" title="Customs"
                        class="info_img">
                    <div class="spawn-info-map-text">
                        <p>Spawn Rate</p>
                        <p><b>{{ $locations['Customs']->spawn_chance * 100 }}%</b></p>
                    </div>
                </div>
            </div>
            <div id="lighthouse-info" class="spawn-info-map">
                <h2>Lighthouse</h2>
                <div class="spawn-info-map-details">
                    <img src="{{ asset('assets/img/spawns/lighthouse.webp') }}" alt="Lighthouse" title="Lighthouse"
                        class="info_img">
                    <div class="spawn-info-map-text">
                        <p>Spawn Rate</p>
                        <p><b>{{ $locations['Lighthouse']->spawn_chance * 100 }}%</b></p>
                    </div>
                </div>
            </div>
            <div id="shoreline-info" class="spawn-info-map">
                <h2>Shoreline</h2>
                <div class="spawn-info-map-details">
                    <img src="{{ asset('assets/img/spawns/shoreline.webp') }}" alt="Shoreline" title="Shoreline"
                        class="info_img">
                    <div class="spawn-info-map-text">
                        <p>Spawn Rate</p>
                        <p><b>{{ $locations['Shoreline']->spawn_chance * 100 }}%</b></p>
                    </div>
                </div>
            </div>
            <div id="woods-info" class="spawn-info-map">
                <h2>Woods</h2>
                <div class="spawn-info-map-details">
                    <img src="{{ asset('assets/img/spawns/woods.webp') }}" alt="Woods" title="Woods"
                        class="info_img">
                    <div class="spawn-info-map-text">
                        <p>Spawn Rate</p>
                        <p><b>{{ $locations['Woods']->spawn_chance * 100 }}%</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://kit.fontawesome.com/f0061bc482.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/headerApp.js') }}"></script>
    <script src="{{ asset('assets/js/goonsAboutApp.js') }}"></script>
    <script src="{{ asset('assets/js/goonsSpawnApp.js') }}"></script>
@endsection
