{if $msgs->isError()}
<div class="messages error">
	<ul>
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}
{if $msgs->isInfo()}
<div class="messages info bottom-margin">
	<ul>
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}
