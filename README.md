<h1>WDBase Typo3 Extension</h1>
<p>This extension contains a basic generalised structure for starting development of a Typo3 12 website.</p>
<p>The goal of this extension is to provide a out-of-the-box website-kit to save time in Typo3 development.</p>

<h2>Roadmap</h2>
<p>More features and generalisations will be added in the future.</p>

<h2>Included</h2>
<ul>
  <li>Basic layout, templates and partials</li>
  <li>Typoscript
    <ul>
      <li>Typo3 Template for easy inclusion</li>
      <li>FLUIDTEMPLATE with menuRenderer</li>
      <li>Constant driven PAGE instance via <code>wd.page</code></li>
      <li>Editable constants for company- and page details, access via <code>{settings.address}</code> in the <code>FLUIDTEMPLATE</code></li>
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
<code>&lt;a data-sprite="0:0" class="btn contact" title="Follow on portal A" href="#"&gt;&amp;nbsp;&lt;/a&gt;
&lt;a data-sprite="1:0" class="btn contact"  title="Follow on portal B" href="#"&gt;&amp;nbsp;&lt;/a&gt;</code>
