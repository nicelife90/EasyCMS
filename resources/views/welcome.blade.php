@extends('template.frontend.default')

@section('intro') 
{{ $slogan->value }}
@endsection

@section('content')
<div class="col-md-8">
  <div class="well">
    <h1>Services</h1>
    <p style="text-align:center"><strong><em>Vous reconnaissez l&rsquo;importance de HIPPY dans votre milieu<br />
      et vous &ecirc;tes solidaire &agrave; la cause ? </em></strong></p>
    <p style="text-align:left">Devenir membre vous permet de profiter de nombreux avantages, d&rsquo;&ecirc;tre impliqu&eacute;(e) dans la communaut&eacute;, et de mieux connaitre le fonctionnement de la soci&eacute;t&eacute;, du syst&egrave;me scolaire et des institutions qu&eacute;b&eacute;coises. C&rsquo;est une fa&ccedil;on de participer &agrave; la vie d&eacute;mocratique en tant que mod&egrave;le et agent(e) de changement. De plus vous aurez la satisfaction de savoir que vous contribuez &agrave; l&rsquo;am&eacute;lioration du programme et vous augmenterez votre sentiment d&rsquo;appartenance.</p>
    <h2 style="text-align:left">Membre participant -&nbsp;&nbsp;<a href="/kcfinder/upload/files/fiche-dinscription-HIPPY.pdf">Inscription membre participant</a><br />
      Membres individuels - <a href="/kcfinder/upload/files/fiche-dinscription-HIPPY.pdf">Fiche d&#39;inscription</a><br />
      Membres corporatifs - <a href="/kcfinder/upload/files/fiche-dinscription-HIPPY.pdf">Fiche d&#39;inscription</a><br />
      &nbsp;</h2>
    <p>En devenant membre de HIPPY-Qu&eacute;bec, vous soutenez la mission et l&rsquo;action de l&rsquo;organisme et vous participez financi&egrave;rement &agrave; son d&eacute;veloppement. Devenir membre de HIPPY-Qu&eacute;bec vous permet de&nbsp;:</p>
    <ul>
      <li>&nbsp;Voter aux assembl&eacute;es g&eacute;n&eacute;rales et sp&eacute;ciales</li>
      <li>Participer aux &eacute;lections et/ou devenir membre du conseil d&rsquo;administration</li>
      <li>Participer aux activit&eacute;s de HIPPY-Qu&eacute;bec</li>
    </ul>
  </div>
</div>
@endsection