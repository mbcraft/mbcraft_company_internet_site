<?php

$poems = array(
    "<u>F</u>ragili <u>f</u>ronde <u>f</u>resche <u>f</u>rullano <u>f</u>elici, <u>f</u>remono <u>f</u>estose <u>f</u>ra <u>f</u>aggi <u>f</u>radici.",
    "<u>V</u>iaggiano <u>v</u>eloci <u>v</u>enti <u>v</u>icino <u>ve</u>tta, <u>v</u>olteggiano <u>v</u>ivaci <u>v</u>olgendo <u>v</u>erso <u>v</u>alle.",
    "<u>C</u>avalcano <u>c</u>rinali <u>c</u>avalieri <u>c</u>on <u>c</u>oraggio, <u>c</u>ombattono <u>c</u>rudeli <u>c</u>reature <u>c</u>on <u>c</u>ostanza.",
    "<u>A</u>spettano <u>a</u>ntichi <u>a</u>lberi <u>a</u>utunni <u>a</u>urei, <u>a</u>ttendono <u>a</u>ttenti <u>a</u>ccoglienti <u>a</u>lbe <u>a</u>fose.",
    "<u>T</u>eneri <u>t</u>intinnii <u>t</u>occavano <u>t</u>erre <u>t</u>ranquille, <u>t</u>remende <u>t</u>empeste <u>t</u>uonavano <u>t</u>urbando <u>t</u>utti.",
    "<u>C</u>redo <u>c</u>he <u>c</u>amminare <u>c</u>ol <u>c</u>ane <u>c</u>hiacchierando <u>c</u>on <u>c</u>ordialit&agrave; <u>c</u>i <u>c</u>ompleti.",
    "'<u>D</u>ai, <u>d</u>ormi' <u>d</u>isse <u>d</u>ama <u>d</u>olcemente, '<u>d</u>omani <u>d</u>evo <u>d</u>avvero <u>d</u>arti <u>d</u>isperso?'",
    "<u>D</u>immi <u>d</u>elicata <u>d</u>ama, <u>d</u>evo <u>d</u>unque <u>d</u>avvero <u>d</u>istricare <u>d</u>elicati <u>d</u>ivini <u>d</u>esideri, <u>d</u>edizioni <u>d</u>ovute <u>d</u>a <u>d</u>olci <u>d</u>estini?",
    "<u>Q</u>ueste <u>q</u>uattordici <u>q</u>uestioni <u>q</u>ui <u>q</u>uadreranno <u>q</u>uanto <u>q</u>ueste <u>q</u>uindici <u>q</u>ualit&agrave; <u>q</u>ua.",
    "<u>S</u>enza <u>s</u>aper <u>s</u>upporre <u>s</u>e <u>s</u>iamo <u>s</u>uperficiali <u>s</u>aremmo <u>s</u>icuramente <u>s</u>enza <u>s</u>peranza.",
    "<u>R</u>ozzi <u>r</u>oditori <u>r</u>osicchiano <u>r</u>apidamente <u>r</u>iso, <u>r</u>accolgono <u>r</u>adici <u>r</u>iparandosi <u>r</u>aspando <u>r</u>ena."
    );

$poem = $poems[rand(0,sizeof($poems)-1)];

if ($_SESSION['LANG']=="it") {
?>
        <div id="top_poem" class="w3-padding">
            <h3><em>"<?=$poem ?>" -Marco (poesia)</em></h3>
        </div>
<?php
}
?>