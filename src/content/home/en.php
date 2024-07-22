<?php

$title_suffix = "Informations";

$description = "Some informations about MBCRAFT, what it does";
$keywords = "mbcraft, informations";

ob_start();
?>
<br /><br /><br />
<h2>
<span class="brief">
MBCRAFT works in research and development, creating frameworks, software libraries, software components, websites, management software, app backends, software integrations or commissioned software projects.
<br /><br />
We take care of both the requirements analysis phase and the design, development and testing and deployment of the developed software.
<br /><br />
The methodologies used and the professionalism acquired over the years in software development and business management ensure the end customer a well-made, complete with tests and documentation (when required).
<br /><br />
MBCRAFT currently has a software platform completely developed by the company to be used as a basis for the development of the systems listed above, but also works with other proprietary or open-source frameworks. MBCRAFT has published open-source repositories using GitHub, but i warn that many repositories contains code that is not updated and had security pitfalls. The company by now does not own enough resources and time to fix them (some projects failed due to clients refusing to pay or people preventing me from continuing development, etc...). 
<br /><br />
Regarding the work carried out, please note that:
<ul>
<li>Projects developed for individuals can also be reused for other clients or made open source.</li>
<li>Projects developed for companies are not reused for other purposes and no theft of data from databases or source code is carried out even when not contractually declared.</li>
<li>Failed projects became open source.</li>
</ul>
<br />
Recently (in recent years) MBCRAFT has dedicated itself to the research and development of content published on this website and has not carried out particularly demanding software developments.
<br />
<br />
<div style="background-color:yellow;">
There is no sign at the company's domicile as it is also a private home. For work-related matters, book the appointment via email [contact @ mbcraft.it], for personal matters via email [marco.bagnaresi @ gmail.com] . If you want to freely support MBCRAFT you can send donations using PayPal at : info@mbcraft.it .
</div>
</span>
</h2>
<?php

$content = ob_get_contents();
ob_end_clean();
?>