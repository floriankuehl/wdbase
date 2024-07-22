<h1>WDBase Typo3 Extension</h1>
<p>This extension contains a basic generalised structure for starting development of a Typo3 12 website.</p>
<p>Includes:</p>
<ul>
  <li>Basic layout, templates and partials</li>
  <li>Typoscript
    <ul>
      <li>Typo3 Template for easy inclusion</li>
      <li>FLUIDTEMPLATE with menuRenderer</li>
      <li>PAGE instance wd.page</li>
      <li>Constants for company details, access via settings.address</li>
    </ul>
  </li>
  <li>Social footer with schema for Organization</li>
  <li>CSS
    <ul>
      <li>Bootstrap 5.3</li>
      <li>Variable driven design</li>
      <li>Spriteset usage via HTML attribute <code>data-sprite["x:y"]</code>.</li>
    </ul>
  </li>
  <li>Roboto font</li>
</ul>

<h2>Spriteset Example</h2>
<p>CSS</p>
<code>.contact[data-sprite] {
  background-image: url(../Images/spriteset.png);
  --ss-width: 2.5rem; # render width
  --ss-height: 2.5rem; # render height
  --ss-offset-x: 0px;
  --ss-offset-y: 0px; 
  --ss-cols: 10;
  --ss-rows: 2;
}</code>
<p>HTML</p>
<code>
  &lt;a data-sprite="0:0" class="btn contact" title="Follow on portal A" href="#"&gt;&amp;nbsp;&lt;/a&gt;
  &lt;a data-sprite="1:0" class="btn contact"  title="Follow on portal B" href="#"&gt;&amp;nbsp;&lt;/a&gt;
</code>
