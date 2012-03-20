<div id="content" class="mw-body">
	<mw:region="messages" size="wide" special />
	<h1 id="firstHeading" class="firstHeading">{page.title}</h1>
	<div id="bodyContent">
		<div id="siteSub" mw:if="isarticle">{msg:tagline}</div>
		<mw:loop="subtitles">
			<div class="subtitle">{$}</div>
		</mw:loop>
		<div id="jump-to-nav">
			{msg:jumpto} <a href="#mw-head">{msg:jumptonavigation}</a>,
			<a href="#p-search">{msg:jumptosearch}</a>
		</div>
		<mw:region="body" size="wide" primary />
		<div class="visualClear"></div>
	</div>
</div>
<div id="mw-head" class="noprint">
	<div id="p-personal" class="{unless links.personal_links}emptyPortlet{/unless}">
		<h5>{msg:personaltools}</h5>
		<ul mw:loop="links.personal_links" />
	</div>
	<div id="left-navigation">
		<div id="p-namespaces" class="vectorTabs {unless links.content_navigation.namespaces}emptyPortlet{/unless}">
			<h5>{msg:namespaces}</h5>
			<ul mw:loop="links.content_navigation.namespaces">
				<li><span><a /></span></li>
			</ul>
		</div>
		<div id="p-variants" class="vectorMenu {unless links.content_navigation.variants}emptyPortlet{/unless}">
			<h5><span>{msg:views}</span><a href="#"></a></h5>
			<div class="menu">
				<ul mw:loop="links.content_navigation.variants">
					<li><span><a /></span></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="right-navigation">
		<div id="p-views" class="vectorTabs {unless links.content_navigation.views}emptyPortlet{/unless}">
			<h5>{msg:action}</h5>
			<ul mw:loop="links.content_navigation.views">
				<li><span><a /></span></li>
			</ul>
		</div>
		<div id="p-cactions" class="vectorMenu {unless links.content_navigation.actions}emptyPortlet{/unless}">
			<h5><span>{msg:variants}</span><a href="#"></a></h5>
			<div class="menu">
				<ul mw:loop="links.content_navigation.actions">
					<li><span><a /></span></li>
				</ul>
			</div>
		</div>
		<div id="p-search">
			<h5><label for="searchInput">{msg:search}</label></h5>
			<form action="mw:search" id="searchform">
				<div id="simpleSearch" mw:langorder>
					<input name="search" id="searchInput" type="text">
					<button id="searchButton"><img src="{path:images/search-{ltr/rtl}.png}"></button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id="mw-panel" class="noprint">
	<div id="p-logo"><a style="background-image: url({logo|size=160x160});" href="{nav.mainpage}" mw:tooltip="p-logo" accesskey></a></div>
	<mw:loop="widgets:sidebar">
		<div class="portal" id="p-*" mw:tooltip>
			<h5>{$.header}</h5>
			<div class="body">
				{$.body}
			</div>
		</div>
	</mw:loop>
</div>
<div id="footer">
	<mw:loop="footer.links:flat">
	<ul id="footer-{$.category}">
		<li id="footer-{$$.category}-{$.key}" />
	</ul>
	</mw:loop>
	<ul id="footer-icons" class="noprint" mw:optional mw:loop="footer.icons:icononly">
		<li id="footer-{$.key}ico" mw:loop>
			{$.icon}
		</li>
	</ul>
	<div class="visualClear"></div>
</div>