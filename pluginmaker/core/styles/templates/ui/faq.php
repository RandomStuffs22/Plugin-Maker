<div class="box">
<b>Plugin Maker</b> is a stunning new web application to help you building up <a href="http://www.mybb.com">MyBB</a> plugins.
<h2>How does it work?</h2>
Plugin Maker guides you into building the main structure of MyBB plugins. You have full control over your custom plugin: you decide whatever you want to add or remove. These are some things Plugin Maker lets you add to your plugins:
<ul>
	<li>PluginLibrary support;</li>
	<li>settings;</li>
	<li>templates;</li>
	<li>stylesheets;</li>
	<li>core edits<sup>1</sup>;</li>
	<li>template edits;</li>
	<li>ACP modules;</li>
	<li>language files;</li>
	<li>other functions;</li>
	<li>and much more!</li>
</ul>
Also, it has a solid database of MyBB hooks, ordered by board's components (homepage, posts, threads, forums, etc.) so you can easily decide where to inject your custom code.
<h2>Examples, please?</h2>
Imagine you want to create, let's say, a "latest threads" box in your Homepage. You might start creating a new file in DreamWeaver and start writing down the entire plugin yourself. Or you might open Plugin Maker, add two basic settings, add some templates, select the index_end hook from the Homepage hooks list and write down the function which returns the latest threads. You finally click a button and you download your plugin. What fun!
This is exactly what Plugin Maker does: speeding up the development process by automatically handling all the boring structuring part and building up the plugin with an easy to understand interface.
<h2>This is for beginners...</h2>
Not really. Plugin Maker was designed both for beginners with few coding skills to help them moving their first steps in MyBB's world, and for advanced coders with solid PHP and MyBB knowledges helping them speeding up <b>at least</b> the initial setup of the plugin structure.
I was kinda bored having to copy&paste language files, templates, etc. and edit them for new plugins, thus why I've made this helpful wizard for me and for everybody else who wants to code quickly and having fun while coding. You still think this app is for n00bs? Don't use it and keep on developing the way you're used.
<h2>Still waiting for tech details</h2>
PluginMaker <b>*does not*</b> build a plugin on the go. Instead, it creates a file with an array and keeps on populating it as you go deep into the creation of your plugin. When you click on a defined button, PluginMaker takes this informations out of the cache and booom, it starts replacing templates with your $hit. Pretty awesome. It was designed this way because of many reasons:
<ul>
	<li>you cannot create a function or go back in your browser and duplicate entries that might lead into a complete mess inside your plugin</li>
	<li>it's fairly easy to create a "step" using templates</li>
	<li>it's the fastest way to handle templates without parsing inputs every time</li>
	<li>lets you edit your plugin without messing up anything</li>
</ul>
</div>